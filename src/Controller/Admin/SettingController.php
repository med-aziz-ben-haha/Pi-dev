<?php

namespace App\Controller\Admin;

use App\Entity\Setting;
use App\Repository\SettingRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use App\Form\SettingType;
use Doctrine\ORM\EntityManagerInterface;

class SettingController extends AbstractController
{
    /**
     * @Route("/admin/setting", name="admin_setting_index")
     *
     * @param SettingRepository $repository
     * @param EntityManagerInterface $em
     * @param Request $request
     *
     * @return Response
     */
    public function index(SettingRepository $repository, EntityManagerInterface $em, Request $request)
    {
        /** @var Setting $setting */
        $setting = $repository->findOne();



    }

}
