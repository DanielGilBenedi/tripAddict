<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="")
 */
class TAController extends AbstractController
{
    /**
    * @Route("/", name="index")
    */
    public function index()
    {
        return $this->render('ta/index.html.twig', [
            'controller_name' => 'TAController',
        ]);
    }

    /**
    * @Route("/contacto", name="contacto")
    */
    public function contacto()
    {
        return $this->render('contacto/index.html.twig');
    }
}
