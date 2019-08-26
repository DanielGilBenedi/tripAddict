<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class RegistroPrincipalController extends AbstractController
{
    /**
     * @Route("/registro/principal", name="registro_principal")
     */
    public function index()
    {
        return $this->render('registro_principal/index.html.twig', [
            'controller_name' => 'RegistroPrincipalController',
        ]);
    }
}
