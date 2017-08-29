<?php

namespace FrontendBundle\Entity;

/**
 * CoursIndependent
 */
class CoursIndependant
{
    /**
     * @var guid
     */
    private $idCours;

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
     * @var string
     */
    private $codepromotion;

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
     * @var \FrontendBundle\Entity\ModuleIndependant
     */
    private $moduleIndependant;


    /**
     * Get idCours
     *
     * @return guid
     */
    public function getIdCours()
    {
        return $this->idCours;
    }

    /**
     * Set debut
     *
     * @param \DateTime $debut
     *
     * @return CoursIndependant
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
     * @return CoursIndependant
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
     * @return CoursIndependant
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
     * Set codepromotion
     *
     * @param string $codepromotion
     *
     * @return CoursIndependant
     */
    public function setCodepromotion($codepromotion)
    {
        $this->codepromotion = $codepromotion;
    
        return $this;
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
     * Set prixpublicaffecte
     *
     * @param float $prixpublicaffecte
     *
     * @return CoursIndependant
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
     * @return CoursIndependant
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
     * @return CoursIndependant
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
     * @return CoursIndependant
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
     * @return CoursIndependant
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
     * @return CoursIndependant
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
     * @return CoursIndependant
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
     * @return CoursIndependant
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
     * Set moduleIndependent
     *
     * @param \FrontendBundle\Entity\ModuleIndependant $moduleIndependant
     *
     * @return CoursIndependant
     */
    public function setModuleIndependant(\FrontendBundle\Entity\ModuleIndependant $moduleIndependant = null)
    {
        $this->moduleIndependant = $moduleIndependant;
    
        return $this;
    }

    /**
     * Get moduleIndependant
     *
     * @return \FrontendBundle\Entity\ModuleIndependant
     */
    public function getModuleIndependant()
    {
        return $this->moduleIndependant;
    }
}
