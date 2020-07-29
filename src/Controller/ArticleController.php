<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ArticleController extends Controller{
    /**
    * @Route("/")
    * @Method({"GET"})
    */
    public function index(){
        return $this->render('articles/index.html.twig');
    }
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