<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/about' => [[['_route' => 'app_about', '_controller' => 'App\\Controller\\AboutController::index'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'app_admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/listblog' => [[['_route' => 'listblog', '_controller' => 'App\\Controller\\BlogController::index'], null, null, null, false, false, null]],
        '/blogadmin' => [[['_route' => 'app_blogadmin', '_controller' => 'App\\Controller\\BlogadminController::index'], null, null, null, false, false, null]],
        '/listBlog' => [[['_route' => 'listBlog', '_controller' => 'App\\Controller\\BlogadminController::listBlog'], null, null, null, false, false, null]],
        '/afficheblogadmin' => [[['_route' => 'afficheblogadmin', '_controller' => 'App\\Controller\\BlogadminController::afficheblogadmin'], null, null, null, false, false, null]],
        '/addblogadmin' => [[['_route' => 'addblog', '_controller' => 'App\\Controller\\BlogadminController::addblogadmin'], null, null, null, false, false, null]],
        '/client' => [[['_route' => 'app_client', '_controller' => 'App\\Controller\\ClientController::index'], null, null, null, false, false, null]],
        '/coach' => [[['_route' => 'app_coach', '_controller' => 'App\\Controller\\CoachController::index'], null, null, null, false, false, null]],
        '/c' => [[['_route' => 'app_cours', '_controller' => 'App\\Controller\\CoachController::affiche'], null, null, null, false, false, null]],
        '/read' => [[['_route' => 'readAll', '_controller' => 'App\\Controller\\CoachController::afficheall'], null, null, null, false, false, null]],
        '/ajouterS' => [[['_route' => 'ajouterS', '_controller' => 'App\\Controller\\CoachController::ajouter'], null, null, null, false, false, null]],
        '/cours' => [[['_route' => 'app_cours_index', '_controller' => 'App\\Controller\\CoursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cours/new' => [[['_route' => 'app_cours_new', '_controller' => 'App\\Controller\\CoursController::ajouter'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/member/Member' => [[['_route' => 'app_member', '_controller' => 'App\\Controller\\MemberController::form'], null, null, null, false, false, null]],
        '/member' => [[['_route' => 'app_member_index', '_controller' => 'App\\Controller\\MemberController::index'], null, ['GET' => 0], null, true, false, null]],
        '/member/new' => [[['_route' => 'app_member_new', '_controller' => 'App\\Controller\\MemberController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/pack' => [[['_route' => 'app_pack', '_controller' => 'App\\Controller\\PackController::index'], null, null, null, false, false, null]],
        '/planning' => [[['_route' => 'app_planning', '_controller' => 'App\\Controller\\PlanningController::index'], null, null, null, false, false, null]],
        '/prodduit' => [[['_route' => 'app_prodduit', '_controller' => 'App\\Controller\\ProdduitController::index'], null, null, null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/standard' => [[['_route' => 'app_standard', '_controller' => 'App\\Controller\\StandardController::index'], null, null, null, false, false, null]],
        '/admin/user' => [[['_route' => 'app_user_admin_index', '_controller' => 'App\\Controller\\UserAdminController::index'], null, ['GET' => 0], null, true, false, null]],
        '/user/terms' => [[['_route' => 'app_terms', '_controller' => 'App\\Controller\\UserController::terms'], null, ['GET' => 0], null, false, false, null]],
        '/user/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\UserController::show'], null, ['GET' => 0], null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/u(?'
                    .'|pdateblog/([^/]++)(*:30)'
                    .'|ser/([^/]++)/edit(*:54)'
                .')'
                .'|/deleteblog/([^/]++)(*:82)'
                .'|/m(?'
                    .'|odifierS/([^/]++)(*:111)'
                    .'|ember(?'
                        .'|/(?'
                            .'|([^/]++)(*:139)'
                            .'|modifier/([^/]++)(*:164)'
                        .')'
                        .'|supprimer/([^/]++)(*:191)'
                    .')'
                .')'
                .'|/supprimerS/([^/]++)(*:221)'
                .'|/cours/([^/]++)(?'
                    .'|/edit(*:252)'
                    .'|(*:260)'
                .')'
                .'|/admin/user/([^/]++)(?'
                    .'|(*:292)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:332)'
                    .'|wdt/([^/]++)(*:352)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:398)'
                            .'|router(*:412)'
                            .'|exception(?'
                                .'|(*:432)'
                                .'|\\.css(*:445)'
                            .')'
                        .')'
                        .'|(*:455)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        30 => [[['_route' => 'updateblog', '_controller' => 'App\\Controller\\BlogadminController::updateblog'], ['id'], null, null, false, true, null]],
        54 => [[['_route' => 'app_profile_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        82 => [[['_route' => 'deleteblog', '_controller' => 'App\\Controller\\BlogadminController::deleteblog'], ['id'], null, null, false, true, null]],
        111 => [[['_route' => 'modifierS', '_controller' => 'App\\Controller\\CoachController::modifier'], ['id'], null, null, false, true, null]],
        139 => [[['_route' => 'app_member_show', '_controller' => 'App\\Controller\\MemberController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        164 => [[['_route' => 'modifier', '_controller' => 'App\\Controller\\MemberController::modifier'], ['id'], null, null, false, true, null]],
        191 => [[['_route' => 'supprimer', '_controller' => 'App\\Controller\\MemberController::supprimerS'], ['id'], null, null, false, true, null]],
        221 => [[['_route' => 'supprimerS', '_controller' => 'App\\Controller\\CoachController::supprimerS'], ['id'], null, null, false, true, null]],
        252 => [[['_route' => 'app_cours_edit', '_controller' => 'App\\Controller\\CoursController::modifier'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        260 => [
            [['_route' => 'app_cours_show', '_controller' => 'App\\Controller\\CoursController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_cours_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        292 => [
            [['_route' => 'app_user_admin_show', '_controller' => 'App\\Controller\\UserAdminController::show'], ['id'], ['GET' => 0], null, false, true, null],
            [['_route' => 'app_user_admin_delete', '_controller' => 'App\\Controller\\UserAdminController::delete'], ['id'], ['POST' => 0], null, false, true, null],
        ],
        332 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        352 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        398 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        412 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        432 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        445 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        455 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
