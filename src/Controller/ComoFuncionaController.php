<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ComoFuncionaController extends AbstractController
{
    /**
     * @Route("/comoFunciona", name="comoFunciona")
     */
    public function index()
    {
        return $this->render('como_funciona/index.html.twig', [
            'controller_name' => 'ComoFuncionaController',
        ]);
    }
}
