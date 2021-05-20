<?php

namespace App\Controller;

use App\Entity\Article;
use App\Repository\ArticleRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\SerializerInterface;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article", name="article")
     */
    public function index(): Response
    {
        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/ArticleController.php',
        ]);
    }

    /**
     * @Route("/listarticles", name="listarticle")
     */
    public function listarticles()
    {
        $categories=$this->getDoctrine()->getManager()->getRepository(Article::class)->findAll();
        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted =$serializer->normalize($categories);
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/addarticle", name="addarticle")
     * @Method("POST")
     */
    public function addcarticle(Request $request)
    {
        $article = new Article();
        $title=$request->query->get("titre");
        $description=$request->query->get("description");
        $content=$request->query->get("contenu");
        $type=$request->query->get("type");
        $catid=$request->query->get("categorie_id");
        $img=$request->query->get("image");
        $vue=$request->query->get("vues");
        $em=$this->getDoctrine()->getManager();
        $article ->setTitre($title);
        $article ->setDescription($description);
        $article->setContenu($content);
        $article->setType($type);
        $article->setCategorieId($catid);
        $article->setImage($img);
        $article->setVues($vue);
        $em->persist($article );
        $em->flush();
        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted =$serializer->normalize($article );
        return new JsonResponse($formatted);
    }

    /**
     * @Route("/deletearticle", name="deletearticle")
     * @Method ("DELETE")
     */
    public function deletearticle(Request $request)
    {
        $id=$request->get("id");

        $em=$this->getDoctrine()->getManager();
        $cat=$em->getRepository(article::class)->find($id);

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
     * @Route("/updatearticle", name="updatearticle")
     * @Method ("PUT")
     */
    public function updatearticle(Request $request)
    {

        $em=$this->getDoctrine()->getManager();
        $cat=$this->getDoctrine()->getManager()->getRepository(article::class)->find($request->get("id"));

        $title=$request->get("titre");
        $description=$request->get("description");
        $content=$request->get("contenu");
        $type=$request->get("type");
        $vue=$request->get("vues");
        $cat ->setTitre($title);
        $cat ->setDescription($description);
        $cat->setContenu($content);
        $cat->setType($type);
        $cat->setVues($vue);
        $em->persist($cat);
        $em->flush();

        $serializer=new Serializer([new ObjectNormalizer()]);
        $formatted =$serializer->normalize($cat);




        return new JsonResponse($formatted);
    }




}
