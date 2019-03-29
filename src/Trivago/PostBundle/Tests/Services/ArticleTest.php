<?php

namespace Trivago\PostBundle\Tests\Services;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Trivago\PostBundle\Services\Article;
use Trivago\PostBundle\Services\PostMenu;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PostMenuTest extends KernelTestCase

{
    private  $container ;

    private  $service  ;

    private  $menu_post;

    private  $trivago_api;

    private $article ;
    public function setUp()
    {
      static::bootKernel();
      
      $this->container = static::$kernel->getContainer();

      $this->trivago_api = $this->container->getParameter('trivago_api');

      $this->postMenu = new PostMenu($this->trivago_api);

      $this->article = new Article($this->postMenu);
   
      
    }

    public function testgetArticleItems()
    {
     
      $this->assertNotEmpty($this->article->getArticleItems(60301));
    }

    
}
