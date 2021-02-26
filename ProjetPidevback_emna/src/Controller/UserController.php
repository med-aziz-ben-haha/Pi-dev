<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/user", name="user")
     */
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
    /**
     * @return Response
     * @Route("/Patients", name="Patients")
     */
    public function ListPatients(): Response
    {
        return $this->render('user/ListPatients.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @return Response
     * @Route("/Medecins", name="Medecins")
     */
    public function ListMedcins(): Response
    {
        return $this->render('user/ListMedecins.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @return Response
     * @Route("/Pharmaciens", name="Pharmaciens")
     */
    public function ListPharmciens(): Response
    {
        return $this->render('user/ListPatients.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
