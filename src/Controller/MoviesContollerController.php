<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesContollerController extends AbstractController
{
    /**
     * @Route("/movies", name="app_movies_contoller")
     */
    public function index(): JsonResponse
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/MoviesContollerController.php',
        ]);
    }
    
    /**
     * oldMethod
     *
     * @Route("/old", name="old")
     */
    public function oldMethod() : Response
    {
        return $this->json([
            'message' => 'OLD methos',
            'path' => 'src/Controller/MoviesContollerController.php',
        ]);
    }
}
