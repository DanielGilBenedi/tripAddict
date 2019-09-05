<?php

namespace App\Controller;

use App\Entity\Pack;
use App\Entity\PackAleatorio;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PaquetesAleatoriosController extends AbstractController
{
    /**
     * @Route("/paquetesAleatorios", name="paquetesAleatorios")
     */
    public function index()
    {
        $paqueterepo = $this->getDoctrine()->getRepository(PackAleatorio::class);
        $paquetesaleatorios = $paqueterepo->findAll();

        return $this->render('paquetes_aleatorios/index.html.twig', [
            'paquetesaleatorios' => $paquetesaleatorios,
        ]);
    }

     /**
     * @Route("/sortear/{id}", name="sortear")
     */
    public function sortear(PackAleatorio $packAleatorio, SessionInterface $session)
    {
        $paqueterepo = $this->getDoctrine()->getRepository(Pack::class);
        $resultado = $paqueterepo->sortearPack($packAleatorio->getMinimo(),$packAleatorio->getMaximo());

        $pack=$resultado[0];

        //modificar precio
        $pack->setPrecio($packAleatorio->getPrecio());

        if ($pack){
            $carrito = $session->get('carrito',[]);
            $elemento = [
                'tipo' => 'aleatorio',
                'producto' => $pack,   //Hay que mirar si hay que serializer
                'cantidad' => 1
            ];
            array_push($carrito, $elemento);    
            $session->set('carrito',$carrito);  //Si no funcionase, poner.
        }

        $obj="ok";
        
        //redireccionar al carrito


    }
}
