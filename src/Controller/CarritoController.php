<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class CarritoController extends AbstractController
{
    /**
     * @Route("/carrito", name="carrito")
     */
    public function index()
    {
        return $this->render('carrito/compra.html.twig', [
            'controller_name' => 'CarritoController',
        ]);
    }
}