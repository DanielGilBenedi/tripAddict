<?php

namespace App\Controller;

use App\Entity\Grupo;
use App\Repository\GrupoRepository;
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
        //cargar grupos de packs
        $gruposRepo = $this->getDoctrine()->getRepository(Grupo::class);
        $grupos = $gruposRepo->findAll();

        return $this->render('ta/index.html.twig', [
            'grupos' => $grupos
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
