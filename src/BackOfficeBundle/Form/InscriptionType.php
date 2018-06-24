<?php

namespace BackOfficeBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;

class InscriptionType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $this->idConducteur = $options["id"];
        $builder
            ->add('internaute',EntityType::class, array('class' => 'BackOfficeBundle:Internaute',
                                                        'query_builder' => function (EntityRepository $er) {
                                                        return $er->createQueryBuilder('u')
                                                        ->where('u.id != :id')
                                                        ->setParameter('id', $this->idConducteur);}
                                                    ))
            ->add('cancel', ButtonType::class, array('label' => 'Cancel'))
            ->add('save', SubmitType::class, array('label' => 'Save'));
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BackOfficeBundle\Entity\Inscription',
            'id' => NULL,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'backofficebundle_inscription';
    }


}