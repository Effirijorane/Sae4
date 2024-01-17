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


    #[Route('/cv', name: 'cv')]
    public function cv(): Response
    {
        return $this->render('jorane/cv.html.twig', [
            'controller_name' => 'JoraneController',
        ]);
    }

    #[Route('/Eporfolio', name: 'Eportfolio')]
    public function Eportfolio(): Response
    {
        return $this->render('jorane/Eportfolio.html.twig', [
            'controller_name' => 'JoraneController',
        ]);
    }
    #[Route('/Leisure', name: 'Leisure')]
    public function Leisure(): Response
    {
        return $this->render('jorane/Leisure.html.twig', [
            'controller_name' => 'JoraneController',
        ]);
    }
}
    