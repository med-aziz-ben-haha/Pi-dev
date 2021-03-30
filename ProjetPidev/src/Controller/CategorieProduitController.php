<?php

namespace App\Controller;

use App\Entity\CategorieProduit;
use App\Entity\User;
use App\Form\CategorieProduitType;
use App\Repository\CategorieProduitRepository;
use App\Repository\ParapharmacieRepository;
use App\Repository\ProduitRepository;
use http\Env\Request;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
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
     * @Route ("/afficheCategorieProd/{id}/{iduser}", name="afficheCategorieProd")
     */
    public function affiche(SessionInterface $session,CategorieProduitRepository $repository,$id,$iduser){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }else if($iduser !=$user->getId()){
            return $this->redirectToRoute('afficheCategorieProd', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $idA=$id;
        $categorie=$repository->findBy(array('parapharmacie'=>$id));
        return $this->render('categorie_produit/ListCategorie.html.twig',
            ['categorie'=>$categorie , 'idpara'=>$idA , 'iduser' =>$iduser,'user'=>$userfind,]);
    }

    /**
     * @Route ("/SuppCategorie/{id}/{iduser}",name="deleteCategorie")
     */
    function delete(SessionInterface $session,$id,$iduser,CategorieProduitRepository $repository){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }else if($iduser !=$user->getId()){
            return $this->redirectToRoute('deleteCategorie', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $categorie=$repository->find($id);
        $idp=$categorie->getParapharmacie()->getId();
        $em=$this->getDoctrine()->getManager();
        $em->remove($categorie);
        $em->flush();
        $this->addFlash('success','Categorie  Supprimée avec succée');

        return $this->redirectToRoute('afficheCategorieProd',array('id'=>$idp , 'iduser' =>$iduser,'user'=>$userfind,));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("AjoutCategorie/{id}/{iduser}", name="AjoutCategorie")
     */
    function add(SessionInterface $session,\Symfony\Component\HttpFoundation\Request $request,$id,$iduser,ParapharmacieRepository $repository){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }else if($iduser !=$user->getId()){
            return $this->redirectToRoute('AjoutCategorie', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $parapharmacie=$repository->find($id);
        $idp=$id;
        $categorie=new CategorieProduit();
        $form=$this->createForm(CategorieProduitType::class,$categorie);
        $categorie->setParapharmacie($parapharmacie);

        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){


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
            $this->addFlash('success','Categorie  Ajoutée avec succée');

            return $this->redirectToRoute('afficheCategorieProd',array('id'=>$idp , 'iduser'=>$iduser,'user'=>$userfind,));
        }
        return $this->render('categorie_produit/AjoutCategorie.html.twig',[
            'form'=>$form->createView() , 'idpara'=>$idp,'user'=>$userfind,'iduser'=> $iduser,
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("categorie/ModifierCategorie/{id}/{iduser}", name="modifierCategorie")
     */
    function modifierPara(SessionInterface $session,$id,$iduser,CategorieProduitRepository $repository, \Symfony\Component\HttpFoundation\Request $request){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }else if($iduser !=$user->getId()){
            return $this->redirectToRoute('modifierCategorie', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $categorie=$repository->find($id);
        $idp=$categorie->getParapharmacie()->getId();
        $form=$this->createForm(CategorieProduitType::class,$categorie);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

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
            $em->flush();
            $this->addFlash('success','Categorie  Modifiée avec succée');

            return $this->redirectToRoute('afficheCategorieProd',array('id'=>$idp, 'iduser'=> $iduser,'user'=>$userfind,));
        }
        return $this->render('categorie_produit/ModifierCategorie.html.twig',[
            'form'=>$form->createView() , 'idpara'=>$idp,'user'=>$userfind, 'iduser'=> $iduser,
        ]);

    }

    /**
     * @param CategorieProduitRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/choixCategorie/{id}/{iduser}", name="choixCategorie")
     */
    public function choixCategorie(SessionInterface $session,CategorieProduitRepository $repository,$id,$iduser){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }else if($iduser !=$user->getId()){
            return $this->redirectToRoute('choixCategorie', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $idA=$id;
        $categorie=$repository->findBy(array('parapharmacie'=>$id));
        return $this->render('categorie_produit/AfficheCategorie.html.twig',
            ['categorie'=>$categorie , 'idpara'=>$idA , 'iduser'=>$iduser,'user'=>$userfind,]);
    }

    /**
     * @param CategorieProduitRepository $repository
     *  @param ParapharmacieRepository $repo
     *   @param ProduitRepository $repoprod
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheClienCategorieProd/{idpara}/{iduser}", name="afficheClienCategorieProd")
     */
    public function afficheClient(SessionInterface $session,PaginatorInterface $paginator,\Symfony\Component\HttpFoundation\Request $request,CategorieProduitRepository $repository,ParapharmacieRepository $repo,ProduitRepository $repoprod,$idpara,$iduser){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }else if($iduser !=$user->getId()){
            return $this->redirectToRoute('afficheClienCategorieProd', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $idA=$idpara;
        $categorie=$repository->findBy(array('parapharmacie'=>$idpara));
        $produit=$paginator->paginate($repoprod->findByparapharmacie($idpara),$request->query->getInt('page',1),1)  ;
        //$produit=$repoprod->findBy(array('parapharmacie'=>$id));
        $parapharmacie=$repo->find($idpara);
        if($request->isMethod("POST")){
            $nomProduit=$request->get('nomProduit');
            $produit=$paginator->paginate($repoprod->findByNomProduitPara($idpara,$nomProduit),$request->query->getInt('page',1),1);
        }

        return $this->render('categorie_produit/AfficheClientCategorie.html.twig',
            ['categorie'=>$categorie , 'idA'=>$idA ,'produit'=>$produit ,'parapharmacie'=>$parapharmacie , 'iduser'=>$iduser,'user'=>$userfind,]);
    }




}
