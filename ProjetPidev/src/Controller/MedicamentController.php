<?php

namespace App\Controller;

use App\Entity\Medicament;
use App\Entity\User;
use App\Form\MedicamentType;
use App\Repository\MedicamentRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\HttpFoundation\JsonResponse;

class MedicamentController extends AbstractController
{

    /**
     * @Route("/listmedicamentJSON", name="listmedicamentJSON")
     */

    public function listmedicamentJSON(Request $request, MedicamentRepository $repository, NormalizerInterface $normalizer)
    {
        $medicament = $this->getDoctrine()->getRepository(Medicament ::class)->findAll();
        $jsonContent = $normalizer->normalize($medicament, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route ("/MedicamentajoutJSON/new",name="MedicamentajoutJSON")
     */
    public function MedicamentjoutJSON(Request $request, NormalizerInterface $Normalizer)
    {
        $em = $this->getDoctrine()->getManager();
        $medicament = new Medicament();
        $medicament->setNomMedicament($request->get('nomMedicament'));
        $medicament->setDescmedicament($request->get('descmedicament'));
        $medicament->setDispo($request->get('dispo'));
        $date = new \DateTime("now");
        $medicament->setDateModif($date);
        $medicament->setImgMedicament($request->get('img_medicament'));

        $em->persist($medicament);
        $em->flush();
        $jsonContent = $Normalizer->normalize($medicament, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/MedicamentremoveJSON/{id}", name="/MedicamentremoveJSON")
     */
    public function removeJSON($id,Request $request, NormalizerInterface $normalizer)
    {
        $em=$this->getDoctrine()->getManager();
        $medicament=$em->getRepository(Medicament::class)->find($id);
        $em->remove($medicament);
        $em->flush();
        $jsonContent=$normalizer->normalize($medicament,'json',['groups' => 'post:read']);
        return new Response("Medicament Deleted".json_encode($jsonContent));
    }

    /**
     * @Route("/MedicamentmodifierJSON/{id}", name="MedicamentmodifierJSON")
     */
    public function modifierJSON(Request $request, NormalizerInterface $normalizer,$id)
    {
        $em=$this->getDoctrine()->getManager();
        $medicament=$em->getRepository(Medicament::class)->find($id);

        $medicament->setNomMedicament($request->get('nomMedicament'));
        $medicament->setDescmedicament($request->get('descmedicament'));
        $medicament->setDispo($request->get('dispo'));
        $date = new \DateTime("now");
        $medicament->setDateModif($date);

        $em->flush();
        $jsonContent=$normalizer->normalize($medicament,'json',['groups' => 'post:read']);
        return new Response("Information updated".json_encode($jsonContent));

    }

    /**
     * @Route ("/rechercheMedicamentJSON/{data}",name="rechercheMedicamentJSON")
     */
    public function rechercheMedicamentJSON($data,MedicamentRepository $repository,NormalizerInterface $normalizer)
    {
        $medicament = $repository->SearchName($data);
        $jsonContent = $normalizer->normalize($medicament, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @param MedicamentRepository $repository
     * @return Response
     * @Route ("/trimedicamentJSON",name="trimedicamentJSON")
     */
    public function triordonnanceJSON (MedicamentRepository $repository,NormalizerInterface $normalizer)
    {
        $medicament = $repository->OrderByNameQB();
        $jsonContent = $normalizer->normalize($medicament, 'json', ['groups' => 'post:read']);
        return new Response(json_encode($jsonContent));
    }

    /**
     * @Route("/medicament", name="medicament")
     */
    public function index(SessionInterface $session): Response
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }

        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        return $this->render('medicament/index.html.twig', [
            'controller_name' => 'MedicamentController', 'iduser'=>$iduser,
            'user'=>$userfind,]);
    }
    /**
     * @Route("/listmedicament", name="listmedicament")
     */
     public function listmedicament(SessionInterface $session,Request $request ,PaginatorInterface $paginator){
         $user=$session->get('user');
         if(is_null($user))
         {
             return $this->redirectToRoute('connexion');
         }
         $iduser=$user->getId();

         $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
         $medicament= $this->getDoctrine()->getRepository(Medicament::class)->findAll();
         $medicament = $paginator->paginate($medicament,
             $request->query->getInt('page', 1),
             // Items per page
             5);
         return $this->render('medicament/listmedicament.html.twig',array('listmedicament'=>$medicament, 'iduser'=>$iduser,'user'=>$userfind,));
     }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route ("/Medicamentajout",name="Medicamentajout")
     */
    public function Medicamentajout(SessionInterface $session,Request $request)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $Medicament = new Medicament();
        $form = $this->createForm(MedicamentType::class, $Medicament);
        $form->add('ajouter', SubmitType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            /** @var UploadedFile $brochureFile */
            $brochureFile = $form->get('img_medicament')->getData();
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $brochureFile->guessExtension();
                try {
                    $brochureFile->move(
                        $this->getParameter('kernel.project_dir').'/public/uploads/brochures',
                        $newFilename
                    );
                } catch (FileException $e) {
                }


                $Medicament->setImgMedicament($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($Medicament);
            $em->flush();
            return $this->redirectToRoute("listmedicament",['iduser'=>$iduser,'user'=>$userfind,]);
        }
        return $this->render('medicament/Medicamentajout.html.twig',
            ['Medicamentajout'=> $form->createView(), 'iduser'=>$iduser,'user'=>$userfind,]);
    }

    /**
     * @Route("/Medicamentremove/{id}", name="Medicamentremove")
     */
    public function remove(SessionInterface $session,$id){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $medicament=$this->getDoctrine()->getRepository( Medicament::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($medicament);
        $em->flush();
        return $this->redirectToRoute("listmedicament",['iduser'=>$iduser,'user'=>$userfind,]);
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/Medicamentmodifier/{id}",name="Medicamentmodifier")
     */
    public function medicamentmodifier (SessionInterface $session,$id, Request $request)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $Medicamentfind = $this->getDoctrine()
            ->getRepository(Medicament::class)
            ->findBy(['id' => $id])[0];
        $form = $this->createForm(MedicamentType::class,$Medicamentfind);
        $form->add('Modifier', SubmitType::class, ['label' => 'Modifier']);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid())
        {
            /** @var UploadedFile $brochureFile */
            $brochureFile = $form->get('img_medicament')->getData();
            if ($brochureFile) {
                $originalFilename = pathinfo($brochureFile->getClientOriginalName(), PATHINFO_FILENAME);

                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $brochureFile->guessExtension();
                try {
                    $brochureFile->move(
                        $this->getParameter('kernel.project_dir').'/public/uploads/brochures',
                        $newFilename
                    );
                } catch (FileException $e) {
                }


                $Medicamentfind->setImgMedicament($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("listmedicament",['iduser'=>$iduser,'user'=>$userfind,]);
        }

        return $this->render('medicament/Medicamentmodifier.html.twig', [
            'editmedicament' => $form->createView(), 'iduser'=>$iduser,'user'=>$userfind,]);
    }

    /**
     * @Route ("/recherchemed",name="recherchemed")
     */
    public function recherche(SessionInterface $session,MedicamentRepository $repository , Request $request ,PaginatorInterface $paginator)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $data=$request->get('search');
        $medicament=$repository->SearchName($data);
        $medicament = $paginator->paginate($medicament,
            $request->query->getInt('page', 1),
            // Items per page
            5);
        return $this->render('medicament/listmedicament.html.twig',array('listmedicament'=>$medicament, 'iduser'=>$iduser,'user'=>$userfind,));
    }



    /**
     * @Route("/frontlistmedicament", name="frontlistmedicament")
     */
    public function frontlistmedicament (SessionInterface $session,Request $request ,PaginatorInterface $paginator){
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $medicament= $this->getDoctrine()->getRepository(Medicament::class)->findAll();
        $medicament = $paginator->paginate($medicament,
            $request->query->getInt('page', 1),
            // Items per page
            5);
        return $this->render('medicament/Front_listmedicament.html.twig',array('frontlistmedicament'=>$medicament, 'iduser'=>$iduser,'user'=>$userfind,));
    }
    /**
     * @Route ("/recherchemed2",name="recherchemed2")
     */
    public function recherche2(SessionInterface $session,MedicamentRepository $repository , Request $request, PaginatorInterface $paginator)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $data=$request->get('search');
        $medicament=$repository->SearchName($data);
        $medicament = $paginator->paginate($medicament,
            $request->query->getInt('page', 1),
            // Items per page
            5);
        return $this->render('medicament/Front_listmedicament.html.twig',array('frontlistmedicament'=>$medicament, 'iduser'=>$iduser,'user'=>$userfind,));
    }

    /**
     * @param MedicamentRepository $repository
     * @return Response
     * @Route ("/trimedicament",name="trimedicament")
     */
    public function orderbynameqb (SessionInterface $session,MedicamentRepository $repository, Request $request,PaginatorInterface $paginator)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }

        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $medicament=$repository->OrderByNameQB();
        $medicament = $paginator->paginate($medicament,
            $request->query->getInt('page', 1),
            // Items per page
            5);
        return $this->render('medicament/listmedicament.html.twig',array('listmedicament'=>$medicament, 'iduser'=>$iduser,'user'=>$userfind,));
    }

    /**
     * @Route("/PDF",name="PDF")
     */
    public function hello(SessionInterface $session)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);
        $Medicament = $this->getDoctrine()->getRepository(Medicament::class)->findAll();
        $html = $this->renderView('medicament/PDFmedicament.html.twig', ['user'=>$userfind,
            'PDFmedicament' => $Medicament, 'iduser'=>$iduser,
        ]);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A3', 'portrait');
        $dompdf->render();
        $dompdf->stream("mypdf.pdf", [
            "Attachment" => false
        ]);
    }

    private function getData(): array
    {
        /**
         * @var $medicament Medicament[]
         */
        $list = [];
        $medicaments = $this->getDoctrine()->getRepository(Medicament::class)->findAll();

        foreach ($medicaments as $medicament) {
            $list[] = [
                $medicament->getId(),
                $medicament->getNomMedicament(),
                $medicament->getDescmedicament(),
                $medicament->getDateModif()
            ];
        }
        return $list;
    }

    /**
     * @Route("/Excel",  name="Excel")
     */
    public function export(SessionInterface $session)
    {
        $user=$session->get('user');
        if(is_null($user))
        {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setTitle('La liste des médicaments');
        $sheet->getCell('A1')->setValue('Id');
        $sheet->getCell('B1')->setValue('NomMedicament');
        $sheet->getCell('C1')->setValue('Description du médicament');
        $sheet->getCell('D1')->setValue('Date de modification');

        // Increase row cursor after header write
        $sheet->fromArray($this->getData(),null, 'A2', true);


        $writer = new Xlsx($spreadsheet);

        $writer->save('medicaments.xlsx');
        $this->addFlash('success', 'Votre fichier Excel a été crée avec succès!');

        return $this->redirectToRoute('listmedicament',[ 'iduser'=>$iduser,'user'=>$userfind]);
    }
}
