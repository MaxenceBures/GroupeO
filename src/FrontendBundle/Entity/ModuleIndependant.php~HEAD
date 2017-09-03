<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuleIndependant
 *
 * @ORM\Table(name="MODULE_Independant")
 * @ORM\Entity
 */
class ModuleIndependant
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_module", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModule;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=200, nullable=false)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree_en_heures", type="smallint", nullable=false)
     */
    private $dureeEnHeures;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="duree_en_semaines", type="smallint", nullable=false)
     */
    private $dureeEnSemaines;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_public_en_cours", type="float", precision=53, scale=0, nullable=false)
     */
    private $prixPublicEnCours;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_court", type="string", length=20, nullable=false)
     */
    private $libelleCourt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="archiver", type="boolean", nullable=false)
     */
    private $archiver = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="type_module", type="integer", nullable=true)
     */
    private $typeModule;



    /**
     * Get idModule
     *
     * @return integer
     */
    public function getIdModule()
    {
        return $this->idModule;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return ModuleIndependant
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;
    
        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set dureeEnHeures
     *
     * @param integer $dureeEnHeures
     *
     * @return ModuleIndependant
     */
    public function setDureeEnHeures($dureeEnHeures)
    {
        $this->dureeEnHeures = $dureeEnHeures;
    
        return $this;
    }

    /**
     * Get dureeEnHeures
     *
     * @return integer
     */
    public function getDureeEnHeures()
    {
        return $this->dureeEnHeures;
    }

    /**
     * Set dateCreation
     *
     * @param \DateTime $dateCreation
     *
     * @return ModuleIndependant
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
     * Set dureeEnSemaines
     *
     * @param integer $dureeEnSemaines
     *
     * @return ModuleIndependant
     */
    public function setDureeEnSemaines($dureeEnSemaines)
    {
        $this->dureeEnSemaines = $dureeEnSemaines;
    
        return $this;
    }

    /**
     * Get dureeEnSemaines
     *
     * @return integer
     */
    public function getDureeEnSemaines()
    {
        return $this->dureeEnSemaines;
    }

    /**
     * Set prixPublicEnCours
     *
     * @param float $prixPublicEnCours
     *
     * @return ModuleIndependant
     */
    public function setPrixPublicEnCours($prixPublicEnCours)
    {
        $this->prixPublicEnCours = $prixPublicEnCours;
    
        return $this;
    }

    /**
     * Get prixPublicEnCours
     *
     * @return float
     */
    public function getPrixPublicEnCours()
    {
        return $this->prixPublicEnCours;
    }

    /**
     * Set libelleCourt
     *
     * @param string $libelleCourt
     *
     * @return ModuleIndependant
     */
    public function setLibelleCourt($libelleCourt)
    {
        $this->libelleCourt = $libelleCourt;
    
        return $this;
    }

    /**
     * Get libelleCourt
     *
     * @return string
     */
    public function getLibelleCourt()
    {
        return $this->libelleCourt;
    }

    /**
     * Set archiver
     *
     * @param boolean $archiver
     *
     * @return ModuleIndependant
     */
    public function setArchiver($archiver)
    {
        $this->archiver = $archiver;
    
        return $this;
    }

    /**
     * Get archiver
     *
     * @return boolean
     */
    public function getArchiver()
    {
        return $this->archiver;
    }

    /**
     * Set typeModule
     *
     * @param integer $typeModule
     *
     * @return ModuleIndependant
     */
    public function setTypeModule($typeModule)
    {
        $this->typeModule = $typeModule;
    
        return $this;
    }

    /**
     * Get typeModule
     *
     * @return integer
     */
    public function getTypeModule()
    {
        return $this->typeModule;
    }
}
