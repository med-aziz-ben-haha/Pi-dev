<?php

namespace App\Controller;

use App\Entity\CategorieSoinMP;
use App\Entity\User;
use App\Form\CategorieSoinMPType;
use App\Form\CategorieSoinMPRechercheType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\HttpFoundation\JsonResponse;

class CategorieSoinMPController extends AbstractController
{
    /**
     * @Route("/categoriesoinmp", name="categorie_soin_m_p")
     */
    public function index(): Response
    {
        return $this->render('categorie_soin_mp/index.html.twig', [
            'controller_name' => 'CategorieSoinMPController',
        ]);
    }

    /**
     * @return Response
     * @Route("/afficherCategorieSoinMP", name="afficherCategorieSoinMP")
     */
    public function listCategoriesSoinMP(SessionInterface $session,Request $request): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $categoriesSoinMP = $this->getDoctrine()->getRepository(CategorieSoinMP::class)->findAll();
        $form=$this->createForm(CategorieSoinMPRechercheType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {   $data=$form->getData();
            $titre=$data['recherche'];
            $categorieSoinMPfind=$this->getDoctrine()->getRepository(CategorieSoinMP::class)->search($titre);
            return $this->render('categorie_soin_mp/listCategoriesSoinMP.html.twig', ['listCategorieSoinMP' => $categorieSoinMPfind,'formSearch'=>$form->createView(),'user'=>$userfind,]);

        }
        return $this->render('categorie_soin_mp/listCategoriesSoinMP.html.twig', ['listCategorieSoinMP' => $categoriesSoinMP,'formSearch'=>$form->createView(),'user'=>$userfind,]);

    }

    /**
     * @param Request $request
     * @param $iduser
     * @return Response
     * @Route("/afficherCategorieSoinMPs/{iduser}", name="afficherCategorieSoinMPs")
     */
    public function listCategoriesSoinMPs(SessionInterface $session, Request $request, $iduser, PaginatorInterface $paginator): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }else if($iduser !=$user->getId()){
            return $this->redirectToRoute('afficherCategorieSoinMPs', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $donnees = $this->getDoctrine()->getRepository(CategorieSoinMP::class)->findAll();

        $categoriesSoinMP = $paginator->paginate(
                $donnees,
                $request->query->getInt('page', 1),
                3);

        $form=$this->createForm(CategorieSoinMPRechercheType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {   $data=$form->getData();
            $titre=$data['recherche'];
            $donnee=$this->getDoctrine()->getRepository(CategorieSoinMP::class)->search($titre);
            $categorieSoinMPfind = $paginator->paginate(
                $donnee,
                $request->query->getInt('page', 1),
                3
            );
            return $this->render('categorie_soin_mp/listCategoriesSoinMPs.html.twig', ['listCategorieSoinMPs' => $categorieSoinMPfind,'formSearch'=>$form->createView(), 'iduser'=>$iduser,'user'=>$userfind,]);
        }
        return $this->render('categorie_soin_mp/listCategoriesSoinMPs.html.twig', ['listCategorieSoinMPs' => $categoriesSoinMP,'formSearch'=>$form->createView(), 'iduser'=>$iduser,'user'=>$userfind,]);
    }

    /**
     * @param Request $request
     * @param $iduser
     * @return Response
     * @Route("Api/CatSoin/Afficher", name="afficherCategorieSoinMPsJson")
     */
    public function listCategoriesSoinMPsJson(Request $request): Response
    {

        $donnees = $this->getDoctrine()->getRepository(CategorieSoinMP::class)->findAll();
        $jsonContent= Array();
        foreach ($donnees as $key=>$Cat){
            $jsonContent[$key]['id']= $Cat->getId();
            $jsonContent[$key]['libelleCategorieSoinMP']= $Cat->getLibelleCategorieSoinMP();
            $jsonContent[$key]['lienIconeCSMP']=$Cat->getLienIconeCSMP();
        }
        return new JsonResponse($jsonContent);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/ajouterCategorieSoinMP" , name="ajouterCategorieSoinMP")
     */
    public function ajouterCategorieSoinMP(SessionInterface $session, Request $request)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $CategorieSoinMP= new CategorieSoinMP();
        $form= $this->createForm(CategorieSoinMPType::class,$CategorieSoinMP);
        $form->add('ajouter',SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()){
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $CategorieSoinMP->setLienIconeCSMP($newFilename);
            }
            $em=$this->getDoctrine()->getManager();
            $em->persist($CategorieSoinMP);
            $em-> flush();
            return $this->redirectToRoute('afficherCategorieSoinMP',['user'=>$userfind,]);

        }
        return $this->render('categorie_soin_mp/ajouterCategorieSoinMP.html.twig', ['formAjouterCategorieSoinMP' => $form->createView(),'user'=>$userfind,]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerCategorieSoinMP/{id}" , name="supprimerCategorieSoinMP")
     */
    public function SupprimerCategorieSoinMP(SessionInterface $session, $id)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $CategorieSoinMPfind = $this->getDoctrine()->getRepository(CategorieSoinMP::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($CategorieSoinMPfind);
        $em->flush();
        return $this->redirectToRoute('afficherCategorieSoinMP',['user'=>$userfind,]);

    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/modifierCategorieSoinMP/{id}" , name="modifierCategorieSoinMP")
     */
    public function modifierCategorieSoinMP(SessionInterface $session, $id, Request $request)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $CategorieSoinMPfind = $this->getDoctrine()->getRepository(CategorieSoinMP::class)->findBy(['id' => $id])[0];
        $form = $this->createForm(CategorieSoinMPType::class, $CategorieSoinMPfind);
        $form->add('modifier', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $CategorieSoinMPfind->setLienIconeCSMP($newFilename);
            }

            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficherCategorieSoinMP' ,['user'=>$userfind,]);

        }
        return $this->render('categorie_soin_mp/modifierCategorieSoinMP.html.twig', ['formModifierCategorieSoinMP' => $form->createView(),'user'=>$userfind,]);

    }
}
