<?php

namespace App\Controller;
use App\Entity\Pack;
use App\Repository\PackRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class CarritoController extends AbstractController
{
    /**
     * @Route("/carrito", name="carrito")
     */
    public function index(SessionInterface $session)
    {
        $carrito = $session->get('carrito',[]);
        return $this->render('carrito/index.html.twig', [
            'carrito' => $carrito,
        ]);
    }

    /**
     * @Route("/carrito/add", name="carrito_add")
     */
    public function add(Request $request, SessionInterface $session, PackRepository $packR)
    {
        $pack=$packR->find($request->request->get('idPack'));
       

        if ($pack){
            $carrito = $session->get('carrito',[]);
            $elemento = [
                'producto' => $pack,   //Hay que mirar si hay que serializer
                'cantidad' => $request->request->get('cantidad')
            ];
            array_push($carrito, $elemento);    
            $session->set('carrito',$carrito);  //Si no funcionase, poner.
        }
           
        return $this->render('carrito/index.html.twig', [
            'controller_name' => 'CarritoController',
            'carrito' => $carrito
        ]);
    }

    /**
     * @Route("/carrito/delete/{id}", name="carrito_delete")
     */
    public function delete( Pack $paquete ,SessionInterface $session)
    {
       
        $session->set('carrito',[]);

        
            $carrito = $session->get('carrito',[]);
            $elemento = [
                'producto' => $pack,   //Hay que mirar si hay que serializar
                'cantidad' => $request->request->get('cantidad')
            ];
            array_push($carrito, $elemento);    
            $session->set('carrito',$carrito);  //Si no funcionase, poner.
                   
        return $this->render('carrito/index.html.twig', [
            'controller_name' => 'CarritoController',
            'carrito' => $carrito
        ]);
    }
}
