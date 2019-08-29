<?php

namespace App\Controller;

use App\Entity\PackAleatorio;
use App\Form\PackAleatorioType;
use App\Repository\PackAleatorioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/packAleatorio")
 */
class PackAleatorioController extends AbstractController
{
    /**
     * @Route("/", name="pack_aleatorio_index", methods={"GET"})
     */
    public function index(PackAleatorioRepository $packAleatorioRepository): Response
    {
        return $this->render('pack_aleatorio/index.html.twig', [
            'pack_aleatorios' => $packAleatorioRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="pack_aleatorio_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $packAleatorio = new PackAleatorio();
        $form = $this->createForm(PackAleatorioType::class, $packAleatorio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($packAleatorio);
            $entityManager->flush();

            return $this->redirectToRoute('pack_aleatorio_index');
        }

        return $this->render('pack_aleatorio/new.html.twig', [
            'pack_aleatorio' => $packAleatorio,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pack_aleatorio_show", methods={"GET"})
     */
    public function show(PackAleatorio $packAleatorio): Response
    {
        return $this->render('pack_aleatorio/show.html.twig', [
            'pack_aleatorio' => $packAleatorio,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="pack_aleatorio_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, PackAleatorio $packAleatorio): Response
    {
        $form = $this->createForm(PackAleatorioType::class, $packAleatorio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('pack_aleatorio_index');
        }

        return $this->render('pack_aleatorio/edit.html.twig', [
            'pack_aleatorio' => $packAleatorio,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="pack_aleatorio_delete", methods={"DELETE"})
     */
    public function delete(Request $request, PackAleatorio $packAleatorio): Response
    {
        if ($this->isCsrfTokenValid('delete'.$packAleatorio->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($packAleatorio);
            $entityManager->flush();
        }

        return $this->redirectToRoute('pack_aleatorio_index');
    }
}
