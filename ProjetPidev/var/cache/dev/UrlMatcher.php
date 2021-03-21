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
        '/reclamation' => [[['_route' => 'reclamation', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/afficherreclamation' => [[['_route' => 'afficherreclamation', '_controller' => 'App\\Controller\\ReclamationController::listreclamation'], null, null, null, false, false, null]],
        '/afficherpdf' => [[['_route' => 'afficherpdf', '_controller' => 'App\\Controller\\ReclamationController::afficherpdf'], null, null, null, false, false, null]],
        '/afficherreclamations' => [[['_route' => 'afficherreclamations', '_controller' => 'App\\Controller\\ReclamationController::listreclamations'], null, null, null, false, false, null]],
        '/ajouterreclamation' => [[['_route' => 'ajouterreclamation', '_controller' => 'App\\Controller\\ReclamationController::ajouterreclamation'], null, null, null, false, false, null]],
        '/reclamationencours' => [[['_route' => 'reclamationencours', '_controller' => 'App\\Controller\\ReclamationController::reclamationencours'], null, null, null, false, false, null]],
        '/testt' => [[['_route' => 'testtt', '_controller' => 'App\\Controller\\ReclamationController::backend'], null, null, null, false, false, null]],
        '/mail' => [[['_route' => 'user_mailing', '_controller' => 'App\\Controller\\ReclamationController::mailing'], null, ['POST' => 0], null, false, false, null]],
        '/soin/m/p' => [[['_route' => 'soin_m_p', '_controller' => 'App\\Controller\\SoinMPController::index'], null, null, null, false, false, null]],
        '/afficherSoinMP' => [[['_route' => 'afficherSoinMP', '_controller' => 'App\\Controller\\SoinMPController::listSoinMP'], null, null, null, false, false, null]],
        '/ajouterSoinMP' => [[['_route' => 'ajouterSoinMP', '_controller' => 'App\\Controller\\SoinMPController::ajouterSoinMP'], null, null, null, false, false, null]],
        '/admin/upload/test' => [[['_route' => 'upload_test', '_controller' => 'App\\Controller\\SoinMPController::temporaryUploadAction'], null, null, null, false, false, null]],
        '/typereclamation' => [[['_route' => 'typereclamation', '_controller' => 'App\\Controller\\TypereclamationController::index'], null, null, null, false, false, null]],
        '/affichertypereclamation' => [[['_route' => 'affichertypereclamation', '_controller' => 'App\\Controller\\TypereclamationController::listtypereclamation'], null, null, null, false, false, null]],
        '/ajoutertypereclamation' => [[['_route' => 'ajoutertypereclamation', '_controller' => 'App\\Controller\\TypereclamationController::ajoutertypereclamation'], null, null, null, false, false, null]],
        '/afficherpdft' => [[['_route' => 'afficherpdft', '_controller' => 'App\\Controller\\TypereclamationController::afficherpdft'], null, null, null, false, false, null]],
        '/tri' => [[['_route' => 'tri', '_controller' => 'App\\Controller\\TypereclamationController::OrderByid'], null, null, null, false, false, null]],
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
                    .'|reclamation(?'
                        .'|/([^/]++)(*:237)'
                        .'|s/([^/]++)(*:255)'
                    .')'
                    .'|SoinMP/([^/]++)(*:279)'
                    .'|typereclamation/([^/]++)(*:311)'
                .')'
                .'|/modifier(?'
                    .'|CategorieSoinMP/([^/]++)(*:356)'
                    .'|reclamations/([^/]++)(*:385)'
                    .'|SoinMP/([^/]++)(*:408)'
                    .'|typereclamation/([^/]++)(*:440)'
                .')'
                .'|/afficherSoinMPs/([^/]++)(*:474)'
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
        237 => [[['_route' => 'supprimerreclamation', '_controller' => 'App\\Controller\\ReclamationController::Supprimerreclamation'], ['id'], null, null, false, true, null]],
        255 => [[['_route' => 'supprimerreclamations', '_controller' => 'App\\Controller\\ReclamationController::Supprimerreclamations'], ['id'], null, null, false, true, null]],
        279 => [[['_route' => 'supprimerSoinMP', '_controller' => 'App\\Controller\\SoinMPController::SupprimerSoinMP'], ['id'], null, null, false, true, null]],
        311 => [[['_route' => 'supprimertypereclamation', '_controller' => 'App\\Controller\\TypereclamationController::Supprimertypereclamation'], ['id'], null, null, false, true, null]],
        356 => [[['_route' => 'modifierCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::modifierCategorieSoinMP'], ['id'], null, null, false, true, null]],
        385 => [[['_route' => 'modifierreclamations', '_controller' => 'App\\Controller\\ReclamationController::modifierreclamation'], ['id'], null, null, false, true, null]],
        408 => [[['_route' => 'modifierSoinMP', '_controller' => 'App\\Controller\\SoinMPController::modifierSoinMP'], ['id'], null, null, false, true, null]],
        440 => [[['_route' => 'modifiertypereclamation', '_controller' => 'App\\Controller\\TypereclamationController::modifiertypereclamation'], ['id'], null, null, false, true, null]],
        474 => [
            [['_route' => 'afficherSoinMPs', '_controller' => 'App\\Controller\\SoinMPController::listSoinMPs'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
