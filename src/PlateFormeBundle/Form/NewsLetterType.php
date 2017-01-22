<?php

namespace PlateFormeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;

class NewsLetterType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('libelle')
                ->add('objet', CKEditorType::class, array(
                'config' => array(
                    'config_name' => 'my_config',
                    'uiColor' => '#ffffff',
                    )))
//                ->add('dateCreation')
//                ->add('etat')
//                ->add('dateEnvoie')
                ->add('pj')
                ->add('filename', 'file', array('label' => 'Pièce jointe', 'required' => false));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'PlateFormeBundle\Entity\NewsLetter'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'plateformebundle_newsletter';
    }


}
