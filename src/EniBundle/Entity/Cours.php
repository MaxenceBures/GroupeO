<?php

namespace EniBundle\Entity;

/**
 * Cours
 */
class Cours
{
    /**
     * @var \DateTime
     */
    private $debut;

    /**
     * @var \DateTime
     */
    private $fin;

    /**
     * @var integer
     */
    private $dureereelleenheures;

    /**
     * @var float
     */
    private $prixpublicaffecte;

    /**
     * @var \DateTime
     */
    private $datecreation = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     */
    private $libellecours;

    /**
     * @var integer
     */
    private $dureeprevueenheures;

    /**
     * @var boolean
     */
    private $dateadefinir = '0';

    /**
     * @var string
     */
    private $codesalle;

    /**
     * @var integer
     */
    private $codeformateur;

    /**
     * @var integer
     */
    private $codelieu;

    /**
     * @var guid
     */
    private $idcours;

    /**
     * @var \EniBundle\Entity\Module
     */
    private $idmodule;

    /**
     * @var \EniBundle\Entity\Promotion
     */
    private $codepromotion;


    /**
     * Set debut
     *
     * @param \DateTime $debut
     *
     * @return Cours
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
     * @return Cours
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
     * Set dureereelleenheures
     *
     * @param integer $dureereelleenheures
     *
     * @return Cours
     */
    public function setDureereelleenheures($dureereelleenheures)
    {
        $this->dureereelleenheures = $dureereelleenheures;

        return $this;
    }

    /**
     * Get dureereelleenheures
     *
     * @return integer
     */
    public function getDureereelleenheures()
    {
        return $this->dureereelleenheures;
    }

    /**
     * Set prixpublicaffecte
     *
     * @param float $prixpublicaffecte
     *
     * @return Cours
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
     * @return Cours
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
     * Set libellecours
     *
     * @param string $libellecours
     *
     * @return Cours
     */
    public function setLibellecours($libellecours)
    {
        $this->libellecours = $libellecours;

        return $this;
    }

    /**
     * Get libellecours
     *
     * @return string
     */
    public function getLibellecours()
    {
        return $this->libellecours;
    }

    /**
     * Set dureeprevueenheures
     *
     * @param integer $dureeprevueenheures
     *
     * @return Cours
     */
    public function setDureeprevueenheures($dureeprevueenheures)
    {
        $this->dureeprevueenheures = $dureeprevueenheures;

        return $this;
    }

    /**
     * Get dureeprevueenheures
     *
     * @return integer
     */
    public function getDureeprevueenheures()
    {
        return $this->dureeprevueenheures;
    }

    /**
     * Set dateadefinir
     *
     * @param boolean $dateadefinir
     *
     * @return Cours
     */
    public function setDateadefinir($dateadefinir)
    {
        $this->dateadefinir = $dateadefinir;

        return $this;
    }

    /**
     * Get dateadefinir
     *
     * @return boolean
     */
    public function getDateadefinir()
    {
        return $this->dateadefinir;
    }

    /**
     * Set codesalle
     *
     * @param string $codesalle
     *
     * @return Cours
     */
    public function setCodesalle($codesalle)
    {
        $this->codesalle = $codesalle;

        return $this;
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

    /**
     * Set codeformateur
     *
     * @param integer $codeformateur
     *
     * @return Cours
     */
    public function setCodeformateur($codeformateur)
    {
        $this->codeformateur = $codeformateur;

        return $this;
    }

    /**
     * Get codeformateur
     *
     * @return integer
     */
    public function getCodeformateur()
    {
        return $this->codeformateur;
    }

    /**
     * Set codelieu
     *
     * @param integer $codelieu
     *
     * @return Cours
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
     * Get idcours
     *
     * @return guid
     */
    public function getIdcours()
    {
        return $this->idcours;
    }

    /**
     * Set idmodule
     *
     * @param \EniBundle\Entity\Module $idmodule
     *
     * @return Cours
     */
    public function setIdmodule(\EniBundle\Entity\Module $idmodule = null)
    {
        $this->idmodule = $idmodule;

        return $this;
    }

    /**
     * Get idmodule
     *
     * @return \EniBundle\Entity\Module
     */
    public function getIdmodule()
    {
        return $this->idmodule;
    }

    /**
     * Set codepromotion
     *
     * @param \EniBundle\Entity\Promotion $codepromotion
     *
     * @return Cours
     */
    public function setCodepromotion(\EniBundle\Entity\Promotion $codepromotion = null)
    {
        $this->codepromotion = $codepromotion;

        return $this;
    }

    /**
     * Get codepromotion
     *
     * @return \EniBundle\Entity\Promotion
     */
    public function getCodepromotion()
    {
        return $this->codepromotion;
    }
}
