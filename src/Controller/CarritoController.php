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
            $cantidad=$request->request->get('cantidad');
            $encontrado=false;
            //buscar si ya existe elemento con pack
            foreach ($carrito as $key => $elemento) {

                if($pack->getId()==$elemento['producto']->getId() and $elemento['tipo']=='normal'){

                    $carrito[$key]['cantidad']+=$cantidad;
                    $encontrado=true;
                }
               
            }
            if(!$encontrado){
                  //si no existe
            $elemento = [
                'tipo' => 'normal',
                'producto' => $pack,   //Hay que mirar si hay que serializer
                'cantidad' => $cantidad
            ];

            array_push($carrito, $elemento); 
            }
           
            $session->set('carrito',$carrito);  //Si no funcionase, poner.
        }
           
            return $this->redirect($this->generateUrl('carrito'));
    }

    /**
     * @Route("/carrito/editar", name="carrito_editar")
     */
    public function editar(Request $request, SessionInterface $session)
    {
        $key = $request->request->get('key');
        $numero = $request->request->get('cantidad');

        $carrito = $session->get('carrito',[]);
        if($numero>0){
            
            $carrito[$key]['cantidad'] = $numero; 
            
            $session->set('carrito',$carrito); 
        }else{
            //borrar elemento
            array_splice($carrito, 1, $key);
        
        $session->set('carrito',$carrito); 
        }
     
        return $this->redirect($this->generateUrl('carrito'));
    }

    /**
     * @Route("/carrito/borrar/{key}", name="carrito_borrar")
     */
    public function borrar(int $key, SessionInterface $session)
    {
        $carrito = $session->get('carrito',[]);
       
        //borrar
        array_splice($carrito, $key, 1);
        
        $session->set('carrito',$carrito); 

        return $this->redirect($this->generateUrl('carrito'));
    }

    /**
     * @Route("/carrito/vaciar", name="carrito_vaciar")
     */
    public function vaciar(SessionInterface $session){
        $session->set('carrito',[]);         
        return $this->redirect($this->generateUrl('carrito'));
    }
   
   

}
