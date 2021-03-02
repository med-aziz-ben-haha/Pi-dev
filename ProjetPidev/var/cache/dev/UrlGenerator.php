<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format'], ['variable', '/', '\\d+', 'code'], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token'], ['text', '/_profiler']], [], []],
    'admin' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin']], [], []],
    'connexionAdmin' => [['iduser'], ['_controller' => 'App\\Controller\\AdminController::accueilAdmin'], [], [['variable', '/', '[^/]++', 'iduser'], ['text', '/connexionAdmin']], [], []],
    'categorie_soin_m_p' => [[], ['_controller' => 'App\\Controller\\CategorieSoinMPController::index'], [], [['text', '/categoriesoinmp']], [], []],
    'afficherCategorieSoinMP' => [[], ['_controller' => 'App\\Controller\\CategorieSoinMPController::listCategoriesSoinMP'], [], [['text', '/afficherCategorieSoinMP']], [], []],
    'afficherCategorieSoinMPs' => [[], ['_controller' => 'App\\Controller\\CategorieSoinMPController::listCategoriesSoinMPs'], [], [['text', '/afficherCategorieSoinMPs']], [], []],
    'ajouterCategorieSoinMP' => [[], ['_controller' => 'App\\Controller\\CategorieSoinMPController::ajouterCategorieSoinMP'], [], [['text', '/ajouterCategorieSoinMP']], [], []],
    'supprimerCategorieSoinMP' => [['id'], ['_controller' => 'App\\Controller\\CategorieSoinMPController::SupprimerCategorieSoinMP'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerCategorieSoinMP']], [], []],
    'modifierCategorieSoinMP' => [['id'], ['_controller' => 'App\\Controller\\CategorieSoinMPController::modifierCategorieSoinMP'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifierCategorieSoinMP']], [], []],
    'soin_m_p' => [[], ['_controller' => 'App\\Controller\\SoinMPController::index'], [], [['text', '/soin/m/p']], [], []],
    'afficherSoinMP' => [[], ['_controller' => 'App\\Controller\\SoinMPController::listSoinMP'], [], [['text', '/afficherSoinMP']], [], []],
    'afficherSoinMPs' => [['id'], ['_controller' => 'App\\Controller\\SoinMPController::listSoinMPs'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/afficherSoinMPs']], [], []],
    'ajouterSoinMP' => [[], ['_controller' => 'App\\Controller\\SoinMPController::ajouterSoinMP'], [], [['text', '/ajouterSoinMP']], [], []],
    'supprimerSoinMP' => [['id'], ['_controller' => 'App\\Controller\\SoinMPController::SupprimerSoinMP'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerSoinMP']], [], []],
    'modifierSoinMP' => [['id'], ['_controller' => 'App\\Controller\\SoinMPController::modifierSoinMP'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifierSoinMP']], [], []],
    'upload_test' => [[], ['_controller' => 'App\\Controller\\SoinMPController::temporaryUploadAction'], [], [['text', '/admin/upload/test']], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/accueil']], [], []],
    'Patients' => [[], ['_controller' => 'App\\Controller\\UserController::ListPatients'], [], [['text', '/Patients']], [], []],
    'supprimerPatient' => [['id'], ['_controller' => 'App\\Controller\\UserController::SupprimerPatients'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerPatient']], [], []],
    'Medecins' => [[], ['_controller' => 'App\\Controller\\UserController::ListMedcins'], [], [['text', '/Medecins']], [], []],
    'supprimerMedecin' => [['id'], ['_controller' => 'App\\Controller\\UserController::SupprimerMedecins'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerMedecin']], [], []],
    'Pharmaciens' => [[], ['_controller' => 'App\\Controller\\UserController::ListPharmaciens'], [], [['text', '/Pharmaciens']], [], []],
    'supprimerPharmacien' => [['id'], ['_controller' => 'App\\Controller\\UserController::SupprimerPharmaciens'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerPharmacien']], [], []],
    'connexion' => [[], ['_controller' => 'App\\Controller\\UserController::connexion'], [], [['text', '/connexion']], [], []],
    'accueilonline' => [['iduser'], ['_controller' => 'App\\Controller\\UserController::accueil'], [], [['variable', '/', '[^/]++', 'iduser'], ['text', '/accueilonline']], [], []],
    'inscription' => [[], ['_controller' => 'App\\Controller\\UserController::inscription'], [], [['text', '/inscription']], [], []],
    'inscriptionMed' => [[], ['_controller' => 'App\\Controller\\UserController::inscriptionMed'], [], [['text', '/inscriptionMed']], [], []],
    'inscriptionPara' => [[], ['_controller' => 'App\\Controller\\UserController::inscriptionPara'], [], [['text', '/inscriptionPara']], [], []],
];
