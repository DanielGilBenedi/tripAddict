<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PackDentroController extends AbstractController
{
    /**
     * @Route("/pack/dentro", name="pack_dentro")
     */
    public function index()
    {
        return $this->render('pack_dentro/index.html.twig', [
            'controller_name' => 'PackDentroController',
        ]);
    }
}
