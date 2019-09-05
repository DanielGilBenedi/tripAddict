<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CanjearpaqueteController extends AbstractController
{
    /**
     * @Route("/canjearpaquete", name="canjearpaquete")
     */
    public function index()
    {
        return $this->render('canjearpaquete/index.html.twig', [
            'controller_name' => 'CanjearpaqueteController',
        ]);
    }
}
