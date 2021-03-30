<?php

namespace App\Controller;

use App\Entity\Calendar;
use App\Entity\User;
use App\Form\CalendarType;
use App\Repository\CalendarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

/**
 * @Route("/calendar")
 */
class CalendarController extends AbstractController
{
    /**
     * @Route("/calendar", name="calendar_index", methods={"GET"})
     */
    public function index(CalendarRepository $calendarRepository,SessionInterface $session): Response
    {$user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        return $this->render('calendar/index.html.twig', [
            'calendars' => $calendarRepository->findAll(),  'iduser' =>$iduser,'user'=>$userfind,
        ]);
    }

    /**
     * @Route("/new", name="calendar_new", methods={"GET","POST"})
     */
    public function new(Request $request,SessionInterface $session): Response
    {$user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        $calendar = new Calendar();
        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($calendar);
            $entityManager->flush();

            return $this->redirectToRoute('main',['iduser' =>$iduser,'user'=>$userfind,]);
        }

        return $this->render('calendar/new.html.twig', [
            'calendar' => $calendar,
            'form' => $form->createView(),'iduser' =>$iduser,'user'=>$userfind,
        ]);
    }

    /**
     * @Route("/{id}", name="calendar_show", methods={"GET"})
     */
    public function show(Calendar $calendar,SessionInterface $session): Response
    {   $user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        return $this->render('calendar/show.html.twig', [
            'calendar' => $calendar,'iduser' =>$iduser,'user'=>$userfind,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="calendar_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Calendar $calendar,SessionInterface $session): Response
    {   $user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $form = $this->createForm(CalendarType::class, $calendar);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('calendar_index',['iduser' =>$iduser,'user'=>$userfind,]);
        }

        return $this->render('calendar/edit.html.twig', [
            'calendar' => $calendar,
            'form' => $form->createView(),'iduser' =>$iduser,'user'=>$userfind,
        ]);
    }

    /**
     * @Route("/{id}", name="calendar_delete", methods={"DELETE"})
     */
    public function delete(SessionInterface $session,Request $request, Calendar $calendar): Response
    {   $user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        if ($this->isCsrfTokenValid('delete'.$calendar->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($calendar);
            $entityManager->flush();
        }

        return $this->redirectToRoute('calendar_index',['iduser' =>$iduser,'user'=>$userfind,]);
    }
}
