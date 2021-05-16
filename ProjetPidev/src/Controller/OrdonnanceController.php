<?php

namespace App\Controller;

use App\Entity\Ordonnance;
use App\Entity\Medicament;
use App\Entity\User;
use App\Form\OrdonnanceType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Knp\Component\Pager\PaginatorInterface;
use App\Repository\OrdonnanceRepository;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse;

class OrdonnanceController extends AbstractController
{

    /**
     * @Route("/listordonnanceJSON", name="listordonnanceJSON")
     */

    public function listordonnanceJSON(Request $request, OrdonnanceRepository $repository, NormalizerInterface $normalizer)
    {
        $ordonnance = $this->getDoctrine()->getRepository(Ordonnance ::class)->findAll();
        $jsonContent = $normalizer->normalize($ordonnance, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route ("/OrdonnanceajoutJSON/new", name="OrdonnanceajoutJSON")
     */
    public function OrdonnanceajoutJSON(Request $request,NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $ordonnance = new Ordonnance();
        $ordonnance->setContenuOrd($request->get('contenu_ord'));
        $date = new \DateTime("now");
        $ordonnance->setDateOrd($date);

        $medicament =$this->getDoctrine()->getRepository(Medicament::class)->find($request->get('id'));
        $ordonnance->addMedicament($medicament);

        $em->persist($ordonnance);
        $em->flush();
        $jsonContent = $Normalizer->normalize($ordonnance, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/OrdonnanceremoveJSON/{id}", name="/OrdonnanceremoveJSON")
     */
    public function removeJSON($id,Request $request, NormalizerInterface $normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $ordonnance=$em->getRepository(Ordonnance::class)->find($id);
        $em->remove($ordonnance);
        $em->flush();
        $jsonContent=$normalizer->normalize($ordonnance,'json',['groups' => 'post:read']);
        return new Response("Ordonnance Deleted".json_encode($jsonContent));

    }

    /**
     * @Route("/OrdonnancemodifierJSON/{id}", name="OrdonnancemodifierJSON")
     */
    public function modifierJSON(Request $request, NormalizerInterface $normalizer,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $ordonnance=$em->getRepository(Ordonnance::class)->find($id);
        $ordonnance->setContenuOrd($request->get('contenu_ord'));
        $date = new \DateTime("now");
        $ordonnance->setDateOrd($date);
        $em->flush();
        $jsonContent=$normalizer->normalize($ordonnance,'json',['groups' => 'post:read']);
        return new Response("Information updated".json_encode($jsonContent));
    }

    /**
     * @Route ("/rechercheOrdonnanceJSON/{data}",name="rechercheOrdonnanceJSON")
     */
    public function rechercheOrdonnanceJSON($data,OrdonnanceRepository $repository,NormalizerInterface $normalizer)
    {
        $ordonnance = $repository->SearchName($data);
        $jsonContent = $normalizer->normalize($ordonnance, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @param OrdonnanceRepository $repository
     * @return Response
     * @Route ("/triordonnanceJSON",name="triordonnanceJSON")
     */
    public function triordonnanceJSON (OrdonnanceRepository $repository,NormalizerInterface $normalizer)
    {
        $ordonnance = $repository->OrderByDateQB();
        $jsonContent = $normalizer->normalize($ordonnance, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/ordonnance", name="ordonnance")
     */
    public function index(SessionInterface $session): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        return $this->render('ordonnance/index.html.twig', [
            'controller_name' => 'OrdonnanceController','iduser'=>$iduser,'user'=>$userfind,
        ]);
    }

    /**
     * @Route("/listordonnance", name="listordonnance")
     */
    public function listordonnance(SessionInterface $session,PaginatorInterface $paginator,Request $request)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        $Ordonnance = $this->getDoctrine()->getRepository(Ordonnance::class)->findBy(array('Medecin'=>$userfind));
        $Ordonnance  = $paginator->paginate($Ordonnance,
            $request->query->getInt('page', 1),
            // Items per page
            2);
        return $this->render('ordonnance/listordonnance.html.twig',array('listordonnance'=>$Ordonnance, 'iduser'=>$iduser,'user'=>$userfind,));
    }

    /**
     * @Route("/listordonnanceuser", name="listordonnanceuser")
     */
    public function listordonnanceuser(SessionInterface $session,PaginatorInterface $paginator,Request $request)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }

        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        $Ordonnance = $this->getDoctrine()->getRepository(Ordonnance::class)->findBy(array('User'=>$userfind));

        $Ordonnance  = $paginator->paginate($Ordonnance,
            $request->query->getInt('page', 1),
            // Items per page
            2);
        return $this->render('ordonnance/listordonnanceuser.html.twig',array('listordonnance'=>$Ordonnance, 'iduser'=>$iduser,'user'=>$userfind,));
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route ("/Ordonnanceajout",name="Ordonnanceajout")
     */
    public function Ordonnanceajout(SessionInterface $session,Request $request)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();

        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        $Ordonnance = new Ordonnance();
        $form = $this->createForm(OrdonnanceType::class, $Ordonnance);
        $form->add('ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ) {
            $Ordonnance->setMedecin($userfind);
            $em = $this->getDoctrine()->getManager();
            $em->persist($Ordonnance);
            $em->flush();
            return $this->redirectToRoute("listordonnance", ['iduser'=>$iduser,'user'=>$userfind,]);

        }
        return $this->render('ordonnance/Ordonnanceajout.html.twig',
            ['Ordonnanceajout'=> $form->createView(), 'iduser'=>$iduser,'user'=>$userfind,]);
    }

    /**
     * @Route("/Ordonnanceremove/{id}", name="Ordonnanceremove")
     */
    public function remove(SessionInterface $session,$id)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();

        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        $Ordonnance=$this->getDoctrine()->getRepository( Ordonnance::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($Ordonnance);
        $em->flush();
        return $this->redirectToRoute("listordonnance",['iduser'=>$iduser,'user'=>$userfind,]);
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/Ordonnancemodifier/{id}",name="Ordonnancemodifier")
     */
    public function modifier (SessionInterface $session,$id, Request $request)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();

        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        $Ordonnancefind = $this->getDoctrine()
            ->getRepository(Ordonnance::class)
            ->findBy(['id' => $id])[0];
        $form = $this->createForm(OrdonnanceType::class,$Ordonnancefind);
        $form->add('Modifier', SubmitType::class, ['label' => 'Modifier']);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("listordonnance",[ 'iduser'=>$iduser,'user'=>$userfind,]);
        }

        return $this->render('ordonnance/Ordonnancemodifier.html.twig', [
            'editordonnance' => $form->createView(), 'iduser'=>$iduser,'user'=>$userfind,]);
    }

    /**
     * @param OrdonnanceRepository $repository
     * @return Response
     * @Route ("/triordonnance",name="triordonnance")
     */
    public function orderbynameqb (OrdonnanceRepository $repository, Request $request, PaginatorInterface $paginator,SessionInterface $session)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();

        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $Ordonnance=$this->getDoctrine()->getRepository(Ordonnance::class)->findBy(array('Medecin'=>$userfind),array('date_ord'=>'DESC'));
        $Ordonnance = $paginator->paginate($Ordonnance,
            $request->query->getInt('page', 1),
            // Items per page
            2
        );
        return $this->render('ordonnance/listordonnance.html.twig',array('listordonnance'=>$Ordonnance, 'iduser'=>$iduser,'user'=>$userfind,));
    }
}
