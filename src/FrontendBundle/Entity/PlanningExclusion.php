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


}

