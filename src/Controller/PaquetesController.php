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
    public function paquetesGrupo(Grupo $grupo)
    {   

        return $this->render('paquetes/paquetesGrupo.html.twig',[
            'grupo'=> $grupo
        ]
        );
    }

    /**
     * @Route("/paquetes/{grupo}/{paquete}", name="infoPaquete")
     */
    public function infoPaquete(Grupo $grupo, Pack $paquete)
    {
        if ($grupo->getPacks()->contains($paquete)){
            return $this->render('paquetes/index.html.twig',[
                'paquete' => $paquete,
                'grupo' => $grupo
            ]); 
        }
        
        else {
            return $this->redirect($this->generateUrl('index'));
        }
        
    }
}
