<?php

namespace FilmyBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
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
    private $idFilmu;

    /**
     * @var integer
     */
    private $idKlienta;


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
     * Set idFilmu
     *
     * @param integer $idFilmu
     * @return Orders
     */
    public function setIdFilmu($idFilmu)
    {
        $this->idFilmu = $idFilmu;

        return $this;
    }

    /**
     * Get idFilmu
     *
     * @return integer 
     */
    public function getIdFilmu()
    {
        return $this->idFilmu;
    }

    /**
     * Set idKlienta
     *
     * @param integer $idKlienta
     * @return Orders
     */
    public function setIdKlienta($idKlienta)
    {
        $this->idKlienta = $idKlienta;

        return $this;
    }

    /**
     * Get idKlienta
     *
     * @return integer 
     */
    public function getIdKlienta()
    {
        return $this->idKlienta;
    }
}
