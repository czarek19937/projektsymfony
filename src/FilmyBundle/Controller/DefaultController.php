<?php

namespace FilmyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FilmyBundle\Entity\Review;
use FilmyBundle\Form\ReviewType;
use FilmyBundle\Entity\Movies;
use FilmyBundle\Form\MoviesType;
use FilmyBundle\Entity\Actors;
use FilmyBundle\Form\ActorsType;
use FilmyBundle\Entity\Orders;
use FilmyBundle\Form\OrdersType;
use Symfony\Component\HttpFoundation\Response;


class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('FilmyBundle:Default:index.html.twig', array());
    }



    public function QueryAction()
    {
        $em = $this->getDoctrine()->getManager();
        $query = $em->createQuery(
                'SELECT p FROM FilmyBundle:Movies p WHERE p.price > :price ORDER BY p.price ASC'
        )->setParameter('price', '100');

        $movies = $query->getResult();
        
    }




    public function HelloWorldAction($name)
    {
        return $this->render('FilmyBundle:Default:helloworld.html.twig', array('name' => $name));
    }



    public function ReviewAction(Request $request)
    {

        $review = new Review();
        
        $form = $this ->createForm(new ReviewType(), $review);
        if ($request->isMethod('POST')
            && $form->handleRequest($request)
            && $form->isValid()
            )   {
            $em = $this->getDoctrine()->getManager();
            $em->persist($review);
            $em->flush();
            return $this->redirect($this->generateUrl('filmy_review'));
        }

            return $this->render('FilmyBundle:Default:review.html.twig', array('form'=>$form->createView()));

            $form->handleRequest($request);

    }



    public function MoviesAction(Request $request)
    {

        $movies = new Movies();
        
        $form = $this ->createForm(new MoviesType(), $movies);
        if ($request->isMethod('POST')
            && $form->handleRequest($request)
            && $form->isValid()
            )   {
            $em = $this->getDoctrine()->getManager();
            $em->persist($movies);
            $em->flush();
            return $this->redirect($this->generateUrl('filmy_movies'));
        }

            return $this->render('FilmyBundle:Default:movies.html.twig', array('form'=>$form->createView()));

            $form->handleRequest($request);

    }




    public function MoviesViewAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("FilmyBundle:Movies");

        $moviesview = $repository->findAll();

        return $this->render(
                            'FilmyBundle:Default:moviesview.html.twig', array( 'moviesview' => $moviesview));
        
    }




    public function ActorsAction(Request $request)
    {

        $actors = new Actors();
        
        $form = $this ->createForm(new ActorsType(), $actors);
        if ($request->isMethod('POST')
            && $form->handleRequest($request)
            && $form->isValid()
            )   {
            $em = $this->getDoctrine()->getManager();
            $em->persist($actors);
            $em->flush();
            return $this->redirect($this->generateUrl('filmy_actors'));
        }

            return $this->render('FilmyBundle:Default:actors.html.twig', array('form'=>$form->createView()));

            $form->handleRequest($request);

    }




    public function ActorsViewAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("FilmyBundle:Actors");

        $actorsview = $repository->findAll();

        return $this->render(
                            'FilmyBundle:Default:actorsview.html.twig', array( 'actorsview' => $actorsview));
        
    }



    public function OrdersAction(Request $request)
    {

        $orders = new Orders();
        
        $form = $this ->createForm(new OrdersType(), $orders);
        if ($request->isMethod('POST')
            && $form->handleRequest($request)
            && $form->isValid()
            )   {
            $em = $this->getDoctrine()->getManager();
            $em->persist($orders);
            $em->flush();
            return $this->redirect($this->generateUrl('filmy_orders'));
        }

            return $this->render('FilmyBundle:Default:orders.html.twig', array('form'=>$form->createView()));

            $form->handleRequest($request);

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
