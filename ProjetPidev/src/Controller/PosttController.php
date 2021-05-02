<?php

namespace App\Controller;

use App\Entity\Postt;
use App\Entity\User;
use App\Form\PosttType;
use App\Repository\PosttRepository;
use App\Repository\ServiceRepository;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Snappy;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


/**
 * @Route("/postt")
 */
class PosttController extends AbstractController
{
    /**
     * @Route("/", name="postt_index", methods={"GET"})
     */
    public function index(PosttRepository $posttRepository,SessionInterface $session): Response
    {   $user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        return $this->render('postt/index.html.twig', [
            'postts' => $posttRepository->findAll(), 'iduser' =>$iduser,'user'=>$userfind,
        ]);
    }

    /**
     * @Route("/new", name="postt_new", methods={"GET","POST"})
     */
    public function new(Request $request,SessionInterface $session): Response
    {   $user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $postt = new Postt();
        $form = $this->createForm(PosttType::class, $postt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();

            $postt->setDatePostt(new \DateTime());

            $entityManager->persist($postt);
            $entityManager->flush();

            return $this->redirectToRoute('afficherCategoriePostFront',['iduser' =>$iduser,'user'=>$userfind,]);
        }

        return $this->render('postt/new.html.twig', [
            'postt' => $postt,
            'form' => $form->createView(),'iduser' =>$iduser,'user'=>$userfind,
        ]);
    }

    /**
     * @Route("/{id}", name="postt_show", methods={"GET"})
     */
    public function show(Postt $postt,SessionInterface $session): Response
    {$user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        return $this->render('postt/show.html.twig', [
            'postt' => $postt,'iduser' =>$iduser,'user'=>$userfind,
        ]);
    }




    /**
     * @Route("/{id}/edit", name="postt_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Postt $postt,SessionInterface $session): Response
    {   $user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $form = $this->createForm(PosttType::class, $postt);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('afficherCategoriePostFront',['iduser' =>$iduser,'user'=>$userfind,]);
        }

        return $this->render('postt/edit.html.twig', [
            'postt' => $postt,
            'form' => $form->createView(),'iduser' =>$iduser,'user'=>$userfind,
        ]);
    }

    /**
     * @Route("/{id}", name="postt_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Postt $postt,SessionInterface $session): Response
    {$user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        if ($this->isCsrfTokenValid('delete'.$postt->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($postt);
            $entityManager->flush();
        }

        return $this->redirectToRoute('afficherCategoriePostFront',['iduser' =>$iduser,'user'=>$userfind,]);
    }

    /**
     * @Route("/pdf/pdf", name="postt_show_pdf", methods={"GET"})
     */
    public function pdfAction(Snappy\Pdf $knpSnappyPdf, PosttRepository $posttRepository,SessionInterface $session): Response
    {    $user=$session->get('user');
        if(is_null($user)) {
        return $this->redirectToRoute('connexion');
    }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $products =  $posttRepository->findAll();

        $html = $this->renderView('post_front/pdf.html.twig', array(
            'postts'  => $products, 'iduser' =>$iduser,'user'=>$userfind,
        ));

        return new PdfResponse(
            $knpSnappyPdf->getOutputFromHtml($html),
            'file.pdf'
        );
    }


    /**
     * @Route ("/SuppPosttBack/{id}",name="SuppPosttBack")
     */
    public function SuppPosttBack($id,SessionInterface $session)
    {          $user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);


        $postt = $this->getDoctrine()->getRepository(Postt::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($postt);
        $em->flush();
        return $this->redirectToRoute("afficherPosttBack",['iduser' =>$iduser,'user'=>$userfind,]);
    }
}
