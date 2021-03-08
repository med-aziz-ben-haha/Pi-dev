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
        '/ajouterCategorieSoinMP' => [[['_route' => 'ajouterCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::ajouterCategorieSoinMP'], null, null, null, false, false, null]],
        '/note/soin/m/p' => [[['_route' => 'note_soin_m_p', '_controller' => 'App\\Controller\\NoteSoinMPController::index'], null, null, null, false, false, null]],
        '/soin/m/p' => [[['_route' => 'soin_m_p', '_controller' => 'App\\Controller\\SoinMPController::index'], null, null, null, false, false, null]],
        '/afficherSoinMP' => [[['_route' => 'afficherSoinMP', '_controller' => 'App\\Controller\\SoinMPController::listSoinMP'], null, null, null, false, false, null]],
        '/ajouterSoinMP' => [[['_route' => 'ajouterSoinMP', '_controller' => 'App\\Controller\\SoinMPController::ajouterSoinMP'], null, null, null, false, false, null]],
        '/admin/upload/test' => [[['_route' => 'upload_test', '_controller' => 'App\\Controller\\SoinMPController::temporaryUploadAction'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/Patients' => [[['_route' => 'Patients', '_controller' => 'App\\Controller\\UserController::ListPatients'], null, null, null, false, false, null]],
        '/Medecins' => [[['_route' => 'Medecins', '_controller' => 'App\\Controller\\UserController::ListMedcins'], null, null, null, false, false, null]],
        '/Pharmaciens' => [[['_route' => 'Pharmaciens', '_controller' => 'App\\Controller\\UserController::ListPharmaciens'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\UserController::connexion'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\UserController::inscription'], null, null, null, false, false, null]],
        '/inscriptionMed' => [[['_route' => 'inscriptionMed', '_controller' => 'App\\Controller\\UserController::inscriptionMed'], null, null, null, false, false, null]],
        '/inscriptionPharmacien' => [[['_route' => 'inscriptionPharmacien', '_controller' => 'App\\Controller\\UserController::inscriptionPara'], null, null, null, false, false, null]],
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
                .'|/connexionAdmin/([^/]++)(*:193)'
                .'|/a(?'
                    .'|fficher(?'
                        .'|CategorieSoinMPs/([^/]++)(*:241)'
                        .'|SoinMPs/([^/]++)/([^/]++)(*:274)'
                        .'|DetailSoinMPs/([^/]++)/([^/]++)(*:313)'
                    .')'
                    .'|jouternoteSMP/([^/]++)/([^/]++)/([^/]++)(*:362)'
                    .'|ccueilOnline(?'
                        .'|/([^/]++)(*:394)'
                        .'|Med/([^/]++)(*:414)'
                        .'|Pharmacien/([^/]++)(*:441)'
                    .')'
                .')'
                .'|/supprimer(?'
                    .'|CategorieSoinMP/([^/]++)(*:488)'
                    .'|SoinMP/([^/]++)(*:511)'
                    .'|P(?'
                        .'|atient/([^/]++)(*:538)'
                        .'|harmacien/([^/]++)(*:564)'
                    .')'
                    .'|Medecin/([^/]++)(*:589)'
                .')'
                .'|/modifier(?'
                    .'|CategorieSoinMP/([^/]++)(*:634)'
                    .'|SoinMP/([^/]++)(*:657)'
                .')'
                .'|/AfficherdetailSoinMPnote/([^/]++)/([^/]++)(*:709)'
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
        193 => [[['_route' => 'connexionAdmin', '_controller' => 'App\\Controller\\AdminController::accueilAdmin'], ['iduser'], null, null, false, true, null]],
        241 => [[['_route' => 'afficherCategorieSoinMPs', '_controller' => 'App\\Controller\\CategorieSoinMPController::listCategoriesSoinMPs'], ['iduser'], null, null, false, true, null]],
        274 => [[['_route' => 'afficherSoinMPs', '_controller' => 'App\\Controller\\SoinMPController::listSoinMPs'], ['id', 'iduser'], null, null, false, true, null]],
        313 => [[['_route' => 'afficherDetailSoinMPs', '_controller' => 'App\\Controller\\SoinMPController::detailSoinMPs'], ['id', 'iduser'], null, null, false, true, null]],
        362 => [[['_route' => 'ajouternoteSMP', '_controller' => 'App\\Controller\\NoteSoinMPController::ajouterNote'], ['id', 'iduser', 'valeur'], ['GET' => 0], null, false, true, null]],
        394 => [[['_route' => 'accueilOnline', '_controller' => 'App\\Controller\\UserController::accueil'], ['iduser'], null, null, false, true, null]],
        414 => [[['_route' => 'accueilOnlineMed', '_controller' => 'App\\Controller\\UserController::accueilMed'], ['iduser'], null, null, false, true, null]],
        441 => [[['_route' => 'accueilOnlinePharmacien', '_controller' => 'App\\Controller\\UserController::accueilPharmacien'], ['iduser'], null, null, false, true, null]],
        488 => [[['_route' => 'supprimerCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::SupprimerCategorieSoinMP'], ['id'], null, null, false, true, null]],
        511 => [[['_route' => 'supprimerSoinMP', '_controller' => 'App\\Controller\\SoinMPController::SupprimerSoinMP'], ['id'], null, null, false, true, null]],
        538 => [[['_route' => 'supprimerPatient', '_controller' => 'App\\Controller\\UserController::SupprimerPatients'], ['id'], null, null, false, true, null]],
        564 => [[['_route' => 'supprimerPharmacien', '_controller' => 'App\\Controller\\UserController::SupprimerPharmaciens'], ['id'], null, null, false, true, null]],
        589 => [[['_route' => 'supprimerMedecin', '_controller' => 'App\\Controller\\UserController::SupprimerMedecins'], ['id'], null, null, false, true, null]],
        634 => [[['_route' => 'modifierCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::modifierCategorieSoinMP'], ['id'], null, null, false, true, null]],
        657 => [[['_route' => 'modifierSoinMP', '_controller' => 'App\\Controller\\SoinMPController::modifierSoinMP'], ['id'], null, null, false, true, null]],
        709 => [
            [['_route' => 'AfficherdetailSoinMPnote', '_controller' => 'App\\Controller\\SoinMPController::detailSoinMPsnote'], ['id', 'iduser'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
