<?php

namespace Trivago\PostBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class DefaultControllerTest extends WebTestCase
{
    private $client = null;
    public function setUp()
    {
      $this->client = static::createClient();
      $this->router = $this->client->getContainer()->get('router');
    }
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');

       // $this->assertContains('Hello World', $client->getResponse()->getContent());
    }

    public function testFetchAction()
    {
        $this->client->request('GET', $this->router->generate ('trivago_post_post_data'));
        var_dump($this->client->getResponse()->getContent()); 
        $this->assertTests();
    }
    
    public function testfetchArticlesAction()
    {
        $this->client->request('GET', $this->router->generate('trivago_post_article_data',array('id'=>0)));
        $this->assertTests();
     
    }
    public function tesJAction()
    {
        $this->assertTests();
    }
    private function assertTests()
    {
        $this->assertSame(200, $this->client->getResponse()->getStatusCode());
       // $this->assertSame('application/json', $this->client->getResponse()->headers->get('Content-Type'));
       // $this->assertContains('success', $this->client->getResponse()->getContent());
        $this->assertNotEmpty($this->client->getResponse()->getContent());
    }

}
