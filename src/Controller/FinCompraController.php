<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FinCompraController extends AbstractController
{
    /**
     * @Route("/finCompra", name="finCompra")
     */
    public function index()
    {
        return $this->render('fin_compra/index.html.twig', [
            'controller_name' => 'FinCompraController',
        ]);
    }
}
