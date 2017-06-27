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


}

