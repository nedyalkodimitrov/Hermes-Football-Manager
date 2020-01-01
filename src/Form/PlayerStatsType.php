<?php

namespace App\Form;

use App\Entity\PlayerProperties\PlayerStats;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PlayerStatsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('statusFromCoaches')
            ->add('weight')
            ->add('height')
            ->add('fat')
            ->add('pace')
            ->add('tacticks')
            ->add('technique')
            ->add('pass')
            ->add('shot')
            ->add('dribble')
            ->add('longPass')
            ->add('relax')
            ->add('willpower')
            ->add('work')
            ->add('perspective')
            ->add('player')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PlayerStats::class,
        ]);
    }
}
