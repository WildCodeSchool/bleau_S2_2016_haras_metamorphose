<?php

namespace HarasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use HarasBundle\Entity\Article;
use HarasBundle\Entity\Page;
use HarasBundle\Form\PageType;
use Symfony\Component\HttpFoundation\Session\Session;
use SunCat\MobileDetectBundle;

/**
 * Page controller.
 *
 */
class PageController extends Controller
{
    public function getPageAction(Request $request, Page $page, $langChoice)
    {
        $em = $this->getDoctrine()->getManager();
        // suite à la modification des render en include, on doit récup le header et le footer
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
        // A noter, la variable s'appelle $p et non $page car sinon ça fait un conflit
        // avec le $page qu'on récupère en paramètre
        foreach($pages as $p)
        {
            foreach($p->getTexts() as $text)
            {
            $table[$text->getName()] = $text->getTranslation($language);
            }
            // récupération de médias
            foreach ($p->getMedias() as $media)
            {
                $table[$media->getName()] = $media->getMediaTranslation($language);
            }
        }
        // si homepage, détermination background image/video
        if($name == 'homepage')
        {
            $table['isVideo'] = $this->isVideo($table['homepageBackground']['path']);
            $device = $this->get('mobile_detect.mobile_detector');
            $device->isMobile() || $device->isTablet() ? $table['mobile'] = true : $table['mobile'] = false;
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
            elseif($pageNb > count($page->getArticles())/$limit && count($page->getArticles()) != 0)
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
				$structure = $article->getStructure()->getName();
				$articleRendering['structure'] = $structure;
				if ($structure != 'slider')
				{
					$articleRendering['title'] = $textTitle->getTranslation($language);
					$articleRendering['content'] = $textContent->getTranslation($language);
				}
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
            $form = $this->createForm('HarasBundle\Form\contactType');
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

    // envoi de mail de la page contact
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

    // vérifie si un fichier est de type video
    public function isVideo($path)
    {
        // renvoi un string du style video/mp4 ou img/png
        $type = mime_content_type($this->getParameter('web_directory').$path);
        // renvoi true si une occurence de la chaîne 'video' est présente dans $type
        // strpos renvoie la première position de la chaîne si  second argument trouvée
        return strpos($type, 'video') === 0;
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
            $table[$page->getName()] = $page;
        }
        foreach ($table['homepage']->getTexts() as $text)
        	if (preg_match_all('/section\dName/', $text->getName()))
				$table[$text->getName()] = $text->getTranslation('en');
        return $this->render('page/index.html.twig', $table);
    }

    /**
     * Finds and displays a Page entity.
     *
     */
    public function showAction(Page $page)
    {
        $em = $this->getDoctrine()->getManager();
        $homepageBackground = $em->getRepository('HarasBundle:Media')->findOneByName(['homepageBackground']);
        if($this->isVideo($homepageBackground->getPath()))
        {
            $video = true;
        }
        else
        {
            $video = false;
        }
        return $this->render('page/show.html.twig', array(
            'page' => $page,
            'video' => $video,
        ));
    }
}
