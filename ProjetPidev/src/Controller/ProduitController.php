<?php

namespace App\Controller;

use App\Entity\Produit;
use App\Entity\Parapharmacie;
use App\Repository\ProduitRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProduitController extends AbstractController
{
    /**
     * @param ProduitRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheProd/{id}", name="afficheProd")
     */
    public function affiche(ProduitRepository $repository,$id){

        $produit=$repository->findBy(array('parapharmacie'=>$id));
        return $this->render('produit/ListProd.html.twig',
            ['produit'=>$produit]);
    }

    /**
     * @Route("/produit", name="produit")
     */
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }


    /**
     * @Route ("/SuppProd/{id}",name="deleteProduit")
     */
    function delete($id,ProduitRepository $repository){
        $produit=$repository->find($id);
        $idp=$produit->getParapharmacie()->getId();
        $em=$this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();
        return $this->redirectToRoute('afficheProd',array('id'=>$idp));
    }

}
