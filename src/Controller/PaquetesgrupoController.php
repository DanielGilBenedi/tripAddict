<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PaquetesgrupoController extends AbstractController
{
    /**
     * @Route("/paquetesgrupo", name="paquetesgrupo")
     */
    public function index()
    {
        return $this->render('paquetesgrupo/index.html.twig', [
            'controller_name' => 'PaquetesgrupoController',
        ]);
    }
}
