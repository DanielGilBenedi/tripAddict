<?php

namespace App\Controller;

use App\Entity\Estancia;
use App\Form\EstanciaType;
use App\Repository\EstanciaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/estancia")
 */
class EstanciaController extends AbstractController
{
    /**
     * @Route("/", name="estancia_index", methods={"GET"})
     */
    public function index(EstanciaRepository $estanciaRepository): Response
    {
        return $this->render('estancia/index.html.twig', [
            'estancias' => $estanciaRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="estancia_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $estancium = new Estancia();
        $form = $this->createForm(EstanciaType::class, $estancium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($estancium);
            $entityManager->flush();

            return $this->redirectToRoute('estancia_index');
        }

        return $this->render('estancia/new.html.twig', [
            'estancium' => $estancium,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="estancia_show", methods={"GET"})
     */
    public function show(Estancia $estancium): Response
    {
        return $this->render('estancia/show.html.twig', [
            'estancium' => $estancium,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="estancia_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Estancia $estancium): Response
    {
        $form = $this->createForm(EstanciaType::class, $estancium);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('estancia_index');
        }

        return $this->render('estancia/edit.html.twig', [
            'estancium' => $estancium,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="estancia_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Estancia $estancium): Response
    {
        if ($this->isCsrfTokenValid('delete'.$estancium->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($estancium);
            $entityManager->flush();
        }

        return $this->redirectToRoute('estancia_index');
    }
}
