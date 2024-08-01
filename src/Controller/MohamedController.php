<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MohamedController extends AbstractController
{
    #[Route('/mohamed', name: 'app_mohamed')]
    public function index(): Response
    {
        return $this->render('mohamed/index.html.twig', [
            'controller_name' => 'MohamedController',
        ]);
    }
}
