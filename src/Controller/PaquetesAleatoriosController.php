<?php

namespace App\Controller;

use App\Entity\PackAleatorio;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class PaquetesAleatoriosController extends AbstractController
{
    /**
     * @Route("/paquetesAleatorios", name="paquetesAleatorios")
     */
    public function index()
    {
        $paqueterepo = $this->getDoctrine()->getRepository(PackAleatorio::class);
        $paquetesaleatorios = $paqueterepo->findAll();

        return $this->render('paquetes_aleatorios/index.html.twig', [
            'paquetesaleatorios' => $paquetesaleatorios,
        ]);
    }
}
