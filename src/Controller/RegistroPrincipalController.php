<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegistroPrincipalController extends AbstractController
{
    /**
     * @Route("/registroprincipal", name="registroprincipal")
     */
    public function index()
    {
        return $this->render('registro_principal/index.html.twig', [
            'controller_name' => 'RegistroPrincipalController',
        ]);
    }
}
