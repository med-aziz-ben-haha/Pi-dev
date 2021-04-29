<?php

namespace App\Controller;

use App\Entity\Regions;
use App\Entity\User;
use App\Repository\RegionsRepository;
use http\Env\Request;
use App\Form\RegionsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
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
    public function affiche(SessionInterface $session,RegionsRepository $repository){
        //$repo=$this->getDoctrine()->getRepository(ParapharmacieRepository::class);
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $region=$repository->findAll();
        return $this->render('regions/ListRegions.html.twig',
            ['region'=>$region,'user'=>$userfind,]);
    }

    /**
     * @Route ("/SuppRegion/{id}",name="deleteRegion")
     */
    function delete(SessionInterface $session,$id,RegionsRepository $repository){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $region=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($region);
        $em->flush();
        $this->addFlash('success','Region  Supprimée avec succée');

        return $this->redirectToRoute('afficheRegions',[ 'user'=>$userfind,]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("regions/AjoutRegion", name="AjoutRegion")
     */
    function add(SessionInterface $session,\Symfony\Component\HttpFoundation\Request $request){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $region=new Regions();
        $form=$this->createForm(RegionsType::class,$region);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){



            $em=$this->getDoctrine()->getManager();

            $em->persist($region);
            $em->flush();
            $this->addFlash('success','Region  Ajoutée avec succée');

            return $this->redirectToRoute('afficheRegions',['user'=>$userfind,]);
        }
        return $this->render('regions/AjoutRegion.html.twig',[
            'form'=>$form->createView(),'user'=>$userfind,
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("regions/ModifierRegion/{id}", name="modifierRegion")
     */
    function modifierPara(SessionInterface $session,$id,RegionsRepository $repository, \Symfony\Component\HttpFoundation\Request $request){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $region=$repository->find($id);
        $form=$this->createForm(RegionsType::class,$region);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){



            $em=$this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success','Region  Modifiée avec succée');

            return $this->redirectToRoute('afficheRegions',['user'=>$userfind,]);
        }
        return $this->render('regions/ModifierRegion.html.twig',[
            'form'=>$form->createView(),'user'=>$userfind,
        ]);

    }
}
