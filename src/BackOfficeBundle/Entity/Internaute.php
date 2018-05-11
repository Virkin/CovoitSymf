<?php

namespace BackOfficeBundle\Entity;

/**
 * Internaute
 */
class Internaute
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var string
     */
    private $tel;

    /**
     * @var string
     */
    private $mail;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \BackOfficeBundle\Entity\Voiture
     */
    private $voiture;

    /**
     * @var \BackOfficeBundle\Entity\Ville
     */
    private $ville;


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Internaute
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Internaute
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Internaute
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set mail
     *
     * @param string $mail
     *
     * @return Internaute
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string
     */
    public function getMail()
    {
        return $this->mail;
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
     * Set voiture
     *
     * @param \BackOfficeBundle\Entity\Voiture $voiture
     *
     * @return Internaute
     */
    public function setVoiture(\BackOfficeBundle\Entity\Voiture $voiture = null)
    {
        $this->voiture = $voiture;

        return $this;
    }

    /**
     * Get voiture
     *
     * @return \BackOfficeBundle\Entity\Voiture
     */
    public function getVoiture()
    {
        return $this->voiture;
    }

    /**
     * Get voiture
     *
     * @return \BackOfficeBundle\Entity\Marque
     */
    public function getMarque()
    {
        return;
    }


    /**
     * Set ville
     *
     * @param \BackOfficeBundle\Entity\Ville $ville
     *
     * @return Internaute
     */
    public function setVille(\BackOfficeBundle\Entity\Ville $ville = null)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return \BackOfficeBundle\Entity\Ville
     */
    public function getVille()
    {
        return $this->ville;
    }
}

