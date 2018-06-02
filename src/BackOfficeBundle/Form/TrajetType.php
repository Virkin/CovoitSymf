<?php

namespace BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class TrajetType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('nbKm',IntegerType::class, array('attr' => array('min' => 0)))
        ->add('date',DateTimeType::class, array('data' => new \DateTime(),'widget' => 'single_text','format' => 'yyyy-MM-dd HH:mm:ss'))
        ->add('villeDep', EntityType::class, array('class' => 'BackOfficeBundle:Ville'))
        ->add('villeArr', EntityType::class, array('class' => 'BackOfficeBundle:Ville'))
        ->add('internaute',EntityType::class, array('class' => 'BackOfficeBundle:Internaute'))
        ->add('cancel', ButtonType::class, array('label' => 'Cancel'))
        ->add('save', SubmitType::class, array('label' => 'Save'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOfficeBundle\Entity\Trajet'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backofficebundle_trajet';
    }


}
