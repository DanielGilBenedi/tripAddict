<?php

namespace App\Controller;

use App\Repository\LineaPedidoRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CanjearpaqueteController extends AbstractController
{
    /**
     * @Route("/canjearpaquete", name="canjearpaquete")
     */
    public function index()
    {
        return $this->render('canjearpaquete/index.html.twig', [
            'controller_name' => 'CanjearpaqueteController',
        ]);
    }
    /**
     * @Route("/verificar", name="verificar")
     */
    public function comprobar( Request $request,  LineaPedidoRepository $pedidoR)
    {
        

        $pedido=$pedidoR->find($request->request->get('codigo'));

        if($pedido){
          
           
        }else{
            
        }

        return $this->render('canjearpaquete/index.html.twig', [
            'controller_name' => 'CanjearpaqueteController',
            'pedido' => $pedido
        ]);
    }
}
