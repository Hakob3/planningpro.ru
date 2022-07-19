<?php
// src/Form/Type/TaskType.php
namespace App\Form\Type;

use App\Entity\Geometry;
use Symfony\Component\Form\AbstractType;
use App\Entity\Task;
use App\Entity\Colors;
use Doctrine\Common\Persistence\ManagerRegistry;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

use Symfony\Component\Form\FormBuilderInterface;

class TaskType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
//        var_dump($this->getColors());

        $builder
            ->add('text', TextareaType::class)
            ->add('email', TextType::class, [
                'attr' => ['maxlength' => '255'],
            ])
            ->add('images', FileType::class, [
                'attr' => [
                    'accept' => '.jpg,.png',
                    'multiple' => true
                ]
            ])
            ->add('color', EntityType::class, [
                'class' => Colors::class,
                'choice_label' => 'color'
            ])
            ->add('geometry', EntityType::class, [
                'class' => Geometry::class,
                'choice_label' => 'geometry',
            ])
            ->add('save', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}