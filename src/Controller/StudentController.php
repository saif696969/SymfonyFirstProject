<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class StudentController extends AbstractController
{
    #[Route('/student', name: 'app_student')]
    public function index(): Response
    {
        return $this->render('student/index.html.twig', [
            'controller_name' => 'StudentController',
        ]);
    }
    #[Route('/liststudent/{var}', name: 'A')]
    public function liststudent($var): Response
    {
        return new Response("salut ".$var);
    }
    #[Route('/show', name: 'b')]
    public function show()
    {
        return $this->render("student/show.html.twig");
    }
    #[Route('/gotoindex', name: 'c')]
    public function gotoindex()
    {
        return $this->redirectToRoute("app_student");
    }
}