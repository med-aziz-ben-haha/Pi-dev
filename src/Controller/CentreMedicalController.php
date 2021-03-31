<?php

namespace App\Controller;

use App\Entity\CentreMedical;
use App\Form\CentreMedicalType;
use App\Repository\CentreMedicalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/centre/medical")
 */
class CentreMedicalController extends AbstractController
{
    /**
     * @Route("/", name="centre_medical_index", methods={"GET"})
     */
    public function index(CentreMedicalRepository $centreMedicalRepository): Response
    {
        return $this->render('centre_medical/index.html.twig', [
            'centre_medicals' => $centreMedicalRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="centre_medical_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $centreMedical = new CentreMedical();
        $form = $this->createForm(CentreMedicalType::class, $centreMedical);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($centreMedical);
            $entityManager->flush();

            return $this->redirectToRoute('centre_medical_index');
        }

        return $this->render('centre_medical/new.html.twig', [
            'centre_medical' => $centreMedical,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="centre_medical_show", methods={"GET"})
     */
    public function show(CentreMedical $centreMedical): Response
    {
        return $this->render('centre_medical/show.html.twig', [
            'centre_medical' => $centreMedical,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="centre_medical_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CentreMedical $centreMedical): Response
    {
        $form = $this->createForm(CentreMedicalType::class, $centreMedical);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('centre_medical_index');
        }

        return $this->render('centre_medical/edit.html.twig', [
            'centre_medical' => $centreMedical,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="centre_medical_delete", methods={"POST"})
     */
    public function delete(Request $request, CentreMedical $centreMedical): Response
    {
        if ($this->isCsrfTokenValid('delete'.$centreMedical->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($centreMedical);
            $entityManager->flush();
        }

        return $this->redirectToRoute('centre_medical_index');
    }
}
