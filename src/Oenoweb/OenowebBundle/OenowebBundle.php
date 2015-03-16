<?php
namespace Oenoweb\OenowebBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Oenoweb\OenowebBundle\DependencyInjection\Security\Factory\WsseFactory;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class OenowebBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $extension = $container->getExtension('security');
        // $extension->addSecurityListenerFactory(new WsseFactory());
	}
}

