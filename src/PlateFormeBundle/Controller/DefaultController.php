<?php
namespace PlateFormeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@PlateForme/homepage_plateforme.html.twig');
    }
    public function adminAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        return $this->render('@PlateForme/homepage_plateforme.html.twig', array(
            'user' => $user
        ));
    }
    public function moderateurAction()
    {
        $user = $this->get('security.token_storage')->getToken()->getUser();
        return $this->render('@PlateForme/homepage_plateforme.html.twig', array(
            'user' => $user
        ));
    }
    public function philosophieAction()
    {
        return $this->render('@PlateForme/philosophie.html.twig');
    }
}
