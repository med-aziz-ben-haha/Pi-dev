<?php

namespace App\Controller;

use App\Entity\CategorieSoinMP;
use App\Form\CategorieSoinMPType;
use App\Form\CategorieSoinMPRechercheType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;

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
        $categoriesSoinMP = $this->getDoctrine()->getRepository(CategorieSoinMP::class)->findAll();
        $form=$this->createForm(CategorieSoinMPRechercheType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {   $data=$form->getData();
            $titre=$data['recherche'];
            $categorieSoinMPfind=$this->getDoctrine()->getRepository(CategorieSoinMP::class)->search($titre);
            return $this->render('categorie_soin_mp/listCategoriesSoinMP.html.twig', ['listCategorieSoinMP' => $categorieSoinMPfind,'formSearch'=>$form->createView(),]);
        }
        return $this->render('categorie_soin_mp/listCategoriesSoinMP.html.twig', ['listCategorieSoinMP' => $categoriesSoinMP,'formSearch'=>$form->createView(),]);
    }

    /**
     * @param Request $request
     * @param $iduser
     * @return Response
     * @Route("/afficherCategorieSoinMPs/{iduser}", name="afficherCategorieSoinMPs")
     */
    public function listCategoriesSoinMPs(SessionInterface $session, Request $request, $iduser): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $categoriesSoinMP = $this->getDoctrine()->getRepository(CategorieSoinMP::class)->findAll();
        $form=$this->createForm(CategorieSoinMPRechercheType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted())
        {   $data=$form->getData();
            $titre=$data['recherche'];
            $categorieSoinMPfind=$this->getDoctrine()->getRepository(CategorieSoinMP::class)->search($titre);
            return $this->render('categorie_soin_mp/listCategoriesSoinMPs.html.twig', ['listCategorieSoinMPs' => $categorieSoinMPfind,'formSearch'=>$form->createView(), 'iduser'=>$iduser,]);
        }
        return $this->render('categorie_soin_mp/listCategoriesSoinMPs.html.twig', ['listCategorieSoinMPs' => $categoriesSoinMP,'formSearch'=>$form->createView(), 'iduser'=>$iduser,]);
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
            return $this->redirectToRoute('afficherCategorieSoinMP');

        }
        return $this->render('categorie_soin_mp/ajouterCategorieSoinMP.html.twig', ['formAjouterCategorieSoinMP' => $form->createView()]);
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
        $CategorieSoinMPfind = $this->getDoctrine()->getRepository(CategorieSoinMP::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($CategorieSoinMPfind);
        $em->flush();
        return $this->redirectToRoute('afficherCategorieSoinMP');

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
            return $this->redirectToRoute('afficherCategorieSoinMP');

        }
        return $this->render('categorie_soin_mp/modifierCategorieSoinMP.html.twig', ['formModifierCategorieSoinMP' => $form->createView()]);

    }
}
