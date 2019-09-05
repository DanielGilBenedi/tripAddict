<?php

namespace App\Controller;


use DateTime;
use App\Entity\Pack;
use App\Entity\User;
use App\Entity\Pedido;
use App\Form\UserType;
use App\Entity\LineaPedido;
use App\Repository\PackRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
        $pedido= new Pedido();
        $pedido->setFecha(new DateTime());
        $pedido->setUsuario($this->getUser());

            foreach ($carrito as $key => $elemento) {
                
                $linea=new LineaPedido();
                $linea->setPedido($pedido);
                $linea->setPack($elemento['producto']);
                $linea->setPrecio($elemento['producto']->getPrecio());

                $fecha = new DateTime();
                $intervalo = new DateInterval('P2Y');
                $fecha->add($intervalo);
                $linea->setfechaFin($fecha);

                $linea->setUsado(false);
                

            }

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
