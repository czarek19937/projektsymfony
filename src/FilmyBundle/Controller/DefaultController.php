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
        

        $movies = $this->getDoctrine()
            ->getRepository('FilmyBundle:Movies')->findAll();
            //pobierasz wszystkich aktorow
        $actors = $this->getDoctrine()
            ->getRepository('FilmyBundle:Actors')->findAll();

        return $this->render('FilmyBundle:Default:query.html.twig', array(
        'moviesdisplay' => $movies,
        'actors' => $actors

));
        //Potem w TWIGU przy wyswietlaniu filmu, musisz wstawić do pętli wszystkich aktorów i wyświetlić tylko tych co mają ID filmu takie same co wyświetlany film
    
        
    }

    public function MoviesDisplayAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $movie = $em->getRepository('FilmyBundle:Movies')->find($id);
        $em = $this->getDoctrine()->getManager();
        $actor = $em->getRepository('FilmyBundle:Actors')->findAll();

        if (!$movie) {
            throw $this->createNotFoundException('Unable to find Thread entity.');
        }
        return $this->render('FilmyBundle:Movies:movie.html.twig', array(
            'movies' => $movie,
            'actors' => $actor
        ));
        
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

    public function ReviewsDisplayAction()
    {
        $movie = $this->getDoctrine()
            ->getRepository('FilmyBundle:Movies')->findAll();
            //pobierasz wszystkich aktorow
        $review = $this->getDoctrine()
            ->getRepository('FilmyBundle:Review')->findAll();

        return $this->render('FilmyBundle:Reviews:reviewsdisplay.html.twig', array(
        'movies' => $movie,
        'reviews' => $review
        ));
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



    public function OjciecChrzestnyAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $qb = $em->createQueryBuilder();
        $em = $qb->getEntityManager();
        $query = $em->createQuery( 'SELECT a FROM FilmyBundle:Movies a' );//druga opcja zapytan
        $moviesdisplay = $query->getResult(); // array of User objects
        return $this->render('FilmyBundle:Movies:ojciecchrzestny.html.twig', array('moviesdisplay' => $moviesdisplay));
    }



    public function CommedyAction()
    {
        return $this->render('FilmyBundle:Types:Commedy.html.twig', array());
    }



}
