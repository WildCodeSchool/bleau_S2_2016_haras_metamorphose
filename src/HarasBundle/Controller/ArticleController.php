<?php

namespace HarasBundle\Controller;

use HarasBundle\Form\MediaType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\FileType;

use HarasBundle\Entity\Article;
use HarasBundle\Entity\Text;
use HarasBundle\Entity\Media;
use HarasBundle\Entity\ArticleStructure;
use HarasBundle\Entity\Page;
use HarasBundle\Form\ArticleType;

/**
 * Article controller.
 *
 */
class ArticleController extends Controller
{
	/**
	 * Renvoie vers la création d'article newAction après avoir choisi le nom et la structure du futur article.
	 * @param Request $request
	 * @param Page $page la page à laquelle appartiendra le futur article (page depuis laquelle ce controlleur est appelé)
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
	 */
    public function newSelectAction(Request $request, Page $page)
    {
        $form = $this->createForm('HarasBundle\Form\ArticleSelectType');
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
        {
			// Les champs doivent être renvoyés séparément vers la vue suivante car l'article n'est pas encore enregistré en base de données
            return $this->redirectToRoute('article_new', array(
                'name' => $form->get('name')->getData(),
                'structure' => $form->get('structure')->getData()->getId(),
                'page' => $page->getId()
                ));
        }

		// Tant que les champs structure et name n'ont pas été correctement saisis, on (r)appelle la vue du formulaire
        return $this->render('article/newSelectStructure.html.twig', array(
            'form' => $form->createView(),
            'page' => $page
        ));
    }

	/**
	 * Crée un nouvel article  $name selon sa $structure passée en paramètre
	 * @param Request $request
	 * @param Page $page
	 * @param ArticleStructure $structure
	 * @param string $name
	 * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
	 */
    public function newAction(Request $request, Page $page, ArticleStructure $structure, $name)
    {
        $article = new Article();
        $form = $this->createForm('HarasBundle\Form\ArticleType', $article);
        if($structure->getName() == 'slider')
        {
            $form	// Les sliders ont plusieurs images (medias) mais n'ont pas de textes associés
                ->remove('title')
                ->remove('content')
				->add('medias', CollectionType::class, array(
					'label' => false,
					'entry_type' => MediaType::class,
					'allow_add' => true,				// Les boutons add et delete sont gérés par le script haras_script.js (l.38+)
					'allow_delete' => true
				))
			;
        }
        else {
			$form	// Les articles image et video ont un seul media et deux textes associés (title et content)
				->add('media', MediaType::class, array(
					'mapped' => false,		// Le médium ne peut pas être mappé car l'objet attend une array de media
					'label' => false))
			;
		}
        $form->handleRequest($request);

		// Si l'article a été correctement saisi
        if ($form->isSubmitted() && $form->isValid()) {
			// On initialise les champs hérités de newSelectAction
            $article->setStructure($structure);
            $article->setName($name);
            $article->addPage($page);
			if ($structure->getName() != 'slider')
			{
				$mediaForm = $form->get('media');
				$media = $mediaForm->getData();
				$article->getTitle()->setName($name.' | Title');
				$article->getContent()->setName($name.' | Content');
				$article->addMedia($media);
			}
			// Pour tous les articles,
			foreach($article->getMedias() as $key => $media) {
				// Chaque médium définit son propre nom en fonction de celui de l'article, preg_replace permet ici de remplacer
				// tous les caractères interdits dans les noms de fichier par '_' (car le media s'upload dans un fichier portant son propre nom)
                $media->setName(preg_replace('/\W/', '_', $article->getName() . "_Media_" . strval($key + 1)) );
				// L'alt définit son nom selon celui de son médium et prend un '_' juste pour rester dans l'ambiance \(o°v°o)/
                $media->getAlt()->setName($media->getName() . "_Alt");
				// On appelle le service d'upload de média (HarasBundle/Services/mediaInterface)
				$this->get('media.interface')->mediaUpload($media);
			}
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);	// On enregistre (enfin !) l'article en base de données
            $em->flush();
			// On retourne à la page.
            return $this->redirectToRoute('page_show', array('name' => $page->getName()));
        }

		// Tant que l'article n'a pas été correctement saisi, on (r)appelle la vue du formulaire
        return $this->render('article/new.html.twig', array(
            'structure' => $structure,
            'article' => $article,
            'form' => $form->createView()
        ));
    }

    /**
     * Displays a form to edit an existing Article entity.
     *
     */
    public function editAction(Request $request, Article $article)
    {
		// Tout ici fonctionne comme dans la fonction newAction
        $deleteForm = $this->createDeleteForm($article);
        $form = $this->createForm('HarasBundle\Form\ArticleType', $article);

        if($article->getStructure()->getName() == 'slider')
        {
            $form
                ->remove('title')
                ->remove('content')
                ->add('medias', CollectionType::class, array(
                    'label' => false,
                    'entry_type' => MediaType::class,
                    'allow_add' => true,
                    'allow_delete' => true,
                    'required' => false
                    ))
            ;
        }
        else
        {
            $form
                ->add('medias', CollectionType::class, array(
                    'label' => false,
                    'entry_type' => MediaType::class,
                    'allow_add' => true,
                    'allow_delete' => true,
                    'required' => false
                    ))
            ;
        }

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) 
        {
            foreach($article->getMedias() as $key => $media) 
            {
                if($media->getFile() != null)
                {
                    $explode = explode('/', $media->getPath());
                    unlink($this->get('kernel')->getRootDir().'/../src/HarasBundle/Resources/public/media/'.end($explode));
                    $this->get('media.interface')->mediaUpload($media);
                }
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            return $this->redirectToRoute('page_show', array('name' => $article->getPages()[0]->getName()));
        }

        return $this->render('article/edit.html.twig', array(
            'article' => $article,
            'form' => $form->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Article entity.
     *
     */
    public function deleteAction(Request $request, Article $article)
    {
        $form = $this->createDeleteForm($article);
        $form->handleRequest($request);
		$page = $article->getPages()[0];
        if ($form->isSubmitted() && $form->isValid()) {
			// On délie l'article de sa page dans la base de données (nécessite d'effectuer l'action depuis la page car elle seule a accès à la table de liaison)
            $page->removeArticle($article);
            foreach($article->getMedias() as $media)
            {
                $explode = explode('/', $media->getPath());
				// On supprime chacun des media en mémoire
                unlink($this->get('kernel')->getRootDir().'/../src/HarasBundle/Resources/public/media/'.end($explode));
            }
            $em = $this->getDoctrine()->getManager();
			// L'article lui-même est capable de se détruire avec ses textes et ses entités media en cascade
            $em->remove($article);
            $em->flush();
        }

        return $this->redirectToRoute('page_show', array(
            'name' => $page->getName()
            ));
    }

    ///////////////////////////////////////
	///// Code généré automatiquement /////
	///////////////////////////////////////

	/**
	 * Finds and displays a Article entity.
	 *
	 */
	public function showAction(Article $article)
	{
		$deleteForm = $this->createDeleteForm($article);

		return $this->render('article/show.html.twig', array(
			'article' => $article,
			'delete_form' => $deleteForm->createView(),
		));
	}

    /**
     * Creates a form to delete a Article entity.
     *
     * @param Article $article The Article entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Article $article)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('article_delete', array('id' => $article->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
