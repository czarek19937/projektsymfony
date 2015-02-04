<?php

namespace FilmyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FilmyBundle:Default:index.html.twig', array());
    }
    public function HelloWorldAction($name)
    {
        return $this->render('FilmyBundle:Default:helloworld.html.twig', array('name' => $name));
    }
    public function GladiatorAction()
    {
        return $this->render('FilmyBundle:Movies:Gladiator.html.twig', array());
    }
    public function MatrixAction()
    {
        return $this->render('FilmyBundle:Movies:Matrix.html.twig', array());
    }
    public function CommedyAction()
    {
        return $this->render('FilmyBundle:Types:Commedy.html.twig', array());
    }
}
