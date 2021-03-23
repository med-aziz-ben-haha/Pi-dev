<?php

namespace App\Controller;

use App\Entity\Parapharmacie;
use App\Form\ParapharmacieType;
use App\Repository\ParapharmacieRepository;
use App\Repository\UserRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ParapharmacieController extends AbstractController
{
    /**
     * @Route("/parapharmacie", name="parapharmacie")
     */
    public function index(): Response
    {
        return $this->render('parapharmacie/index.html.twig', [
            'controller_name' => 'ParapharmacieController',
        ]);
    }

    /**
     * @param ParapharmacieRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/affichePara", name="affichePara")
     */
    public function affiche(ParapharmacieRepository $repository){
        //$repo=$this->getDoctrine()->getRepository(ParapharmacieRepository::class);
        $parapharmacie=$repository->findAll();
        return $this->render('parapharmacie/ListParapharmacie.html.twig',
            ['parapharmacie'=>$parapharmacie]);
    }

    /**
     * @Route ("/Supp/{id}",name="deleteParapharmacie")
     */
    function delete($id,ParapharmacieRepository $repository){
        $parapharmacie=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($parapharmacie);
        $em->flush();
        $this->addFlash('success','Parapharmacie  Supprimée avec succée');
        return $this->redirectToRoute('affichePara');
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("parapharmacie/AjoutParapharmacie", name="AjoutParapharmacie")
     */
    function add(\Symfony\Component\HttpFoundation\Request $request){

        $parapharmacie=new Parapharmacie();
        $form=$this->createForm(ParapharmacieType::class,$parapharmacie);
        $form->add('Ajouter',SubmitType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['img_Para']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $parapharmacie->setLienImageP($newFilename);
            }

            $em=$this->getDoctrine()->getManager();

            $em->persist($parapharmacie);
            $em->flush();
            $this->addFlash('success','Parapharmacie  Ajoutée avec succée');
            return $this->redirectToRoute('affichePara');
        }
        return $this->render('parapharmacie/AjoutParapharmacie.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("parapharmacie/ModifierParapharmacie/{id}", name="modifierParapharmacie")
     */
    function modifierPara($id,ParapharmacieRepository $repository, \Symfony\Component\HttpFoundation\Request $request){
        $parapharmacie=$repository->find($id);
        $form=$this->createForm(ParapharmacieType::class,$parapharmacie);
        $form->add('Modifier',SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){

            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['img_Para']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $parapharmacie->setLienImageP($newFilename);
            }

            $em=$this->getDoctrine()->getManager();
            $em->flush();
            $this->addFlash('success','Parapharmacie  Modifiée avec succée');
            return $this->redirectToRoute('affichePara');
        }
        return $this->render('parapharmacie/ModifierParapharmacie.html.twig',[
            'form'=>$form->createView()
        ]);

    }



    /**
     * @param ParapharmacieRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheFrontListPara", name="afficheFrontListPara")
     */
    public function afficheFront(ParapharmacieRepository $repository){
        //$repo=$this->getDoctrine()->getRepository(ParapharmacieRepository::class);
        $parapharmacie=$repository->findAll();
        return $this->render('parapharmacie/FrontListPara.html.twig',
            ['parapharmacie'=>$parapharmacie]);
    }

    /**
     * @param ParapharmacieRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheFrontClientPara/{iduser}", name="afficheFrontClientPara")
     */
    public function afficheFrontClient(ParapharmacieRepository $repository ,$iduser){
        //$repo=$this->getDoctrine()->getRepository(ParapharmacieRepository::class);
        $parapharmacie=$repository->findAll();
        return $this->render('parapharmacie/FrontClientPara.html.twig',
            ['parapharmacie'=>$parapharmacie , 'iduser'=>$iduser]);
    }

}
