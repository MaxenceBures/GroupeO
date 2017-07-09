<?php

namespace FrontendBundle\Entity;

/**
 * PlanningCoursSepare
 */
class PlanningCoursSepare
{
    /**
     * @var integer
     */
    private $idPlanningCoursSepare;

    /**
     * @var \DateTime
     */
    private $dateDebut;

    /**
     * @var \DateTime
     */
    private $dateFin;

    /**
     * @var integer
     */
    private $ordre;

    /**
     * @var \FrontendBundle\Entity\PlanningCours
     */
    private $planningCours;


    /**
     * Get idPlanningCoursSepare
     *
     * @return integer
     */
    public function getIdPlanningCoursSepare()
    {
        return $this->idPlanningCoursSepare;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return PlanningCoursSepare
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
     * @return PlanningCoursSepare
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
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return PlanningCoursSepare
     */
    public function setOrdre($ordre)
    {
        $this->ordre = $ordre;
    
        return $this;
    }

    /**
     * Get ordre
     *
     * @return integer
     */
    public function getOrdre()
    {
        return $this->ordre;
    }

    /**
     * Set planningCours
     *
     * @param \FrontendBundle\Entity\PlanningCours $planningCours
     *
     * @return PlanningCoursSepare
     */
    public function setPlanningCours(\FrontendBundle\Entity\PlanningCours $planningCours = null)
    {
        $this->planningCours = $planningCours;
    
        return $this;
    }

    /**
     * Get planningCours
     *
     * @return \FrontendBundle\Entity\PlanningCours
     */
    public function getPlanningCours()
    {
        return $this->planningCours;
    }
}
