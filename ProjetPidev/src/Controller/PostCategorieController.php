<?php

namespace App\Controller;
use App\Entity\CategoriePost;
use App\Entity\User;
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
use Symfony\Component\HttpFoundation\Session\SessionInterface;



class PostCategorieController extends AbstractController
{
    /**
     * @Route("postCategorie", name="postcategorie")
     */
    public function index(SessionInterface $session): Response
    {   $user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        //$categoriePost = new CategoriePost();
        //$form = $this->createForm(CategoriePostType::class, $categoriePost);
        return $this->render('post_categorie/index.html.twig', [
            //'form' => $form ->createView(),
            'controller_name' => 'PostCategorieController','iduser' =>$iduser,'user'=>$userfind,
        ]);
    }

    /**
     * @param CategoriePostRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficherCategoriePost", name="afficherCategoriePost")
     */
    public function afficherCategoriePost(CategoriePostRepository $repository,SessionInterface $session){
        $user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        //$repo=$this->getDoctrine()->getRepository(CategoriePostRepository::class);
        $categoriePost=$repository->findAll();

        return $this->render('post_categorie/listcategoriePost.html.twig',

            ['categoriePost'=>$categoriePost,'iduser' =>$iduser,'user'=>$userfind,]);
    }


    /**
     * @param CategoriePostRepository $repository
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route ("/afficherCategoriePostFront", name="afficherCategoriePostFront")
     */
    public function afficherCategoriePostFront(CategoriePostRepository $repository, PosttRepository $repositoryy,SessionInterface $session){
        //$repo=$this->getDoctrine()->getRepository(CategoriePostRepository::class);
        $user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
        $categoriePost=$repository->findAll();
        $postt=$repositoryy->findAll();

        return $this->render('post_front/index.html.twig',

            ['categoriePost'=>$categoriePost, 'postt'=>$postt,'iduser' =>$iduser,'user'=>$userfind,]);
    }


/**
 * @Route ("/SuppCatPost/{id}",name="SuppCatPost")
 */
public function Supp($id,SessionInterface $session)
{   $user=$session->get('user');
    if(is_null($user)) {
        return $this->redirectToRoute('connexion');
    }
    $iduser=$user->getId();
    $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
    $categorie = $this->getDoctrine()->getRepository(CategoriePost::class)->find($id);
    $em=$this->getDoctrine()->getManager();
    $em->remove($categorie);
    $em->flush();
    return $this->redirectToRoute("afficherCategoriePost",['iduser' =>$iduser,'user'=>$userfind,]);
}

/**
 * @Route ("/add",name="add")
 */
    public function add(\Symfony\Component\HttpFoundation\Request $request,SessionInterface $session){
        $user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);
    $categorie= new CategoriePost();
    $form = $this->createForm(CategoriePostType::class,$categorie);
    $form->handleRequest($request);
    if ($form->isSubmitted() && $form->isValid() ){
        $em = $this->getDoctrine()->getManager();
        $em->persist($categorie);
        $em->flush();
        return $this->redirectToRoute('afficherCategoriePost',['iduser' =>$iduser,'user'=>$userfind,]);
    }
    return $this->render("post_categorie/ajouterCategoriePost.html.twig",array("form"=>$form->createView(),'iduser' =>$iduser,'user'=>$userfind));
}

    /**
     * @Route("/updateCategorie/{id}", name="updateCategorie")
     */
    public function updateCategorie(\Symfony\Component\HttpFoundation\Request $request, $id,SessionInterface $session){
        $user=$session->get('user');
        if(is_null($user)) {
            return $this->redirectToRoute('connexion');
        }
        $iduser=$user->getId();
        $userfind = $this->getDoctrine()->getRepository(User::class)->find($iduser);

        $categorie=  $this->getDoctrine()->getManager()->getRepository(CategoriePost::class)->find($id);

        $form = $this->createForm(CategoriePostType::class,$categorie);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid() ){
            $em = $this->getDoctrine()->getManager();
            $em->flush();//mise a jour
            return $this->redirectToRoute('afficherCategoriePost',['iduser' =>$iduser,'user'=>$userfind,]);
        }
        return $this->render("post_categorie/ajouterCategoriePost.html.twig",array("form"=>$form->createView(),'iduser' =>$iduser,'user'=>$userfind));
    }







}














