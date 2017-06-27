<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Planning
 *
 * @ORM\Table(name="PLANNING")
 * @ORM\Entity
 */
class Planning
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_planning", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPlanning;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="date", nullable=false)
     */
    private $dateCreation;

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
     * @var integer
     *
     * @ORM\Column(name="max_heure_formation", type="integer", nullable=true)
     */
    private $maxHeureFormation;

    /**
     * @var integer
     *
     * @ORM\Column(name="max_temps_formation", type="integer", nullable=true)
     */
    private $maxTempsFormation;

    /**
     * @var integer
     *
     * @ORM\Column(name="stagiaire_entreprise_numlien", type="integer", nullable=false)
     */
    private $stagiaireEntrepriseNumlien;


}

