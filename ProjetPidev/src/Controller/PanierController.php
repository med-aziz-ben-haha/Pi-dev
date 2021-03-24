<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\PanierRepository;
use App\Repository\ParapharmacieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class PanierController extends AbstractController
{
    /**
     * @Route("/panier", name="panier")
     */
    public function index(): Response
    {
        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
        ]);
    }

    /**
     * @param PanierRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheClienPanier/{iduser}", name="afficheClienPanier")
     */
    public function afficheClient(SessionInterface $session,\Symfony\Component\HttpFoundation\Request $request,PanierRepository $repository,$iduser){

        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $panier=$repository->findBy(array('user'=>$iduser));

        return $this->render('panier/AfficheClientPanier.html.twig',
            ['panier'=>$panier , 'iduser'=>$iduser,'user'=>$userfind,]);
    }

    /**
     * @param PanierRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheParapharmacienCommande/{idpara}", name="afficheParapharmacienCommande")
     */
    public function afficheParapharmacienCommande(SessionInterface $session,\Symfony\Component\HttpFoundation\Request $request,ParapharmacieRepository $parapharmacieRepository,PanierRepository $repository,$idpara){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $panier=$repository->findBy(array('parapharmacie'=>$idpara));
        $parapharmacie=$parapharmacieRepository->find($idpara);

        return $this->render('panier/AfficheParapharmacienCommande.html.twig',
            ['panier'=>$panier ,'parapharmacie'=>$parapharmacie ,'idpara'=>$idpara,'user'=>$userfind, ]);
    }
}
