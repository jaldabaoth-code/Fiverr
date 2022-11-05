<?php

namespace App\Controller;

use App\Entity\Question;
use App\Form\QuestionType;
use App\Repository\UserRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(Request $request, UserRepository $userRepository): Response
    {
        $question = new Question();
        $formQuestion = $this->createForm(QuestionType::class, $question);
        $formQuestion->handleRequest($request);
        if ($formQuestion->isSubmitted() && $formQuestion->isValid()) {
            $question->setAuthor($this->getUser());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($question);
            $entityManager->flush();
            return $this->redirectToRoute('home');
        }
        $questions = $this->getDoctrine()
            ->getRepository(Question::class)
            ->findAll();
        // Smallest user id
        $firstUserId = $userRepository->firstUserId()[0]['id'];
        return $this->render('home/index.html.twig', [
            'formQuestion' => $formQuestion->createView(),
            'questions' => $questions,
            'firstUserId' => $firstUserId
        ]);
    }
}
