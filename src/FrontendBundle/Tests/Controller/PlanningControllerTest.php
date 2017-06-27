<?php

namespace FrontendBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlanningControllerTest extends WebTestCase
{
    public function testFrame()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/frame');
    }

}
