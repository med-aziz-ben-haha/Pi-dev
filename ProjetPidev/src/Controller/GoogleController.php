<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use KnpU\OAuth2ClientBundle\Client\ClientRegistry;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use Symfony\Component\HttpFoundation\Request;
use App\Form\ConnexionType;

class GoogleController extends AbstractController
{
    /**
     * Link to this controller to start the "connect" process
     *
     * @Route("/connect/google/", name="connect_google_start")
     */
    public function connectAction(ClientRegistry $clientRegistry)
    {
        // will redirect to google!
        return $clientRegistry
            ->getClient('google_connect') // key used in config/packages/knpu_oauth2_client.yaml
            ->redirect();
    }

    /**
     * After going to GOOGle, you're redirected back here
     * because this is the "redirect_route" you configured
     * in config/packages/knpu_oauth2_client.yaml
     *
     * @Route("/connect/google/check/", name="connect_google_check")
     */
    public function connectCheckAction(Request $request, ClientRegistry $clientRegistry,SessionInterface $sesssion)
    {
        /** @var \KnpU\OAuth2ClientBundle\Client\Provider\googleClient $client */
        $client = $clientRegistry->getClient('google_connect');
        $useronline=new User();
        $form=$this->createForm(ConnexionType::class,$useronline);
        try {
            /** @var \League\OAuth2\Client\Provider\googleUser $user */
            $user = $client->fetchUser();
            $googleuser=new User();
            $googleuser=$this->getDoctrine()->getRepository(User::class)->findOneBy(array('email'=>$user->getEmail()));
            if (is_null($googleuser)){
                $msg="Ce mail n'est pas inscrit  *";
                return $this->render('user/connexionErrorMessage.html.twig',
                    ['formConnexion'=>$form->createview(),'message'=>$msg,]);
            }

            else {
                $role=$googleuser->getRole();
                $sesssion->set('user', $googleuser);
                if ($role==1)
                {
                    return $this->redirectToRoute('accueilOnline',array('iduser'=>$googleuser->getId()));
                }
                else if ($role==2)
                {
                    return $this->redirectToRoute('accueilOnlineMed',array('iduser'=>$googleuser->getId()));
                }
                if ($role==3)
                {
                    return $this->redirectToRoute('accueilOnlinePharmacien',array('iduser'=>$googleuser->getId()));
                }
                if ($role==4)
                {
                    return $this->redirectToRoute('accueilOnlineParapharmacien',array('iduser'=>$googleuser->getId()));
                }
                else
                {
                    return $this->redirectToRoute('connexionAdmin',array('iduser'=>$googleuser->getId()));
                }

            }



        } catch (IdentityProviderException $e) {
            return $this->redirectToRoute("accueil");
        }

    }
    /**
     * Link to this controller to start the "connect" process
     *
     * @Route("/inscription/google/", name="inscription_google_start")
     */
    public function inscriptionAction(ClientRegistry $clientRegistry)
    {
        // will redirect to google!
        return $clientRegistry
            ->getClient('google_inscription') // key used in config/packages/knpu_oauth2_client.yaml
            ->redirect();
    }

    /**
     * After going to GOOGle, you're redirected back here
     * because this is the "redirect_route" you configured
     * in config/packages/knpu_oauth2_client.yaml
     *
     * @Route("/inscription/google/check/", name="inscription_google_check")
     */
    public function inscriptionCheckAction(Request $request, ClientRegistry $clientRegistry,SessionInterface $session)
    {
        /** @var \KnpU\OAuth2ClientBundle\Client\Provider\googleClient $client */
        $client = $clientRegistry->getClient('google_inscription');

        try {
            /** @var \League\OAuth2\Client\Provider\googleUser $user */
            $user = $client->fetchUser();
            $session->set('googleuser',$user);
            return $this->render('user/choixTypeinscription.html.twig');

        }

        catch (IdentityProviderException $e) {
            return $this->redirectToRoute('accueil');
        }

    }
}