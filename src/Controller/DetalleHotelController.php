<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DetalleHotelController extends AbstractController
{
    /**
     * @Route("/detalle_hotel", name="detalle_hotel")
     */
    public function index()
    {
        return $this->render('detalle_hotel/index.html.twig', [
            'controller_name' => 'DetalleHotelController',
        ]);
    }
}
