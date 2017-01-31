<?php

namespace UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('profession')
            ->add('roles', ChoiceType::class, array(
                'multiple' => true,
//                je fais un expanded (checkbox car le select ne fonctionne pas)
                'expanded' => true,
                'choices' => $this->getExistingRoles($options['roles'])
            ))
        ;
    }

    public function getExistingRoles($rolesOriginal)
    {
//        ici je mets en place mon form et je donne une valeur à chaque clé role
        $roles = array_keys($rolesOriginal);

        foreach ($roles as $role) {
            $theRoles[$role] = $role;
        }
        return $theRoles;
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'UserBundle\Entity\User',
            'roles' => null
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
