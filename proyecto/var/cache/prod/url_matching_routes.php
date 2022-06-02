<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'app_dashboard', '_controller' => 'App\\Controller\\DashboardController::index'], null, null, null, false, false, null]],
        '/p/d/f' => [[['_route' => 'app_p_d_f', '_controller' => 'App\\Controller\\PDFController::index'], null, null, null, false, false, null]],
        '/registrar-post' => [[['_route' => 'RegistrarPost', '_controller' => 'App\\Controller\\PostsController::index'], null, null, null, false, false, null]],
        '/misPosts' => [[['_route' => 'misPosts', '_controller' => 'App\\Controller\\PostsController::misPosts'], null, null, null, false, false, null]],
        '/posts/crud' => [[['_route' => 'app_posts_crud_index', '_controller' => 'App\\Controller\\PostsCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/posts/crud/new' => [[['_route' => 'app_posts_crud_new', '_controller' => 'App\\Controller\\PostsCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/registro' => [[['_route' => 'app_registro', '_controller' => 'App\\Controller\\RegistroController::index'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/user/crud' => [[['_route' => 'app_user_crud_index', '_controller' => 'App\\Controller\\UserCrudController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/crud/pdf' => [[['_route' => 'app_user_crud_pdf', '_controller' => 'App\\Controller\\UserCrudController::pdf'], null, ['GET' => 0], null, false, false, null]],
        '/user/crud/new' => [[['_route' => 'app_user_crud_new', '_controller' => 'App\\Controller\\UserCrudController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/js/routing(?:\\.(js|json))?(*:34)'
                .'|/verPost/([^/]++)(*:58)'
                .'|/posts/crud/([^/]++)(?'
                    .'|(*:88)'
                    .'|/edit(*:100)'
                    .'|(*:108)'
                .')'
                .'|/user/crud/([^/]++)(?'
                    .'|(*:139)'
                    .'|/edit(*:152)'
                    .'|(*:160)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        34 => [[['_route' => 'fos_js_routing_js', '_controller' => 'fos_js_routing.controller::indexAction', '_format' => 'js'], ['_format'], ['GET' => 0], null, false, true, null]],
        58 => [[['_route' => 'verPost', '_controller' => 'App\\Controller\\PostsController::verPosts'], ['id'], null, null, false, true, null]],
        88 => [[['_route' => 'app_posts_crud_show', '_controller' => 'App\\Controller\\PostsCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        100 => [[['_route' => 'app_posts_crud_edit', '_controller' => 'App\\Controller\\PostsCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        108 => [[['_route' => 'app_posts_crud_delete', '_controller' => 'App\\Controller\\PostsCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        139 => [[['_route' => 'app_user_crud_show', '_controller' => 'App\\Controller\\UserCrudController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        152 => [[['_route' => 'app_user_crud_edit', '_controller' => 'App\\Controller\\UserCrudController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        160 => [
            [['_route' => 'app_user_crud_delete', '_controller' => 'App\\Controller\\UserCrudController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
