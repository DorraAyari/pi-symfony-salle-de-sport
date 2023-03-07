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
        '/coach' => [[['_route' => 'app_coach', '_controller' => 'App\\Controller\\CoachController::index'], null, null, null, false, false, null]],
        '/read' => [[['_route' => 'readAll', '_controller' => 'App\\Controller\\CoachController::afficheall'], null, null, null, false, false, null]],
        '/ajouterS' => [[['_route' => 'ajouterS', '_controller' => 'App\\Controller\\CoachController::ajouter'], null, null, null, false, false, null]],
        '/command' => [[['_route' => 'app_command', '_controller' => 'App\\Controller\\CommandController::index'], null, null, null, false, false, null]],
        '/command/admin' => [[['_route' => 'app_command_admin', '_controller' => 'App\\Controller\\CommandController::indexadd'], null, null, null, false, false, null]],
        '/command/add' => [
            [['_route' => 'app_add2', '_controller' => 'App\\Controller\\CommandController::valider'], null, null, null, false, false, null],
            [['_route' => 'command_list', '_controller' => 'App\\Controller\\CommandController::listOrders'], null, null, null, false, false, null],
        ],
        '/c' => [[['_route' => 'app_cours', '_controller' => 'App\\Controller\\CoursController::affiche'], null, null, null, false, false, null]],
        '/readc' => [[['_route' => 'readc', '_controller' => 'App\\Controller\\CoursController::afficheall'], null, null, null, false, false, null]],
        '/ajouterc' => [[['_route' => 'ajouterc', '_controller' => 'App\\Controller\\CoursController::ajouter'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/member' => [[['_route' => 'app_member_index', '_controller' => 'App\\Controller\\MemberController::index'], null, null, null, false, false, null]],
        '/new' => [[['_route' => 'app_member_new', '_controller' => 'App\\Controller\\MemberController::ajouter'], null, null, null, false, false, null]],
        '/pack' => [[['_route' => 'app_pack', '_controller' => 'App\\Controller\\PackController::index'], null, null, null, false, false, null]],
        '/planning' => [[['_route' => 'app_planning', '_controller' => 'App\\Controller\\PlanningController::index'], null, null, null, false, false, null]],
        '/prodduit' => [[['_route' => 'app_prodduit', '_controller' => 'App\\Controller\\ProdduitController::index'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'app_produit', '_controller' => 'App\\Controller\\ProduitController::afficheall'], null, null, null, false, false, null]],
        '/listprod' => [[['_route' => 'lisproduit', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/addproduit' => [[['_route' => 'addproduit', '_controller' => 'App\\Controller\\ProduitController::addprod'], null, null, null, false, false, null]],
        '/standard' => [[['_route' => 'app_standard', '_controller' => 'App\\Controller\\StandardController::index'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/updateblog/([^/]++)(*:27)'
                .'|/deleteblog/([^/]++)(*:54)'
                .'|/modifier(?'
                    .'|S/([^/]++)(*:83)'
                    .'|c/([^/]++)(*:100)'
                    .'|/([^/]++)(*:117)'
                    .'|p/([^/]++)(*:135)'
                .')'
                .'|/s(?'
                    .'|upprimer(?'
                        .'|S/([^/]++)(*:170)'
                        .'|cc/([^/]++)(*:189)'
                        .'|/([^/]++)(*:206)'
                        .'|p/([^/]++)(*:224)'
                    .')'
                    .'|how(?'
                        .'|/([^/]++)(*:248)'
                        .'|s/([^/]++)(*:266)'
                    .')'
                .')'
                .'|/command/(?'
                    .'|add/([^/]++)(*:300)'
                    .'|diminuier/([^/]++)(*:326)'
                    .'|remove/([^/]++)(*:349)'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:389)'
                    .'|wdt/([^/]++)(*:409)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:455)'
                            .'|router(*:469)'
                            .'|exception(?'
                                .'|(*:489)'
                                .'|\\.css(*:502)'
                            .')'
                        .')'
                        .'|(*:512)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'updateblog', '_controller' => 'App\\Controller\\BlogadminController::updateblog'], ['id'], null, null, false, true, null]],
        54 => [[['_route' => 'deleteblog', '_controller' => 'App\\Controller\\BlogadminController::deleteblog'], ['id'], null, null, false, true, null]],
        83 => [[['_route' => 'modifierS', '_controller' => 'App\\Controller\\CoachController::modifier'], ['id'], null, null, false, true, null]],
        100 => [[['_route' => 'modifierc', '_controller' => 'App\\Controller\\CoursController::modifier'], ['id'], null, null, false, true, null]],
        117 => [[['_route' => 'modifier', '_controller' => 'App\\Controller\\MemberController::modifier'], ['id'], null, null, false, true, null]],
        135 => [[['_route' => 'modifierp', '_controller' => 'App\\Controller\\ProduitController::modifier'], ['id'], null, null, false, true, null]],
        170 => [[['_route' => 'supprimerS', '_controller' => 'App\\Controller\\CoachController::supprimerS'], ['id'], null, null, false, true, null]],
        189 => [[['_route' => 'supprimercc', '_controller' => 'App\\Controller\\CoursController::supprimerS'], ['id'], null, null, false, true, null]],
        206 => [[['_route' => 'supprimer', '_controller' => 'App\\Controller\\MemberController::supprimerS'], ['id'], null, null, false, true, null]],
        224 => [[['_route' => 'supprimerp', '_controller' => 'App\\Controller\\ProduitController::supprimerp'], ['id'], null, null, false, true, null]],
        248 => [[['_route' => 'show', '_controller' => 'App\\Controller\\CoursController::show'], ['id'], null, null, false, true, null]],
        266 => [[['_route' => 'shows', '_controller' => 'App\\Controller\\ProduitController::show'], ['id'], null, null, false, true, null]],
        300 => [[['_route' => 'app_add', '_controller' => 'App\\Controller\\CommandController::addcom'], ['id'], null, null, false, true, null]],
        326 => [[['_route' => 'app_diminuier', '_controller' => 'App\\Controller\\CommandController::diminuer'], ['id'], null, null, false, true, null]],
        349 => [[['_route' => 'app_remove', '_controller' => 'App\\Controller\\CommandController::removecmd'], ['id'], null, null, false, true, null]],
        389 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        409 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        455 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        469 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        489 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        502 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        512 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
