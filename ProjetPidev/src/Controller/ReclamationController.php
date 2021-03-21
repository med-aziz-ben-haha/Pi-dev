<?php

namespace App\Controller;
use App\Entity\Reclamation;
use App\Entity\User;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ReclamationsType;
use App\Form\ReclamationType;
// Include Dompdf required namespaces
use Dompdf\Dompdf;
use Dompdf\Options;


class ReclamationController extends AbstractController
{
    /**
     * @Route("/reclamation", name="reclamation")
     */
    public function index(): Response
    {
        return $this->render('reclamation/index.html.twig', [
            'controller_name' => 'ReclamationController',
        ]);
    }


    /**
         * @return Response
         * @Route("/afficherreclamation", name="afficherreclamation")
         */
        public function listreclamation(): Response
        {
            $reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();
            return $this->render('reclamation/listreclamation.html.twig', ['listreclamation' => $reclamation,]);
        }
          /**
                 * @return Response
                 * @Route("/afficherpdf", name="afficherpdf")
                 */
                public function afficherpdf(): Response
                {
                   // Configure Dompdf according to your needs
                           $pdfOptions = new Options();
                           $pdfOptions->set('defaultFont', 'Arial');

                           // Instantiate Dompdf with our options
                           $dompdf = new Dompdf($pdfOptions);
                        $reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();


                           // Retrieve the HTML generated in our twig file
                           $html = $this->renderView('reclamation/list.html.twig', ['listreclamation' => $reclamation,]);

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
     * @return Response
     * @Route("/afficherreclamations", name="afficherreclamations")
     */
    public function listreclamations(): Response
    {
        $reclamationfind = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        return $this->render('reclamation/listreclamations.html.twig', ['listreclamations' => $reclamationfind,]);
    }
    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerreclamation/{id}" , name="supprimerreclamation")
     */
    public function Supprimerreclamation($id)
    {
        $reclamationfind = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($reclamationfind);
        $em->flush();
        return $this->redirectToRoute('afficherreclamation');

    }
 /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerreclamations/{id}" , name="supprimerreclamations")
     */
    public function Supprimerreclamations($id)
    {
        $reclamationfind = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($reclamationfind);
        $em->flush();
        return $this->redirectToRoute('afficherreclamations');

    }
/**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/modifierreclamations/{id}" , name="modifierreclamations")
     */
    public function modifierreclamation($id, Request $request)
    {
        $reclamationfind = $this->getDoctrine()->getRepository(reclamation::class)->findBy(['id' => $id])[0];
        $form = $this->createForm(ReclamationType::class, $reclamationfind);
        $form->add('modifier', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){


            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficherreclamations');}

        return $this->render('reclamation/modifierreclamations.html.twig', ['f' => $form->createView()]);

    }
 /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/ajouterreclamation" , name="ajouterreclamation")
     */
    public function ajouterreclamation(Request $request)
    {
        $reclamation = new reclamation();
        $form = $this->createForm(ReclamationsType::class, $reclamation);
        $form->add('ajouter', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('reclamationencours'); }

        return $this->render('reclamation/ajouterreclamation.html.twig', ['f' => $form->createView()]);
    }
/**
     * @return Response
     * @Route("/reclamationencours", name="reclamationencours")
     */
    public function reclamationencours(): Response
    {
        $reclamationfind = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        return $this->render('reclamation/reclamationencours.html.twig', ['reclamationencours' => $reclamationfind,]);
    }


/**
     * @Route("/testt", name="testtt")
     */
    public function backend(): Response
    {
        return $this->render('reclamation/mail.html.twig', [

        ]);
    }







     /**
         * @Route("/mail", name="user_mailing", methods={"POST"})
         */

        public function mailing(Request $request,\Swift_Mailer $mailer): Response
        {
            $value = $request->request->get('mail');


            $message = (new \Swift_Message('Hello Email'))
                ->setFrom('eya.ouellani@esprit.tn')
                ->setTo($value)
                ->setBody(
                    $this->renderView(
                    // templates/emails/registration.html.twig
                        'reclamation/message.html.twig', [
                        ]
                    )

                );


return $this->render('reclamation/mail.html.twig');



        }








}
