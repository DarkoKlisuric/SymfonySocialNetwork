<?php
/**
 * Created by PhpStorm.
 * User: DarkoKlisuric
 * Date: 23.7.2019.
 * Time: 9:06
 */

namespace App\Form;


use App\Entity\MicroPost;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MicroPostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('text' , TextareaType::class,['label' =>false])
                ->add('spremi' , SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' =>MicroPost::class
        ]);
    }

}