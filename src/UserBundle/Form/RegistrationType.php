<?php
// src/AppBundle/Form/RegistrationType.php
namespace UserBundle\Form;
use HarasBundle\Form\MediaType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom')
            ->add('prenom')
            ->add('profession')
            ->add('photo', MediaType::class, array(
                'mapped' => false,		// Le médium ne peut pas être mappé car l'objet attend une array de media
                'label' => false,
                'required' => false
            ))
            ->remove('title')
            ->remove('content')
        ;
    }
    public function getParent()
    {
        return 'FOS\UserBundle\Form\Type\RegistrationFormType';
    }
    public function getBlockPrefix()
    {
        return 'app_user_registration';
    }
    public function getName()
    {
        return $this->getBlockPrefix();
    }
}