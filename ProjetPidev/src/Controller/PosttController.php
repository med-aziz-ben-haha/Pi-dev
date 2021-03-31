<?php

namespace App\Controller;

use App\Entity\Postt;
use App\Form\PosttType;
use App\Repository\PosttRepository;
use App\Repository\ServiceRepository;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Snappy;


/**
 * @Route("/postt")
 */
class PosttController extends AbstractController
{
    /**
     * @Route("/", name="postt_index", methods={"GET"})
     */
    public function index(PosttRepository $posttRepository): Response
    {
        return $this->render('postt/index.html.twig', [
            'postts' => $posttRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="postt_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $postt = new Postt();
        $form = $this->createForm(PosttType::class, $postt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $postt->setDatePostt(new \DateTime());

            $entityManager->persist($postt);
            $entityManager->flush();

            return $this->redirectToRoute('afficherCategoriePostFront');
        }

        return $this->render('postt/new.html.twig', [
            'postt' => $postt,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="postt_show", methods={"GET"})
     */
    public function show(Postt $postt): Response
    {
        return $this->render('postt/show.html.twig', [
            'postt' => $postt,
        ]);
    }




    /**
     * @Route("/{id}/edit", name="postt_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Postt $postt): Response
    {
        $form = $this->createForm(PosttType::class, $postt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('afficherCategoriePostFront');
        }

        return $this->render('postt/edit.html.twig', [
            'postt' => $postt,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="postt_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Postt $postt): Response
    {
        if ($this->isCsrfTokenValid('delete'.$postt->getId(), $request->request->get('_token')))
             {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($postt);
            $entityManager->flush();
        }

        return $this->redirectToRoute('afficherCategoriePostFront');
    }

    /**
     * @Route("/pdf/pdf", name="postt_show_pdf", methods={"GET"})
     */
    public function pdfAction(Snappy\Pdf $knpSnappyPdf, PosttRepository $posttRepository): Response
    {
        $products =  $posttRepository->findAll();

        $html = $this->renderView('post_front/pdf.html.twig', array(
            'postts'  => $products
        ));

        return new PdfResponse(
            $knpSnappyPdf->getOutputFromHtml($html),
            'file.pdf'
        );
    }

}
