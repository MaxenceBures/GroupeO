<?php

namespace EniBundle\Entity;

/**
 * Uniteparformation
 */
class Uniteparformation
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
     * @var \EniBundle\Entity\Uniteformation
     */
    private $iduniteformation;

    /**
     * @var \EniBundle\Entity\Formation
     */
    private $codeformation;


    /**
     * Set position
     *
     * @param integer $position
     *
     * @return Uniteparformation
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
     * Set iduniteformation
     *
     * @param \EniBundle\Entity\Uniteformation $iduniteformation
     *
     * @return Uniteparformation
     */
    public function setIduniteformation(\EniBundle\Entity\Uniteformation $iduniteformation = null)
    {
        $this->iduniteformation = $iduniteformation;

        return $this;
    }

    /**
     * Get iduniteformation
     *
     * @return \EniBundle\Entity\Uniteformation
     */
    public function getIduniteformation()
    {
        return $this->iduniteformation;
    }

    /**
     * Set codeformation
     *
     * @param \EniBundle\Entity\Formation $codeformation
     *
     * @return Uniteparformation
     */
    public function setCodeformation(\EniBundle\Entity\Formation $codeformation = null)
    {
        $this->codeformation = $codeformation;

        return $this;
    }

    /**
     * Get codeformation
     *
     * @return \EniBundle\Entity\Formation
     */
    public function getCodeformation()
    {
        return $this->codeformation;
    }
}
