<?php

namespace ContainerXs1Y2vP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_CsqC5h0Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.CsqC5h0' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.CsqC5h0'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cour' => ['privates', '.errored..service_locator.CsqC5h0.App\\Entity\\Cours', NULL, 'Cannot autowire service ".service_locator.CsqC5h0": it references class "App\\Entity\\Cours" but no such service exists.'],
            'doctrine' => ['services', 'doctrine', 'getDoctrineService', false],
        ], [
            'cour' => 'App\\Entity\\Cours',
            'doctrine' => '?',
        ]);
    }
}