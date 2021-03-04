<?php

namespace App\Controller;

use App\Entity\CategorieProduit;
use App\Form\CategorieProduitType;
use App\Repository\CategorieProduitRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieProduitController extends AbstractController
{
    /**
     * @Route("/categorie/produit", name="categorie_produit")
     */
    public function index(): Response
    {
        return $this->render('categorie_produit/index.html.twig', [
            'controller_name' => 'CategorieProduitController',
        ]);
    }

    /**
     * @param CategorieProduitRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheCategorieProd/{id}", name="afficheCategorieProd")
     */
    public function affiche(CategorieProduitRepository $repository,$id){

        $categorie=$repository->findBy(array('parapharmacie'=>$id));
        return $this->render('categorie_produit/ListCategorie.html.twig',
            ['categorie'=>$categorie]);
    }

    /**
     * @Route ("/SuppCategorie/{id}",name="deleteCategorie")
     */
    function delete($id,CategorieProduitRepository $repository){
        $categorie=$repository->find($id);
        $idp=$categorie->getParapharmacie()->getId();
        $em=$this->getDoctrine()->getManager();
        $em->remove($categorie);
        $em->flush();
        return $this->redirectToRoute('afficheCategorieProd',array('id'=>$idp));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/afficheCategorieProd/categorie_produit/AjoutCategorie/{id}", name="AjoutCategorie")
     */
    function add(\Symfony\Component\HttpFoundation\Request $request,$id){

        $idp=$id;
        $categorie=new CategorieProduit();
        $form=$this->createForm(CategorieProduitType::class,$categorie);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $categorie->setParapharmacie($id);
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imgCategorie']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $categorie->setLienImgCat($newFilename);
            }

            $em=$this->getDoctrine()->getManager();

            $em->persist($categorie);
            $em->flush();
            return $this->redirectToRoute('afficheCategorieProd',array('id'=>$idp));
        }
        return $this->render('parapharmacie/AjoutParapharmacie.html.twig',[
            'form'=>$form->createView()
        ]);
    }

}
