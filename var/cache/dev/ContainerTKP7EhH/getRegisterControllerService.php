<?php

namespace ContainerTKP7EhH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRegisterControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\RegisterController' shared autowired service.
     *
     * @return \App\Controller\RegisterController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/RegisterController.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/password-hasher/Hasher/UserPasswordHasherInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/password-hasher/Hasher/UserPasswordHasher.php';

        $container->services['App\\Controller\\RegisterController'] = $instance = new \App\Controller\RegisterController(new \Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher(($container->privates['security.password_hasher_factory'] ?? $container->load('getSecurity_PasswordHasherFactoryService'))));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\RegisterController', $container));

        return $instance;
    }
}
