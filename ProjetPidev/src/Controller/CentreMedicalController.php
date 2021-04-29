<?php

namespace App\Controller;

use App\Entity\CentreMedical;
use App\Entity\User;
use App\Form\CentreMedicalType;
use App\Repository\CentreMedicalRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * @Route("/centreMedical")
 */
class CentreMedicalController extends AbstractController
{
    /**
     * @Route("/", name="centre_medical_index", methods={"GET"})
     */
    public function index(SessionInterface $session,CentreMedicalRepository $centreMedicalRepository): Response
    {   $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        return $this->render('centre_medical/index.html.twig', [
            'centre_medicals' => $centreMedicalRepository->findAll(),'user'=>$userfind, 'iduser'=>$iduser,
        ]);
    }
    /**
     * @Route("/front/", name="centre_medical_index_front", methods={"GET"})
     */
    public function index_front(CentreMedicalRepository $centreMedicalRepository,SessionInterface $session ): Response
    { $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
                $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        return $this->render('centre_medical/index_front.html.twig', [
            'centre_medicals' => $centreMedicalRepository->findAll(),'user'=>$userfind,'iduser'=>$iduser,
        ]);
    }

    /**
     * @Route("/search/{data}", name="centre_medical_search", methods={"GET"})
     */
    public function search(CentreMedicalRepository $centreMedicalRepository,$data,SessionInterface $session): Response
    {$user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $em = $this->getDoctrine()->getManager();
        $query  = $centreMedicalRepository->createQueryBuilder('c')
            ->orWhere('c.nom_centre_medical LIKE :data')
            ->orWhere('c.adresse LIKE :data')
            ->orWhere('c.type LIKE :data')
            ->orWhere('c.mail LIKE :data')
            ->orWhere('c.nom_centre_medical LIKE :data')
            ->setParameter('data', '%'.$data.'%')
            ->getQuery()
            ->execute();


        $resp = "";
        foreach ($query as $centre_medical) {
            $resp .= '<tr>
                <td>'. $centre_medical->getId().'</td>
                <td>'. $centre_medical->getNomCentreMedical().'</td>
                <td>'. $centre_medical->getAdresse().'</td>
                <td>'. $centre_medical->getType().'</td>
                <td>'. $centre_medical->getMail().'</td>
                <td>'. $centre_medical->getNumTel().'</td>
                <td>
                    <a href="/centreMedical/show/'. $centre_medical->getId().'">show</a>
                    <a href="/centreMedical/'. $centre_medical->getId().'/edit">edit</a>
                    <a href="/service/showByCenter/'. $centre_medical->getId().'">services</a>
                </td>
            </tr>';
        }



        return new Response($resp);
    }

    /**
     * @Route("/new", name="centre_medical_new", methods={"GET","POST"})
     */
    public function new(Request $request,SessionInterface $session): Response
    {  $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        $centreMedical = new CentreMedical();
        $form = $this->createForm(CentreMedicalType::class, $centreMedical);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($centreMedical);
            $entityManager->flush();

            return $this->redirectToRoute('centre_medical_index',['iduser'=>$iduser,'user'=>$userfind,]);
        }

        return $this->render('centre_medical/new.html.twig', [
            'centre_medical' => $centreMedical,
            'form' => $form->createView(),
            'iduser'=>$iduser,
            'user'=>$userfind,
        ]);
    }

    /**
     * @Route("/{id}", name="centre_medical_show", methods={"GET"})
     */
    public function show(CentreMedical $centreMedical,SessionInterface $session): Response
    {$user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
                $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        return $this->render('centre_medical/show.html.twig', [
            'centre_medical' => $centreMedical,'iduser'=>$iduser,'user'=>$userfind,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="centre_medical_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, CentreMedical $centreMedical,SessionInterface $session): Response
    {$user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $form = $this->createForm(CentreMedicalType::class, $centreMedical);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('centre_medical_index',['iduser'=>$iduser,'user'=>$userfind,]);
        }

        return $this->render('centre_medical/edit.html.twig', [
            'centre_medical' => $centreMedical,
            'form' => $form->createView(),
            'iduser'=>$iduser,
            'user'=>$userfind,
        ]);
    }

    /**
     * @Route("/{id}", name="centre_medical_delete", methods={"POST"})
     */
    public function delete(\Swift_Mailer $mailer, Request $request, CentreMedical $centreMedical,SessionInterface $session): Response
    {$user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('sahtitnpidev@gmail.com')
            ->setTo($centreMedical->getMail())
            ->setBody("Votre centre a été supprimé");

        $mailer->send($message);
        
        
        if ($this->isCsrfTokenValid('delete'.$centreMedical->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($centreMedical);
            $entityManager->flush();
        }

        return $this->redirectToRoute('centre_medical_index');
    }
}
