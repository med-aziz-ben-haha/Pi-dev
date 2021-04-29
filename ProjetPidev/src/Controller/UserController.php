<?php

namespace App\Controller;
use App\Entity\User;
use App\Form\ConnexionType;
use App\Form\VerifierInscriptionType;
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
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

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
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $user = $this->getDoctrine()->getRepository(User::class)->findByRole(1);
        return $this->render('user/ListPatients.html.twig', ['listPatients' => $user,'user'=>$userfind,]);
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
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $patientfind = $this->getDoctrine()->getRepository(User::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($patientfind);
        $em->flush();
        return $this->redirectToRoute('Patients',['user'=>$userfind,]);
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
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $user = $this->getDoctrine()->getRepository(User::class)->findByRole(2);
        return $this->render('user/ListMedecins.html.twig', ['listMedecins' => $user,'user'=>$userfind,]);
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
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $medecinfind = $this->getDoctrine()->getRepository(User::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($medecinfind);
        $em->flush();
        return $this->redirectToRoute('Medecins',['user'=>$userfind,]);

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
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $user = $this->getDoctrine()->getRepository(User::class)->findByRole(3);
        return $this->render('user/ListPharmaciens.html.twig', ['listPharmaciens' => $user,'user'=>$userfind,]);
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
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $pharmacienfind = $this->getDoctrine()->getRepository(User::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($pharmacienfind);
        $em->flush();
        return $this->redirectToRoute('Pharmaciens',['user'=>$userfind,]);

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
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $user = $this->getDoctrine()->getRepository(User::class)->findByRole(4);
        return $this->render('user/ListParapharmaciens.html.twig', ['listPharmaciens' => $user,'user'=>$userfind,]);
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
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $parapharmacienfind = $this->getDoctrine()->getRepository(User::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($parapharmacienfind);
        $em->flush();
        return $this->redirectToRoute('Parapharmaciens',['user'=>$userfind,]);

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
            $verifuser = $this->getDoctrine()->getRepository(User::class)->findOneBy(array('login' => $useronline->getLogin()));

            if (is_null($verifuser)){
                $msg="verifer votre login *";
                return $this->render('user/connexionErrorMessage.html.twig', [
                    'controller_name' => 'UserController','formConnexion'=>$form->createview(),'message'=>$msg
                ]);
            } else {
                $role=$verifuser->getRole();
                $iduser=$verifuser->getId();
                $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
                    if (($role==1)&&(password_verify($useronline->getMdp(),$verifuser->getMdp())==true))
                    {
                        $session->set('user',$verifuser);

                        return $this->redirectToRoute('accueilOnline',array('iduser'=>$verifuser->getId(),'user'=>$userfind,));
                    }
                    else if (($role==2)&&(password_verify($useronline->getMdp(),$verifuser->getMdp())==true))
                    {
                        $session->set('user',$verifuser);

                        return $this->redirectToRoute('accueilOnlineMed',array('iduser'=>$verifuser->getId()));
                    }
                    else if (($role==3)&&(password_verify($useronline->getMdp(),$verifuser->getMdp())==true))
                    {
                        $session->set('user',$verifuser);

                        return $this->redirectToRoute('accueilOnlinePharmacien',array('iduser'=>$verifuser->getId()));
                    }
                    else if (($role==4)&&(password_verify($useronline->getMdp(),$verifuser->getMdp())==true))
                    {
                        $session->set('user',$verifuser);

                        return $this->redirectToRoute('accueilOnlineParapharmacien',array('iduser'=>$verifuser->getId()));
                    }
                    else if (($role==0)&&(password_verify($useronline->getMdp(),$verifuser->getMdp())==true))
                    {
                        $session->set('user',$verifuser);

                      return $this->redirectToRoute('connexionAdmin',array('iduser'=>$verifuser->getId()));
                    }
                    else
                    {
                        $msg="verifer votre mot de passe *";
                        return $this->render('user/connexionErrorMessage.html.twig', [
                            'controller_name' => 'UserController','formConnexion'=>$form->createview(),'message'=>$msg,]);


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
        else if($iduser !=$user->getId()){
            return $this->redirectToRoute('accueilOnline', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        return $this->render('user/accueilOnline.html.twig', [
            'iduser' => $iduser,'user'=>$userfind,]);

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
        else if($iduser !=$user->getId()){
            return $this->redirectToRoute('accueilOnlineMed', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        return $this->render('user/accueilOnlineMed.html.twig', [
           'iduser' => $iduser,'user'=>$userfind,
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
        else if($iduser !=$user->getId()){
            return $this->redirectToRoute('accueilOnlinePharmacien', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        return $this->render('user/accueilOnlinePharmacien.html.twig', [
            'iduser' => $iduser,'user'=>$userfind,
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
        else if($iduser !=$user->getId()){
            return $this->redirectToRoute('accueilOnlineParapharmacien', ['iduser' => $user->getId(),]);
        }

        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $parapharmacien=$userfind;
        $parapharmacie=$parapharmacien->getParapharmacie();
        $id=$parapharmacie->getId();
        return $this->render('user/accueilOnlineParapharmacien.html.twig', [
            'iduser' => $iduser,'user'=>$userfind,'parapharmacie' => $parapharmacie ,'idpara'=>$id
        ]);
    }



    /**
     * @param Request $request
     * @Route("/inscription", name="inscription", methods={"GET","POST"})
     */
    public function inscription(MailerInterface $mailer,Request $request,SessionInterface $sesssion,SessionInterface $util,SessionInterface $clee): Response
    {   if(!(is_null($sesssion->get('googleuser'))))
        {
            $user= new User();
            $gooleuser=$sesssion->get('googleuser');
            $user->setEmail($gooleuser->getEmail());
            $user->setNom($gooleuser->getName());
            $user->setPrenom($gooleuser->getLastName());
        }
        else
            {
                $user = new User();
            }

        $form = $this->createForm(UserType::class, $user);

        $form->add('Inscription', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setMdp(password_hash ($user->getMdp(),PASSWORD_BCRYPT,['cost' => 12]));

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
            $cle =(bin2hex(random_bytes(3)));
            $email = (new Email())
                ->from('sahtitnpidev@gmail.com')
                ->to("{$user->getEmail()}")
                ->subject('SahtiTN!')
                ->text("Bienvenu {$user->getPrenom()} {$user->getNom()} dans SahtiTN, veuillez confirmer votre inscription. $cle")
                ->html("<h1>Bienvenu {$user->getPrenom()} {$user->getNom()} dans SahtiTN, veuillez confirmer votre inscription.<br> $cle</h1>");
            $mailer->send($email);
            $util->set('user',$user);
            $clee->set('cle',$cle);

        return $this->redirectToRoute('verifinscription');
    }
        return $this->render('user/inscription.html.twig', ['formInscription' => $form->createView()]);
    }

    /**
     * @param SessionInterface $util
     * @param SessionInterface $clee
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route("/verifinscription", name="verifinscription", methods={"GET","POST"})
     */

    public function  verifinscirption(MailerInterface $mailer, SessionInterface $util,SessionInterface $clee,Request $request)
    {
        $user=$util->get('user');
        $cle=$clee->get('cle');

        $form=$this->createForm(VerifierInscriptionType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() ) {

            $data=$form->getData();
            $verif=$data['verif'];
            if ($verif==$cle){
                //$this->addFlash('message','code valide');
                $em = $this->getDoctrine()->getManager();
                $em->persist($user);
                $em->flush();
                $email = (new Email())
                    ->from('sahtitnpidev@gmail.com')
                    ->to("{$user->getEmail()}")
                    ->subject('SahtiTN!')
                    ->text("Bienvenu {$user->getPrenom()} {$user->getNom()} dans SahtiTN, votre compte a été crée avec succès ! ❤️")
                    ->html("<h1>Bienvenu {$user->getPrenom()} {$user->getNom()} dans SahtiTN, votre compte a été crée avec succès  ! ❤ </h1>");
                $mailer->send($email);
                $util->clear();
                $clee->clear();
                return $this->redirectToRoute('connexion');
            }
            else
            { $this->addFlash('message','Code invalide');

                $util->set('user',$user);
                $clee->set('cle',$cle);
                return    $this->redirectToRoute('verifinscription');
            }
        }
        return $this->render('user/inscriptionVerif.html.twig', ['formverif' => $form->createView(),'user'=>$user,'cle'=>$cle]);

    }

    /**
     * @param Request $request
     * @Route("/inscriptionMed", name="inscriptionMed", methods={"GET","POST"})
     */
    public function inscriptionMed(MailerInterface $mailer, Request $request,SessionInterface $sesssion,SessionInterface $util,SessionInterface $clee): Response
    {
        if(!(is_null($sesssion->get('googleuser'))))
        {
            $user= new User();
            $gooleuser=$sesssion->get('googleuser');
            $user->setEmail($gooleuser->getEmail());
            $user->setNom($gooleuser->getName());
            $user->setPrenom($gooleuser->getLastName());
        }
        else
        {
            $user = new User();
        }
        $form = $this->createForm(UserMedType::class, $user);
        $form->add('Inscription', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setMdp(password_hash ($user->getMdp(),PASSWORD_BCRYPT,['cost' => 12]));
            $user->setFullname($user->getNom().$user->getPrenom());
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
            $cle =(bin2hex(random_bytes(3)));
            $email = (new Email())
                ->from('sahtitnpidev@gmail.com')
                ->to("{$user->getEmail()}")
                ->subject('SahtiTN!')
                ->text("Bienvenu {$user->getPrenom()} {$user->getNom()} dans SahtiTN, veuillez confirmer votre inscription. $cle")
                ->html("<h1>Bienvenu {$user->getPrenom()} {$user->getNom()} dans SahtiTN, veuillez confirmer votre inscription.<br> $cle</h1>");
            $mailer->send($email);
            $util->set('user',$user);
            $clee->set('cle',$cle);

            return $this->redirectToRoute('verifinscription');
        }
        return $this->render('user/inscriptionMed.html.twig', ['formInscription' => $form->createView()]);
    }

    /**
     * @param Request $request
     * @Route("/inscriptionPharmacien", name="inscriptionPharmacien", methods={"GET","POST"})
     */
    public function inscriptionPharmacien(MailerInterface $mailer, Request $request,SessionInterface $sesssion,SessionInterface $util,SessionInterface $clee): Response
    {
        if(!(is_null($sesssion->get('googleuser'))))
        {
            $user= new User();
            $gooleuser=$sesssion->get('googleuser');
            $user->setEmail($gooleuser->getEmail());
            $user->setNom($gooleuser->getName());
            $user->setPrenom($gooleuser->getLastName());
        }
        else
        {
            $user = new User();
        }
        $form = $this->createForm(UserParaType::class, $user);
        $form->add('Inscription', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setMdp(password_hash ($user->getMdp(),PASSWORD_BCRYPT,['cost' => 12]));
            $user->setFullname($user->getNom().$user->getPrenom());
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
            $cle =(bin2hex(random_bytes(3)));
            $email = (new Email())
                ->from('sahtitnpidev@gmail.com')
                ->to("{$user->getEmail()}")
                ->subject('SahtiTN!')
                ->text("Bienvenu {$user->getPrenom()} {$user->getNom()} dans SahtiTN, veuillez confirmer votre inscription. $cle")
                ->html("<h1>Bienvenu {$user->getPrenom()} {$user->getNom()} dans SahtiTN, veuillez confirmer votre inscription.<br> $cle</h1>");
            $mailer->send($email);
            $util->set('user',$user);
            $clee->set('cle',$cle);

            return $this->redirectToRoute('verifinscription');
        }
        return $this->render('user/inscriptionPharmacien.html.twig', ['formInscription' => $form->createView()]);
    }

    /**
     * @param Request $request
     * @Route("/inscriptionParapharmacien", name="inscriptionParapharmacien", methods={"GET","POST"})
     */
    public function inscriptionPara(MailerInterface $mailer, Request $request,SessionInterface $sesssion,SessionInterface $util,SessionInterface $clee): Response
    {
        if(!(is_null($sesssion->get('googleuser'))))
        {
            $user= new User();
            $gooleuser=$sesssion->get('googleuser');
            $user->setEmail($gooleuser->getEmail());
            $user->setNom($gooleuser->getName());
            $user->setPrenom($gooleuser->getLastName());
        }
        else
        {
            $user = new User();
        }
        $form = $this->createForm(UserParaType::class, $user);
        $form->add('Inscription', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setMdp(password_hash ($user->getMdp(),PASSWORD_BCRYPT,['cost' => 12]));
            $user->setFullname($user->getNom().$user->getPrenom());
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
            $cle =(bin2hex(random_bytes(3)));
            $email = (new Email())
                ->from('sahtitnpidev@gmail.com')
                ->to("{$user->getEmail()}")
                ->subject('SahtiTN!')
                ->text("Bienvenu {$user->getPrenom()} {$user->getNom()} dans SahtiTN, veuillez confirmer votre inscription. $cle")
                ->html("<h1>Bienvenu {$user->getPrenom()} {$user->getNom()} dans SahtiTN, veuillez confirmer votre inscription.<br> $cle</h1>");
            $mailer->send($email);
            $util->set('user',$user);
            $clee->set('cle',$cle);

            return $this->redirectToRoute('verifinscription');
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
        else if($iduser !=$user->getId()){
            return $this->redirectToRoute('modifierUser', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $UserFind = $this->getDoctrine()->getRepository(User::class)->findBy(['id' => $iduser])[0];
        $form = $this->createForm(UserType::class, $UserFind);
        $form->add('modifier', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $UserFind->setMdp("");
            $UserFind->setMdp(password_hash ($user->getMdp(),PASSWORD_BCRYPT,['cost' => 12]));
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
                return $this->redirectToRoute('afficherUser', ['iduser' => $iduser, 'userFind' => $UserFind,'user'=>$userfind,]);
            }
            if (($UserFind->getRole()==3)or($UserFind->getRole()==4))
            {
                return $this->redirectToRoute('afficherUser', ['iduser' => $iduser, 'userFind' => $UserFind,'user'=>$userfind,]);
            }
        }
        return $this->render('user/templateModifierProfil.html.twig', ['formModifierUser' => $form->createView(), 'iduser'=>$iduser, 'userFind'=>$UserFind, 'user'=>$userfind,]);

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
        else if($iduser !=$user->getId()){
            return $this->redirectToRoute('modifierMed', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $UserFind = $this->getDoctrine()->getRepository(User::class)->findBy(['id' => $iduser])[0];
        $form = $this->createForm(UserMedType::class, $UserFind);
        $form->add('modifier', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $UserFind->setMdp(password_hash ($user->getMdp(),PASSWORD_BCRYPT,['cost' => 12]));
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
            return $this->redirectToRoute('afficherUser', ['iduser' => $iduser, 'userFind' => $UserFind,  'user'=>$userfind,]);
        }
        return $this->render('user/templateModifierProfilMed.html.twig', ['formModifierUser' => $form->createView(), 'iduser'=>$iduser, 'userFind'=>$UserFind, 'user'=>$userfind,]);
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
        else if($iduser !=$user->getId()){
            return $this->redirectToRoute('modifierPhar', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $UserFind = $this->getDoctrine()->getRepository(User::class)->findBy(['id' => $iduser])[0];
        $form = $this->createForm(UserParaType::class, $UserFind);
        $form->add('modifier', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $UserFind->setMdp(password_hash ($user->getMdp(),PASSWORD_BCRYPT,['cost' => 12]));
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
            return $this->redirectToRoute('afficherUser', ['iduser' => $iduser, 'userFind' => $UserFind,'user'=>$userfind,]);
        }
        return $this->render('user/templateModifierProfilPhar.html.twig', ['formModifierUser' => $form->createView(), 'iduser'=>$iduser, 'userFind'=>$UserFind,'user'=>$userfind,]);
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
        }else if ($iduser !=$user->getId()){
            return $this->redirectToRoute('afficherUser', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $UserFind = $this->getDoctrine()->getRepository(User::class)->findBy(['id' => $iduser])[0];
        if ($UserFind->getRole()==1) {
            return $this->render('user/templateAfficherProfil.html.twig', ['iduser'=>$iduser, 'userFind'=>$UserFind,'user'=>$userfind,]);
        }
        if ($UserFind->getRole()==2) {
            return $this->render('user/templateAfficherProfilMed.html.twig', ['iduser'=>$iduser, 'userFind'=>$UserFind,'user'=>$userfind,]);
        }
        if (($UserFind->getRole()==3)or($UserFind->getRole()==4)) {
            return $this->render('user/templateAfficherProfilPara.html.twig', ['iduser'=>$iduser, 'userFind'=>$UserFind,'user'=>$userfind,]);
        }
    }

    /**
     * @return Response
     * @Route ("/afficherStatUser", name="afficherStatUser")
     */

    public function afficherStatUser(SessionInterface $session)
    {    $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $Users=$this->getDoctrine()->getRepository(User::class)->findAll();
        $useradmin = $this->getDoctrine()->getRepository(User::class)->findByRole(0);

        $user = $this->getDoctrine()->getRepository(User::class)->findByRole(1);
        $userMed = $this->getDoctrine()->getRepository(User::class)->findByRole(2);
        $userPhar = $this->getDoctrine()->getRepository(User::class)->findByRole(3);
        $userPara = $this->getDoctrine()->getRepository(User::class)->findByRole(4);
        $users= [] ;
        $users [0] = (count($user));
        $users [1] = (count($userMed));
        $users [2] =(count($userPhar));
        $users [3] =(count($userPara));
        $userPourcentage=round(((count($user))*100)/((count($Users))-count($useradmin)),2);
        $userMedPourcentage=round(((count($userMed))*100)/((count($Users))-count($useradmin)),2);
        $userParaPourcentage=round(((count($userPara))*100)/((count($Users))-count($useradmin)),2);
        $userPharPourcentage=round(((count($userPhar))*100)/((count($Users))-count($useradmin)),2);
        $userLabel[0] ="User $userPourcentage %";
        $userLabel[1] ="Médecin $userMedPourcentage %";
        $userLabel[2] ="Pharmacien $userPharPourcentage % ";
        $userLabel[3] ="Parapharmacien $userParaPourcentage % ";
        return $this->render('user/statsUser.html.twig', [

            'userss' => $users ,
            'usersss'=> $userLabel ,
        ]);
    }


}
