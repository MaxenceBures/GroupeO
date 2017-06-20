<?php

namespace EniBundle\Entity;

/**
 * Module
 */
class Module
{
    /**
     * @var string
     */
    private $libelle;

    /**
     * @var integer
     */
    private $dureeenheures;

    /**
     * @var \DateTime
     */
    private $datecreation = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     */
    private $dureeensemaines;

    /**
     * @var float
     */
    private $prixpublicencours;

    /**
     * @var string
     */
    private $libellecourt;

    /**
     * @var boolean
     */
    private $archiver = '0';

    /**
     * @var integer
     */
    private $typemodule;

    /**
     * @var integer
     */
    private $idmodule;


    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Module
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
     * Set dureeenheures
     *
     * @param integer $dureeenheures
     *
     * @return Module
     */
    public function setDureeenheures($dureeenheures)
    {
        $this->dureeenheures = $dureeenheures;

        return $this;
    }

    /**
     * Get dureeenheures
     *
     * @return integer
     */
    public function getDureeenheures()
    {
        return $this->dureeenheures;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Module
     */
    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    /**
     * Get datecreation
     *
     * @return \DateTime
     */
    public function getDatecreation()
    {
        return $this->datecreation;
    }

    /**
     * Set dureeensemaines
     *
     * @param integer $dureeensemaines
     *
     * @return Module
     */
    public function setDureeensemaines($dureeensemaines)
    {
        $this->dureeensemaines = $dureeensemaines;

        return $this;
    }

    /**
     * Get dureeensemaines
     *
     * @return integer
     */
    public function getDureeensemaines()
    {
        return $this->dureeensemaines;
    }

    /**
     * Set prixpublicencours
     *
     * @param float $prixpublicencours
     *
     * @return Module
     */
    public function setPrixpublicencours($prixpublicencours)
    {
        $this->prixpublicencours = $prixpublicencours;

        return $this;
    }

    /**
     * Get prixpublicencours
     *
     * @return float
     */
    public function getPrixpublicencours()
    {
        return $this->prixpublicencours;
    }

    /**
     * Set libellecourt
     *
     * @param string $libellecourt
     *
     * @return Module
     */
    public function setLibellecourt($libellecourt)
    {
        $this->libellecourt = $libellecourt;

        return $this;
    }

    /**
     * Get libellecourt
     *
     * @return string
     */
    public function getLibellecourt()
    {
        return $this->libellecourt;
    }

    /**
     * Set archiver
     *
     * @param boolean $archiver
     *
     * @return Module
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
     * Set typemodule
     *
     * @param integer $typemodule
     *
     * @return Module
     */
    public function setTypemodule($typemodule)
    {
        $this->typemodule = $typemodule;

        return $this;
    }

    /**
     * Get typemodule
     *
     * @return integer
     */
    public function getTypemodule()
    {
        return $this->typemodule;
    }

    /**
     * Get idmodule
     *
     * @return integer
     */
    public function getIdmodule()
    {
        return $this->idmodule;
    }
}

