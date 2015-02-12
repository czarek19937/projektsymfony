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
     */
    private $id;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTime
     */
    private $term;

    /**
     * @var string
     */
    private $form;

    /**
     * @var string
     */
    private $conditions;

    /**
     * @var integer
     */
    private $idFilm;

    /**
     * @var integer
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
