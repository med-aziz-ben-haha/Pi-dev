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
use \Twilio\Rest\Client;


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
    public function ajouterNote(SessionInterface $session, Request $request,$iduser,$id,$valeur, Client $client)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }else if($iduser !=$user->getId()){
            return $this->redirectToRoute('ajouternoteSMP', ['iduser' => $user->getId(),]);
        }
        $avis=$request->get('avis');
        $SoinMPsfind = $this->getDoctrine()->getRepository(SoinMP::class)->find($id);
        $user=$this->getDoctrine()->getRepository(User::class)->find($iduser);
        $x = $this->getDoctrine()->getRepository(NoteSoinMP::class)->findOneBy(array('soinMP'=>$SoinMPsfind,'user'=>$iduser,));
        //ajouter note /avis
        if (empty($x))
        {$Note = new NoteSoinMP();

            $Note->setValeur($valeur);
            $Note->setUser($user);
            $Note->setSoinMP($SoinMPsfind);
            $Note->setAvis($avis);
            $em = $this->getDoctrine()->getManager();
            $em->persist($Note);
            $em->flush();

            $client->messages->create(
            // the number you'd like to send the message to
                '+21624602806',
                [
                    // A Twilio phone number you purchased at twilio.com/console
                    'from' => '+12402610130',
                    // the body of the text message you'd like to send
                    'body' => "Votre note pour {$SoinMPsfind->getTitreSoinMP()} a été attribuée avec succée merci   ! ❤️",
                ]
            );
        }
        // modifer note /avis
        else
        {
            if (!($valeur==0)) {
                $x->setValeur($valeur);
                $em = $this->getDoctrine()->getManager();
                $em->flush();

                $client->messages->create(
                // the number you'd like to send the message to
                    '+21624602806',
                    [
                        // A Twilio phone number you purchased at twilio.com/console
                        'from' => '+12402610130',
                        // the body of the text message you'd like to send
                        'body' => "Votre note pour {$SoinMPsfind->getTitreSoinMP()} a été modifiée avec succée merci   ! ❤️",
                    ]
                );
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
