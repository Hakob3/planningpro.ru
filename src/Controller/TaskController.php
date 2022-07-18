<?php
// src/Controller/TaskController.php
namespace App\Controller;

use App\Entity\Colors;
use App\Entity\Geometry;
use App\Entity\Record;
use App\Entity\Task;
use App\Form\Type\TaskType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

class TaskController extends AbstractController
{

    #[Route('/task/new', name: 'task_success')]
    public function new(Request $request, ManagerRegistry $doctrine, ValidatorInterface $validator): Response
    {
        $colorsRepository = $doctrine->getRepository(Colors::class);
        $geometryRepository = $doctrine->getRepository(Geometry::class);
        $colorsArr = [];
        $geometryArr = [];

        $colors = $colorsRepository->findAtColumn();
        $geometries = $geometryRepository->findAtColumn();

        foreach ($colors as $color) {
            $colorsArr[$color['color']] = $color['color'];
        }

        foreach ($geometries as $geometry) {
            $geometryArr[$geometry['geometry']] = $geometry['geometry'];
        }

        $task = new Task();
        $task->setText('Write a blog post');
        $task->setEmail('myemail@example.com');

        $form = $this->createForm(TaskType::class, $task);
        $form->add('color', ChoiceType::class, ['choices' => $colorsArr])
            ->add('geometry', ChoiceType::class, ['choices' => $geometryArr])
            ->add('save', SubmitType::class);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            $task = $form->getData();

            $entityManager = $doctrine->getManager();

            $date = date('d/m/Y-H:i:s');

            $someNewFilename = 'image' . $date;

            $directory = '../public/images';

            $file = $form['images']->getData();
            $file->move($directory, $someNewFilename);


            $taskTable = new Record();
            $taskTable->setText($task->getText());
            $taskTable->setEmail($task->getEmail());
            $taskTable->setColor($task->getColor());
            $taskTable->setGeometry($task->getGeometry());
            $taskTable->setImage($task->getImages());

            $errors = $validator->validate($taskTable);
            if (count($errors) > 0) {
                return new Response((string)$errors, 400);
            }

            $entityManager->persist($taskTable);
            $entityManager->flush();

            return $this->redirectToRoute('task_success');
        }

        return $this->renderForm('task/new.html.twig', [
            'form' => $form,
        ]);
    }

//    #[Route('/task_success', name: 'task_success')]
//    public function task_success(Request $request, ManagerRegistry $doctrine): Response
//    {
//       return $this->new($request, $doctrine);
//    }
}