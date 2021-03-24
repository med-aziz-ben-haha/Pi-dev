<?php

namespace App\Controller;

use App\Entity\Parapharmacie;
use App\Entity\User;
use App\Form\ParapharmacieType;
use App\Repository\ParapharmacieRepository;
use App\Repository\UserRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

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
    public function affiche(SessionInterface $session,ParapharmacieRepository $repository){
        //$repo=$this->getDoctrine()->getRepository(ParapharmacieRepository::class);
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $parapharmacie=$repository->findAll();
        return $this->render('parapharmacie/ListParapharmacie.html.twig',
            ['parapharmacie'=>$parapharmacie,'user'=>$userfind,]);
    }

    /**
     * @Route ("/Supp/{id}",name="deleteParapharmacie")
     */
    function delete(SessionInterface $session,$id,ParapharmacieRepository $repository){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $parapharmacie=$repository->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($parapharmacie);
        $em->flush();
        $this->addFlash('success','Parapharmacie  Supprimée avec succée');
        return $this->redirectToRoute('affichePara',['user'=>$userfind,]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("parapharmacie/AjoutParapharmacie", name="AjoutParapharmacie")
     */
    function add(SessionInterface $session,\Symfony\Component\HttpFoundation\Request $request){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
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
            return $this->redirectToRoute('affichePara',['user'=>$userfind,]);
        }
        return $this->render('parapharmacie/AjoutParapharmacie.html.twig',[
            'form'=>$form->createView(),'user'=>$userfind,
        ]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("parapharmacie/ModifierParapharmacie/{id}", name="modifierParapharmacie")
     */
    function modifierPara( SessionInterface $session,$id,ParapharmacieRepository $repository, \Symfony\Component\HttpFoundation\Request $request){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
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
            return $this->redirectToRoute('affichePara',['user'=>$userfind,]);
        }
        return $this->render('parapharmacie/ModifierParapharmacie.html.twig',[
            'form'=>$form->createView(),'user'=>$userfind,
        ]);

    }



    /**
     * @param ParapharmacieRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheFrontListPara", name="afficheFrontListPara")
     */
    public function afficheFront(SessionInterface $session,ParapharmacieRepository $repository){
        //$repo=$this->getDoctrine()->getRepository(ParapharmacieRepository::class);
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $parapharmacie=$repository->findAll();
        return $this->render('parapharmacie/FrontListPara.html.twig',
            ['parapharmacie'=>$parapharmacie,'user'=>$userfind,]);
    }

    /**
     * @param ParapharmacieRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficheFrontClientPara/{iduser}", name="afficheFrontClientPara")
     */
    public function afficheFrontClient(SessionInterface $session,ParapharmacieRepository $repository ,$iduser){
        //$repo=$this->getDoctrine()->getRepository(ParapharmacieRepository::class);
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $parapharmacie=$repository->findAll();
        return $this->render('parapharmacie/FrontClientPara.html.twig',
            ['parapharmacie'=>$parapharmacie , 'iduser'=>$iduser,'user'=>$userfind,]);
    }

}
