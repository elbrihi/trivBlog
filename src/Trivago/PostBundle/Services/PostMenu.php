<?php

namespace Trivago\PostBundle\Services;

use Symfony\Bundle\FrameworkBundle\Routing\Router;

class PostMenu
{
    /** 
     * 
     *  get the the link http://trivago-magazine-work-sample-server.s3-website.eu-central-1.amazonaws.com/latest_posts.json
     */
    private $trivago_api ;

    public function __construct($trivago_api)
    {
       $this->trivago_api = $trivago_api;
    }  

    /**
     * 
     * get the the Json String from the Mock Server 
     */
    public function getPostItems()
    {
  
      $map_json = file_get_contents($this->trivago_api);
     
      return $map_json;
    }

    /**
     * 
     * get The URI of the Articles 
     */
    public function getArticleItems($idArtcile)
    {
      
    
      $map_json = json_decode($this->getPostItems(),true);
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