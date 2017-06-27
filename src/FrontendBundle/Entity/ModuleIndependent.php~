<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ModuleIndependent
 *
 * @ORM\Table(name="MODULE_INDEPENDENT")
 * @ORM\Entity
 */
class ModuleIndependent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_module", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idModule;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=200, nullable=false)
     */
    private $libelle;

    /**
     * @var integer
     *
     * @ORM\Column(name="duree_en_heures", type="smallint", nullable=false)
     */
    private $dureeEnHeures;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime", nullable=false)
     */
    private $dateCreation = 'CURRENT_TIMESTAMP';

    /**
     * @var integer
     *
     * @ORM\Column(name="duree_en_semaines", type="smallint", nullable=false)
     */
    private $dureeEnSemaines;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_public_en_cours", type="float", precision=53, scale=0, nullable=false)
     */
    private $prixPublicEnCours;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_court", type="string", length=20, nullable=false)
     */
    private $libelleCourt;

    /**
     * @var boolean
     *
     * @ORM\Column(name="archiver", type="boolean", nullable=false)
     */
    private $archiver = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="type_module", type="integer", nullable=true)
     */
    private $typeModule;


}

