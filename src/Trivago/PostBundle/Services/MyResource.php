<?php

namespace Trivago\PostBundle\Services;
use Leogout\Bundle\SeoBundle\Seo\Basic\BasicSeoInterface;

class MyResource implements BasicSeoInterface
{
    protected $name;
    protected $description;
    protected $tags = [];

    // ...Your logic
    
    // These methods are from BasicSeoInterface and have to
    // return a string (or an object with a __toString() method).
    public function getSeoTitle()
    {
        return $this->name; 
    }
    public function setTitle($name)
    {
        $this->name = $name ;
    }
    public function getSeoDescription()
    {
        return $this->description; 
    }
    public function setDescription($description)
    {
        $this->description = $description ;
    }
    public function getSeoKeywords()
    {
        return implode(',', $this->tags); 
    }


}

?>