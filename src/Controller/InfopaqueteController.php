<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InfopaqueteController extends AbstractController
{
    /**
     * @Route("/infopaquete", name="infopaquete")
     */
    public function index()
    {
        return $this->render('infopaquete/index.html.twig', [
            'controller_name' => 'InfopaqueteController',
        ]);
    }
}
