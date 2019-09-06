<?php

namespace App\Controller;


use DateTime;
use DateInterval;
use App\Entity\Pack;
use App\Entity\User;
use App\Entity\Pedido;
use App\Form\UserType;
use App\Entity\Estancia;
use App\Entity\LineaPedido;
use App\Repository\PackRepository;
use App\Repository\PedidoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FinCompraController extends AbstractController
{
    /**
     * @Route("/finCompra", name="finCompra")
     */
    public function index(SessionInterface $session, EntityManagerInterface $em)
    {
        
        if ($this->getUser() != null){
        $carrito = $session->get('carrito',[]);
        $form=$this->createForm(UserType::class, $this->getUser());
        $pedido= new Pedido();
        $pedido->setFecha(new DateTime());
        $pedido->setIdUsuario($this->getUser());

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($pedido);
        
            foreach ($carrito as  $elemento) 
            {
                for ($i=0 ; $i<$elemento['cantidad'] ; $i++){

                    $linea=new LineaPedido();
                    //$linea->setIdPack($elemento['producto']);
                    $repoPack=$em->getRepository(Pack::class);
                    $pack=$repoPack->find($elemento['producto']->getId());
                    $linea->setIdPack($pack);

                    $linea->setPrecio($elemento['producto']->getPrecio());

                    $fecha = new DateTime();
                    $intervalo = new DateInterval('P2Y');
                    $fecha->add($intervalo);
                    $linea->setfechaFin($fecha);

                
                    $linea->setUsado(false);
                    //$pedido->addLineaPedido($linea);

                    $linea->setIdPedido($pedido);

                    $entityManager->persist($linea);
                }                
            }

            $entityManager->flush();
            $session->set('carrito',[]);  
            $session->set('pedido',$pedido->getId()); 

            return $this->redirect($this->generateUrl('resumenPedido'));
    }
        else 
        {
            return $this->redirect($this->generateUrl('index'));
        }
 }

    /**
     * @Route("/resumenPedido", name="resumenPedido")
     */
    public function resumenPedido(SessionInterface $session, PedidoRepository $repo)
    {
        if ($this->getUser() != null && $session->get('pedido') != null){
            $idPedido = $session->get('pedido');
            $pedido = $repo->find($idPedido);
            $session->remove("pedido");
            
            return $this->render('fin_compra/index.html.twig', [
                "pedido"=>$pedido,
            ]);
        }

        else {
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
