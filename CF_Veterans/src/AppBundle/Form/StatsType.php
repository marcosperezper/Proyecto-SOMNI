<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class StatsType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Minutos_jugados')
            ->add('Goles')
            ->add('Tarjetas_amarillas')
            ->add('Tarjetas_rojas')
            ->add('Asistencias')
            ->add('Vuelta', ChoiceType::class,[
                'choices' =>[
                    'Ida' => 0,
                    'Vuelta' => 1
                ]
            ])
            ->add('Jugador')
            ->add('Equipo')
             ->add('save', SubmitType::class,array('label'=>'Añadir estadística'));
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Stats'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_stats';
    }


}
