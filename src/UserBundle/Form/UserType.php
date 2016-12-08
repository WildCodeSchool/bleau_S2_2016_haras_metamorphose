<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use UserBundle\Services\RolesHelper;

class UserType extends AbstractType
{
    private $roles;

    /**
     * @param string $class The User class name
     * @param RolesHelper $roles Array or roles.
     */
    public function __construct(RolesHelper $roles)
    {
        $this->roles = $roles;
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('profession')
            ->add('nbPost')
            ->add('photo')
            ->add('roles', 'choice', array(
                'choices' => $this->roles->getRoles(),
                'required' => false,
                'multiple'=>true
            ));
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'userbundle_user';
    }


}
