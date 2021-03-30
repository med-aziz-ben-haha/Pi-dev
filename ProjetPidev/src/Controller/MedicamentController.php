<?php

namespace App\Controller;

use App\Entity\Medicament;
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

class MedicamentController extends AbstractController
{
    /**
     * @Route("/medicament", name="medicament")
     */
    public function index(): Response
    {
        return $this->render('medicament/index.html.twig', [
            'controller_name' => 'MedicamentController',
        ]);
    }
    /**
     * @Route("/listmedicament", name="listmedicament")
     */
     public function listmedicament(Request $request ,PaginatorInterface $paginator){
         $medicament= $this->getDoctrine()->getRepository(Medicament::class)->findAll();
         $medicament = $paginator->paginate($medicament,
             $request->query->getInt('page', 1),
             // Items per page
             5);
         return $this->render('medicament/listmedicament.html.twig',array('listmedicament'=>$medicament));
     }

    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     * @Route ("/Medicamentajout",name="Medicamentajout")
     */
    public function Medicamentajout(Request $request)
    {
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
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }


                $Medicament->setImgMedicament($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->persist($Medicament);
            $em->flush();
            return $this->redirectToRoute("listmedicament");
        }
        return $this->render('medicament/Medicamentajout.html.twig',
            ['Medicamentajout'=> $form->createView()]);
    }

    /**
     * @Route("/Medicamentremove/{id}", name="Medicamentremove")
     */
    public function remove($id){
        $medicament=$this->getDoctrine()->getRepository( Medicament::class)->find($id);
        $em=$this->getDoctrine()->getManager();
        $em->remove($medicament);
        $em->flush();
        return $this->redirectToRoute("listmedicament");
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/Medicamentmodifier/{id}",name="Medicamentmodifier")
     */
    public function medicamentmodifier ($id, Request $request)
    {
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
                        $this->getParameter('brochures_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                }


                $Medicamentfind->setImgMedicament($newFilename);
            }
            $em = $this->getDoctrine()->getManager();
            $em->flush();
            return $this->redirectToRoute("listmedicament");
        }

        return $this->render('medicament/Medicamentmodifier.html.twig', [
            'editmedicament' => $form->createView()]);
    }

    /**
     * @Route ("/recherchemed",name="recherchemed")
     */
    public function recherche(MedicamentRepository $repository , Request $request ,PaginatorInterface $paginator)
    {
        $data=$request->get('search');
        $medicament=$repository->SearchName($data);
        $medicament = $paginator->paginate($medicament,
            $request->query->getInt('page', 1),
            // Items per page
            5);
        return $this->render('medicament/listmedicament.html.twig',array('listmedicament'=>$medicament));
    }



    /**
     * @Route("/frontlistmedicament", name="frontlistmedicament")
     */
    public function frontlistmedicament (Request $request ,PaginatorInterface $paginator){
        $medicament= $this->getDoctrine()->getRepository(Medicament::class)->findAll();
        $medicament = $paginator->paginate($medicament,
            $request->query->getInt('page', 1),
            // Items per page
            5);
        return $this->render('medicament/Front_listmedicament.html.twig',array('frontlistmedicament'=>$medicament));
    }
    /**
     * @Route ("/recherchemed2",name="recherchemed2")
     */
    public function recherche2(MedicamentRepository $repository , Request $request, PaginatorInterface $paginator)
    {
        $data=$request->get('search');
        $medicament=$repository->SearchName($data);
        $medicament = $paginator->paginate($medicament,
            $request->query->getInt('page', 1),
            // Items per page
            5);
        return $this->render('medicament/Front_listmedicament.html.twig',array('frontlistmedicament'=>$medicament));
    }

    /**
     * @param MedicamentRepository $repository
     * @return Response
     * @Route ("/trimedicament",name="trimedicament")
     */
    public function orderbynameqb (MedicamentRepository $repository, Request $request,PaginatorInterface $paginator)
    {
        $medicament=$repository->OrderByNameQB();
        $medicament = $paginator->paginate($medicament,
            $request->query->getInt('page', 1),
            // Items per page
            5);
        return $this->render('medicament/listmedicament.html.twig',array('listmedicament'=>$medicament));
    }

    /**
     * @Route("/PDF",name="PDF")
     */
    public function hello()
    {
        $pdfOptions = new Options();
        $pdfOptions->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($pdfOptions);
        $Medicament = $this->getDoctrine()->getRepository(Medicament::class)->findAll();
        $html = $this->renderView('medicament/PDFmedicament.html.twig', [
            'PDFmedicament' => $Medicament
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
    public function export()
    {
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

        return $this->redirectToRoute('listmedicament');
    }
}
