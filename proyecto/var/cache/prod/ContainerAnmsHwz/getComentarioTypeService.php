<?php

namespace ContainerAnmsHwz;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/*
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getComentarioTypeService extends App_KernelProdContainer
{
    /*
     * Gets the private 'App\Form\ComentarioType' shared autowired service.
     *
     * @return \App\Form\ComentarioType
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['App\\Form\\ComentarioType'] = new \App\Form\ComentarioType();
    }
}
