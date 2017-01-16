<?php

namespace CalendarBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AgendaType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('start')
//            ->add('start', 'datetime' , array(
//        'minutes' => range(0, 30, 30),
//            ))
              //  'model_timezone' => 'Europe/Paris')
            ->add('end', 'datetime' , array(
                  'minutes' => range(0, 30, 30)
            ))
            ->add('titre')
            ->add('texte')
            ->add('lieu')
            ->add('color')
            ->add('slider', CheckboxType::class, array(
                  'required' => false,))
            ->add('file', 'file', array(
                'data_class' => null,
                'required' => false))
        ;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'CalendarBundle\Entity\Agenda'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'plateformebundle_agenda';
    }


}
