<?php

namespace Tests\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    public function testHomepage()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

       

        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        $this->assertContains('Trivago Blog', $crawler->filter('h1')->text());
        
        $this->assertNotEmpty($crawler->filter('.container h1')->count());

        $this->assertNotEmpty($crawler->filter('.container .row')->count());

        $this->assertNotEmpty($crawler->filter('.container p')->count());

    }
}
