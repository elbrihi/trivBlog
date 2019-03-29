<?php

namespace Trivago\PostBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Trivago\PostBundle\Services\MyResource;

class ArticleController extends Controller
{

    
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
        $article = json_encode($this->get('article')->getArticleItems($id));//**JSON */
      
       
        return $this->render('TrivagoPostBundle:Default:post/article.html.twig',
          array(
            'article' => $article,
            'id' => $id,
        ));
    }
  
}
