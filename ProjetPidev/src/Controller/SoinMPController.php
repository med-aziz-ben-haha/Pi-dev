<?php

namespace App\Controller;

use App\Entity\CategorieSoinMP;
use App\Entity\User;
use App\Form\SoinMPRechercheType;
use App\Form\SoinMPTriFormType;
use App\Form\SoinMPTriDESCType;
use App\Form\SoinMPType;
use App\Entity\SoinMP;
use App\Form\CaptchaSMPType;
use App\Entity\Captcha;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use App\Entity\NoteSoinMP;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\JsonResponse;


class SoinMPController extends AbstractController
{
    /**
     * @Route("/soin/m/p", name="soin_m_p")
     */
    public function index(): Response
    {
        return $this->render('soin_mp/index.html.twig', [
            'controller_name' => 'SoinMPController',
        ]);
    }

    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("Api/Soin/Supprimer/{id}" , name="supprimerSoinMPjson")
     */
    public function SupprimerSoinMPjson( $id)
    {
        $SoinMPfind = $this->getDoctrine()->getRepository(SoinMP::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($SoinMPfind);
        $em->flush();
        return new JsonResponse("Soin supprimé");
    }

    /**
     * @return Response
     * @Route("Api/Soin/Stat", name="StatSoinMPsJson")
     */
    public function StatSoinMPsJson(): Response
    {

        $SoinMPfind = $this->getDoctrine()->getRepository(SoinMP::class)->findAll();

        $jsonContent= Array();
        foreach ($SoinMPfind as $key=>$aide){
            $jsonContent[$key]['titreSoinMP']= $aide->getTitreSoinMP();
            $note=0;
            $Moyenne=0;
            $aviss="";
            $SoinMPsfind = $this->getDoctrine()->getRepository(SoinMP::class)->find($aide->getId());
            $Notes=$this->getDoctrine()->getRepository(NoteSoinMP::class)->findBy(array('soinMP'=>$SoinMPsfind));
            if (!(empty($x))){
                $Valeur=$x[0]->getValeur();
                $Avis=$x[0]->getAvis();}
            else {$Valeur=0;
                $Avis="";}
            if (!(empty($Notes)))
            {
                $total=0;
                for ($i =0; $i <= (count($Notes)-1); $i++)
                {
                    $total=$total+($Notes[$i]->getValeur());
                }
                $Moyenne=$total/(count($Notes));
            }
            $jsonContent[$key]['moyenne']=$Moyenne;
        }
        return new JsonResponse($jsonContent);
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("Api/Soin/Ajouter/{titre}/{description}/{adresse}/{categorie}" , name="ajouterSoinMPJson")
     */
    public function ajouterSoinMPJson($titre,$description,$adresse,$categorie)
    {
        $SoinMP = new SoinMP();
        $SoinMP->setDescriptionSoinMP($description);
        $SoinMP->setTitreSoinMP($titre);
        $SoinMP->setAdresseSoinMP($adresse);
        $categoriefind=$this->getDoctrine()->getRepository(CategorieSoinMP::class)->find(array('id'=>$categorie));
        $SoinMP->setCategorieSoinMP($categoriefind);
        $SoinMP->setLienImageSMP("2.4Méditation-603aee9ce4bff.jpeg");
        $em = $this->getDoctrine()->getManager();
        $em->persist($SoinMP);
        $em->flush();
        return new JsonResponse("Soin ajouté");
    }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("Api/Soin/Modifier/{id}/{titre}/{description}/{adresse}/{categorie}" , name="modifierSoinMPJson")
     */
    public function modifierSoinMPJson($id,$titre,$description,$adresse,$categorie)
    {
        $SoinMPfind = $this->getDoctrine()->getRepository(SoinMP::class)->findBy(['id' => $id])[0];
        $SoinMPfind->setDescriptionSoinMP($description);
        $SoinMPfind->setTitreSoinMP($titre);
        $SoinMPfind->setAdresseSoinMP($adresse);
        $categoriefind=$this->getDoctrine()->getRepository(CategorieSoinMP::class)->find(array('id'=>$categorie));
        $SoinMPfind->setCategorieSoinMP($categoriefind);
        $SoinMPfind->setLienImageSMP("2.4Méditation-603aee9ce4bff.jpeg");
        $em = $this->getDoctrine()->getManager();
        $em->flush();
        return new JsonResponse("Soin modifié");
    }

    /**
     * @return Response
     * @Route("Api/Soin/Afficher", name="afficherSoinMPjson")
     */
    public function listSoinMPjson(): Response
    {
        $SoinMP = $this->getDoctrine()->getRepository(SoinMP::class)->findAll();
        $jsonContent= Array();
        foreach ($SoinMP as $key=>$aide){
            $jsonContent[$key]['id']= $aide->getId();
            $jsonContent[$key]['titreSoinMP']= $aide->getTitreSoinMP();
            $jsonContent[$key]['descriptionSoinMP']= $aide->getDescriptionSoinMP();
            $jsonContent[$key]['lienImageSMP']= $aide->getLienImageSMP();
            $jsonContent[$key]['adresseSoinMP']= $aide->getAdresseSoinMP();
            $jsonContent[$key]['CategorieSoinMP']= $aide->getCategorieSoinMP()->getLibelleCategorieSoinMP();
            //$userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
            $note=0;
            $Moyenne=0;
            $aviss="null";
            $jsonContent[$key]['note']= $note;
            $jsonContent[$key]['avis']= $aviss;
            $jsonContent[$key]['moyenne']=$Moyenne;
        }
        return new JsonResponse($jsonContent);

    }

    /**
     * @return Response
     * @Route("/afficherSoinMP", name="afficherSoinMP")
     */
    public function listSoinMP(SessionInterface $session,Request $request): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $SoinMP = $this->getDoctrine()->getRepository(SoinMP::class)->findAll();
        $SoinMPtri = $this->getDoctrine()->getRepository(SoinMP::class)->findAlltri();
        $SoinMPtriDesc = $this->getDoctrine()->getRepository(SoinMP::class)->findAlltriDESC();

        $formtri=$this->createForm(SoinMPTriFormType::class);
        $formtri->handleRequest($request);

        $formtriDesc=$this->createForm(SoinMPTriDESCType::class);
        $formtriDesc->handleRequest($request);

        $form=$this->createForm(SoinMPRechercheType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted())
        {
            $data=$form->getData();
            $titre=$data['recherche'];
            $searchSoinMPfind=$this->getDoctrine()->getRepository(SoinMP::class)->search($titre);
            return $this->render('soin_mp/listSoinsMP.html.twig', ['listSoinsMP' => $searchSoinMPfind,'formSearch'=>$form->createView(),
                'formtri' => $formtri->createView(),'formtriDESC' => $formtriDesc->createView(),'user'=>$userfind,]);

        }
        else if ($formtri->isSubmitted()) {

            return $this->render('soin_mp/listSoinsMP.html.twig', ['listSoinsMP' => $SoinMPtri,'formSearch'=>$form->createView(),
                'formtri' => $formtri->createView(),'formtriDESC' => $formtriDesc->createView(),'user'=>$userfind,]);
        }
        else if ($formtriDesc->isSubmitted()) {

            return $this->render('soin_mp/listSoinsMP.html.twig', ['listSoinsMP' => $SoinMPtriDesc,'formSearch'=>$form->createView(),
                'formtriDESC' => $formtriDesc->createView(),'formtri' => $formtri->createView(),'user'=>$userfind,]);
        }
        return $this->render('soin_mp/listSoinsMP.html.twig', ['listSoinsMP' => $SoinMP,'formSearch'=>$form->createView(),
            'formtri' => $formtri->createView(), 'formtriDESC' => $formtriDesc->createView(),'user'=>$userfind,]);
    }


    /**
     * @param $id
     * @param Request $request
     * @param $iduser
     * @return Response
     * @Route("/afficherSoinMPs/{id}/{iduser}", name="afficherSoinMPs")
     */
    public function listSoinMPs(SessionInterface $session, $id,Request $request, $iduser): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }else if($iduser !=$user->getId()){
        return $this->redirectToRoute('afficherSoinMPs', ['iduser' => $user->getId(),]);
    }
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $SoinMPfind = $this->getDoctrine()->getRepository(SoinMP::class)->findBy(array('CategorieSoinMP'=>$id));
        $categorieid=$SoinMPfind[0]->getCategorieSoinMP();
        $form=$this->createForm(SoinMPRechercheType::class);
        $form->handleRequest($request);
        //recherche avancée multicritére  inutilisée
        if ($form->isSubmitted())
        {
            $data=$form->getData();
            $titre=$data['recherche'];
            $searchSoinMPfind=$this->getDoctrine()->getRepository(SoinMP::class)->searchs($titre,$categorieid);
            return $this->render('soin_mp/listSoinsMPs.html.twig', ['listSoinsMPs' => $searchSoinMPfind,'formSearch'=>$form->createView(),'iduser'=>$iduser,'user'=>$userfind,]);

        }
        return $this->render('soin_mp/listSoinsMPs.html.twig', ['listSoinsMPs' => $SoinMPfind,'formSearch'=>$form->createView(),'iduser'=>$iduser,'user'=>$userfind,]);
    }

    /**
     * @param $id
     * @param $iduser
     * @return Response
     * @Route("Api/Soin/Afficher/{id}/{iduser}", name="afficherSoinMPsJson")
     */
    public function listSoinMPsJson($id,$iduser): Response
    {

        $SoinMPfind = $this->getDoctrine()->getRepository(SoinMP::class)->findBy(array('CategorieSoinMP'=>$id));

        $jsonContent= Array();
        foreach ($SoinMPfind as $key=>$aide){
            $jsonContent[$key]['id']= $aide->getId();
            $jsonContent[$key]['titreSoinMP']= $aide->getTitreSoinMP();
            $jsonContent[$key]['descriptionSoinMP']= $aide->getDescriptionSoinMP();
            $jsonContent[$key]['lienImageSMP']= $aide->getLienImageSMP();
            $jsonContent[$key]['adresseSoinMP']= $aide->getAdresseSoinMP();
            $jsonContent[$key]['CategorieSoinMP']= $aide->getCategorieSoinMP()->getLibelleCategorieSoinMP();
            $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
            $note=0;
            $Moyenne=0;
            $aviss="";
            $SoinMPsfind = $this->getDoctrine()->getRepository(SoinMP::class)->find($aide->getId());
            $Notes=$this->getDoctrine()->getRepository(NoteSoinMP::class)->findBy(array('soinMP'=>$SoinMPsfind));
            $x = $this->getDoctrine()->getRepository(NoteSoinMP::class)->findBy(array('soinMP'=>$SoinMPsfind,'user'=>$iduser));
            if (!(empty($x))){
            $Valeur=$x[0]->getValeur();
            $Avis=$x[0]->getAvis();}
            else {$Valeur=0;
            $Avis="";}
            if (!(empty($Notes)))
            {
                $total=0;
                for ($i =0; $i <= (count($Notes)-1); $i++)
                {
                    $total=$total+($Notes[$i]->getValeur());
                }
                $Moyenne=$total/(count($Notes));
            }
            $jsonContent[$key]['note']= $Valeur;
            $jsonContent[$key]['avis']= $Avis;
            $jsonContent[$key]['moyenne']=$Moyenne;
         }
        return new JsonResponse($jsonContent);
    }


    /**
     * @param $iduser
     * @param $id
     * @param Request $request
     * @return Response
     * @Route ("/afficherDetailSoinMPs/{id}/{iduser}",name="afficherDetailSoinMPs")
     */
    public function detailSoinMPs(SessionInterface $session, $iduser,$id,Request $request): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        else if($iduser !=$user->getId()){
            return $this->redirectToRoute('afficherDetailSoinMPs', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $SoinMPsfind = $this->getDoctrine()->getRepository(SoinMP::class)->find($id);
        $x=random_int(1,21);
        $Captcha = $this->getDoctrine()->getRepository(Captcha::class)->find($x);
        $formCaptcha= $this->createForm(CaptchaSMPType::class);
        $formCaptcha->add('id', HiddenType::class,['data' =>$x]);
        $formCaptcha->handleRequest($request);

        if ($formCaptcha->isSubmitted()) {
            $data=$formCaptcha->getData();
            $findCaptcha=$this->getDoctrine()->getRepository(Captcha::class)->find($data['id']);
            $verif=$data['Captcha'];
            if($findCaptcha->getValue()==$verif)
            {
                return $this->redirectToRoute('AfficherdetailSoinMPnote', ['DetailSoinMPs' => $SoinMPsfind,'iduser'=>$iduser,'id'=>$id,'user'=>$userfind, ]);}
        }
        $x=random_int(1,21);
        $Captcha = $this->getDoctrine()->getRepository(Captcha::class)->find($x);
        $formCaptcha= $this->createForm(CaptchaSMPType::class);
        $formCaptcha->add('id', HiddenType::class,['data' =>$x]);
        return $this->render('soin_mp/DetailSoinMPS.html.twig', ['DetailSoinMPs' => $SoinMPsfind,'iduser'=>$iduser,'captcha'=>$Captcha,'formCaptcha' =>$formCaptcha->createView(),'user'=>$userfind,]);
    }

    /**
     * @param $iduser
     * @param $id
     * @param Request $request
     * @return Response
     * @Route ("/AfficherdetailSoinMPnote/{id}/{iduser}",name="AfficherdetailSoinMPnote")
     */
    public function detailSoinMPsnote(SessionInterface $session, $iduser,$id,Request $request): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        else if($iduser !=$user->getId()){
            return $this->redirectToRoute('AfficherdetailSoinMPnote', ['iduser' => $user->getId(),]);
        }
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $note=0;
        $Moyenne=0;
        $aviss="";
        $SoinMPsfind = $this->getDoctrine()->getRepository(SoinMP::class)->find($id);
        $Notes=$this->getDoctrine()->getRepository(NoteSoinMP::class)->findBy(array('soinMP'=>$id));
        $x = $this->getDoctrine()->getRepository(NoteSoinMP::class)->findOneBy(array('soinMP'=>$SoinMPsfind,'user'=>$iduser));
        if (!(empty($Notes)))
        {
            $total=0;
            for ($i =0; $i <= (count($Notes)-1); $i++)
        {
                $total=$total+($Notes[$i]->getValeur());
        }
            $Moyenne=$total/(count($Notes));
        }
        if(!(empty($x))) {
            $note = $x->getValeur();
            $aviss = $x->getAvis();
        }
        return $this->render('soin_mp/DetailSoinMPSnote.html.twig', ['DetailSoinMPs' => $SoinMPsfind,'iduser'=>$iduser,'moyenne'=>$Moyenne,'note'=>$note,'aviss'=>$aviss,'user'=>$userfind,]);

    }



    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|Response
     * @Route ("/ajouterSoinMP" , name="ajouterSoinMP")
     */
    public function ajouterSoinMP(SessionInterface $session, Request $request)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $SoinMP = new SoinMP();
        $form = $this->createForm(SoinMPType::class, $SoinMP);
        $form->add('ajouter', SubmitType::class);
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
                $SoinMP->setLienImageSMP($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($SoinMP);
            $em->flush();
            return $this->redirectToRoute('afficherSoinMP',['user'=>$userfind,]);
        }
        return $this->render('soin_mp/ajouterSoinMP.html.twig', ['formAjouterSoinMP' => $form->createView(),'user'=>$userfind,]);
    }
    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/supprimerSoinMP/{id}" , name="supprimerSoinMP")
     */
    public function SupprimerSoinMP(SessionInterface $session, $id)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $SoinMPfind = $this->getDoctrine()->getRepository(SoinMP::class)->find($id);
        $em = $this->getDoctrine()->getManager();
        $em->remove($SoinMPfind);
        $em->flush();
        return $this->redirectToRoute('afficherSoinMP',['user'=>$userfind,]);

    }
    /**
     * @param $id
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     * @Route ("/modifierSoinMP/{id}" , name="modifierSoinMP")
     */
    public function modifierSoinMP(SessionInterface $session, $id, Request $request)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind= $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $SoinMPfind = $this->getDoctrine()->getRepository(SoinMP::class)->findBy(['id' => $id])[0];
        $form = $this->createForm(SoinMPType::class, $SoinMPfind);
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
                $SoinMPfind->setLienImageSMP($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute('afficherSoinMP',['user'=>$userfind,]);
        }
        return $this->render('soin_mp/modifierSoinMP.html.twig', ['formModifierSoinMP' => $form->createView(),'user'=>$userfind,]);

    }
    /**
     * @Route("/admin/upload/test", name="upload_test")
     */
    public function temporaryUploadAction(Request $request)
    {
        /** @var UploadedFile $uploadedFile */
        $uploadedFile = $request->files->get('image');
        $destination = $this->getParameter('kernel.project_dir').'/public/uploads';
        $originalFilename = pathinfo($uploadedFile->getClientOriginalName(), PATHINFO_FILENAME);
        $newFilename = $originalFilename.'-'.uniqid().'.'.$uploadedFile->guessExtension();
        dd($uploadedFile->move(
            $destination,
            $newFilename
        ));
    }

    /**
     * @return Response
     * @Route ("/afficherStatSoinMP", name="afficherStatSoinMP")
     */

    public function afficherStatSoinMP(SessionInterface $session)
    {   $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }

        $SoinMP= $this->getDoctrine()->getRepository(SoinMP::class)->findAll();
        $SoinMPs = [];
        $Moyennes = [];
        for ($j =0; $j <= (count($SoinMP)-1); $j++)
        {
            $Notes=$this->getDoctrine()->getRepository(NoteSoinMP::class)->findBy(array('soinMP'=>$SoinMP[$j]));
            $SoinMPs [] = $SoinMP[$j]->getTitreSoinMP();
            $total=0;
            $Moyenne=0;
            if (!(empty($Notes)))
            {
                for ($i =0; $i <= (count($Notes)-1); $i++)
                {
                    $total=$total+($Notes[$i]->getValeur());
                }
                $Moyenne=$total/(count($Notes));
            }
            $Moyennes[] = $Moyenne;

        }
        return $this->render('soin_mp/statsSoinMP.html.twig', [
            'soinMPs' => $SoinMPs,
            'moyennes' => $Moyennes
        ]);
    }



    /**
     * @Route ("/impression/{id}/{iduser}",name="impression")
     */
    public function impression($iduser,$id,SessionInterface $session)
    {  $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        else if($iduser !=$user->getId()){
            return $this->redirectToRoute('impression', ['iduser' => $user->getId(),]);
        }
        $SoinMPfind = $this->getDoctrine()->getRepository(SoinMP::class)->find($id);

        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');

        // Instantiate Dompdf with our options
        $dompdf = new Dompdf($pdfOptions);

        // Retrieve the HTML generated in our twig file
        $html = $this->renderView('soin_mp/mypdf.html.twig', [
            'title' => "Welcome to our PDF Test",'soin'=>$SoinMPfind,
        ]);

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

}
