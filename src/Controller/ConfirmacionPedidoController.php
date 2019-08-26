<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConfirmacionPedidoController extends AbstractController
{
    /**
     * @Route("/confirmacionPedido", name="confirmacionPedido")
     */
    public function index()
    {
        return $this->render('confirmacion_pedido/index.html.twig', [
            'controller_name' => 'ConfirmacionPedidoController',
        ]);
    }
}
