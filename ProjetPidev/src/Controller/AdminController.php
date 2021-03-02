<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

    /**
     * @Route("/connexionAdmin/{iduser}", name="connexionAdmin")
     */
    public function accueilAdmin($iduser){
        return $this->render('admin/index.html.twig', [
            'iduser' => $iduser,
        ]);

    }
}
