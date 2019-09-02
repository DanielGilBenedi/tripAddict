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
        $user=new User();
        $form=$this->createForm(UserType::class, $this->getUser());
        return $this->render('micuenta/index.html.twig', [
            'controller_name' => 'MiCuentaController',
         
            'form' => $form->createView(),
        ]);
    }
}
