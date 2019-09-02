<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CarritoController extends AbstractController
{
    /**
     * @Route("/carrito", name="carrito")
     */
    public function index()
    {
        

       
        return $this->render('carrito/index.html.twig', [
            'controller_name' => 'CarritoController',
        ]);
    }

    /**
     * @Route("/carrito/add", name="carrito_add")
     */
    public function add(Request $request, SessionInterface $session)
    {

        echo var_dump($request->query->get('cantidad'));
        echo var_dump($request->query->get('idPack'));


        $carrito = $session->get('carrito',[]);
        $pack = new Pack();
        $elemento = [
            'producto' => $pack, 
            'cantidad' => 1
        ];


        array_push($carrito, $elemento);

        
        return $this->render('carrito/index.html.twig', [
            'controller_name' => 'CarritoController',
        ]);
    }



}
