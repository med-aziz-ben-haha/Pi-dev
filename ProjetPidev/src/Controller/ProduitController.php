<?php

namespace App\Controller;

use App\Entity\ListProduit;
use App\Entity\Panier;
use App\Entity\Produit;
use App\Entity\Parapharmacie;
use App\Form\CategorieProduitType;
use App\Form\ListProduitType;
use App\Form\ProduitType;
use App\Repository\CategorieProduitRepository;
use App\Repository\PanierRepository;
use App\Repository\ParapharmacieRepository;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use http\Env\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\NormalizableInterface;

class ProduitController extends AbstractController
{
    /**
     * @param ProduitRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheProd/{id}/{iduser}", name="afficheProd")
     */
    public function affiche(ProduitRepository $repository,$id,$iduser,CategorieProduitRepository $categorieProduitRepository){

        $idC=$id;
        $produit=$repository->findBy(array('categorie'=>$id));
        $categorie=$categorieProduitRepository->find($id);
        $idpara=$categorie->getParapharmacie()->getId();

        return $this->render('produit/ListProd.html.twig',
            ['produit'=>$produit,'idC'=>$idC,'iduser'=>$iduser,'idpara'=>$idpara]);
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
     * @Route ("/SuppProd/{id}/{iduser}",name="deleteProduit")
     */
    function delete($id,$iduser,ProduitRepository $repository){
        $produit=$repository->find($id);
        $idp=$produit->getCategorie()->getId();
        $em=$this->getDoctrine()->getManager();
        $em->remove($produit);
        $em->flush();
        $this->addFlash('success','Produit  Supprimé avec succée');
        return $this->redirectToRoute('afficheProd',array('id'=>$idp ,'iduser'=>$iduser));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("AjoutProduit/{id}/{iduser}", name="AjoutProduit")
     */
    function add(\Symfony\Component\HttpFoundation\Request $request,$id,$iduser,CategorieProduitRepository $repo){

        $categorie=$repo->find($id);
        $parapharmacie=$categorie->getParapharmacie();
        $idpara=$parapharmacie->getId();


        $idp=$id;
        $produit=new Produit();
        $form=$this->createForm(ProduitType::class,$produit);
        $produit->setParapharmacie($parapharmacie);
        $produit->setCategorie($categorie);

        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){


            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['img_Prod']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $produit->setLienImgP($newFilename);
            }
            $em=$this->getDoctrine()->getManager();

            $em->persist($produit);
            $em->flush();
            $this->addFlash('success','Produit  Ajouté avec succée');

            return $this->redirectToRoute('afficheProd',array('id'=>$idp ,'iduser'=>$iduser));
        }
        return $this->render('produit/AjoutProduit.html.twig',[
            'form'=>$form->createView(), 'idpara'=>$idpara
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("ModifierProduit/{id}/{iduser}", name="modifierProduit")
     */
    function modifierPara($id,$iduser,ProduitRepository $repository, \Symfony\Component\HttpFoundation\Request $request){
        $produit=$repository->find($id);
        $idpara=$produit->getParapharmacie()->getId();
        $idp=$produit->getCategorie()->getId();
        $form=$this->createForm(ProduitType::class,$produit);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['img_Prod']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $produit->setLienImgP($newFilename);
            }

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success','Produit  Modifié avec succée');
            return $this->redirectToRoute('afficheProd',array('id'=>$idp,'iduser'=>$iduser));
        }
        return $this->render('produit/ModifierProduit.html.twig',[
            'form'=>$form->createView(),'idpara'=>$idpara
        ]);

    }

    /**
     * @param CategorieProduitRepository $repository
     *  @param ParapharmacieRepository $repo
     *   @param ProduitRepository $repoprod
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheClienCategorieProduit/{idpara}/{idcat}/{iduser}", name="afficheClienCategorieProduit")
     */
    public function afficheClient(PaginatorInterface $paginator,\Symfony\Component\HttpFoundation\Request $request,CategorieProduitRepository $repository,ParapharmacieRepository $repo,ProduitRepository $repoprod,$idpara,$idcat,$iduser){

        $idA=$idpara;
        $idC=$idcat;
        $categorie=$repository->findBy(array('parapharmacie'=>$idpara));
        $produit=$paginator->paginate($repoprod->findBycategorie($idcat),$request->query->getInt('page',1),1)  ;
        $parapharmacie=$repo->find($idpara);
        if($request->isMethod("POST")){
            $nomProduit=$request->get('nomProduit');
            $produit=$paginator->paginate($repoprod->findByNomProduitCat($idcat,$nomProduit),$request->query->getInt('page',1),1);
        }

        return $this->render('produit/AfficheClientCategorieProduit.html.twig',
            ['categorie'=>$categorie , 'idA'=>$idA ,'idC'=>$idC ,'produit'=>$produit ,'parapharmacie'=>$parapharmacie , 'iduser'=>$iduser]);
    }

    /**
     * @param ProduitRepository $repoprod
     * @param CategorieProduitRepository $repository
     *  @param ParapharmacieRepository $repo
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheProduit/{idpara}/{idp}/{iduser}", name="afficheProduit")
     */
    public function afficheProduit( \Symfony\Component\HttpFoundation\Request $request,PanierController $panierController,ProduitRepository $repoprod, CategorieProduitRepository $repository,UserRepository $userRepository,PanierRepository $panierRepository,ParapharmacieRepository $repo,$idpara,$idp,$iduser){
        $parapharmacie=$repo->find($idpara);
        $categorie=$repository->findBy(array('parapharmacie'=>$idpara));
        $user=$userRepository->find($iduser);
        $produit=$repoprod->find($idp);
        $listProduit=new ListProduit();
        $listProduit->setParapharmacie($parapharmacie);
        $listProduit->setUser($user);
        $verifPanier=$panierRepository->findOneBy(array('user'=>$user , 'parapharmacie'=>$parapharmacie));
        $form=$this->createForm(ListProduitType::class,$listProduit);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            if(is_null($verifPanier)){

                $panier=new Panier();
                $panier->setParapharmacie($parapharmacie);
                $panier->setUser($user);
                $panier->setPrixTot(0);
                $panier->setTvaTot(0);
                $panier->setPrixFinale(0);
                $em=$panierController->getDoctrine()->getManager();
                $em->persist($panier);
                $quantiteP=$produit->getQuantiteProduit()-$listProduit->getQte();
                $produit->setQuantiteProduit($quantiteP);
                $emp=$this->getDoctrine()->getManager();
                $emp->flush();
                $prixTot=$produit->getPrixProduit()*$listProduit->getQte();
                $tva=$produit->getTva()/100;
                $tvaTot=$prixTot*$tva;
                $prixListTot=$prixTot+$tvaTot;
                $listProduit->setPanier($panier);
                $listProduit->addProduit($produit);
                $listProduit->setPrixTot($prixTot);
                $listProduit->setTvaTot($tvaTot);
                $listProduit->setPrixFinale($prixListTot);
                $prixPanierTot=$panier->getPrixTot()+$listProduit->getPrixTot();
                $tvaPanierTot=$panier->getTvaTot()+$listProduit->getTvaTot();
                $prixPanierFinale=$panier->getPrixFinale()+$listProduit->getPrixFinale();
                $panier->setTvaTot($tvaPanierTot);
                $panier->setPrixTot($prixPanierTot);
                $panier->setPrixFinale($prixPanierFinale);
                $em1=$this->getDoctrine()->getManager();
                $em1->persist($listProduit);
                $em1->flush();
                $em->flush();




                return $this->redirectToRoute('afficheProduit',array('idp'=>$idp ,'idpara'=>$idpara ,'iduser'=>$iduser));

            }
            else{
                $prixTot=$produit->getPrixProduit()*$listProduit->getQte();
                $tva=$produit->getTva()/100;
                $tvaTot=$prixTot*$tva;
                $prixListTot=$prixTot+$tvaTot;
                $listProduit->setPanier($verifPanier);
                $listProduit->addProduit($produit);
                $listProduit->setPrixTot($prixTot);
                $listProduit->setTvaTot($tvaTot);
                $listProduit->setPrixFinale($prixListTot);
                $quantiteP=$produit->getQuantiteProduit()-$listProduit->getQte();
                $produit->setQuantiteProduit($quantiteP);
                $emp=$this->getDoctrine()->getManager();
                $emp->flush();
                $prixPanierTot=$verifPanier->getPrixTot()+$listProduit->getPrixTot();
                $tvaPanierTot=$verifPanier->getTvaTot()+$listProduit->getTvaTot();
                $prixPanierFinale=$verifPanier->getPrixFinale()+$listProduit->getPrixFinale();

                $verifPanier->setTvaTot($tvaPanierTot);
                $verifPanier->setPrixTot($prixPanierTot);
                $verifPanier->setPrixFinale($prixPanierFinale);
                $em1=$this->getDoctrine()->getManager();
                $em1->persist($listProduit);
                $em1->flush();
                $em=$panierController->getDoctrine()->getManager();
                $em->flush();

                return $this->redirectToRoute('afficheProduit',array('idp'=>$idp ,'idpara'=>$idpara ,'iduser'=>$iduser));
            }


        }

        return $this->render('produit/AfficheProduit.html.twig',
            [ 'form'=>$form->createView() ,'categorie'=>$categorie,'idpara'=>$idpara , 'idp'=>$idp ,'produit'=>$produit ,'parapharmacie'=>$parapharmacie , 'iduser'=>$iduser]);


    }

    /**
     * @param ProduitRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheBackProduit", name="afficheBackProduit")
     */
    public function afficheBackProduit(ProduitRepository $repository,PaginatorInterface $paginator,\Symfony\Component\HttpFoundation\Request $request){
        //$repo=$this->getDoctrine()->getRepository(ParapharmacieRepository::class);
        $produit=$repository->findAll();
        $produit=$paginator->paginate($repository->findAllProduit(),$request->query->getInt('page',1),1)  ;
        return $this->render('produit/BackListProduit.html.twig',
            ['produit'=>$produit]);
    }






}
