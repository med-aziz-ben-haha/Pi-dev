<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ContactType;
//use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     * @param Request $request
     * @return Response
     */
    public function index(Request $request, \Swift_Mailer $mailer,SessionInterface $session) //: Response
    {   $user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $form =$this->createForm(ContactType::class);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $contact = $form ->getData();
            //nous enverrons le mail
            $message = (new \Swift_Message('Nouveau Contact'))
                //l'attribution de l'expediteur (celui qui remplit le formulaire)
                ->setFrom('oussama.nedri@esprit.tn')
                //l'attribution du destinataire
                ->setTo($contact['email'])


                //creation du message avec la vue twig
            ->setBody(
                $this->renderView(
                    'emails/contact.html.twig', compact('contact')
                ),
                    'text/html'
                )
            ;
            //Envoi du message
            $mailer->send($message);
            $this->addFlash('message', 'le message a été envoyé');//pour dire que le msg est envoyé

            //return $this->redirectToRoute('acceuil');


        }
        return $this->render('contact/index.html.twig', [
            'contactForm' => $form->createView(),'iduser' =>$iduser,'user'=>$userfind,
        ]);
    }
}
