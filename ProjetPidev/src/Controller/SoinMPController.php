<?php

namespace App\Controller;

use App\Form\SoinMPType;
use App\Entity\SoinMP;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

class SoinMPController extends AbstractController
{
    /**
     * @Route("/soin/m/p", name="soin_m_p")
     */
    public function index(): Response
    {
        return $this->render('soin_mp/index.html.twig', [
            'controller_name' => 'SoinMPController',
        ]);
    }
    /**
     * @return Response
     * @Route("/afficherSoinMP", name="afficherSoinMP")
     */
    public function listSoinMP(): Response
    {
        $SoinMP = $this->getDoctrine()->getRepository(SoinMP::class)->findAll();
        return $this->render('soin_mp/listSoinsMP.html.twig', ['listSoinsMP' => $SoinMP,]);
    }

    /**
     * @return Response
     * @Route("/afficherSoinMPs/{id}", name="afficherSoinMPs")
     */
    public function listSoinMPs($id): Response
    {
        $SoinMPfind = $this->getDoctrine()->getRepository(SoinMP::class)->findBy(array('CategorieSoinMP'=>$id));
        return $this->render('soin_mp/listSoinsMPs.html.twig', ['listSoinsMPs' => $SoinMPfind,]);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/ajouterSoinMP" , name="ajouterSoinMP")
     */
    public function ajouterSoinMP(Request $request)
    {
        $SoinMP = new SoinMP();
        $form = $this->createForm(SoinMPType::class, $SoinMP);
        $form->add('ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

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
                $SoinMP->setLienImageSMP($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($SoinMP);
            $em->flush();
            return $this->redirectToRoute('afficherSoinMP');

        }
        return $this->render('soin_mp/ajouterSoinMP.html.twig', ['formAjouterSoinMP' => $form->createView()]);
    }
    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerSoinMP/{id}" , name="supprimerSoinMP")
     */
    public function SupprimerSoinMP($id)
    {
        $SoinMPfind = $this->getDoctrine()->getRepository(SoinMP::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($SoinMPfind);
        $em->flush();
        return $this->redirectToRoute('afficherSoinMP');

    }
    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/modifierSoinMP/{id}" , name="modifierSoinMP")
     */
    public function modifierSoinMP($id, Request $request)
    {
        $SoinMPfind = $this->getDoctrine()->getRepository(SoinMP::class)->findBy(['id' => $id])[0];
        $form = $this->createForm(SoinMPType::class, $SoinMPfind);
        $form->add('modifier', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
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
                $SoinMPfind->setLienImageSMP($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficherSoinMP');
        }
        return $this->render('soin_mp/modifierSoinMP.html.twig', ['formModifierSoinMP' => $form->createView()]);

    }
    /**
     * @Route("/admin/upload/test", name="upload_test")
     */
    public function temporaryUploadAction(Request $request)
    {
        /** @var UploadedFile $uploadedFile */
        $uploadedFile = $request->files->get('image');
        $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
        $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
        $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
        dd($uploadedFile->move(
            $destination,
            $newFilename
        ));
    }
}
