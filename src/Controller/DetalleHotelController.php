<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DetalleHotelController extends AbstractController
{
    /**
     * @Route("/detalleHotel/{hotel}", name="detalleHotel")
     */
    public function index($hotel)
    {
        return $this->render('detalle_hotel/index.html.twig', [
            'controller_name' => 'DetalleHotelController',
        ]);
    }
}
