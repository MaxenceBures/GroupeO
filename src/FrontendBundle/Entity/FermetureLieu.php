<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FermetureLieu
 *
 * @ORM\Table(name="FERMETURE_LIEU")
 * @ORM\Entity
 */
class FermetureLieu
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_fermeture", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idFermeture;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=140, nullable=false)
     */
    private $description;

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
     * @ORM\Column(name="lieu_code", type="integer", nullable=false)
     */
    private $lieuCode;


}

