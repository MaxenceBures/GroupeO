<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PlanningCours
 *
 * @ORM\Table(name="PLANNING_COURS", indexes={@ORM\Index(name="IDX_80E249083D865311", columns={"planning_id"})})
 * @ORM\Entity
 */
class PlanningCours
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_planning_cours", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlanningCours;

    /**
     * @var integer
     *
     * @ORM\Column(name="cours_id", type="integer", nullable=false)
     */
    private $coursId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=false)
     */
    private $ordre;

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
     * Get idPlanningCours
     *
     * @return integer
     */
    public function getIdPlanningCours()
    {
        return $this->idPlanningCours;
    }

    /**
     * Set coursId
     *
     * @param integer $coursId
     *
     * @return PlanningCours
     */
    public function setCoursId($coursId)
    {
        $this->coursId = $coursId;
    
        return $this;
    }

    /**
     * Get coursId
     *
     * @return integer
     */
    public function getCoursId()
    {
        return $this->coursId;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return PlanningCours
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
     * Set planning
     *
     * @param \FrontendBundle\Entity\Planning $planning
     *
     * @return PlanningCours
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
