<?php

namespace FilmyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Collections\ArrayCollection;
use FilmyBundle\Entity\Review;
use FilmyBundle\Form\ReviewType;
use FilmyBundle\Entity\Movies;
use FilmyBundle\Form\MoviesType;
use FilmyBundle\Entity\Actors;
use FilmyBundle\Form\ActorsType;
use FilmyBundle\Entity\Orders;
use FilmyBundle\Form\OrdersType;
use Symfony\Component\HttpFoundation\Response;
use Doctrine\ORM\Query;
use Doctrine\ORM\Query\Lexer;
use Doctrine\ORM\Query\ResultSetMapping;



class DefaultController extends Controller
{
    public function indexAction()
    {
        
        $movies = $this->getDoctrine()
            ->getRepository('FilmyBundle:Movies')->findBy(array(), array('id' => 'asc'));
            //pobierasz wszystkich aktorow
        $actors = $this->getDoctrine()
            ->getRepository('FilmyBundle:Actors')->findAll();
        $review = $this->getDoctrine()->getEntityManager()
            ->getRepository('FilmyBundle:Review')->findAll();
        $genres = $this->getDoctrine()
            ->getRepository('FilmyBundle:Genres')->findAll();


        $em= $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery(
                "SELECT m, COUNT(r.idFilm) as c
                FROM FilmyBundle:Review r
                INNER Join FilmyBundle:Movies m WITH r.idFilm=m.id
                Group by r.idFilm
                Order by c desc
                ");
        $opinion = $query->getArrayResult();

        $query = $em->createQuery(
                "SELECT g.genre
                FROM FilmyBundle:Genres g
                INNER Join FilmyBundle:Movies m WITH g.idFilm=m.id
                Group by g.genre
                
                ");


        $kind = $query->getArrayResult();

        $query = $em->createQuery(
                "SELECT g.genre, m.title, m.id, m.image
                FROM FilmyBundle:Genres g
                INNER Join FilmyBundle:Movies m WITH g.idFilm=m.id
                
                
                ");
        $variety = $query->getArrayResult();
        


        return $this->render('FilmyBundle:Default:index.html.twig', array(
        'moviesdisplay' => $movies,
        'actors' => $actors,
        'reviews' => $review,
        'genres' => $genres,
        'opinion' => $opinion,
        'kind' => $kind,
        'variety' => $variety

));
    }



    public function QueryAction()
    {
        

        $movies = $this->getDoctrine()
            ->getRepository('FilmyBundle:Movies')->findBy(array(), array('id' => 'asc'));
            //pobierasz wszystkich aktorow
        $actors = $this->getDoctrine()
            ->getRepository('FilmyBundle:Actors')->findAll();
        $review = $this->getDoctrine()->getEntityManager()
            ->getRepository('FilmyBundle:Review')->findAll();
        $genres = $this->getDoctrine()
            ->getRepository('FilmyBundle:Genres')->findAll();


        $em= $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery(
                "SELECT m, COUNT(r.idFilm) as c
                FROM FilmyBundle:Review r
                INNER Join FilmyBundle:Movies m WITH r.idFilm=m.id
                Group by r.idFilm
                Order by c desc
                ");
        $opinion = $query->getArrayResult();

        $query = $em->createQuery(
                "SELECT g.genre
                FROM FilmyBundle:Genres g
                INNER Join FilmyBundle:Movies m WITH g.idFilm=m.id
                Group by g.genre
                
                ");


        $kind = $query->getArrayResult();

        $query = $em->createQuery(
                "SELECT g.genre, m.title, m.id, m.image
                FROM FilmyBundle:Genres g
                INNER Join FilmyBundle:Movies m WITH g.idFilm=m.id
                
                
                ");
        $variety = $query->getArrayResult();
        


        return $this->render('FilmyBundle:Default:query.html.twig', array(
        'moviesdisplay' => $movies,
        'actors' => $actors,
        'reviews' => $review,
        'genres' => $genres,
        'opinion' => $opinion,
        'kind' => $kind,
        'variety' => $variety

));
        
    
        
    }

    public function MoviesDisplayAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $movie = $em->getRepository('FilmyBundle:Movies')->find($id);
        $em = $this->getDoctrine()->getManager();
        $actor = $em->getRepository('FilmyBundle:Actors')->findAll();
        $genres = $this->getDoctrine()
            ->getRepository('FilmyBundle:Genres')->findAll();

        if (!$movie) {
            throw $this->createNotFoundException('Unable to find Thread entity.');
        }
        return $this->render('FilmyBundle:Movies:movie.html.twig', array(
            'movies' => $movie,
            'actors' => $actor,
            'genres' => $genres
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
            
            return $this->redirect($this->generateUrl('filmy_homepage'));
            
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
        /*$em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("FilmyBundle:Movies");
        $em = $this->getDoctrine()->getManager();
        $actor = $em->getRepository('FilmyBundle:Actors')->findAll();
    
        $moviesview = $repository->findAll();*/
       $movies = $this->getDoctrine()
            ->getRepository('FilmyBundle:Movies')->findBy(array(), array('id' => 'asc'));
            //pobierasz wszystkich aktorow
        $actors = $this->getDoctrine()
            ->getRepository('FilmyBundle:Actors')->findAll();
        $review = $this->getDoctrine()->getEntityManager()
            ->getRepository('FilmyBundle:Review')->findAll(array(), array('idFilm'=>'asc'));
        $genres = $this->getDoctrine()
            ->getRepository('FilmyBundle:Genres')->findAll();
        $users = $this->getDoctrine()
            ->getRepository('FilmyBundle:User')->findAll();
        

        $email = $this->getUser()->getEmail();
        $id = $this->getUser()->getId();
        echo $id,$email;


        $em= $this->getDoctrine()->getEntityManager();
        
        
        $query = $em->createQuery(
                "SELECT u, o
                FROM FilmyBundle:User u
                INNER Join FilmyBundle:Orders o WITH o.idClient=u.id
                
                
                ");
        $users = $query->getArrayResult();
        $sql=$query->getSql();
        $parameters=$query->getParameters();
        echo $sql;
        /*echo $movies[0]['title'];*/
        echo "<pre>";
        print_r($users);
        echo "</pre>";
        
    
        

        return $this->render('FilmyBundle:Default:moviesview.html.twig', array(
        'movies' => $movies,
        'actors' => $actors,
        'reviews' => $review,
        'genres' => $genres,
        'users' => $users
));

/*
        $movies = $this->getDoctrine()
            ->getRepository('FilmyBundle:Movies')->findOneBytitle('Django');
        $actors = $this->getDoctrine()
            ->getRepository('FilmyBundle:Actors')->findByidFilm($movies->getId());
        $genres = $this->getDoctrine()
            ->getRepository('FilmyBundle:Genres')->findByidFilm($genres->getId());

        /*$query = $em->createQuery(
                "SELECT DISTINCT m.title, a.name 
                FROM FilmyBundle:Movies m INNER Join FilmyBundle:Actors a 
                WHERE a.idFilm=1
                and m.id=1
                "
        );

        $movies = $query->getArrayResult();
        $sql=$query->getSql();
        $parameters=$query->getParameters();
        echo $sql;
        /*echo $movies[0]['title'];*/
        /*echo "<pre>";
        print_r($movies);
        echo "</pre>";*/
        /*return $this->render('FilmyBundle:Default:moviesview.html.twig', array(
            'movies' => $movies,
            'actors' => $actors
            ));*/
    }


       /* return $this->render(
                            'FilmyBundle:Default:moviesview.html.twig', array( 'moviesview' => $moviesview));
        
    }*/


    public function OrdersListAction(Request $request)
    {
        $email = $this->getUser()->getEmail();
        $id = $this->getUser()->getId();

        
        $users = $this->getDoctrine()
            ->getRepository('FilmyBundle:User')->findOneByid($id);
        $orders = $this->getDoctrine()
            ->getRepository('FilmyBundle:Orders')->findByidClient($users->getId());
        $movies = $this->getDoctrine()
            ->getRepository('FilmyBundle:Movies')->findAll();
       /*      $movies = NULL;
            foreach ($orders as $orders ) {
                $movies = $this->getDoctrine()
            ->getRepository('FilmyBundle:Movies')->findByid($orders->getidFilm());
            }
        */
        $em= $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery(
                "SELECT u, o, m
                FROM FilmyBundle:User u
                INNER Join FilmyBundle:Orders o WITH o.idClient=u.id
                INNER Join FilmyBundle:Movies m WITH o.idFilm=m.id
                Where o.idClient=$id
                
                ");
        $relations = $query->getArrayResult();
        /*$sql=$query->getSql();
        $parameters=$query->getParameters();
        echo $sql;*/
        /*echo $movies[0]['title'];*/
        /*echo "<pre>";
        print_r($relations);
        echo "</pre>";*/
        

        return $this->render('FilmyBundle:Default:orderslist.html.twig', array(
        'movies' => $movies,
        'users' => $users,
        'orders' => $orders,
        'relations' => $relations
));
    }

    public function OrdersBuyAction(Request $request)
    {
        $email = $this->getUser()->getEmail();
        $id = $this->getUser()->getId();

        
        $users = $this->getDoctrine()
            ->getRepository('FilmyBundle:User')->findOneByid($id);
        $orders = $this->getDoctrine()
            ->getRepository('FilmyBundle:Orders')->findByidClient($users->getId());
        $movies = $this->getDoctrine()
            ->getRepository('FilmyBundle:Movies')->findAll();
       /*      $movies = NULL;
            foreach ($orders as $orders ) {
                $movies = $this->getDoctrine()
            ->getRepository('FilmyBundle:Movies')->findByid($orders->getidFilm());
            }
        */
        $em= $this->getDoctrine()->getEntityManager();
        $query = $em->createQuery(
                "SELECT u, o, m
                FROM FilmyBundle:User u
                INNER Join FilmyBundle:Orders o WITH o.idClient=u.id
                INNER Join FilmyBundle:Movies m WITH o.idFilm=m.id
                Where o.idClient=$id and o.status='Zapłacone'
                
                ");
        $relations = $query->getArrayResult();
        /*$sql=$query->getSql();
        $parameters=$query->getParameters();
        echo $sql;
        /*echo $movies[0]['title'];*/
        /*echo "<pre>";
        print_r($relations);
        echo "</pre>";*/
        

        return $this->render('FilmyBundle:Default:ordersbuy.html.twig', array(
        'movies' => $movies,
        'users' => $users,
        'orders' => $orders,
        'relations' => $relations
));
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
