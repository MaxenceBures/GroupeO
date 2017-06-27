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



    /**
     * Get idFermeture
     *
     * @return integer
     */
    public function getIdFermeture()
    {
        return $this->idFermeture;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return FermetureLieu
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     *
     * @return FermetureLieu
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
     * @return FermetureLieu
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
     * Set lieuCode
     *
     * @param integer $lieuCode
     *
     * @return FermetureLieu
     */
    public function setLieuCode($lieuCode)
    {
        $this->lieuCode = $lieuCode;
    
        return $this;
    }

    /**
     * Get lieuCode
     *
     * @return integer
     */
    public function getLieuCode()
    {
        return $this->lieuCode;
    }
}
