<?php

namespace ContainerV2mGdEn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Er8EsL1Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Er8EsL1' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Er8EsL1'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
            'package' => ['privates', '.errored..service_locator.Er8EsL1.App\\Entity\\Package', NULL, 'Cannot autowire service ".service_locator.Er8EsL1": it references class "App\\Entity\\Package" but no such service exists.'],
        ], [
            'doctrine' => '?',
            'package' => 'App\\Entity\\Package',
        ]);
    }
}