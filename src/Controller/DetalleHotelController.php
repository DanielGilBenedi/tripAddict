<?php

namespace App\Controller;

use App\Entity\Hotel;
use App\Entity\Estancia;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DetalleHotelController extends AbstractController
{
    /**
     * @Route("/detalleHotel/{hotel}/{estancia?null}", name="detalleHotel")
     */
    public function index(Hotel $hotel,Estancia $estancia=null)
    {
        
        return $this->render('detalle_hotel/index.html.twig', [
            'hotel' => $hotel,
            'estancia' => $estancia
        ]);
    }
}
