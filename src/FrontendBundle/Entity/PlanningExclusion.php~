<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanningExclusion
 *
 * @ORM\Table(name="PLANNING_EXCLUSION", indexes={@ORM\Index(name="IDX_EDCB04AB3D865311", columns={"planning_id"})})
 * @ORM\Entity
 */
class PlanningExclusion
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_exclusion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idExclusion;

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
     * @var \FrontendBundle\Entity\Planning
     *
     * @ORM\ManyToOne(targetEntity="FrontendBundle\Entity\Planning")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="planning_id", referencedColumnName="id_planning")
     * })
     */
    private $planning;



    /**
     * Get idExclusion
     *
     * @return integer
     */
    public function getIdExclusion()
    {
        return $this->idExclusion;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return PlanningExclusion
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
     * @return PlanningExclusion
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
     * Set planning
     *
     * @param \FrontendBundle\Entity\Planning $planning
     *
     * @return PlanningExclusion
     */
    public function setPlanning(\FrontendBundle\Entity\Planning $planning = null)
    {
        $this->planning = $planning;
    
        return $this;
    }

    /**
     * Get planning
     *
     * @return \FrontendBundle\Entity\Planning
     */
    public function getPlanning()
    {
        return $this->planning;
    }
}
