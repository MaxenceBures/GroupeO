<?php

namespace EniBundle\Entity;

/**
 * Salle
 */
class Salle
{
    /**
     * @var string
     */
    private $libelle;

    /**
     * @var integer
     */
    private $capacite;

    /**
     * @var integer
     */
    private $lieu = '0';

    /**
     * @var string
     */
    private $codesalle;


    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Salle
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
     * Set capacite
     *
     * @param integer $capacite
     *
     * @return Salle
     */
    public function setCapacite($capacite)
    {
        $this->capacite = $capacite;

        return $this;
    }

    /**
     * Get capacite
     *
     * @return integer
     */
    public function getCapacite()
    {
        return $this->capacite;
    }

    /**
     * Set lieu
     *
     * @param integer $lieu
     *
     * @return Salle
     */
    public function setLieu($lieu)
    {
        $this->lieu = $lieu;

        return $this;
    }

    /**
     * Get lieu
     *
     * @return integer
     */
    public function getLieu()
    {
        return $this->lieu;
    }

    /**
     * Get codesalle
     *
     * @return string
     */
    public function getCodesalle()
    {
        return $this->codesalle;
    }
}

