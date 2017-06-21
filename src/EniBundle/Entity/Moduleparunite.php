<?php

namespace EniBundle\Entity;

/**
 * Moduleparunite
 */
class Moduleparunite
{
    /**
     * @var integer
     */
    private $position;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \EniBundle\Entity\Uniteparformation
     */
    private $idunite;

    /**
     * @var \EniBundle\Entity\Module
     */
    private $idmodule;


    /**
     * Set position
     *
     * @param integer $position
     *
     * @return Moduleparunite
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idunite
     *
     * @param \EniBundle\Entity\Uniteparformation $idunite
     *
     * @return Moduleparunite
     */
    public function setIdunite(\EniBundle\Entity\Uniteparformation $idunite = null)
    {
        $this->idunite = $idunite;

        return $this;
    }

    /**
     * Get idunite
     *
     * @return \EniBundle\Entity\Uniteparformation
     */
    public function getIdunite()
    {
        return $this->idunite;
    }

    /**
     * Set idmodule
     *
     * @param \EniBundle\Entity\Module $idmodule
     *
     * @return Moduleparunite
     */
    public function setIdmodule(\EniBundle\Entity\Module $idmodule = null)
    {
        $this->idmodule = $idmodule;

        return $this;
    }

    /**
     * Get idmodule
     *
     * @return \EniBundle\Entity\Module
     */
    public function getIdmodule()
    {
        return $this->idmodule;
    }
}
