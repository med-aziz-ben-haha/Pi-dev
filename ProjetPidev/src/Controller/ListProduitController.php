<?php

namespace App\Controller;

use App\Entity\ListProduit;
use App\Entity\Panier;
use App\Controller\PanierController;
use App\Entity\User;
use App\Form\ListProduitType;
use App\Form\ProduitType;
use App\Repository\ListProduitRepository;
use App\Repository\PanierRepository;
use App\Repository\ParapharmacieRepository;
use App\Repository\ProduitRepository;
use App\Repository\UserRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use Dompdf\Options;

class ListProduitController extends AbstractController
{
    /**
     * @Route("/list/produit", name="list_produit")
     */
    public function index(): Response
    {
        return $this->render('list_produit/index.html.twig', [
            'controller_name' => 'ListProduitController',
        ]);
    }

    /**
     * @param ListProduitRepository $repository
     * @param PanierRepository $repo
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheClienListProduit/{idpanier}/{iduser}", name="afficheClienListProduit")
     */
    public function afficheClient(SessionInterface $session,\Symfony\Component\HttpFoundation\Request $request,PanierRepository $repo,ListProduitRepository $repository,$iduser,$idpanier){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }else if($iduser !=$user->getId()){
            return $this->redirectToRoute('afficheClienListProduit', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $listProduit=$repository->findBy(array('panier'=>$idpanier));
        $panier=$repo->find($idpanier);

        return $this->render('list_produit/AfficheClientListProduit.html.twig',
            ['listProduit'=>$listProduit ,'panier'=>$panier ,'iduser'=>$iduser,'idpanier'=>$idpanier,'user'=>$userfind, ]);
    }

    /**
     * @Route ("/SuppListProd/{id}/{idpanier}/{iduser}",name="deleteListProduit")
     */
    function delete(SessionInterface $session,$id,$idpanier,$iduser,PanierController $panierController,PanierRepository $panierRepository,ListProduitRepository $repository){

        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }else if($iduser !=$user->getId()){
            return $this->redirectToRoute('deleteListProduit', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $listProduit=$repository->find($id);
        $panier=$panierRepository->find($idpanier);
        $prixtot=$panier->getPrixTot()-$listProduit->getPrixTot();
        $tvaTot=$panier->getTvaTot()-$listProduit->getTvaTot();
        $prixFinale=$panier->getPrixFinale()-$listProduit->getPrixFinale();
        $panier->setPrixTot($prixtot);
        $panier->setTvaTot($tvaTot);
        $panier->setPrixFinale($prixFinale);
        $em=$panierController->getDoctrine()->getManager();
        $em->flush();
        $em=$this->getDoctrine()->getManager();
        $em->remove($listProduit);
        $em->flush();
        return $this->redirectToRoute('afficheClienListProduit',array('idpanier'=>$idpanier ,'iduser'=>$iduser,'user'=>$userfind,));
    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("ModifierListProduit/{id}/{idpanier}/{iduser}/{idprod}", name="modifierListProduit")
     */
    function modifierPara(SessionInterface $session,$id,$iduser,$idprod,$idpanier,PanierController $panierController,ProduitController $produitController,PanierRepository $panierRepository,ProduitRepository $produitRepository,ListProduitRepository $repository, \Symfony\Component\HttpFoundation\Request $request){


        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }else if($iduser !=$user->getId()){
            return $this->redirectToRoute('modifierListProduit', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        $listProduit=$repository->find($id);
        $produit=$produitRepository->find($idprod);
        $panier=$panierRepository->find($idpanier);
        $qte=$produit->getQuantiteProduit();
        $qtt=$qte+$listProduit->getQte();
        $produit->setQuantiteProduit($qtt);
        $prixtt=$panier->getPrixTot()-$listProduit->getPrixTot();
        $tvatt=$panier->getTvaTot()-$listProduit->getTvaTot();
        $pf=$panier->getPrixFinale()-$listProduit->getPrixFinale();
        $panier->setTvaTot($tvatt);
        $panier->setPrixTot($prixtt);
        $panier->setPrixFinale($pf);


        $form=$this->createForm(ListProduitType::class,$listProduit);
        $form->add('Modifier quantite',SubmitType::class , [
            'attr'=>['class'=>'btn-outline-danger']
        ]);

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            $prixTot=$produit->getPrixProduit()*$listProduit->getQte();
            $tva=$produit->getTva()/100;
            $tvaTot=$prixTot*$tva;
            $prixListTot=$prixTot+$tvaTot;
            $listProduit->setPrixTot($prixTot);
            $listProduit->setTvaTot($tvaTot);
            $listProduit->setPrixFinale($prixListTot);
            $prixPanierTot=$panier->getPrixTot()+$listProduit->getPrixTot();
            $tvaPanierTot=$panier->getTvaTot()+$listProduit->getTvaTot();
            $prixPanierFinale=$panier->getPrixFinale()+$listProduit->getPrixFinale();
            $panier->setTvaTot($tvaPanierTot);
            $panier->setPrixTot($prixPanierTot);
            $panier->setPrixFinale($prixPanierFinale);


            $em=$this->getDoctrine()->getManager();
            $em->flush();
            $em1=$panierController->getDoctrine()->getManager();
            $em1->flush();
            $em2=$produitController->getDoctrine()->getManager();
            $em2->flush();
            return $this->redirectToRoute('afficheClienListProduit',array('idpanier'=>$idpanier,'iduser'=>$iduser,'user'=>$userfind,));
        }
        return $this->render('list_produit/ModifierListProduit.html.twig',[
            'form'=>$form->createView() , 'iduser'=>$iduser , 'qte'=>$qte ,'user'=>$userfind,
        ]);

    }

    /**
     * @param ListProduitRepository $repository
     * @param PanierRepository $repo
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheParapharmacienListProduit/{idpanier}/{idpara}", name="afficheParapharmacienListProduit")
     */
    public function afficheParapharmacien(SessionInterface $session,\Symfony\Component\HttpFoundation\Request $request,ParapharmacieRepository $parapharmacieRepository,PanierRepository $repo,ListProduitRepository $repository,$idpara,$idpanier){


        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        $listProduit=$repository->findBy(array('panier'=>$idpanier));
        $panier=$repo->find($idpanier);
        $parapharmacie=$parapharmacieRepository->find($idpara);

        return $this->render('list_produit/AfficheParapharmacienListProduit.html.twig',
            ['listProduit'=>$listProduit ,'panier'=>$panier,'idpara'=>$idpara ,'parapharmacie'=>$parapharmacie ,'idpanier'=>$idpanier, 'user'=>$userfind,'iduser'=>$iduser,]);
    }

    /**
     * @param ListProduitRepository $repository
     * @param PanierRepository $repo
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/listp/{idpanier}/{idpara}", name="listp")
     */
    public function listp(SessionInterface $session,\Symfony\Component\HttpFoundation\Request $request,ParapharmacieRepository $parapharmacieRepository,PanierRepository $repo,ListProduitRepository $repository,$idpara,$idpanier){



        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $listProduit=$repository->findBy(array('panier'=>$idpanier));
        $panier=$repo->find($idpanier);
        $parapharmacie=$parapharmacieRepository->find($idpara);


        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('list_produit/listp.html.twig',
            ['listProduit'=>$listProduit ,'user'=>$userfind,'panier'=>$panier,'idpara'=>$idpara ,'parapharmacie'=>$parapharmacie ,'idpanier'=>$idpanier,'iduser'=>$iduser,
        ]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);


    }



}
