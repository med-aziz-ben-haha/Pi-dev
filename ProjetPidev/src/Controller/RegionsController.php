<?php

namespace App\Controller;

use App\Entity\Regions;
use App\Repository\RegionsRepository;
use http\Env\Request;
use App\Form\RegionsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RegionsController extends AbstractController
{
    /**
     * @Route("/regions", name="regions")
     */
    public function index(): Response
    {
        return $this->render('regions/index.html.twig', [
            'controller_name' => 'RegionsController',
        ]);
    }

    /**
     * @param RegionsRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheRegions", name="afficheRegions")
     */
    public function affiche(RegionsRepository $repository){
        //$repo=$this->getDoctrine()->getRepository(ParapharmacieRepository::class);
        $region=$repository->findAll();
        return $this->render('regions/ListRegions.html.twig',
            ['region'=>$region]);
    }

    /**
     * @Route ("/SuppRegion/{id}",name="deleteRegion")
     */
    function delete($id,RegionsRepository $repository){
        $region=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($region);
        $em->flush();
        return $this->redirectToRoute('afficheRegions');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("regions/AjoutRegion", name="AjoutRegion")
     */
    function add(\Symfony\Component\HttpFoundation\Request $request){

        $region=new Regions();
        $form=$this->createForm(RegionsType::class,$region);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){



            $em=$this->getDoctrine()->getManager();

            $em->persist($region);
            $em->flush();
            return $this->redirectToRoute('afficheRegions');
        }
        return $this->render('regions/AjoutRegion.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("regions/ModifierRegion/{id}", name="modifierRegion")
     */
    function modifierPara($id,RegionsRepository $repository, \Symfony\Component\HttpFoundation\Request $request){
        $region=$repository->find($id);
        $form=$this->createForm(RegionsType::class,$region);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){



            $em=$this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficheRegions');
        }
        return $this->render('regions/ModifierRegion.html.twig',[
            'form'=>$form->createView()
        ]);

    }
}
