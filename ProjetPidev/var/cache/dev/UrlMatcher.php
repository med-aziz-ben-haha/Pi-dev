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
        '/connect/google' => [[['_route' => 'connect_google_start', '_controller' => 'App\\Controller\\GoogleController::connectAction'], null, null, null, true, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], null, null, null, true, false, null]],
        '/inscription/google' => [[['_route' => 'inscription_google_start', '_controller' => 'App\\Controller\\GoogleController::inscriptionAction'], null, null, null, true, false, null]],
        '/inscription/google/check' => [[['_route' => 'inscription_google_check', '_controller' => 'App\\Controller\\GoogleController::inscriptionCheckAction'], null, null, null, true, false, null]],
        '/note/soin/m/p' => [[['_route' => 'note_soin_m_p', '_controller' => 'App\\Controller\\NoteSoinMPController::index'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/afficherreclamation' => [[['_route' => 'afficherreclamation', '_controller' => 'App\\Controller\\ReclamationController::listreclamation'], null, null, null, false, false, null]],
        '/afficherpdf' => [[['_route' => 'afficherpdf', '_controller' => 'App\\Controller\\ReclamationController::afficherpdf'], null, null, null, false, false, null]],
        '/afficherreclamations' => [[['_route' => 'afficherreclamations', '_controller' => 'App\\Controller\\ReclamationController::listreclamations'], null, null, null, false, false, null]],
        '/ajouterreclamation' => [[['_route' => 'ajouterreclamation', '_controller' => 'App\\Controller\\ReclamationController::ajouterreclamation'], null, null, null, false, false, null]],
        '/soin/m/p' => [[['_route' => 'soin_m_p', '_controller' => 'App\\Controller\\SoinMPController::index'], null, null, null, false, false, null]],
        '/afficherSoinMP' => [[['_route' => 'afficherSoinMP', '_controller' => 'App\\Controller\\SoinMPController::listSoinMP'], null, null, null, false, false, null]],
        '/ajouterSoinMP' => [[['_route' => 'ajouterSoinMP', '_controller' => 'App\\Controller\\SoinMPController::ajouterSoinMP'], null, null, null, false, false, null]],
        '/admin/upload/test' => [[['_route' => 'upload_test', '_controller' => 'App\\Controller\\SoinMPController::temporaryUploadAction'], null, null, null, false, false, null]],
        '/afficherStatSoinMP' => [[['_route' => 'afficherStatSoinMP', '_controller' => 'App\\Controller\\SoinMPController::afficherStatSoinMP'], null, null, null, false, false, null]],
        '/typereclamation' => [[['_route' => 'typereclamation', '_controller' => 'App\\Controller\\TypereclamationController::index'], null, null, null, false, false, null]],
        '/affichertypereclamation' => [[['_route' => 'affichertypereclamation', '_controller' => 'App\\Controller\\TypereclamationController::listtypereclamation'], null, null, null, false, false, null]],
        '/ajoutertypereclamation' => [[['_route' => 'ajoutertypereclamation', '_controller' => 'App\\Controller\\TypereclamationController::ajoutertypereclamation'], null, null, null, false, false, null]],
        '/afficherpdft' => [[['_route' => 'afficherpdft', '_controller' => 'App\\Controller\\TypereclamationController::afficherpdft'], null, null, null, false, false, null]],
        '/tri' => [[['_route' => 'tri', '_controller' => 'App\\Controller\\TypereclamationController::OrderByid'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/Patients' => [[['_route' => 'Patients', '_controller' => 'App\\Controller\\UserController::ListPatients'], null, null, null, false, false, null]],
        '/Medecins' => [[['_route' => 'Medecins', '_controller' => 'App\\Controller\\UserController::ListMedcins'], null, null, null, false, false, null]],
        '/Pharmaciens' => [[['_route' => 'Pharmaciens', '_controller' => 'App\\Controller\\UserController::ListPharmaciens'], null, null, null, false, false, null]],
        '/Parapharmaciens' => [[['_route' => 'Parapharmaciens', '_controller' => 'App\\Controller\\UserController::ListParapharmaciens'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\UserController::connexion'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\UserController::logout'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\UserController::inscription'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscriptionMed' => [[['_route' => 'inscriptionMed', '_controller' => 'App\\Controller\\UserController::inscriptionMed'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscriptionPharmacien' => [[['_route' => 'inscriptionPharmacien', '_controller' => 'App\\Controller\\UserController::inscriptionPharmacien'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscriptionParapharmacien' => [[['_route' => 'inscriptionParapharmacien', '_controller' => 'App\\Controller\\UserController::inscriptionPara'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/afficherStatUser' => [[['_route' => 'afficherStatUser', '_controller' => 'App\\Controller\\UserController::afficherStatUser'], null, null, null, false, false, null]],
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
                        .'|User/([^/]++)(*:334)'
                    .')'
                    .'|jouternoteSMP/([^/]++)/([^/]++)/([^/]++)(*:383)'
                    .'|ccueilOnline(?'
                        .'|/([^/]++)(*:415)'
                        .'|Med/([^/]++)(*:435)'
                        .'|P(?'
                            .'|harmacien/([^/]++)(*:465)'
                            .'|arapharmacien/([^/]++)(*:495)'
                        .')'
                    .')'
                .')'
                .'|/supprimer(?'
                    .'|CategorieSoinMP/([^/]++)(*:543)'
                    .'|reclamation(?'
                        .'|/([^/]++)(*:574)'
                        .'|s/([^/]++)(*:592)'
                    .')'
                    .'|SoinMP/([^/]++)(*:616)'
                    .'|typereclamation/([^/]++)(*:648)'
                    .'|P(?'
                        .'|a(?'
                            .'|tient/([^/]++)(*:678)'
                            .'|rapharmacien/([^/]++)(*:707)'
                        .')'
                        .'|harmacien/([^/]++)(*:734)'
                    .')'
                    .'|Medecin/([^/]++)(*:759)'
                .')'
                .'|/modifier(?'
                    .'|CategorieSoinMP/([^/]++)(*:804)'
                    .'|reclamations/([^/]++)(*:833)'
                    .'|SoinMP/([^/]++)(*:856)'
                    .'|typereclamation/([^/]++)(*:888)'
                    .'|User/([^/]++)(*:909)'
                    .'|Med/([^/]++)(*:929)'
                    .'|Phar/([^/]++)(*:950)'
                .')'
                .'|/repondre/([^/]++)(*:977)'
                .'|/envreponse/([^/]++)(*:1005)'
                .'|/AfficherdetailSoinMPnote/([^/]++)/([^/]++)(*:1057)'
                .'|/impression/([^/]++)/([^/]++)(*:1095)'
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
        334 => [[['_route' => 'afficherUser', '_controller' => 'App\\Controller\\UserController::afficherUser'], ['iduser'], null, null, false, true, null]],
        383 => [[['_route' => 'ajouternoteSMP', '_controller' => 'App\\Controller\\NoteSoinMPController::ajouterNote'], ['id', 'iduser', 'valeur'], ['GET' => 0], null, false, true, null]],
        415 => [[['_route' => 'accueilOnline', '_controller' => 'App\\Controller\\UserController::accueil'], ['iduser'], null, null, false, true, null]],
        435 => [[['_route' => 'accueilOnlineMed', '_controller' => 'App\\Controller\\UserController::accueilMed'], ['iduser'], null, null, false, true, null]],
        465 => [[['_route' => 'accueilOnlinePharmacien', '_controller' => 'App\\Controller\\UserController::accueilPharmacien'], ['iduser'], null, null, false, true, null]],
        495 => [[['_route' => 'accueilOnlineParapharmacien', '_controller' => 'App\\Controller\\UserController::accueilParapharmacien'], ['iduser'], null, null, false, true, null]],
        543 => [[['_route' => 'supprimerCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::SupprimerCategorieSoinMP'], ['id'], null, null, false, true, null]],
        574 => [[['_route' => 'supprimerreclamation', '_controller' => 'App\\Controller\\ReclamationController::Supprimerreclamation'], ['id'], null, null, false, true, null]],
        592 => [[['_route' => 'supprimerreclamations', '_controller' => 'App\\Controller\\ReclamationController::Supprimerreclamations'], ['id'], null, null, false, true, null]],
        616 => [[['_route' => 'supprimerSoinMP', '_controller' => 'App\\Controller\\SoinMPController::SupprimerSoinMP'], ['id'], null, null, false, true, null]],
        648 => [[['_route' => 'supprimertypereclamation', '_controller' => 'App\\Controller\\TypereclamationController::Supprimertypereclamation'], ['id'], null, null, false, true, null]],
        678 => [[['_route' => 'supprimerPatient', '_controller' => 'App\\Controller\\UserController::SupprimerPatients'], ['id'], null, null, false, true, null]],
        707 => [[['_route' => 'supprimerParapharmacien', '_controller' => 'App\\Controller\\UserController::SupprimerParapharmaciens'], ['id'], null, null, false, true, null]],
        734 => [[['_route' => 'supprimerPharmacien', '_controller' => 'App\\Controller\\UserController::SupprimerPharmaciens'], ['id'], null, null, false, true, null]],
        759 => [[['_route' => 'supprimerMedecin', '_controller' => 'App\\Controller\\UserController::SupprimerMedecins'], ['id'], null, null, false, true, null]],
        804 => [[['_route' => 'modifierCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::modifierCategorieSoinMP'], ['id'], null, null, false, true, null]],
        833 => [[['_route' => 'modifierreclamations', '_controller' => 'App\\Controller\\ReclamationController::modifierreclamation'], ['id'], null, null, false, true, null]],
        856 => [[['_route' => 'modifierSoinMP', '_controller' => 'App\\Controller\\SoinMPController::modifierSoinMP'], ['id'], null, null, false, true, null]],
        888 => [[['_route' => 'modifiertypereclamation', '_controller' => 'App\\Controller\\TypereclamationController::modifiertypereclamation'], ['id'], null, null, false, true, null]],
        909 => [[['_route' => 'modifierUser', '_controller' => 'App\\Controller\\UserController::modifierUser'], ['iduser'], null, null, false, true, null]],
        929 => [[['_route' => 'modifierMed', '_controller' => 'App\\Controller\\UserController::modifierMed'], ['iduser'], null, null, false, true, null]],
        950 => [[['_route' => 'modifierPhar', '_controller' => 'App\\Controller\\UserController::modifierPhar'], ['iduser'], null, null, false, true, null]],
        977 => [[['_route' => 'repondre', '_controller' => 'App\\Controller\\ReclamationController::repondrereclamation'], ['id'], null, null, false, true, null]],
        1005 => [[['_route' => 'envreponse', '_controller' => 'App\\Controller\\ReclamationController::envoyerreponse'], ['id'], ['GET' => 0], null, false, true, null]],
        1057 => [[['_route' => 'AfficherdetailSoinMPnote', '_controller' => 'App\\Controller\\SoinMPController::detailSoinMPsnote'], ['id', 'iduser'], null, null, false, true, null]],
        1095 => [
            [['_route' => 'impression', '_controller' => 'App\\Controller\\SoinMPController::impression'], ['id', 'iduser'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
