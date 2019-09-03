<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MiCuentaController extends AbstractController
{
    /**
     * @Route("/micuenta", name="micuenta")
     */
    public function index()
    {
        if ($this->getUser() != null){
            $form=$this->createForm(UserType::class, $this->getUser());
            return $this->render('micuenta/index.html.twig', [
                'controller_name' => 'MiCuentaController',         
                'form' => $form->createView(),
            ]);
        }

        else {
            return $this->redirect($this->generateUrl('index'));
        }
        
    }

     /**
     * @Route("/mispedidos", name="mispedidos")
     */
    public function mispedidos()
    {
        if ($this->getUser() != null){
            $form=$this->createForm(UserType::class, $this->getUser());
            return $this->render('micuenta/mispedidos.html.twig', [
                
            ]);
        }


         else {
            return $this->redirect($this->generateUrl('index'));
        }
    }
}
