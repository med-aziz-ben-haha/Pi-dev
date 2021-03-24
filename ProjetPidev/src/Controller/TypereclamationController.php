<?php

namespace App\Controller;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Entity\TypeReclamation;
use App\Entity\Reclamation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\ReclamationType;
use App\Form\TriType;
use App\Repository\TypeReclamationRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use Ob\HighchartsBundle\Highcharts\Highchart;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class TypereclamationController extends AbstractController
{
    /**
     * @Route("/typereclamation", name="typereclamation")
     */
    public function index(): Response
    {
        return $this->render('typereclamation/index.html.twig', [
            'controller_name' => 'TypereclamationController',
        ]);
    }

    /**
     * @return Response
     * @Route("/affichertypereclamation", name="affichertypereclamation")
     */
    public function listtypereclamation(SessionInterface $session,Request $request): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $typereclamation = $this->getDoctrine()->getRepository(TypeReclamation::class)->findAll();


        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('statistique de gestion de type');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => true),
            'showInLegend' => true
        ));

        $matrice =array() ;
        for ($i =0; $i <4;$i++) {
            array_push($matrice,array($typereclamation[$i]->getTypeReclamation(),count($this->getDoctrine()->getRepository(Reclamation::class)->findBy(array('typeReclamation'=>$typereclamation[$i])))) );
        }

        $data =$matrice;

        $ob->series(array(array('type' => 'pie', 'name' =>'', 'data' => $data)));

        return $this->render('typereclamation/listtypereclamation.html.twig', ['listtypereclamation' => $typereclamation, 'chart'=> $ob]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimertypereclamation/{id}" , name="supprimertypereclamation")
     */
    public function Supprimertypereclamation(SessionInterface $session,$id)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $Typereclamationfind = $this->getDoctrine()->getRepository(TypeReclamation::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($Typereclamationfind);
        $em->flush();
        return $this->redirectToRoute('affichertypereclamation');

    }


    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/ajoutertypereclamation" , name="ajoutertypereclamation")
     */
    public function ajoutertypereclamation(SessionInterface $session,Request $request)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $TypeReclamation = new TypeReclamation();
        $form = $this->createForm(ReclamationType::class, $TypeReclamation);
        $form->add('ajouter', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($TypeReclamation);
            $em->flush();
            return $this->redirectToRoute('affichertypereclamation'); }

        return $this->render('typereclamation/ajoutertypereclamation.html.twig', ['f' => $form->createView()]);
    }





    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/modifiertypereclamation/{id}" , name="modifiertypereclamation")
     */
    public function modifiertypereclamation(SessionInterface $session,$id, Request $request)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $typereclamationfind = $this->getDoctrine()->getRepository(TypeReclamation::class)->findBy(['id' => $id])[0];
        $form = $this->createForm(ReclamationType::class, $typereclamationfind);
        $form->add('modifier', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid())
        {


            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('affichertypereclamation');
        }

        return $this->render('typereclamation/modifiertypereclamation.html.twig', ['f' => $form->createView(),]);
    }
    /**
     * @return Response
     * @Route("/afficherpdft", name="afficherpdft")
     */
    public function afficherpdft(SessionInterface $session): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        // Configure Dompdf according to your needs
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);
        $typereclamation = $this->getDoctrine()->getRepository(TypeReclamation::class)->findAll();

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('typereclamation/pdf.html.twig', ['listtypereclamation' => $typereclamation,]);

        // Load HTML to Dompdf
        $dompdf->loadHtml($html);

        // (Optional) Setup the paper size and orientation 'portrait' or 'portrait'
        $dompdf->setPaper('A4', 'portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser (force download)
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }
    /**
     * @Route("/tri", name="tri")
     */
    public function OrderByid(SessionInterface $session,TypeReclamationRepository $repository)
    {

        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $TypeReclamation=$repository->OrderByid();
        $typereclamation = $this->getDoctrine()->getRepository(TypeReclamation::class)->findAll();

        $ob = new Highchart();
        $ob->chart->renderTo('piechart');
        $ob->title->text('statistique de gestion de type');
        $ob->plotOptions->pie(array(
            'allowPointSelect' => true,
            'cursor' => 'pointer',
            'dataLabels' => array('enabled' => true),
            'showInLegend' => true
        ));

        $matrice =array() ;
        for ($i =0; $i <4;$i++) {
            array_push($matrice,array($typereclamation[$i]->getTypeReclamation(),count($this->getDoctrine()->getRepository(Reclamation::class)->findBy(array('typeReclamation'=>$typereclamation[$i])))) );
        }

        $data =$matrice;

        $ob->series(array(array('type' => 'pie', 'name' =>'', 'data' => $data)));

        return $this->render('TypeReclamation/listtypereclamation.html.twig', ['listtypereclamation' => $TypeReclamation, 'chart'=> $ob]);
    }

}
