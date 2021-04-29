<?php

namespace App\Controller;

use App\Entity\CentreMedical;
use App\Entity\Service;
use App\Entity\User;
use App\Form\ServiceType;
use App\Repository\ServiceRepository;
use Knp\Bundle\SnappyBundle\Snappy\Response\PdfResponse;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Snappy;
use Symfony\Component\HttpFoundation\Session\SessionInterface;


/**
 * @Route("/service")
 */
class ServiceController extends AbstractController
{
    /**
     * @Route("/", name="service_index", methods={"GET"})
     */
    public function index(SessionInterface $session,ServiceRepository $serviceRepository): Response
    { $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        return $this->render('service/index.html.twig', [
            'services' => $serviceRepository->findAll(),'user'=>$userfind, 'iduser'=>$iduser,
        ]);
    }
    /**
     * @Route("/showByCenter/{center}", name="service_showByCenter", methods={"GET"})
     */
    public function showByCenter(SessionInterface $session,ServiceRepository $serviceRepository, CentreMedical $center): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        dump($center->getNomCentreMedical());
        return $this->render('service/index.html.twig', [
            'services' => $serviceRepository->findServicesByCentre($center->getNomCentreMedical()),
            'user'=>$userfind,
            'iduser'=>$iduser,
        ]);
    }
    /**
     * @Route("/front/showByCenter/{center}", name="service_showByCenter_front", methods={"GET"})
     */
    public function showByCenterFront(SessionInterface $session,ServiceRepository $serviceRepository, CentreMedical $center): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        dump($center->getNomCentreMedical());
        return $this->render('service/index_front.html.twig', [
            'services' => $serviceRepository->findServicesByCentre($center->getNomCentreMedical()),
            'user'=>$userfind,
            'iduser'=>$iduser,
        ]);
    }

    /**
     * @Route("/search/{order}/{by}", name="product_search", methods={"GET"})
     */
    public function search(SessionInterface $session,ServiceRepository $serviceRepository, $order = "ASC", $by = "id"): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $services = $serviceRepository->findServicesByOrder($order,$by);
        //dd($products);
        $resp = "";
        foreach ($services as $service) {
            $resp .= '<tr>
                <td>'. $service->getId().'</td>
                <td>'. $service->getNomCentreMedical().'</td>
                <td>'. $service->getNomPatient().'</td>
                <td>'. $service->getService().'</td>
                <td>'. $service->getMatricule().'</td>
                <td>
                    <a href="/service/show/'. $service->getId().'">show</a>
                    <a href="/service/'. $service->getId().'/edit">edit</a>
                </td>
            </tr>';
        }


        return new Response($resp);
    }

    /**
     * @Route("/new", name="service_new", methods={"GET","POST"})
     */
    public function new(SessionInterface $session,Request $request): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $service = new Service();
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $service->setNomCentreMedical($service->getCentreMedical()->getNomCentreMedical());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($service);
            $entityManager->flush();

            return $this->redirectToRoute('service_index',['user'=>$userfind, 'iduser'=>$iduser,]);
        }

        return $this->render('service/new.html.twig', [
            'service' => $service,
            'form' => $form->createView(),
            'user'=>$userfind,
            'iduser'=>$iduser,
        ]);
    }

    /**
     * @Route("/{id}", name="service_show", methods={"GET"})
     */
    public function show(SessionInterface $session,Service $service): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        return $this->render('service/show.html.twig', [
            'service' => $service,
            'user'=>$userfind,
            'iduser'=>$iduser,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="service_edit", methods={"GET","POST"})
     */
    public function edit(SessionInterface $session,Request $request, Service $service): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $form = $this->createForm(ServiceType::class, $service);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $service->setNomCentreMedical($service->getCentreMedical()->getNomCentreMedical());
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('service_index',['user'=>$userfind, 'iduser'=>$iduser,]);
        }

        return $this->render('service/edit.html.twig', [
            'service' => $service,
            'form' => $form->createView(),
            'user'=>$userfind,
            'iduser'=>$iduser,
        ]);
    }

    /**
     * @Route("/{id}", name="service_delete", methods={"POST"})
     */
    public function delete(SessionInterface $session,Request $request, Service $service): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        if ($this->isCsrfTokenValid('delete'.$service->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($service);
            $entityManager->flush();
        }

        return $this->redirectToRoute('service_index',['user'=>$userfind, 'iduser'=>$iduser,]);
    }


    /**
     * @Route("/pdf/pdf", name="service_show_pdf", methods={"GET"})
     */
    public function pdfAction(SessionInterface $session,Snappy\Pdf $knpSnappyPdf, ServiceRepository $serviceRepository): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $products =  $serviceRepository->findAll();

        $html = $this->renderView('service/pdf.html.twig', array(
            'services'  => $products,
            'user'=>$userfind,
            'iduser'=>$iduser,
        ));

        return new PdfResponse(
            $knpSnappyPdf->getOutputFromHtml($html),
            'file.pdf'
        );
    }
}
