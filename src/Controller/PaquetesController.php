<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PaquetesController extends AbstractController
{
    /**
     * @Route("/paquetes", name="paquetes")
     */
    public function index()
    {

        return $this->render('paquetes/index.html.twig', [
            'controller_name' => 'PaquetesController',
        ]);
    }
}
