<?php

namespace BackOfficeBundle\Entity;

/**
 * Voiture
 */
class Voiture
{
    /**
     * @var string
     */
    private $modele;

    /**
     * @var integer
     */
    private $nbPlaces;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \BackOfficeBundle\Entity\Marque
     */
    private $marque;


    /**
     * Set modele
     *
     * @param string $modele
     *
     * @return Voiture
     */
    public function setModele($modele)
    {
        $this->modele = $modele;

        return $this;
    }

    /**
     * Get modele
     *
     * @return string
     */
    public function getModele()
    {
        return $this->modele;
    }

    /**
     * Set nbPlaces
     *
     * @param integer $nbPlaces
     *
     * @return Voiture
     */
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;

        return $this;
    }

    /**
     * Get nbPlaces
     *
     * @return integer
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

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
     * Set marque
     *
     * @param \BackOfficeBundle\Entity\Marque $marque
     *
     * @return Voiture
     */
    public function setMarque(\BackOfficeBundle\Entity\Marque $marque = null)
    {
        $this->marque = $marque;

        return $this;
    }

    /**
     * Get marque
     *
     * @return \BackOfficeBundle\Entity\Marque
     */
    public function getMarque()
    {
        return $this->marque;
    }

    public function __toString() 
    {
        return $this->marque.' '.$this->modele;
    }
}

