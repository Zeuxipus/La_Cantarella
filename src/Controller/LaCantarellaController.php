<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class LaCantarellaController extends AbstractController
{
    #[Route('/la-cantarella', name: 'app_la-cantarella')]
    public function index(): Response
    {
        return $this->render('la-cantarella/index.html.twig', [
            'controller_name' => 'LaCantarellaController',
        ]);
    }
}
