<?php

namespace ContainerAnmsHwz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPosts1TypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\Posts1Type' shared autowired service.
     *
     * @return \App\Form\Posts1Type
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\Posts1Type'] = new \App\Form\Posts1Type();
    }
}
