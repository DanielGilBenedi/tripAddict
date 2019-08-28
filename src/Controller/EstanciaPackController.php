<?php

namespace App\Controller;

use App\Entity\EstanciaPack;
use App\Form\EstanciaPackType;
use App\Repository\EstanciaPackRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/estancia/pack")
 */
class EstanciaPackController extends AbstractController
{
    /**
     * @Route("/", name="estancia_pack_index", methods={"GET"})
     */
    public function index(EstanciaPackRepository $estanciaPackRepository): Response
    {
        return $this->render('estancia_pack/index.html.twig', [
            'estancia_packs' => $estanciaPackRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="estancia_pack_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $estanciaPack = new EstanciaPack();
        $form = $this->createForm(EstanciaPackType::class, $estanciaPack);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($estanciaPack);
            $entityManager->flush();

            return $this->redirectToRoute('estancia_pack_index');
        }

        return $this->render('estancia_pack/new.html.twig', [
            'estancia_pack' => $estanciaPack,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="estancia_pack_show", methods={"GET"})
     */
    public function show(EstanciaPack $estanciaPack): Response
    {
        return $this->render('estancia_pack/show.html.twig', [
            'estancia_pack' => $estanciaPack,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="estancia_pack_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, EstanciaPack $estanciaPack): Response
    {
        $form = $this->createForm(EstanciaPackType::class, $estanciaPack);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('estancia_pack_index');
        }

        return $this->render('estancia_pack/edit.html.twig', [
            'estancia_pack' => $estanciaPack,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="estancia_pack_delete", methods={"DELETE"})
     */
    public function delete(Request $request, EstanciaPack $estanciaPack): Response
    {
        if ($this->isCsrfTokenValid('delete'.$estanciaPack->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($estanciaPack);
            $entityManager->flush();
        }

        return $this->redirectToRoute('estancia_pack_index');
    }
}
