<?php

namespace Trivago\PostBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ArticleControllerTest extends WebTestCase
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

    }

    
    public function testfetchArticlesAction()
    {
        $this->client->request('GET', $this->router->generate('trivago_post_article_data',array('id'=>60301)));
        $this->assertTests();
     
    }
    public function testGetArticleAction()
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
