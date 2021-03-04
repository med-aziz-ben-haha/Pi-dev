<?php

namespace App\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\TypeReclamation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ReclamationType;

class TypereclamationController extends AbstractController
{
    /**
     * @Route("/typereclamation", name="typereclamation")
     */
    public function index(): Response
    {
        return $this->render('typereclamation/index.html.twig', [
            'controller_name' => 'TypereclamationController',
        ]);
    }

    /**
     * @return Response
     * @Route("/affichertypereclamation", name="affichertypereclamation")
     */
    public function listtypereclamation(): Response
    {
        $typereclamation = $this->getDoctrine()->getRepository(typereclamation::class)->findAll();
        return $this->render('typereclamation/listtypereclamation.html.twig', ['listtypereclamation' => $typereclamation,]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimertypereclamation/{id}" , name="supprimertypereclamation")
     */
    public function Supprimertypereclamation($id)
    {
        $Typereclamationfind = $this->getDoctrine()->getRepository(typeReclamation::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($Typereclamationfind);
        $em->flush();
        return $this->redirectToRoute('affichertypereclamation');

    }
















    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/ajoutertypereclamation" , name="ajoutertypereclamation")
     */
    public function ajoutertypereclamation(Request $request)
    {
        $TypeReclamation = new TypeReclamation();
        $form = $this->createForm(ReclamationType::class, $TypeReclamation);
        $form->add('ajouter', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($TypeReclamation);
            $em->flush();
            return $this->redirectToRoute('affichertypereclamation'); }

        return $this->render('typereclamation/ajoutertypereclamation.html.twig', ['f' => $form->createView()]);
    }





    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/modifiertypereclamation/{id}" , name="modifiertypereclamation")
     */
    public function modifiertypereclamation($id, Request $request)
    {
        $typereclamationfind = $this->getDoctrine()->getRepository(typereclamation::class)->findBy(['id' => $id])[0];
        $form = $this->createForm(ReclamationType::class, $typereclamationfind);
        $form->add('modifier', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){


            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('affichertypereclamation');}

        return $this->render('typereclamation/modifiertypereclamation.html.twig', ['f' => $form->createView()]);

    }

}
