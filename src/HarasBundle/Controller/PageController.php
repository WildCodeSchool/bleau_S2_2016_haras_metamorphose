<?php

namespace HarasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HarasBundle\Entity\Article;
use HarasBundle\Entity\Page;
use HarasBundle\Form\PageType;
use Symfony\Component\HttpFoundation\Session\Session;

/**
 * Page controller.
 *
 */
class PageController extends Controller
{
    public function getPageAction(Request $request, Page $page, $langChoice)
    {
        $em = $this->getDoctrine()->getManager();
        // suite à la moficiation des render en include, on doit récup le header et le footer
        // en même temps que la page appelée
        $pages = $em->getRepository('HarasBundle:Page')->findById([14, 15, $page->getId()]);
        // appel du service de traduction, si defaultLocale != fr ou en -> _locale = en,
        // sinon _locale = defaultLocale. Si langChoice n'et pas null, fixe la _locale 
        // de la session à la langue choisis dans le header
        $this->get('language.change')->select($request,$langChoice);
        // on récupère _locale pour sélectionner les texte dans la langue voulue
        $language = $request->getSession()->get('_locale');
        $table = [];
		// récupération de la catégorie de la page pour définir automatiquement la couleur du header et du footer.
		$table['category'] = strval($page->getCategory());
        // récupération du nom de la page pour la réinjecter dans le header, nécessaire à 
        // la traduction sans changer la page en cours
        $table['page'] = $page->getName();
        // on définit cette variable pour simpifier le code de le contrôleur
        $name = $table['page'];
        // récupération du texte propre à la page
        // A noter, la variable s'appele $p et non $page car sinon ça fait un conflit 
        // avec le $page qu'on récupère en paramètre
        foreach($pages as $p)
        {
            foreach($p->getTexts() as $text)
            {
            $table[$text->getName()] = $text->getTranslation($language);
            }
        }
        // récupération de médias
        foreach ($pages as $p)
        {
            foreach ($p->getMedias() as $media)
            {
                $table[$media->getName()] = $media->getMediaTranslation($language);
            }
        }
        // page template
        if($name == 'section1' || $name == 'section2' || $name == 'section3' || $name == 'section4')
        {
            // définition des paramètres de la requête sur le repository
            $pageNb = $request->query->get('pageNb');
            $limit = $this->getParameter('articles_per_page');
            // Vérification de l'existence de $pageNb.
            // Cette variable est null par défaut.
            if($pageNb == null || intVal($pageNb)<1 || !ctype_digit($pageNb))
            {
                $pageNb = 1;
            }
            elseif($pageNb > count($page->getArticles())/$limit)
            {
                $pageNb = ceil(count($page->getArticles())/$limit);
            }
            // appel de la fonction pour récupérer 10 articles
            $repository = $em->getRepository('HarasBundle:Article');
            $result = $repository->findArticles($pageNb, $page, $limit);
            // Pour récupérer le numéro de page voulue dans la vue
            $table['pageNb'] = $pageNb;
            $table['articles'] = [];

            foreach ($result as $article)
            {
                $articleRendering = [];
				// On récupère l'id de l'article pour lui créer une classe propre (au cas où quelqu'un souhaiterait faire
				// un traitement spécifique à un article précis)
				$articleRendering['id'] = $article->getId();
                $textTitle = $article->getTitle();
                $textContent = $article->getContent();
                $articleRendering['title'] = $textTitle->getTranslation($language);
                $articleRendering['content'] = $textContent->getTranslation($language);
                $articleRendering['structure'] = $article->getStructure()->getName();
                // récupération des médias de l'article
                foreach ($article->getMedias() as $media)
                {
                    $articleRendering['medias'][] = $media->getMediaTranslation($language);
                }
                // Organisation des articles par ordre chronologique inverse
                $table['articles'][] = $articleRendering;
            }
            return $this->render('HarasBundle::template.html.twig', $table);
        }
        // page contact
        else if($name == 'contact')
        {
            $form = $this->createForm('HarasBundle\Form\contactType', $page);
            $form->handleRequest($request);
            $table['form'] = $form->createView();
            $send=false;
            $table['send'] = $send;
            if ($form->isSubmitted() && $form->isValid()) 
            {
                $subject = $form->get('subject')->getData();
                $from = $form->get('from')->getData();
                $body = $form->get('body')->getData();
                $this->sendMail($subject,$from,$body);
                // permet de savoir si le questionnaire a été envoyé
                $send=true;
                $table['send'] = $send;
                // on efface le questionnaire et on en créé un nouveau pour qu'à l'envoi les champs soient reset
                unset($form);
                $form = $this->createForm('HarasBundle\Form\contactType', $page);
                $table['form'] = $form->createView();
                return $this->render('@Haras/contact.html.twig', $table);
            }
            return $this->render('@Haras/contact.html.twig', $table);
        }

        else if ($name == 'login'){
            return $this->redirectToRoute('fos_user_security_login');
        }

        // renvoi par défaut si non template et non contact
        return $this->render('HarasBundle::'.$name.'.html.twig', $table);
    }


    public function sendMail($subject, $from, $body)
    {
        $message = \Swift_Message::newInstance()
            ->setSubject($subject)
            ->setFrom($from)
            ->setTo('michael.combescot@gmail.com')
            ->setBody($body)
        ;
        $this->get('mailer')->send($message);
    }
















    /**
     * Lists all Page entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository('HarasBundle:Page')->findAll();
        $table = [];
        foreach ($pages as $page)
        {
            $table[$page->getId()] = $page->getName();
        }
        return $this->render('page/index.html.twig', $table);
    }

    /**
     * Creates a new Page entity.
     *
     */
    public function newAction(Request $request)
    {
        $page = new Page();
        $form = $this->createForm('HarasBundle\Form\PageType', $page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush();

            return $this->redirectToRoute('page_show', array('name' => $page->getName()));
        }

        return $this->render('page/new.html.twig', array(
            'page' => $page,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Page entity.
     *
     */
    public function showAction(Page $page)
    {
        $deleteForm = $this->createDeleteForm($page);
        return $this->render('page/show.html.twig', array(
            'page' => $page,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Page entity.
     *
     */
    public function editAction(Request $request, Page $page)
    {
        $deleteForm = $this->createDeleteForm($page);
        $editForm = $this->createForm('HarasBundle\Form\PageType', $page);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($page);
            $em->flush();

            return $this->redirectToRoute('page_edit', array('name' => $page->getName()));
        }

        return $this->render('page/edit.html.twig', array(
            'page' => $page,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Page entity.
     *
     */
    public function deleteAction(Request $request, Page $page)
    {
        $form = $this->createDeleteForm($page);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($page);
            $em->flush();
        }

        return $this->redirectToRoute('page_index');
    }

    /**
     * Creates a form to delete a Page entity.
     *
     * @param Page $page The Page entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Page $page)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('page_delete', array('name' => $page->getName())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
