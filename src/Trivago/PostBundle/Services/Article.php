<?php

namespace Trivago\PostBundle\Services;

use Trivago\PostBundle\Services\Article;

class Article
{
    /**
     * 
     * 
     * container of the PostMenu serivce
     */
    private $menu_post;
    /**
     * 
     * injecte the PostMenu Service to get the uri of the artcile 
     */
    public function __construct($menu_post)

    {
      $this->menu_post = $menu_post;
     

    }


    public function getArticleItems($idArtcile)
    {
      $file_json_article = $this->menu_post->getPostItems();

      $map_json = json_decode($file_json_article,true);
   
      for ($i=0; $i < sizeof($map_json)-1; $i++) { 
       
        if($map_json[$i]['id']==$idArtcile)
        {
            $map = array();

            $map = $map_json[$i];

            $file = $map['uri'] ;
          
        }
      }
   
      $map[] = file_get_contents($file);
 
      $map =  file_get_contents($map['uri']);

      return  $map ;
   
    }
}





