<?php

namespace Trivago\PostBundle\Tests\Services;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Trivago\PostBundle\Services\PostMenu;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostMenuTest extends KernelTestCase

{
    private  $container ;

    private  $service  ;

    public function setUp()
    {
      static::bootKernel();
      
      $this->container = static::$kernel->getContainer();

      $trivago_api = $this->container->getParameter('trivago_api');
      
      $this->service = new PostMenu($trivago_api);
      
    }

    public function testGetPostItems()
    {   
      
      
      $this->assertNotEmpty($this->service->getPostItems());
    }

    

      
}
