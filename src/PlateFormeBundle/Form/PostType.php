<?php

namespace PlateFormeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class PostType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('contenu', CKEditorType::class, array('config' => array( 'config_name' => 'my_config', 'uiColor' => '#ffffff')));
        ;
    }

//        public function buildForm(FormBuilderInterface $builder, array $options)
//    {
//        $builder
//            ->add('titre')
//            ->add('contenu')
//            ->add('actif')
//            ->add('parent')
//            ->add('categorie')
//            ->add('user')
//            ->add('enfant')
//        ;
//    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PlateFormeBundle\Entity\Post'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'plateformebundle_post';
    }


}
