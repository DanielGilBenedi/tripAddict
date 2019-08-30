<?php

namespace App\Controller;

use App\Entity\Grupo;
use App\Entity\Pack;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    public function infoPaquete(Grupo $grupo, Pack $paquete)
    {

        return $this->render('paquetes/index.html.twig',[
            'paquete' => $paquete,
            'grupo' => $grupo
        ]);
    }
}
