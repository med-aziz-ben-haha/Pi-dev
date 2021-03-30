<?php

namespace App\Controller;

use App\Entity\Ordonnance;
use App\Form\OrdonnanceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class OrdonnanceController extends AbstractController
{
    /**
     * @Route("/ordonnance", name="ordonnance")
     */
    public function index(): Response
    {
        return $this->render('ordonnance/index.html.twig', [
            'controller_name' => 'OrdonnanceController',
        ]);
    }

    /**
     * @Route("/listordonnance", name="listordonnance")
     */
    public function listordonnance()
    {
        $Ordonnance = $this->getDoctrine()->getRepository(Ordonnance::class)->findAll();
        return $this->render('ordonnance/listordonnance.html.twig',array('listordonnance'=>$Ordonnance));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route ("/Ordonnanceajout",name="Ordonnanceajout")
     */
    public function Ordonnanceajout(Request $request)
    {
        $Ordonnance = new Ordonnance();
        $form = $this->createForm(OrdonnanceType::class, $Ordonnance);
        $form->add('ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($Ordonnance);
            $em->flush();
            return $this->redirectToRoute("listordonnance");

        }
        return $this->render('ordonnance/Ordonnanceajout.html.twig',
            ['Ordonnanceajout'=> $form->createView()]);
    }

    /**
     * @Route("/Ordonnanceremove/{id}", name="Ordonnanceremove")
     */
    public function remove($id)
    {
        $Ordonnance=$this->getDoctrine()->getRepository( Ordonnance::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Ordonnance);
        $em->flush();
        return $this->redirectToRoute("listordonnance");
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/Ordonnancemodifier/{id}",name="Ordonnancemodifier")
     */
    public function modifier ($id, Request $request)
    {
        $Ordonnancefind = $this->getDoctrine()
            ->getRepository(Ordonnance::class)
            ->findBy(['id' => $id])[0];
        $form = $this->createForm(OrdonnanceType::class,$Ordonnancefind);
        $form->add('Modifier', SubmitType::class, ['label' => 'Modifier']);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("listordonnance");
        }

        return $this->render('ordonnance/Ordonnancemodifier.html.twig', [
            'editordonnance' => $form->createView()]);
    }
}
