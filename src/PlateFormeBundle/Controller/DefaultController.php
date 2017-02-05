<?php
namespace PlateFormeBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
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
        $users = $this->getDoctrine()->getRepository('UserBundle\Entity\User')->findAll();
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


#///////////////////////////////////////////////////////////////////////////
#///////////////////////////////////////////////////////////////////////////
#TEST EXPORT CSV
#///////////////////////////////////////////////////////////////////////////
#///////////////////////////////////////////////////////////////////////////

    /**
     * List all entities of application
     *
     */
    public function showTablesAction(){
        $em = $this->getDoctrine()->getManager();
        $meta = $em->getMetadataFactory()->getAllMetadata();
        $entities = array();
        foreach ($meta as $m) {
            $entities[$m->getName()] = preg_replace('/.*\\\\/', '', $m->getName());
        }

        return $this->render('@PlateForme/showTables.html.twig', array(
            'entities' => $entities
        ));
    }

    /**
     * List all fields for a selected entity
     *
     */
    public function getTableFieldAction(){
        $entity = $_POST['table'];
        $session = $this->get('session');
        $session->set('linkEntity', $entity);
        $em = $this->getDoctrine()->getManager();
        $columnEntity = $em->getClassMetadata($entity)->getFieldNames();

        return $this->render('@PlateForme/showTables.html.twig', array(
            'columns' => $columnEntity
        ));
    }

    /**
     * Export select to CSV.
     *
     */
    public function generateCsv2Action() {
        $session = $this->get('session');

        $fieldsEntity = $_POST['fields'];
        $linkEntity = $session->get('linkEntity');

        $response= new StreamedResponse();
        $csvContent = $this->get('csvExport')->getFields($linkEntity, $fieldsEntity);

        $response->setCallback(function() use ($csvContent, $fieldsEntity) {
            $handle = fopen('php://output','w+');
            fputcsv($handle, $fieldsEntity,';');

            foreach ($csvContent as $content) {
                $fieldCsv = array();
                foreach ($fieldsEntity as $field){
                    $fieldCsv[] = $content[$field];
                }
                fputcsv($handle, $fieldCsv,';');
            }
            fclose($handle);
        });
        $response->setStatusCode(200);
        $response->headers->set('Content-Type', 'text/csv; charset=utf-8');
        $response->headers->set('Content-Disposition','attachment; filename="exportCsv.csv"');
        return $response;
    }
}
