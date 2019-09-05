<?php

namespace App\Controller;

use App\Entity\Grupo;
use App\Repository\GrupoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

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
    * @Route("/{idGrupo}/{precio}", name="index2")
    */
    public function index2($idGrupo, $precio, EntityManagerInterface $em)
    {
        $dql = "select p from \App\Entity\Pack p join p.grupo g where p.precio < :precio and g.id = :grupo";
        $query=$em->createQuery($dql);
        $query->setParameter('precio', $precio);
        $query->setParameter('grupo', $grupo);
        
        $packs=$query->execute();
        
        return $this->json($packs);
    }

    /**
    * @Route("/contacto", name="contacto")
    */
    public function contacto()
    {
        return $this->render('contacto/index.html.twig');
    }
}
