<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JoraneController extends AbstractController
{
    #[Route('/jorane', name: 'app_jorane')]
    public function index(): Response
    {
        return $this->render('jorane/index.html.twig', [
            'controller_name' => 'JoraneController',
        ]);
    }
}
