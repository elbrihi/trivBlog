<?php

namespace Trivago\PostBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Trivago\PostBundle\DependencyInjection\Compiler\OverrideServiceCompilerPass;

class TrivagoPostBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {     
        parent::build($container);     
        $container->addCompilerPass(new  OverrideServiceCompilerPass()); 
    }
}
