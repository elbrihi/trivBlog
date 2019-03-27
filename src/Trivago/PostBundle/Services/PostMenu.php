<?php

namespace Trivago\PostBundle\Services;

use Symfony\Bundle\FrameworkBundle\Routing\Router;

class PostMenu
{
  
    
    public function getPostItems()
    {
    
      $file = "http://trivago-magazine-work-sample-server.s3-website.eu-central-1.amazonaws.com/latest_posts.json" ;
      $map_json = file_get_contents($file);
     
      return $map_json;
    }
    public function getArticleItems($idArtcile)
    {
      
      $file = "http://trivago-magazine-work-sample-server.s3-website.eu-central-1.amazonaws.com/latest_posts.json" ;
      $map_json = file_get_contents($file);
      $map_json = json_decode($map_json,true);
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