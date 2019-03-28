<?php

namespace Trivago\PostBundle\Tests\Services;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Trivago\PostBundle\Services\PostMenu;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostMenuTest extends KernelTestCase

{
    public function setUp()
    {
      static::bootKernel();
      $this->container = static::$kernel->getContainer();
      //$this->em = $this->container->get('doctrine.orm.entity_manager');
      //$this->router = $this->container->get('router');
    }
    public function testGetPostItems()
    {
      $service = new PostMenu();
      $this->assertNotEmpty($service->getPostItems());
    }
    public function testGetArticleItems()
    {
      $service = new PostMenu();
      $this->assertNotEmpty($service->getArticleItems(true));
    }
   
   
}
