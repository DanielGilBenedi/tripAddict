<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PaquetesAleatoriosController extends AbstractController
{
    /**
     * @Route("/paquetesAleatorios", name="paquetesAleatorios")
     */
    public function index()
    {
        return $this->render('paquetes_aleatorios/index.html.twig', [
            'controller_name' => 'PaquetesAleatoriosController',
        ]);
    }
}
