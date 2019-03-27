<?php

namespace Trivago\PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
    public function indexAction()
    {
        
        return $this->render('TrivagoPostBundle:Default:index.html.twig');
    }

    public function fetchAction()
    {
        $rest = $this->get('post_menu')->getPostItems();
        
        return new Response(
            $rest
        );
    }
  
    public function jAction()
    {
       $a= array(
            'a'=>1,
            'b'=>2,
            'c'=>3,
        );
        
        $a = json_encode($a);
        return $a;
    }
}
