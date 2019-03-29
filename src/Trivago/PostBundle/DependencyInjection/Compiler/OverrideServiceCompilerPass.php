<?php

namespace Trivago\PostBundle\DependencyInjection\Compiler;


use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OverrideServiceCompilerPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
         
        $container->setDefinition('post_menu', $container->getDefinition('trivago_post.post_menu'));
        $container->setDefinition('article', $container->getDefinition('trivago_post.article'));
        
    }
}




?>