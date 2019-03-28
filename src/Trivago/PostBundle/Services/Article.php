<?php

namespace Trivago\PostBundle\Services;


class Article
{
    
    private $menu_post;

    public function __construct($menu_post)

    {
      $this->menu_post = $menu_post;
    }
    
    public function getArticleItems($idArtcile)
    {
      
    
      $map_json = json_decode($this->menu_post->getPostItems(),true);
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





?>