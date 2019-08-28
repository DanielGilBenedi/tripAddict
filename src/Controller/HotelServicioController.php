<?php

namespace App\Controller;

use App\Entity\HotelServicio;
use App\Form\HotelServicioType;
use App\Repository\HotelServicioRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/hotel/servicio")
 */
class HotelServicioController extends AbstractController
{
    /**
     * @Route("/", name="hotel_servicio_index", methods={"GET"})
     */
    public function index(HotelServicioRepository $hotelServicioRepository): Response
    {
        return $this->render('hotel_servicio/index.html.twig', [
            'hotel_servicios' => $hotelServicioRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="hotel_servicio_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $hotelServicio = new HotelServicio();
        $form = $this->createForm(HotelServicioType::class, $hotelServicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($hotelServicio);
            $entityManager->flush();

            return $this->redirectToRoute('hotel_servicio_index');
        }

        return $this->render('hotel_servicio/new.html.twig', [
            'hotel_servicio' => $hotelServicio,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="hotel_servicio_show", methods={"GET"})
     */
    public function show(HotelServicio $hotelServicio): Response
    {
        return $this->render('hotel_servicio/show.html.twig', [
            'hotel_servicio' => $hotelServicio,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="hotel_servicio_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, HotelServicio $hotelServicio): Response
    {
        $form = $this->createForm(HotelServicioType::class, $hotelServicio);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('hotel_servicio_index');
        }

        return $this->render('hotel_servicio/edit.html.twig', [
            'hotel_servicio' => $hotelServicio,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="hotel_servicio_delete", methods={"DELETE"})
     */
    public function delete(Request $request, HotelServicio $hotelServicio): Response
    {
        if ($this->isCsrfTokenValid('delete'.$hotelServicio->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($hotelServicio);
            $entityManager->flush();
        }

        return $this->redirectToRoute('hotel_servicio_index');
    }
}
