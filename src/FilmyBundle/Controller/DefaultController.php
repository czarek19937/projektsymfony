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
}
