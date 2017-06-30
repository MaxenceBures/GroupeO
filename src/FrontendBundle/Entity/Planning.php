<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planning
 *
 * @ORM\Table(name="PLANNING")
 * @ORM\Entity
 */
class Planning
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_planning", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlanning;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=false)
     */
    private $dateCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date", nullable=false)
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date", nullable=false)
     */
    private $dateFin;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_heure_formation", type="integer", nullable=true)
     */
    private $maxHeureFormation;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_temps_formation", type="integer", nullable=true)
     */
    private $maxTempsFormation;

    /**
     * @var integer
     *
     * @ORM\Column(name="etat", type="integer", nullable=true)
     */
    private $etat;

    /**
     * @var integer
     *
     * @ORM\Column(name="stagiaire_entreprise_numlien", type="integer", nullable=false)
     */
    private $stagiaireEntrepriseNumlien;


    /**
     * @var string
     *
     * @ORM\Column(name="formation_code", type="string", length=8, nullable=false)
     */
    private $formationCode;


    /**
     * Get idPlanning
     *
     * @return integer
     */
    public function getIdPlanning()
    {
        return $this->idPlanning;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Planning
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
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return Planning
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    
        return $this;
    }

    /**
     * Get dateCreation
     *
     * @return \DateTime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return Planning
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;
    
        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     *
     * @return Planning
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    
        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set maxHeureFormation
     *
     * @param integer $maxHeureFormation
     *
     * @return Planning
     */
    public function setMaxHeureFormation($maxHeureFormation)
    {
        $this->maxHeureFormation = $maxHeureFormation;
    
        return $this;
    }

    /**
     * Get maxHeureFormation
     *
     * @return integer
     */
    public function getMaxHeureFormation()
    {
        return $this->maxHeureFormation;
    }

    /**
     * Set maxTempsFormation
     *
     * @param integer $maxTempsFormation
     *
     * @return Planning
     */
    public function setMaxTempsFormation($maxTempsFormation)
    {
        $this->maxTempsFormation = $maxTempsFormation;
    
        return $this;
    }

    /**
     * Get maxTempsFormation
     *
     * @return integer
     */
    public function getMaxTempsFormation()
    {
        return $this->maxTempsFormation;
    }

    /**
     * Set etat
     *
     * @param integer $etat
     *
     * @return Planning
     */
    public function setEtat($etat)
    {
        $this->etat = $etat;

        return $this;
    }

    /**
     * Get etat
     *
     * @return integer
     */
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set stagiaireEntrepriseNumlien
     *
     * @param integer $stagiaireEntrepriseNumlien
     *
     * @return Planning
     */
    public function setStagiaireEntrepriseNumlien($stagiaireEntrepriseNumlien)
    {
        $this->stagiaireEntrepriseNumlien = $stagiaireEntrepriseNumlien;
    
        return $this;
    }

    /**
     * Get stagiaireEntrepriseNumlien
     *
     * @return integer
     */
    public function getStagiaireEntrepriseNumlien()
    {
        return $this->stagiaireEntrepriseNumlien;
    }

    /**
     * Set formationCode
     *
     * @param string $formationCode
     *
     * @return Planning
     */
    public function setFormationCode($formationCode)
    {
        $this->formationCode = $formationCode;
    
        return $this;
    }

    /**
     * Get formationCode
     *
     * @return string
     */
    public function getFormationCode()
    {
        return $this->formationCode;
    }
    /**
     * @var integer
     */
    private $stagiaireCode;

    /**
     * @var integer
     */
    private $entrepriseCode;


    /**
     * Set stagiaireCode
     *
     * @param integer $stagiaireCode
     *
     * @return Planning
     */
    public function setStagiaireCode($stagiaireCode)
    {
        $this->stagiaireCode = $stagiaireCode;
    
        return $this;
    }

    /**
     * Get stagiaireCode
     *
     * @return integer
     */
    public function getStagiaireCode()
    {
        return $this->stagiaireCode;
    }

    /**
     * Set entrepriseCode
     *
     * @param integer $entrepriseCode
     *
     * @return Planning
     */
    public function setEntrepriseCode($entrepriseCode)
    {
        $this->entrepriseCode = $entrepriseCode;
    
        return $this;
    }

    /**
     * Get entrepriseCode
     *
     * @return integer
     */
    public function getEntrepriseCode()
    {
        return $this->entrepriseCode;
    }
}
