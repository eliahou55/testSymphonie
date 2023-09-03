<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HelloWordController extends AbstractController
{
    #[Route('/helloWord', name: 'app_hello_word')]
    public function index(): Response
    {
        return $this->render('hello_word/index.html.twig', [
            'nom'=>'elie'
        ]);
    }



}


