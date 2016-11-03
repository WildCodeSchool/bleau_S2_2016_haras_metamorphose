<?php

namespace HarasBundle\Form;

use HarasBundle\Controller\PageController;
use HarasBundle\Entity\Category;
use HarasBundle\Entity\Page;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
//            ->add('category')
            ->add('articles')
//            ->add('texts')
//            ->add('medias')
//            ->add('name', 'text' ,array('label'=>'Nom de la page'))
//            ->add('category', EntityType::class, array(
//                'class' => 'HarasBundle:Category',
//                'label' => 'Catégorie'
//            ))
//            ->add('articles', EntityType::class, array(
//                'class' => 'HarasBundle:Article',
//                'choice_label' => function ($article) {
//                    return $article->getName();
//                }
//            ))
//            ->add('articles', EntityType::class, array(
//                'class' => '\Doctrine\Common\Collections\ArrayCollection',
//                'label' => 'Article'
//            ))
//            ->add('articles', ChoiceType::class, array(
//                'choices' => 'HarasBundle:Page',
////                'group_by' => $this->getName(),
//                'label' => 'Articles'
//            ))
//            ->add('texts', EntityType::class, array(
//                'class' => 'HarasBundle:Text',
//                'label' => 'Textes'
//            ))
//            ->add('medias', EntityType::class, array(
//                'class' => 'HarasBundle:Media',
//                'label' => 'Médias'
//            ))
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'HarasBundle\Entity\Page'
        ));
    }
}
