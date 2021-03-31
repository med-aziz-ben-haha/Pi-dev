<?php

namespace App\Controller;
use App\Entity\CategoriePost;
use App\Form\CategoriePostType;
use App\Repository\CategoriePostRepository;
use App\Repository\PosttRepository;
use http\Env\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Ob\HighchartsBundle\Highcharts\Highcharts;



class PostCategorieController extends AbstractController
{
    /**
     * @Route("postCategorie", name="postcategorie")
     */
    public function index(): Response
    {
        //$categoriePost = new CategoriePost();
        //$form = $this->createForm(CategoriePostType::class, $categoriePost);
        return $this->render('post_categorie/index.html.twig', [
            //'form' => $form ->createView(),
            'controller_name' => 'PostCategorieController',
        ]);
    }

    /**
     * @param CategoriePostRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficherCategoriePost", name="afficherCategoriePost")
     */
    public function afficherCategoriePost(CategoriePostRepository $repository){
        //$repo=$this->getDoctrine()->getRepository(CategoriePostRepository::class);
        $categoriePost=$repository->findAll();

        return $this->render('post_categorie/listcategoriePost.html.twig',

            ['categoriePost'=>$categoriePost]);
    }


    /**
     * @param CategoriePostRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficherCategoriePostFront", name="afficherCategoriePostFront")
     */
    public function afficherCategoriePostFront(CategoriePostRepository $repository, PosttRepository $repositoryy){
        //$repo=$this->getDoctrine()->getRepository(CategoriePostRepository::class);
        $categoriePost=$repository->findAll();
        $postt=$repositoryy->findAll();

        return $this->render('post_front/index.html.twig',

            ['categoriePost'=>$categoriePost, 'postt'=>$postt]);
    }


/**
 * @Route ("/Supp/{id}",name="Supp")
 */
public function Supp($id)
{
    $categorie = $this->getDoctrine()->getRepository(CategoriePost::class)->find($id);
    $em=$this->getDoctrine()->getManager();
    $em->remove($categorie);
    $em->flush();
    return $this->redirectToRoute("afficherCategoriePost");
}

/**
 * @Route ("/add",name="add")
 */
    public function add(\Symfony\Component\HttpFoundation\Request $request){
    $categorie= new CategoriePost();
    $form = $this->createForm(CategoriePostType::class,$categorie);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid() ){
        $em = $this->getDoctrine()->getManager();
        $em->persist($categorie);
        $em->flush();
        return $this->redirectToRoute('afficherCategoriePost');
    }
    return $this->render("post_categorie/ajouterCategoriePost.html.twig",array("form"=>$form->createView()));
}

    /**
     * @Route("/updateCategorie/{id}", name="updateCategorie")
     */
    public function updateCategorie(\Symfony\Component\HttpFoundation\Request $request, $id){
        $categorie=  $this->getDoctrine()->getManager()->getRepository(CategoriePost::class)->find($id);

        $form = $this->createForm(CategoriePostType::class,$categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ){
            $em = $this->getDoctrine()->getManager();
            $em->flush();//mise a jour
            return $this->redirectToRoute('afficherCategoriePost');
        }
        return $this->render("post_categorie/ajouterCategoriePost.html.twig",array("form"=>$form->createView()));
    }







}














