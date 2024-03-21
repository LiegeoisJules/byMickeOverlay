<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class OverlayController extends AbstractController
{
    #[Route('/overlay', name: 'app_overlay')]
    public function index(): Response
    {
        return $this->render('overlay/index.html.twig', [
            'controller_name' => 'OverlayController',
        ]);
    }
}
