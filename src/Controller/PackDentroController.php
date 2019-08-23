<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PackDentroController extends AbstractController
{
    /**
     * @Route("/packdentro", name="packdentro")
     */
    public function index()
    {
        return $this->render('pack_dentro/index.html.twig', [
            'controller_name' => 'PackDentroController',
        ]);
    }
}
