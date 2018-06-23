<?php

namespace BackOfficeBundle\Entity;

/**
 * Inscription
 */
class Inscription
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \BackOfficeBundle\Entity\Internaute
     */
    private $internaute;

    /**
     * @var \BackOfficeBundle\Entity\Trajet
     */
    private $trajet;


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
     * Set internaute
     *
     * @param \BackOfficeBundle\Entity\Internaute $internaute
     *
     * @return Inscription
     */
    public function setInternaute(\BackOfficeBundle\Entity\Internaute $internaute = null)
    {
        $this->internaute = $internaute;

        return $this;
    }

    /**
     * Get internaute
     *
     * @return \BackOfficeBundle\Entity\Internaute
     */
    public function getInternaute()
    {
        return $this->internaute;
    }

    /**
     * Set trajet
     *
     * @param \BackOfficeBundle\Entity\Trajet $trajet
     *
     * @return Inscription
     */
    public function setTrajet(\BackOfficeBundle\Entity\Trajet $trajet = null)
    {
        $this->trajet = $trajet;

        return $this;
    }

    /**
     * Get trajet
     *
     * @return \BackOfficeBundle\Entity\Trajet
     */
    public function getTrajet()
    {
        return $this->trajet;
    }
}
