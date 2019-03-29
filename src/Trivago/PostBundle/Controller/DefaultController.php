<?php

namespace Trivago\PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    
    
    public function fetchAction()
    {
        $rest = $this->get('post_menu')->getPostItems();
        
        return new Response(
            $rest
        );
    }
  
   
}
