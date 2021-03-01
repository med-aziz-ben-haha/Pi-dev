<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/categoriesoinmp' => [[['_route' => 'categorie_soin_m_p', '_controller' => 'App\\Controller\\CategorieSoinMPController::index'], null, null, null, false, false, null]],
        '/afficherCategorieSoinMP' => [[['_route' => 'afficherCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::listCategoriesSoinMP'], null, null, null, false, false, null]],
        '/afficherCategorieSoinMPs' => [[['_route' => 'afficherCategorieSoinMPs', '_controller' => 'App\\Controller\\CategorieSoinMPController::listCategoriesSoinMPs'], null, null, null, false, false, null]],
        '/ajouterCategorieSoinMP' => [[['_route' => 'ajouterCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::ajouterCategorieSoinMP'], null, null, null, false, false, null]],
        '/soin/m/p' => [[['_route' => 'soin_m_p', '_controller' => 'App\\Controller\\SoinMPController::index'], null, null, null, false, false, null]],
        '/afficherSoinMP' => [[['_route' => 'afficherSoinMP', '_controller' => 'App\\Controller\\SoinMPController::listSoinMP'], null, null, null, false, false, null]],
        '/ajouterSoinMP' => [[['_route' => 'ajouterSoinMP', '_controller' => 'App\\Controller\\SoinMPController::ajouterSoinMP'], null, null, null, false, false, null]],
        '/admin/upload/test' => [[['_route' => 'upload_test', '_controller' => 'App\\Controller\\SoinMPController::temporaryUploadAction'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'user', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/Patients' => [[['_route' => 'Patients', '_controller' => 'App\\Controller\\UserController::ListPatients'], null, null, null, false, false, null]],
        '/Medecins' => [[['_route' => 'Medecins', '_controller' => 'App\\Controller\\UserController::ListMedcins'], null, null, null, false, false, null]],
        '/Pharmaciens' => [[['_route' => 'Pharmaciens', '_controller' => 'App\\Controller\\UserController::ListPharmciens'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/supprimer(?'
                    .'|CategorieSoinMP/([^/]++)(*:206)'
                    .'|SoinMP/([^/]++)(*:229)'
                .')'
                .'|/modifier(?'
                    .'|CategorieSoinMP/([^/]++)(*:274)'
                    .'|SoinMP/([^/]++)(*:297)'
                .')'
                .'|/afficherSoinMPs/([^/]++)(*:331)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        206 => [[['_route' => 'supprimerCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::SupprimerCategorieSoinMP'], ['id'], null, null, false, true, null]],
        229 => [[['_route' => 'supprimerSoinMP', '_controller' => 'App\\Controller\\SoinMPController::SupprimerSoinMP'], ['id'], null, null, false, true, null]],
        274 => [[['_route' => 'modifierCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::modifierCategorieSoinMP'], ['id'], null, null, false, true, null]],
        297 => [[['_route' => 'modifierSoinMP', '_controller' => 'App\\Controller\\SoinMPController::modifierSoinMP'], ['id'], null, null, false, true, null]],
        331 => [
            [['_route' => 'afficherSoinMPs', '_controller' => 'App\\Controller\\SoinMPController::listSoinMPs'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
