<?php
namespace App\Controller;

use App\Entity\Wydarzenia;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller{
    /**
    * @Route("/", name="strona_glowna")
    * @Method({"GET"})
    */
    public function index(){
        
        $wydarzenia=$this->getDoctrine()->getRepository(Wydarzenia::class)->findAll();
        
        
        return $this->render('articles/index.html.twig',array('wydarzenia'=>$wydarzenia));
    }
    
    /**
    * @Route("/wydarzenie/{id}", name="wydarzenie")
    * @Method({"GET"})
    */
    public function wydarzenie($id){
        
        $wydarzenie=$this->getDoctrine()->getRepository(Wydarzenia::class)->find($id);
        
        
        return $this->render('articles/wydarzenie.html.twig',array('wydarzenie'=>$wydarzenie));
    }
    
   /**
    * @Route("/save")
   
    */
    /*
    public function save() {
       $entityManager = $this->getDoctrine()->getManager();

       $wydarzenia = new Wydarzenia();
       $wydarzenia->setTitle('Dni Rząśni');
       $wydarzenia->setData_dodania('2019-10-23');
       $wydarzenia->setTitle_folder('dnirzasni');
       $wydarzenia->setOpis_krotki('Opis krótki 2');
       $wydarzenia->setOpis_dlugi('Opis długi 2');
       $wydarzenia->setIlosc_zdjec('1');
       $wydarzenia->setDodal('Moderator');
      

       $entityManager->persist($wydarzenia);

       $entityManager->flush();

       return new Response('Saved an article with the id of  '.$wydarzenia->getId());
     }
    */
    
    
    /**
    * @Route("/galeria")
    * @Method({"GET"})
    */
    public function galeria(){
        return $this->render('articles/galeria.html.twig');
    }
    /**
    * @Route("/galeria_yt")
    * @Method({"GET"})
    */
    public function galeria_yt(){
        return $this->render('articles/galeria_yt.html.twig');
    }
    /**
    * @Route("/repertuar")
    * @Method({"GET"})
    */
    public function repertuar(){
        return $this->render('articles/repertuar.html.twig');
    }
    /**
    * @Route("/posluchaj_nas")
    * @Method({"GET"})
    */
    public function posluchaj_nas(){
        return $this->render('articles/posluchaj_nas.html.twig');
    }
    /**
    * @Route("/informacje")
    * @Method({"GET"})
    */
    public function informacje(){
        return $this->render('articles/informacje.html.twig');
    }
    /**
    * @Route("/osiagniecia")
    * @Method({"GET"})
    */
    public function osiagniecia(){
        return $this->render('articles/osiagniecia.html.twig');
    }
    /**
    * @Route("/czlonkowie")
    * @Method({"GET"})
    */
    public function czlonkowie(){
        return $this->render('articles/czlonkowie.html.twig');
    }
    /**
    * @Route("/kapelmistrz")
    * @Method({"GET"})
    */
    public function kapelmistrz(){
        return $this->render('articles/kapelmistrz.html.twig');
    }
    /**
    * @Route("/kontakt")
    * @Method({"GET"})
    */
    public function kontakt(){
        return $this->render('articles/kontakt.html.twig');
    }
}