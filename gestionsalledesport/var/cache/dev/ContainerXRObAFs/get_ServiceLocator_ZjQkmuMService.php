<?php

namespace ContainerXRObAFs;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZjQkmuMService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zjQkmuM' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zjQkmuM'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'validator' => ['services', '.container.private.validator', 'get_Container_Private_ValidatorService', false],
        ], [
            'validator' => '?',
        ]);
    }
}