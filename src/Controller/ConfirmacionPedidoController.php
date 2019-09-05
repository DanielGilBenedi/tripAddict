<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ConfirmacionPedidoController extends AbstractController
{
    /**
     * @Route("/confirmacionPedido", name="confirmacionPedido")
     */
    public function index()
    {
        if ($this->getUser() != null){
            $form=$this->createForm(UserType::class, $this->getUser());
            return $this->render('confirmacion_pedido/index.html.twig', [
                'controller_name' => 'ConfirmacionPedidoController',         
                'form' => $form->createView(),
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
            return $this->render('confirmacion_pedido/index.html.twig', [
                
            ]);
        }


         else {
            return $this->redirect($this->generateUrl('index'));
        }
    }
}
