<?php

namespace App\Controller;


use App\Entity\Pack;
use App\Repository\PackRepository;
use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class FinCompraController extends AbstractController
{
    /**
     * @Route("/finCompra", name="finCompra")
     */
    public function index(SessionInterface $session)
    {
        if ($this->getUser() != null){
        $carrito = $session->get('carrito',[]);
        $form=$this->createForm(UserType::class, $this->getUser());
        return $this->render('fin_compra/index.html.twig', [
            'carrito' => $carrito,
            'form' => $form->createView(),
        ]);
    }else {
        return $this->redirect($this->generateUrl('index'));
    }
 }
 /**
     * @Route("/datosUser", name="datos_user")
     */
    public function datosUser()
    {
        if ($this->getUser() != null){
            $form=$this->createForm(UserType::class, $this->getUser());
            return $this->render('fin_compra/index.html.twig', [
                
            ]);
        }


         else {
            return $this->redirect($this->generateUrl('index'));
        }
    }

    /**
     * @Route("/finCompra/add", name="fin_compra")
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
           
        return $this->render('fin_compra/index.html.twig', [
            'controller_name' => 'CarritoController',
            'carrito' => $carrito
        ]);
    }
}
