<?php

namespace EniBundle\Entity;

/**
 * Promotion
 */
class Promotion
{
    /**
     * @var string
     */
    private $libelle;

    /**
     * @var \DateTime
     */
    private $debut;

    /**
     * @var \DateTime
     */
    private $fin;

    /**
     * @var float
     */
    private $prixpublicaffecte;

    /**
     * @var \DateTime
     */
    private $datecreation = 'CURRENT_TIMESTAMP';

    /**
     * @var float
     */
    private $prixpecaffecte;

    /**
     * @var float
     */
    private $prixfinanceaffecte;

    /**
     * @var integer
     */
    private $codecontacteni;

    /**
     * @var integer
     */
    private $codelieu;

    /**
     * @var string
     */
    private $codepromotion;

    /**
     * @var \EniBundle\Entity\Formation
     */
    private $codeformation;


    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Promotion
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
     * Set debut
     *
     * @param \DateTime $debut
     *
     * @return Promotion
     */
    public function setDebut($debut)
    {
        $this->debut = $debut;

        return $this;
    }

    /**
     * Get debut
     *
     * @return \DateTime
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Set fin
     *
     * @param \DateTime $fin
     *
     * @return Promotion
     */
    public function setFin($fin)
    {
        $this->fin = $fin;

        return $this;
    }

    /**
     * Get fin
     *
     * @return \DateTime
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Set prixpublicaffecte
     *
     * @param float $prixpublicaffecte
     *
     * @return Promotion
     */
    public function setPrixpublicaffecte($prixpublicaffecte)
    {
        $this->prixpublicaffecte = $prixpublicaffecte;

        return $this;
    }

    /**
     * Get prixpublicaffecte
     *
     * @return float
     */
    public function getPrixpublicaffecte()
    {
        return $this->prixpublicaffecte;
    }

    /**
     * Set datecreation
     *
     * @param \DateTime $datecreation
     *
     * @return Promotion
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
     * Set prixpecaffecte
     *
     * @param float $prixpecaffecte
     *
     * @return Promotion
     */
    public function setPrixpecaffecte($prixpecaffecte)
    {
        $this->prixpecaffecte = $prixpecaffecte;

        return $this;
    }

    /**
     * Get prixpecaffecte
     *
     * @return float
     */
    public function getPrixpecaffecte()
    {
        return $this->prixpecaffecte;
    }

    /**
     * Set prixfinanceaffecte
     *
     * @param float $prixfinanceaffecte
     *
     * @return Promotion
     */
    public function setPrixfinanceaffecte($prixfinanceaffecte)
    {
        $this->prixfinanceaffecte = $prixfinanceaffecte;

        return $this;
    }

    /**
     * Get prixfinanceaffecte
     *
     * @return float
     */
    public function getPrixfinanceaffecte()
    {
        return $this->prixfinanceaffecte;
    }

    /**
     * Set codecontacteni
     *
     * @param integer $codecontacteni
     *
     * @return Promotion
     */
    public function setCodecontacteni($codecontacteni)
    {
        $this->codecontacteni = $codecontacteni;

        return $this;
    }

    /**
     * Get codecontacteni
     *
     * @return integer
     */
    public function getCodecontacteni()
    {
        return $this->codecontacteni;
    }

    /**
     * Set codelieu
     *
     * @param integer $codelieu
     *
     * @return Promotion
     */
    public function setCodelieu($codelieu)
    {
        $this->codelieu = $codelieu;

        return $this;
    }

    /**
     * Get codelieu
     *
     * @return integer
     */
    public function getCodelieu()
    {
        return $this->codelieu;
    }

    /**
     * Get codepromotion
     *
     * @return string
     */
    public function getCodepromotion()
    {
        return $this->codepromotion;
    }

    /**
     * Set codeformation
     *
     * @param \EniBundle\Entity\Formation $codeformation
     *
     * @return Promotion
     */
    public function setCodeformation(\EniBundle\Entity\Formation $codeformation = null)
    {
        $this->codeformation = $codeformation;

        return $this;
    }

    /**
     * Get codeformation
     *
     * @return \EniBundle\Entity\Formation
     */
    public function getCodeformation()
    {
        return $this->codeformation;
    }
}

