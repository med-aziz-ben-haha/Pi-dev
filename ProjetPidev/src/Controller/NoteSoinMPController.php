<?php

namespace App\Controller;

use App\Entity\NoteSoinMP;
use App\Entity\SoinMP;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;


class NoteSoinMPController extends AbstractController
{
    /**
     * @Route("/note/soin/m/p", name="note_soin_m_p")
     */
    public function index(): Response
    {
        return $this->render('note_soin_mp/index.html.twig', [
            'controller_name' => 'NoteSoinMPController',
        ]);
    }
    /**
     * @param Request $request
     * @return mixed
     * @Route("/ajouternoteSMP/{id}/{iduser}/{valeur}",name="ajouternoteSMP", methods="GET")
     */
    public function ajouterNote(SessionInterface $session, Request $request,$iduser,$id,$valeur,MailerInterface $mailer)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $avis=$request->get('avis');
        $SoinMPsfind = $this->getDoctrine()->getRepository(SoinMP::class)->find($id);
        $user=$this->getDoctrine()->getRepository(User::class)->find($iduser);
        $x = $this->getDoctrine()->getRepository(NoteSoinMP::class)->findOneBy(array('soinMP'=>$SoinMPsfind,'user'=>$iduser));

        if (empty($x))
        {$Note = new NoteSoinMP();

            $Note->setValeur($valeur);
            $Note->setUser($user);
            $Note->setSoinMP($SoinMPsfind);
            $Note->setAvis($avis);
            $em = $this->getDoctrine()->getManager();
            $em->persist($Note);
            $em->flush();
	        $email = (new Email())
                ->from('sahtitnpidev@gmail.com')
                ->to("{$user->getMail()}")
                ->subject('SahtiTN!')
                ->text("Bienvenu {$user->getPrenom()} {$user->getNom()} à SahtinTN. Votre compte a été crée avec succée ! ❤️")
                ->html("<h1>Bienvenu {$user->getPrenom()} {$user->getNom()} à SahtinTN. Votre compte a été crée avec succée ! ❤ </h1>");
            $mailer->send($email);
        }
        else
        {
            if (!($valeur==0)) {
                $x->setValeur($valeur);
                $em = $this->getDoctrine()->getManager();
                $em->flush();
		    $email = (new Email())
                	->from('sahtitnpidev@gmail.com')
                	->to("{$user->getMail()}")
                	->subject('SahtiTN !')
                    ->text("Bienvenu {$user->getPrenom()} {$user->getNom()} à SahtinTN. Votre compte a été crée avec succée ! ❤️")
                    ->html("<h1>Bienvenu {$user->getPrenom()} {$user->getNom()} à SahtinTN. Votre compte a été crée avec succée ! ❤ </h1>");
                $mailer->send($email);
            }

            if (!($avis==""))
            {
                $x->setAvis($avis);
                $em = $this->getDoctrine()->getManager();
                $em->flush();
            }
        }
        return $this->redirectToRoute('AfficherdetailSoinMPnote',['DetailSoinMPs' => $SoinMPsfind,'iduser'=>$iduser,'id'=>$id]);


    }


}
