<?php
namespace PlateFormeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\StreamedResponse;
use UserBundle\Entity\User;


class DefaultController extends Controller
{
    public function indexAction()
    {
        $limit = 5;

        $em = $this->getDoctrine()->getManager();

        $agenda = $em->getRepository('CalendarBundle:Agenda')->findBy( array('slider' => 1) );
        $articles = $em->getRepository('HarasBundle:Article')->findLatestArticles($limit);

        return $this->render('@PlateForme/homepage_plateforme.html.twig', array(
            'agenda' => $agenda,
            'articles' => $articles
        ));
    }
    public function adminAction()
    {
        $limit = 5;

        $em = $this->getDoctrine()->getManager();

        $agenda = $em->getRepository('CalendarBundle:Agenda')->findBy( array('slider' => 1) );
        $articles = $em->getRepository('HarasBundle:Article')->findLatestArticles($limit);

        $user = $this->get('security.token_storage')->getToken()->getUser();
        return $this->render('@PlateForme/homepage_plateforme.html.twig', array(
            'user' => $user,
            'agenda' => $agenda,
            'articles' => $articles
        ));
    }
    public function moderateurAction()
    {
        $limit = 5;

        $em = $this->getDoctrine()->getManager();

        $agenda = $em->getRepository('CalendarBundle:Agenda')->findBy( array('slider' => 1) );
        $articles = $em->getRepository('HarasBundle:Article')->findLatestArticles($limit);

        $user = $this->get('security.token_storage')->getToken()->getUser();
        return $this->render('@PlateForme/homepage_plateforme.html.twig', array(
            'user' => $user,
            'agenda' => $agenda,
            'articles' => $articles
        ));
    }
    public function philosophieAction()
    {

        $em = $this->getDoctrine()->getManager();

        $philosophies = $em->getRepository('PlateFormeBundle:Philosophie')->findAll();

        return $this->render('@PlateForme/philosophie/index.html.twig', array(
            'philosophies' => $philosophies
        ));
    }

    /**
     * Export user en CSV.
     *
     */
    public function generateCsvAction() {
        $response= new StreamedResponse();
        $users = $this->getDoctrine()->getRepository('UserBundle:User')->findAll();
        $response->setCallback(function() use ($users) {
            $handle = fopen('php://output','w+');
            fputcsv($handle, array('id', 'Nom', 'Prenom','Nom Utilisateur', 'Email', 'Profession', 'Actif', 'Newsletter'),';');
            //$results = $this->connection->query('SELECT email, gender, country, city, tshirt, foodPreference FROM user');
            //$results->execute();
            foreach ($users as $user) {

                if($user->getActif() == 1) {
                    $userActif = "oui";
                } else {
                    $userActif = "non";
                }

                if($user->getNewsletter() == 1) {
                    $userNL = "oui";
                } else {
                    $userNL = "non";
                }

                fputcsv($handle, array(
                    $user->getId(),
                    $user->getNom(),
                    $user->getPrenom(),
                    $user->getUsername(),
                    $user->getEmail(),
                    $user->getProfession(),
                    $userActif,
                    $userNL
                ),';');

                $userActif = "";
                $userNL = "";
            }
            fclose($handle);
        });
        $response->setStatusCode(200);
        $response->headers->set('Content-Type', 'text/csv; charset=utf-8');
        $response->headers->set('Content-Disposition','attachment; filename="listeDesUtilisateurs.csv"');
        return $response;
    }
}
