<?php

namespace App\Controller;
use App\Entity\Reclamation;
use App\Entity\User;
use App\Form\AjoutreclamationType;
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
use Symfony\Component\HttpFoundation\Session\SessionInterface;


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
        public function listreclamation(SessionInterface $session): Response
        {
            $user=$session->get('user');
            if(is_null($user))
            {
                return $this->redirectToRoute('connexion');
            }
            $iduser=$user->getId();
            $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

            $reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();
            return $this->render('reclamation/listreclamation.html.twig', ['listreclamation' => $reclamation, 'iduser'=>$iduser, 'user'=>$userfind,]);
        }

          /**
                 * @return Response
                 * @Route("/afficherpdf", name="afficherpdf")
                 */
                public function afficherpdf(SessionInterface $session): Response
                {
                    $user=$session->get('user');
                    if(is_null($user))
                    {
                        return $this->redirectToRoute('connexion');
                    }
                    $iduser=$user->getId();
                    $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
                   // Configure Dompdf according to your needs
                           $pdfOptions = new Options();
                           $pdfOptions->set('defaultFont', 'Arial');

                           // Instantiate Dompdf with our options
                           $dompdf = new Dompdf($pdfOptions);
                        $reclamation = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();


                           // Retrieve the HTML generated in our twig file
                           $html = $this->renderView('reclamation/list.html.twig', ['listreclamation' => $reclamation,'iduser'=>$iduser,'user'=>$userfind,]);

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
    public function listreclamations(SessionInterface $session): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $reclamationfind = $this->getDoctrine()->getRepository(Reclamation::class)->findby(array('user'=>$iduser));
        return $this->render('reclamation/listreclamations.html.twig', ['listreclamations' => $reclamationfind, 'iduser'=>$iduser,'user'=>$userfind,]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerreclamation/{id}" , name="supprimerreclamation")
     */
    public function Supprimerreclamation(SessionInterface $session,$id)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $reclamationfind = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($reclamationfind);
        $em->flush();
        return $this->redirectToRoute('afficherreclamation',['iduser'=>$iduser,'user'=>$userfind,]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerreclamations/{id}" , name="supprimerreclamations")
     */
    public function Supprimerreclamations(SessionInterface $session,$id)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $reclamationfind = $this->getDoctrine()->getRepository(Reclamation::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($reclamationfind);
        $em->flush();
        return $this->redirectToRoute('afficherreclamations',['iduser'=>$iduser,'user'=>$userfind,]);

    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/modifierreclamations/{id}" , name="modifierreclamations")
     */
    public function modifierreclamation(SessionInterface $session,$id, Request $request)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $reclamationfind = $this->getDoctrine()->getRepository(reclamation::class)->findBy(['id' => $id])[0];
        $form = $this->createForm(ReclamationType::class, $reclamationfind);
        $form->add('modifier', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){


            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficherreclamations',[ 'iduser'=>$iduser,'user'=>$userfind,]);}

        return $this->render('reclamation/modifierreclamations.html.twig', ['f' => $form->createView(), 'iduser'=>$iduser,'user'=>$userfind,]);

    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/ajouterreclamation" , name="ajouterreclamation")
     */
    public function ajouterreclamation(SessionInterface $session,Request $request)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();

        $reponse="Reclamation en cours";
        $reclamation = new reclamation();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);

        $form = $this->createForm(ReclamationsType::class, $reclamation);
        $form->add('ajouter', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()&& $form->isValid()){
            $reclamation->setReponse($reponse);
            $reclamation->setUser($userfind);
            $em = $this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();
            return $this->redirectToRoute('afficherreclamations',[ 'iduser'=>$iduser,'user'=>$userfind,]); }

        return $this->render('reclamation/ajouterreclamation.html.twig', ['f' => $form->createView(), 'iduser'=>$iduser,'user'=>$userfind,]);
    }

    /**
     * @param SessionInterface $session
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/repondre/{id}", name="repondre")
     */
    public function repondrereclamation(SessionInterface $session,Request $request,$id)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        return $this->render('reclamation/repondre.html.twig', [ 'iduser'=>$iduser,'id'=>$id,'user'=>$userfind,]);
    }

    /**
     * @param SessionInterface $session
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/envreponse/{id}", name="envreponse", methods="GET")
     */
    public function envoyerreponse(SessionInterface $session,Request $request,$id)
    {   $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $reclamation= $this->getDoctrine()->getRepository(Reclamation::class)->findOneBy(array('id'=>$id));

        $reponse=$request->get('reponse');
         $reclamation->setReponse($reponse);
            $em = $this->getDoctrine()->getManager();
            $em->persist($reclamation);
            $em->flush();

        $iduser=$user->getId();

        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        return $this->redirectToRoute('afficherreclamation',[ 'iduser'=>$iduser,'id'=>$id,'user'=>$userfind,]);
    }



    // /**
     //* @return Response
     //* @Route("/reclamationencours", name="reclamationencours")
     //*/
   /* public function reclamationencours(SessionInterface $session): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $reclamationfind = $this->getDoctrine()->getRepository(Reclamation::class)->findAll();
        return $this->render('reclamation/reclamationencours.html.twig', ['reclamationencours' => $reclamationfind, 'iduser'=>$iduser,]);
    }*/





     // @Route("/testt", name="testtt")

    /*public function backend(SessionInterface $session): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        return $this->render('reclamation/mail.html.twig', [ 'iduser'=>$iduser,]);
    }*/








         // @R("/mail", name="user_mailing", methods={"POST"})


/*        public function mailing(SessionInterface $session,Request $request,\Swift_Mailer $mailer): Response
        {
            $user=$session->get('user');
            if(is_null($user))
            {
                return $this->redirectToRoute('connexion');
            }
            $iduser=$user->getId();
            $value = $request->request->get('mail');


            $message = (new \Swift_Message('Hello Email'))
                ->setFrom('eya.ouellani@esprit.tn')
                ->setTo($value)
                ->setBody(
                    $this->renderView(
                    // templates/emails/registration.html.twig
                        'reclamation/message.html.twig', [ 'iduser'=>$iduser,]));


return $this->render('reclamation/mail.html.twig', [ 'iduser'=>$iduser,]);}
*/
}
