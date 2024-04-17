<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AProposController extends AbstractController
{
    #[Route('/a-propos', name: 'app_a-propos')]
    public function index(): Response
    {
        return $this->render('a-propos/index.html.twig', [
            'controller_name' => 'AProposController',
        ]);
    }
}
