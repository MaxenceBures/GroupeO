<?php

namespace FrontendBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PlanningControllerControllerTest extends WebTestCase
{
    public function testGetframe()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', 'frame');
    }

}
