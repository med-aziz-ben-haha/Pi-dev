<?php

namespace App\Controller;
use App\Entity\User;
use App\Form\ConnexionType;
use App\Form\UserParaphType;
use App\Repository\UserRepository;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use App\Form\UserType;
use App\Form\UserMedType;
use App\Form\UserParaType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

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
    public function ListPatients(): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->findByRole(1);
        return $this->render('user/ListPatients.html.twig', ['listPatients' => $user,]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerPatient/{id}" , name="supprimerPatient")
     */
    public function SupprimerPatients($id)
    {
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
    public function ListMedcins(): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->findByRole(2);
        return $this->render('user/ListMedecins.html.twig', ['listMedecins' => $user,]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerMedecin/{id}" , name="supprimerMedecin")
     */
    public function SupprimerMedecins($id)
    {
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
    public function ListPharmaciens(): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->findByRole(3);
        return $this->render('user/ListPharmaciens.html.twig', ['listPharmaciens' => $user,]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerPharmacien/{id}" , name="supprimerPharmacien")
     */

    public function SupprimerPharmaciens($id)
    {
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
    public function ListParapharmaciens(): Response
    {
        $user = $this->getDoctrine()->getRepository(User::class)->findByRole(4);
        return $this->render('user/ListParapharmaciens.html.twig', ['listParapharmaciens' => $user,]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerPharmacien/{id}" , name="supprimerPharmacien")
     */

    public function SupprimerParapharmaciens($id)
    {
        $parapharmacienfind = $this->getDoctrine()->getRepository(User::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($parapharmacienfind);
        $em->flush();
        return $this->redirectToRoute('Parapharmaciens');

    }


    /**
     * @Route("/connexion", name="connexion")
     */
    public function connexion(Request $request): Response
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
     * @Route("/accueilOnline/{iduser}", name="accueilOnline")
     */
    public function accueil($iduser){

        return $this->render('user/accueilOnline.html.twig', [
            'iduser' => $iduser,
        ]);
    }

    /**
     * @Route("/accueilOnlineMed/{iduser}", name="accueilOnlineMed")
     */
    public function accueilMed($iduser){
        return $this->render('user/accueilOnlineMed.html.twig', [
            'iduser' => $iduser,
        ]);
    }

    /**
     * @Route("/accueilOnlinePharmacien/{iduser}", name="accueilOnlinePharmacien")
     */
    public function accueilPharmacien($iduser){
        return $this->render('user/accueilOnlinePharmacien.html.twig', [
            'iduser' => $iduser,
        ]);
    }

    /**
     * @Route("/accueilOnlineParapharmacien/{iduser}", name="accueilOnlineParapharmacien")
     */
    public function accueilParapharmacien($iduser,UserRepository $repository){
        $parapharmacien=$repository->find($iduser);
        $parapharmacie=$parapharmacien->getParapharmacie();
        $id=$parapharmacie->getId();
        return $this->render('user/accueilOnlineParapharmacien.html.twig', [
            'iduser' => $iduser,'parapharmacie' => $parapharmacie ,'idpara'=>$id
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
     * @Route("/inscriptionParaph", name="inscriptionParaph")
     */
    public function inscriptionParapharmacien(Request $request): Response
    {
        /* return $this->render('user/accueilOnlineMed.html.twig', [
             'controller_name' => 'UserController',
         ]);*/
        $user = new User();
        $form = $this->createForm(UserParaphType::class, $user);
        $form->add('Inscription', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $user->setRole(4);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $this->redirectToRoute('connexion');
        }
        return $this->render('user/inscriptionParapharmacien.html.twig', ['formInscription' => $form->createView()]);
    }





}
