<?php

namespace App\Form;

use App\Entity\Carroussel;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CarrousselType extends AbstractType  
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
           // ->add('imageUrl')
           ->add('image', FileType::class, [
                'mapped' => false,
                //'required' => false,
               // 'multiple' => false

           ])
            ->add('description')
            ->add('etat')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Carroussel::class,
        ]);
    }
}
