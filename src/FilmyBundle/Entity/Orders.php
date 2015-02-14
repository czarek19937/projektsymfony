<?php

namespace FilmyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="FilmyBundle\Entity\OrdersRepository")
 * @ORM\Table(name="Orders")
 */
class Orders
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
     * @ORM\Column(name="status", type="string", length=255)
     */
    private $status;

    /**
     * @var \DateTime
     * @ORM\Column(name="term", type="datetime")
     */
    private $term;

    /**
     * @var string
     * @ORM\Column(name="form", type="string", length=255)
     */
    private $form;

    /**
     * @var string
     * @ORM\Column(name="conditions", type="string", length=255)
     */
    private $conditions;

    /**
     * @var integer
     * @ORM\Column(name="Id_film", type="integer")
     * @ORM\ManyToMany(targetEntity="Phonenumber")
     * @JoinTable(name="Movies",
     *      joinColumns={@JoinColumn(name="Id_film", referencedColumnName="id")},
     */
    private $idFilm;

    /**
     * @var integer
     * @ORM\Column(name="Id_client", type="integer")
     * @ORM\OneToOne(targetEntity="User", inversedBy="user")
     */
    private $idClient;


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
     * Set status
     *
     * @param string $status
     * @return Orders
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set term
     *
     * @param \DateTime $term
     * @return Orders
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return \DateTime 
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set form
     *
     * @param string $form
     * @return Orders
     */
    public function setForm($form)
    {
        $this->form = $form;

        return $this;
    }

    /**
     * Get form
     *
     * @return string 
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Set conditions
     *
     * @param string $conditions
     * @return Orders
     */
    public function setConditions($conditions)
    {
        $this->conditions = $conditions;

        return $this;
    }

    /**
     * Get conditions
     *
     * @return string 
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Set idFilm
     *
     * @param integer $idFilm
     * @return Orders
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

    /**
     * Set idClient
     *
     * @param integer $idClient
     * @return Orders
     */
    public function setIdClient($idClient)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return integer 
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}
