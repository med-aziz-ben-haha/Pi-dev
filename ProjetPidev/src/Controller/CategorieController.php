<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;


class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie", name="categorie")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/CategorieController.php',
        ]);
    }

    /**
     * @Route("/listcategories", name="listcategorie")
     */
    public function listcategories()
    {
$categories=$this->getDoctrine()->getManager()->getRepository(Categorie::class)->findAll();
$serializer=new Serializer([new ObjectNormalizer()]);
$formatted =$serializer->normalize($categories);
return new JsonResponse($formatted);
    }

    /**
     * @Route("/addcategorie", name="addcategorie")
     * @Method("POST")
     */
    public function addcategorie(Request $request)
    {
        $categorie = new Categorie();
        $nom=$request->query->get("nom");
        $description=$request->query->get("description");
        $em=$this->getDoctrine()->getManager();
        $categorie->setNom($nom);
        $categorie->setDescription($description);
        $em->persist($categorie);
        $em->flush();
        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted =$serializer->normalize($categorie);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/deletecategorie", name="deletecategorie")
     * @Method ("DELETE")
     */
    public function deletecategorie(Request $request)
    {
        $id=$request->get("id");

        $em=$this->getDoctrine()->getManager();
        $cat=$em->getRepository(categorie::class)->find($id);

        if($cat != null){
            $em->remove($cat);
            $em->flush();

            $serializer=new Serializer([new ObjectNormalizer()]);
            $formatted =$serializer->normalize("supprimee");
            return new JsonResponse($formatted);
        }



        return new JsonResponse("invalide");
    }

    /**
     * @Route("/updatecategorie", name="updatecategorie")
     * @Method ("PUT")
     */
    public function updatecategorie(Request $request)
    {

        $em=$this->getDoctrine()->getManager();
        $cat=$this->getDoctrine()->getManager()->getRepository(categorie::class)->find($request->get("id"));

        $cat->setNom($request->get("nom"));
        $cat->setDescription($request->get("description"));

            $em->persist($cat);
            $em->flush();

            $serializer=new Serializer([new ObjectNormalizer()]);
            $formatted =$serializer->normalize($cat);




        return new JsonResponse($formatted);
    }

}
