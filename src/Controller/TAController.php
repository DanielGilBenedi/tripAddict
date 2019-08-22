<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TAController extends AbstractController
{
    /**
     * @Route("/ta", name="ta")
     */
    public function index()
    {
        return $this->render('ta/index.html.twig', [
            'controller_name' => 'TAController',
        ]);
    }
}
