<?php

namespace App\Controller;
use App\Entity\User;
use App\Form\ConnexionType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\UserType;
use App\Form\UserMedType;
use App\Form\UserParaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\HttpFoundation\Session\SessionInterface;

class UserController extends AbstractController
{
    /**
     * @Route("/accueil", name="accueil")
     */
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    /**
     * @return Response
     * @Route("/Patients", name="Patients")
     */
    public function ListPatients(SessionInterface $session): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $user = $this->getDoctrine()->getRepository(User::class)->findByRole(1);
        return $this->render('user/ListPatients.html.twig', ['listPatients' => $user,]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerPatient/{id}" , name="supprimerPatient")
     */
    public function SupprimerPatients(SessionInterface $session, $id)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $patientfind = $this->getDoctrine()->getRepository(User::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($patientfind);
        $em->flush();
        return $this->redirectToRoute('Patients');
    }


    /**
     * @return Response
     * @Route("/Medecins", name="Medecins")
     */
    public function ListMedcins(SessionInterface $session): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $user = $this->getDoctrine()->getRepository(User::class)->findByRole(2);
        return $this->render('user/ListMedecins.html.twig', ['listMedecins' => $user,]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerMedecin/{id}" , name="supprimerMedecin")
     */
    public function SupprimerMedecins(SessionInterface $session, $id)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $medecinfind = $this->getDoctrine()->getRepository(User::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($medecinfind);
        $em->flush();
        return $this->redirectToRoute('Medecins');

    }

    /**
     * @return Response
     * @Route("/Pharmaciens", name="Pharmaciens")
     */
    public function ListPharmaciens(SessionInterface $session): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $user = $this->getDoctrine()->getRepository(User::class)->findByRole(3);
        return $this->render('user/ListPharmaciens.html.twig', ['listPharmaciens' => $user,]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerPharmacien/{id}" , name="supprimerPharmacien")
     */

    public function SupprimerPharmaciens(SessionInterface $session, $id)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $pharmacienfind = $this->getDoctrine()->getRepository(User::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($pharmacienfind);
        $em->flush();
        return $this->redirectToRoute('Pharmaciens');

    }

    /**
     * @return Response
     * @Route("/Parapharmaciens", name="Parapharmaciens")
     */
    public function ListParapharmaciens(SessionInterface $session): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $user = $this->getDoctrine()->getRepository(User::class)->findByRole(4);
        return $this->render('user/ListParapharmaciens.html.twig', ['listPharmaciens' => $user,]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerParapharmacien/{id}" , name="supprimerParapharmacien")
     */

    public function SupprimerParapharmaciens(SessionInterface $session, $id)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $parapharmacienfind = $this->getDoctrine()->getRepository(User::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($parapharmacienfind);
        $em->flush();
        return $this->redirectToRoute('Parapharmaciens');

    }

    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion(Request $request, SessionInterface $session): Response
    {  $useronline=new User();
        $form=$this->createForm(ConnexionType::class,$useronline);
        $form->add('Connexion', SubmitType::class);
        $form->handleRequest($request);
        if($form->isSubmitted()) {
            $verifuser = $this->getDoctrine()->getRepository(User::class)->findOneBy(array('login' => $useronline->getLogin(), 'mdp' => $useronline->getMdp()));
            if (is_null($verifuser)) {
                return $this->render('user/connexionErrorMessage.html.twig', [
                    'controller_name' => 'UserController','formConnexion'=>$form->createview(),
                ]);
            } else {
                $role=$verifuser->getRole();
                $session->set('user',$verifuser);
                    if ($role==1)
                    {
                        return $this->redirectToRoute('accueilOnline',array('iduser'=>$verifuser->getId()));
                    }
                    else if ($role==2)
                    {
                        return $this->redirectToRoute('accueilOnlineMed',array('iduser'=>$verifuser->getId()));
                    }
                    if ($role==3)
                    {
                        return $this->redirectToRoute('accueilOnlinePharmacien',array('iduser'=>$verifuser->getId()));
                    }
                    if ($role==4)
                    {
                        return $this->redirectToRoute('accueilOnlineParapharmacien',array('iduser'=>$verifuser->getId()));
                    }
                else
                    {
                      return $this->redirectToRoute('connexionAdmin',array('iduser'=>$verifuser->getId()));
                    }
                    }
        }
        return $this->render('user/connexion.html.twig', [
            'controller_name' => 'UserController','formConnexion'=>$form->createview(),
        ]);
    }

    /**
     * @Route("/deconnexion", name="deconnexion")
     */
    public function logout(SessionInterface $session): Response
    {
        $session->clear();
        return $this->redirectToRoute('connexion');
    }

    /**
     * @Route("/accueilOnline/{iduser}", name="accueilOnline")
     */
    public function accueil(SessionInterface $session, $iduser){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        return $this->render('user/accueilOnline.html.twig', [
            'iduser' => $iduser, ]);

    }

    /**
     * @Route("/accueilOnlineMed/{iduser}", name="accueilOnlineMed")
     */
    public function accueilMed(SessionInterface $session,$iduser){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        return $this->render('user/accueilOnlineMed.html.twig', [
           'iduser' => $iduser,
        ]);
    }

    /**
     * @Route("/accueilOnlinePharmacien/{iduser}", name="accueilOnlinePharmacien")
     */
    public function accueilPharmacien(SessionInterface $session,$iduser){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        return $this->render('user/accueilOnlinePharmacien.html.twig', [
            'iduser' => $iduser,
        ]);
    }

    /**
     * @Route("/accueilOnlineParapharmacien/{iduser}", name="accueilOnlineParapharmacien")
     */
    public function accueilParapharmacien(SessionInterface $session,$iduser){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        return $this->render('user/accueilOnlineParapharmacien.html.twig', [
            'iduser' => $iduser,
        ]);
    }

    /**
     * @param Request $request
     * @Route("/inscription", name="inscription")
     */
    public function inscription(Request $request): Response
    {

        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->add('Inscription', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $user->setLienImageUser($newFilename);
            }
            $user->setRole(1);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
        return $this->redirectToRoute('connexion');
    }
        return $this->render('user/inscription.html.twig', ['formInscription' => $form->createView()]);
    }

    /**
     * @param Request $request
     * @Route("/inscriptionMed", name="inscriptionMed")
     */
    public function inscriptionMed(Request $request): Response
    {
        $user = new User();
        $form = $this->createForm(UserMedType::class, $user);
        $form->add('Inscription', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $user->setLienImageUser($newFilename);
            }
            $user->setRole(2);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('connexion');
        }
        return $this->render('user/inscriptionMed.html.twig', ['formInscription' => $form->createView()]);
    }

    /**
     * @param Request $request
     * @Route("/inscriptionPharmacien", name="inscriptionPharmacien")
     */
    public function inscriptionPharmacien(Request $request): Response
    {
       /* return $this->render('user/accueilOnlineMed.html.twig', [
            'controller_name' => 'UserController',
        ]);*/
        $user = new User();
        $form = $this->createForm(UserParaType::class, $user);
        $form->add('Inscription', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $user->setLienImageUser($newFilename);
            }
            $user->setRole(3);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('connexion');
        }
        return $this->render('user/inscriptionPharmacien.html.twig', ['formInscription' => $form->createView()]);
    }

    /**
     * @param Request $request
     * @Route("/inscriptionParapharmacien", name="inscriptionParapharmacien")
     */
    public function inscriptionPara(Request $request): Response
    {
        /* return $this->render('user/accueilOnlineMed.html.twig', [
             'controller_name' => 'UserController',
         ]);*/
        $user = new User();
        $form = $this->createForm(UserParaType::class, $user);
        $form->add('Inscription', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $user->setLienImageUser($newFilename);
            }
            $user->setRole(4);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('connexion');
        }
        return $this->render('user/inscriptionParapharmacien.html.twig', ['formInscription' => $form->createView()]);
    }

    /**
     * @param $iduser
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/modifierUser/{iduser}" , name="modifierUser")
     */
    public function modifierUser(Request $request,SessionInterface $session,$iduser)
    {

        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $UserFind = $this->getDoctrine()->getRepository(User::class)->findBy(['id' => $iduser])[0];
        $form = $this->createForm(UserType::class, $UserFind);
        $form->add('modifier', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $UserFind->setLienImageUser($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();

            if ($UserFind->getRole()==1)
            {
                return $this->redirectToRoute('afficherUser', ['iduser' => $iduser, 'userFind' => $UserFind]);
            }
            if (($UserFind->getRole()==3)or($UserFind->getRole()==4))
            {
                return $this->redirectToRoute('afficherPara', ['iduser' => $iduser, 'userFind' => $UserFind]);
            }
        }
        return $this->render('user/templateModifierProfil.html.twig', ['formModifierUser' => $form->createView(), 'iduser'=>$iduser, 'userFind'=>$UserFind]);

    }

    /**
     * @param $iduser
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/modifierMed/{iduser}" , name="modifierMed")
     */
    public function modifierMed(Request $request,SessionInterface $session,$iduser)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $UserFind = $this->getDoctrine()->getRepository(User::class)->findBy(['id' => $iduser])[0];
        $form = $this->createForm(UserMedType::class, $UserFind);
        $form->add('modifier', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $UserFind->setLienImageUser($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficherUser', ['iduser' => $iduser, 'userFind' => $UserFind]);
        }
        return $this->render('user/templateModifierProfilMed.html.twig', ['formModifierUser' => $form->createView(), 'iduser'=>$iduser, 'userFind'=>$UserFind]);
    }

    /**
     * @param $iduser
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/modifierPhar/{iduser}" , name="modifierPhar")
     */
    public function modifierPhar(Request $request,SessionInterface $session,$iduser)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $UserFind = $this->getDoctrine()->getRepository(User::class)->findBy(['id' => $iduser])[0];
        $form = $this->createForm(UserParaType::class, $UserFind);
        $form->add('modifier', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $uploadedFile */
            $uploadedFile = $form['imageFile']->getData();
            if ($uploadedFile)
            {
                $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
                $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
                $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
                $uploadedFile->move(
                    $destination,
                    $newFilename
                );
                $UserFind->setLienImageUser($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficherUser', ['iduser' => $iduser, 'userFind' => $UserFind]);
        }
        return $this->render('user/templateModifierProfilPhar.html.twig', ['formModifierUser' => $form->createView(), 'iduser'=>$iduser, 'userFind'=>$UserFind]);
    }

    /**
     * @param $iduser
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/afficherUser/{iduser}" , name="afficherUser")
     */
    public function afficherUser(SessionInterface $session,$iduser)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $UserFind = $this->getDoctrine()->getRepository(User::class)->findBy(['id' => $iduser])[0];
        if ($UserFind->getRole()==1) {
            return $this->render('user/templateAfficherProfil.html.twig', ['iduser'=>$iduser, 'userFind'=>$UserFind,]);
        }
        if ($UserFind->getRole()==2)
        {
            return $this->render('user/templateAfficherProfilMed.html.twig', ['iduser'=>$iduser, 'userFind'=>$UserFind,]);

        }
        if (($UserFind->getRole()==3)or($UserFind->getRole()==4))
        {
            return $this->render('user/templateAfficherProfilPara.html.twig', ['iduser'=>$iduser, 'userFind'=>$UserFind,]);

        }

    }


}
