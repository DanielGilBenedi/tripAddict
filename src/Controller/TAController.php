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

        $dql = "select p.id, p.nombre, p.descripcion, p.precio, p.imagenPortada from \App\Entity\Pack p join p.grupo g where p.precio < :precio and g.id = :grupo";
        $query=$em->createQuery($dql);
        $query->setParameter('precio', $precio);
        $query->setParameter('grupo', $idGrupo);
        
        $packs=$query->execute();

        // $encoders = [new JsonEncoder()]; // If no need for XmlEncoder
        // $normalizers = [new ObjectNormalizer()];
        // $serializer = new Serializer($normalizers, $encoders);

        // $jsonObject = $serializer->serialize($packs, 'json', [
        //     'circular_reference_handler' => function ($object) {
        //         return $object->getId();
        //     }
        // ]);

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
