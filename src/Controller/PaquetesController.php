<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PaquetesController extends AbstractController
{
    /**
     * @Route("/paquetes", name="paquetes")
     */
    public function index()
    {
        return $this->render('paquetes/paquetesGrupo.html.twig', [
            'controller_name' => 'PaquetesController',
        ]);
    }

    /**
     * @Route("/paquetes/{grupo}", name="paquetesGrupo")
     */
    public function paquetesGrupo(int $grupo)
    {

        return $this->render('paquetes/paquetesGrupo.html.twig');
    }

    /**
     * @Route("/paquetes/{grupo}/{idPaquete}", name="infoPaquete")
     */
    public function infoPaquete(int $grupo, int $idPaquete)
    {
        return $this->render('paquetes/index.html.twig');
    }
}
