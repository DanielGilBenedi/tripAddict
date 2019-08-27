<?php

namespace App\Controller;

use App\Entity\ImagenesHotel;
use App\Form\ImagenesHotelType;
use App\Repository\ImagenesHotelRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/imagenes/hotel")
 */
class ImagenesHotelController extends AbstractController
{
    /**
     * @Route("/", name="imagenes_hotel_index", methods={"GET"})
     */
    public function index(ImagenesHotelRepository $imagenesHotelRepository): Response
    {
        return $this->render('imagenes_hotel/index.html.twig', [
            'imagenes_hotels' => $imagenesHotelRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="imagenes_hotel_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $imagenesHotel = new ImagenesHotel();
        $form = $this->createForm(ImagenesHotelType::class, $imagenesHotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($imagenesHotel);
            $entityManager->flush();

            return $this->redirectToRoute('imagenes_hotel_index');
        }

        return $this->render('imagenes_hotel/new.html.twig', [
            'imagenes_hotel' => $imagenesHotel,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="imagenes_hotel_show", methods={"GET"})
     */
    public function show(ImagenesHotel $imagenesHotel): Response
    {
        return $this->render('imagenes_hotel/show.html.twig', [
            'imagenes_hotel' => $imagenesHotel,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="imagenes_hotel_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, ImagenesHotel $imagenesHotel): Response
    {
        $form = $this->createForm(ImagenesHotelType::class, $imagenesHotel);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('imagenes_hotel_index');
        }

        return $this->render('imagenes_hotel/edit.html.twig', [
            'imagenes_hotel' => $imagenesHotel,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="imagenes_hotel_delete", methods={"DELETE"})
     */
    public function delete(Request $request, ImagenesHotel $imagenesHotel): Response
    {
        if ($this->isCsrfTokenValid('delete'.$imagenesHotel->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($imagenesHotel);
            $entityManager->flush();
        }

        return $this->redirectToRoute('imagenes_hotel_index');
    }
}
