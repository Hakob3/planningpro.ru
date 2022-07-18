<?php
// src/Form/Type/TaskType.php
namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use App\Entity\Task;
use App\Controller\ColorController;
use App\Form\CategoryType;
use App\Entity\Colors;
use Doctrine\Common\Persistence\ManagerRegistry;
use App\Repository\ColorsRepository;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
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
            ]);
    }

    public function getColors()
    {
        $colors = new ColorsRepository();

        $colors->findAtColumn();

        return $colors;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Task::class,
        ]);
    }
}