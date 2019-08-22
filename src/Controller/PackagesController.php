<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PackagesController extends AbstractController
{
    /**
     * @Route("/packages", name="packages")
     */
    public function index()
    {
        return $this->render('packages/index.html.twig', [
            'controller_name' => 'PackagesController',
        ]);
    }
}
