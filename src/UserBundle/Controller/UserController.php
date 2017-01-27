<?php
namespace UserBundle\Controller;
use Doctrine\ORM\Mapping\Id;
use UserBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
/**
 * User controller.
 *
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
//        ici on veut afficher que les user qui sont activés 1
        $users = $em->getRepository('UserBundle:User')->findBy(array('actif' => 1));
        return $this->render('@User/user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new user entity.
     *
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm('UserBundle\Form\UserType', $user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush($user);
            return $this->redirectToRoute('user_show', array('id' => $user->getId()));
        }
        return $this->render('@User/user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }
    /**
     * Finds and displays a user entity.
     *
     */
    public function showAction(User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        return $this->render('@User/user/show.html.twig', array(
            'user' => $user,
            'delete_form' => $deleteForm->createView(),
        ));
    }



    public function editAction(Request $request, User $user)
    {
        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('UserBundle\Form\UserType', $user);

//        ajout recup photo
        $mediaUser = $user->getPhoto();
        $mediaForm = $editForm->get('photo');
        $mediaForm->remove('alt');

//        if ($mediaUser->getName() == User::getDefaultPhotoName()){
//            $mediaUser = new Media();
//        }

        $mediaForm->setData($mediaUser);
//        FIN ajout recup photo

        $editForm->handleRequest($request);


        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_show', array('id' => $user->getId()));
        }

        return $this->render('@User/user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }


    /**
     * Desactives a user entity.
     *
     */
    public function desactiveAction($id) {
//        ici lorsque je désactive un user, je desactive aussi son abonnement newsletter s'il était abonne.
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->findOneBy(array('id' => $id));
        $user->setActif(false);
        $user->setNewsletter(false);
        $em->persist($user);
        $em->flush($user);

        $this->addFlash(
            'notice',
            'Utilisateur désactivé'
        );
        return $this->redirectToRoute('user_index');

    }

    /**
     * show desactives users.
     *
     */
    public function showInactiveUserAction(Request $request) {

        $em = $this->getDoctrine()->getManager();
//        ici on veut afficher que les users qui sont desactivés
        $users = $em->getRepository('UserBundle:User')->findBy(array('actif' => 0));

        return $this->render('@User/user/showInactiveUser.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Reactive a user entity.
     *
     */
    public function reactiveAction($id) {
//        ici je reactive le user et son abonnement newsletter ou non
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('UserBundle:User')->findOneBy(array('id' => $id));
        $user->setActif(true);
        $user->setNewsletter(true);
        $em->persist($user);
        $em->flush($user);

        $this->addFlash(
            'notice',
            'Utilisateur désactivé'
        );

        return $this->redirectToRoute('user_index');

    }


    /**
     * Deletes a user entity.
     *
     */
    public function deleteAction(Request $request, User $user)
    {
        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush($user);
        }
        return $this->redirectToRoute('user_index');
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

    /**
     * index admin.
     *
     */
    public function indexAdminAction()
    {
        return $this->render('@User/Admin/index.html.twig');
    }
}