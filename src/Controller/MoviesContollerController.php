<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesContollerController extends AbstractController
{
  
    
    /**
     * index
     *
     * @Route("/movies", name="index")
     */
    public function index() : Response
    {
        $movies=["Avengers: End game", "Inception","Loki"];
       return $this->render('index.html.twig',array(
           'movies'=>$movies
       ));
    }
}
