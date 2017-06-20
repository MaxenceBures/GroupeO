<?php

namespace EniBundle\Entity;

/**
 * Stagiaireparentreprise
 */
class Stagiaireparentreprise
{
    /**
     * @var integer
     */
    private $codestagiaire;

    /**
     * @var integer
     */
    private $codeentreprise;

    /**
     * @var \DateTime
     */
    private $datelien;

    /**
     * @var string
     */
    private $codetypelien;

    /**
     * @var \DateTime
     */
    private $datedebutenets;

    /**
     * @var \DateTime
     */
    private $datefinenets;

    /**
     * @var string
     */
    private $codefonction;

    /**
     * @var string
     */
    private $commentaire;

    /**
     * @var integer
     */
    private $codetuteur;

    /**
     * @var integer
     */
    private $responsableets;

    /**
     * @var integer
     */
    private $gererpar;

    /**
     * @var integer
     */
    private $interruption;

    /**
     * @var string
     */
    private $sujetstage;

    /**
     * @var string
     */
    private $titrevise;

    /**
     * @var integer
     */
    private $codecontacteni;

    /**
     * @var integer
     */
    private $numlien;


    /**
     * Set codestagiaire
     *
     * @param integer $codestagiaire
     *
     * @return Stagiaireparentreprise
     */
    public function setCodestagiaire($codestagiaire)
    {
        $this->codestagiaire = $codestagiaire;

        return $this;
    }

    /**
     * Get codestagiaire
     *
     * @return integer
     */
    public function getCodestagiaire()
    {
        return $this->codestagiaire;
    }

    /**
     * Set codeentreprise
     *
     * @param integer $codeentreprise
     *
     * @return Stagiaireparentreprise
     */
    public function setCodeentreprise($codeentreprise)
    {
        $this->codeentreprise = $codeentreprise;

        return $this;
    }

    /**
     * Get codeentreprise
     *
     * @return integer
     */
    public function getCodeentreprise()
    {
        return $this->codeentreprise;
    }

    /**
     * Set datelien
     *
     * @param \DateTime $datelien
     *
     * @return Stagiaireparentreprise
     */
    public function setDatelien($datelien)
    {
        $this->datelien = $datelien;

        return $this;
    }

    /**
     * Get datelien
     *
     * @return \DateTime
     */
    public function getDatelien()
    {
        return $this->datelien;
    }

    /**
     * Set codetypelien
     *
     * @param string $codetypelien
     *
     * @return Stagiaireparentreprise
     */
    public function setCodetypelien($codetypelien)
    {
        $this->codetypelien = $codetypelien;

        return $this;
    }

    /**
     * Get codetypelien
     *
     * @return string
     */
    public function getCodetypelien()
    {
        return $this->codetypelien;
    }

    /**
     * Set datedebutenets
     *
     * @param \DateTime $datedebutenets
     *
     * @return Stagiaireparentreprise
     */
    public function setDatedebutenets($datedebutenets)
    {
        $this->datedebutenets = $datedebutenets;

        return $this;
    }

    /**
     * Get datedebutenets
     *
     * @return \DateTime
     */
    public function getDatedebutenets()
    {
        return $this->datedebutenets;
    }

    /**
     * Set datefinenets
     *
     * @param \DateTime $datefinenets
     *
     * @return Stagiaireparentreprise
     */
    public function setDatefinenets($datefinenets)
    {
        $this->datefinenets = $datefinenets;

        return $this;
    }

    /**
     * Get datefinenets
     *
     * @return \DateTime
     */
    public function getDatefinenets()
    {
        return $this->datefinenets;
    }

    /**
     * Set codefonction
     *
     * @param string $codefonction
     *
     * @return Stagiaireparentreprise
     */
    public function setCodefonction($codefonction)
    {
        $this->codefonction = $codefonction;

        return $this;
    }

    /**
     * Get codefonction
     *
     * @return string
     */
    public function getCodefonction()
    {
        return $this->codefonction;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Stagiaireparentreprise
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set codetuteur
     *
     * @param integer $codetuteur
     *
     * @return Stagiaireparentreprise
     */
    public function setCodetuteur($codetuteur)
    {
        $this->codetuteur = $codetuteur;

        return $this;
    }

    /**
     * Get codetuteur
     *
     * @return integer
     */
    public function getCodetuteur()
    {
        return $this->codetuteur;
    }

    /**
     * Set responsableets
     *
     * @param integer $responsableets
     *
     * @return Stagiaireparentreprise
     */
    public function setResponsableets($responsableets)
    {
        $this->responsableets = $responsableets;

        return $this;
    }

    /**
     * Get responsableets
     *
     * @return integer
     */
    public function getResponsableets()
    {
        return $this->responsableets;
    }

    /**
     * Set gererpar
     *
     * @param integer $gererpar
     *
     * @return Stagiaireparentreprise
     */
    public function setGererpar($gererpar)
    {
        $this->gererpar = $gererpar;

        return $this;
    }

    /**
     * Get gererpar
     *
     * @return integer
     */
    public function getGererpar()
    {
        return $this->gererpar;
    }

    /**
     * Set interruption
     *
     * @param integer $interruption
     *
     * @return Stagiaireparentreprise
     */
    public function setInterruption($interruption)
    {
        $this->interruption = $interruption;

        return $this;
    }

    /**
     * Get interruption
     *
     * @return integer
     */
    public function getInterruption()
    {
        return $this->interruption;
    }

    /**
     * Set sujetstage
     *
     * @param string $sujetstage
     *
     * @return Stagiaireparentreprise
     */
    public function setSujetstage($sujetstage)
    {
        $this->sujetstage = $sujetstage;

        return $this;
    }

    /**
     * Get sujetstage
     *
     * @return string
     */
    public function getSujetstage()
    {
        return $this->sujetstage;
    }

    /**
     * Set titrevise
     *
     * @param string $titrevise
     *
     * @return Stagiaireparentreprise
     */
    public function setTitrevise($titrevise)
    {
        $this->titrevise = $titrevise;

        return $this;
    }

    /**
     * Get titrevise
     *
     * @return string
     */
    public function getTitrevise()
    {
        return $this->titrevise;
    }

    /**
     * Set codecontacteni
     *
     * @param integer $codecontacteni
     *
     * @return Stagiaireparentreprise
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
     * Get numlien
     *
     * @return integer
     */
    public function getNumlien()
    {
        return $this->numlien;
    }
}

