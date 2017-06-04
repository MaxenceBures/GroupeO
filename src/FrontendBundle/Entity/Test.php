<?php

namespace FrontendBundle\Entity;

/**
 * Test
 */
class Test
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $test;


    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set test
     *
     * @param string $test
     *
     * @return Test
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return string
     */
    public function getTest()
    {
        return $this->test;
    }
}

