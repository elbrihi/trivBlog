<?php

namespace Trivago\PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;


class ArticleController extends Controller
{
    public function indexAction()
    {
        return $this->render('TrivagoPostBundle:Default:index.html.twig');
    }

    public function fetchArticlesAction()
    {
        $rest = $this->get('article')->getPostItems();
        
        return new Response(
            $rest
        );
    }
    public function getArticleAction(Request $request)
    {
        
        $id = $request->get('id');
        $article = $this->get('article')->getArticleItems($id);
        
        $article = json_encode($article);//**JSON */
      
       
        return $this->render('TrivagoPostBundle:Default:post/article.html.twig',
          array(
            'article' => $article,
            'id' => $id,
        ));
    }
   /* public function jAction()
    {
       $a= array(
            'a'=>1,
            'b'=>2,
            'c'=>3,
        );
        
        $a = json_encode($a);
        return $a;
    }*/
}
