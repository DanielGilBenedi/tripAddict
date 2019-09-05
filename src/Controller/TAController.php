<?php

namespace App\Controller;

use App\Entity\Grupo;
use App\Repository\GrupoRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
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
    * @Route("/buscar", name="buscar")
    */
    public function buscar( EntityManagerInterface $em, Request $request)
    {
        $idGrupo = $request->request->get('grupo');
        $precio = $request->request->get('precio');

        $gruposRepo = $this->getDoctrine()->getRepository(Grupo::class);
        $grupos = $gruposRepo->findAll();

        if($idGrupo == 0 and $precio == 1000){
            return $this->redirect($this->generateUrl('index'));
        }

        if($idGrupo == 0 and $precio != 1000){
            $dql = "select p.id, p.nombre, p.descripcion, p.precio, p.imagenPortada, g.id as grupo_id from \App\Entity\Pack p join p.grupo g where p.precio < :precio";
            $query=$em->createQuery($dql);
            $query->setParameter('precio', $precio);
        }

        else {
            $dql = "select p.id, p.nombre, p.descripcion, p.precio, p.imagenPortada, g.id as grupo_id from \App\Entity\Pack p join p.grupo g where p.precio < :precio and g.id = :grupo";
            $query=$em->createQuery($dql);
            $query->setParameter('precio', $precio);
            $query->setParameter('grupo', $idGrupo);
        }
        
            $packs=$query->execute();
            return $this->render('ta/index.html.twig', [
                'packs' => $packs,
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
