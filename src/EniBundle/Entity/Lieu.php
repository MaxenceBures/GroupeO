<?php

namespace EniBundle\Entity;

/**
 * Lieu
 */
class Lieu
{
    /**
     * @var string
     */
    private $libelle;

    /**
     * @var boolean
     */
    private $archive;

    /**
     * @var boolean
     */
    private $gestionemargement;

    /**
     * @var string
     */
    private $debutam;

    /**
     * @var string
     */
    private $finam;

    /**
     * @var string
     */
    private $debutpm;

    /**
     * @var string
     */
    private $finpm;

    /**
     * @var string
     */
    private $adresse;

    /**
     * @var integer
     */
    private $cp;

    /**
     * @var string
     */
    private $ville;

    /**
     * @var integer
     */
    private $codelieu;


    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Lieu
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
     * Set archive
     *
     * @param boolean $archive
     *
     * @return Lieu
     */
    public function setArchive($archive)
    {
        $this->archive = $archive;

        return $this;
    }

    /**
     * Get archive
     *
     * @return boolean
     */
    public function getArchive()
    {
        return $this->archive;
    }

    /**
     * Set gestionemargement
     *
     * @param boolean $gestionemargement
     *
     * @return Lieu
     */
    public function setGestionemargement($gestionemargement)
    {
        $this->gestionemargement = $gestionemargement;

        return $this;
    }

    /**
     * Get gestionemargement
     *
     * @return boolean
     */
    public function getGestionemargement()
    {
        return $this->gestionemargement;
    }

    /**
     * Set debutam
     *
     * @param string $debutam
     *
     * @return Lieu
     */
    public function setDebutam($debutam)
    {
        $this->debutam = $debutam;

        return $this;
    }

    /**
     * Get debutam
     *
     * @return string
     */
    public function getDebutam()
    {
        return $this->debutam;
    }

    /**
     * Set finam
     *
     * @param string $finam
     *
     * @return Lieu
     */
    public function setFinam($finam)
    {
        $this->finam = $finam;

        return $this;
    }

    /**
     * Get finam
     *
     * @return string
     */
    public function getFinam()
    {
        return $this->finam;
    }

    /**
     * Set debutpm
     *
     * @param string $debutpm
     *
     * @return Lieu
     */
    public function setDebutpm($debutpm)
    {
        $this->debutpm = $debutpm;

        return $this;
    }

    /**
     * Get debutpm
     *
     * @return string
     */
    public function getDebutpm()
    {
        return $this->debutpm;
    }

    /**
     * Set finpm
     *
     * @param string $finpm
     *
     * @return Lieu
     */
    public function setFinpm($finpm)
    {
        $this->finpm = $finpm;

        return $this;
    }

    /**
     * Get finpm
     *
     * @return string
     */
    public function getFinpm()
    {
        return $this->finpm;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Lieu
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set cp
     *
     * @param integer $cp
     *
     * @return Lieu
     */
    public function setCp($cp)
    {
        $this->cp = $cp;

        return $this;
    }

    /**
     * Get cp
     *
     * @return integer
     */
    public function getCp()
    {
        return $this->cp;
    }

    /**
     * Set ville
     *
     * @param string $ville
     *
     * @return Lieu
     */
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get ville
     *
     * @return string
     */
    public function getVille()
    {
        return $this->ville;
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
}
