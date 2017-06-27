<?php

namespace FrontendBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrdreModule
 *
 * @ORM\Table(name="ORDRE_MODULE")
 * @ORM\Entity
 */
class OrdreModule
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_ordre", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrdre;

    /**
     * @var integer
     *
     * @ORM\Column(name="module_id", type="integer", nullable=false)
     */
    private $moduleId;

    /**
     * @var integer
     *
     * @ORM\Column(name="precedent_id", type="integer", nullable=false)
     */
    private $precedentId;

    /**
     * @var integer
     *
     * @ORM\Column(name="ordre", type="integer", nullable=true)
     */
    private $ordre;



    /**
     * Get idOrdre
     *
     * @return integer
     */
    public function getIdOrdre()
    {
        return $this->idOrdre;
    }

    /**
     * Set moduleId
     *
     * @param integer $moduleId
     *
     * @return OrdreModule
     */
    public function setModuleId($moduleId)
    {
        $this->moduleId = $moduleId;
    
        return $this;
    }

    /**
     * Get moduleId
     *
     * @return integer
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Set precedentId
     *
     * @param integer $precedentId
     *
     * @return OrdreModule
     */
    public function setPrecedentId($precedentId)
    {
        $this->precedentId = $precedentId;
    
        return $this;
    }

    /**
     * Get precedentId
     *
     * @return integer
     */
    public function getPrecedentId()
    {
        return $this->precedentId;
    }

    /**
     * Set ordre
     *
     * @param integer $ordre
     *
     * @return OrdreModule
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
}
