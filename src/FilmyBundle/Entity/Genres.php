<?php

namespace FilmyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Genres
 */
class Genres
{
    /**
     * @var integer
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     * @ORM\Column(name="genre", type="string", length=255)
     */
    private $genre;

    /**
     * @var integer
     * @ORM\Column(name="Id_film", type="integer")
     * @ORM\ManyToMany(targetEntity="FilyBundle\Entity\Movies", mappedBy="movies")
     */
    private $idFilm;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set genre
     *
     * @param string $genre
     * @return Genres
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string 
     */
    public function getGenre()
    {
        return $this->genre;
    }

    /**
     * Set idFilm
     *
     * @param integer $idFilm
     * @return Genres
     */
    public function setIdFilm($idFilm)
    {
        $this->idFilm = $idFilm;

        return $this;
    }

    /**
     * Get idFilm
     *
     * @return integer 
     */
    public function getIdFilm()
    {
        return $this->idFilm;
    }
}
