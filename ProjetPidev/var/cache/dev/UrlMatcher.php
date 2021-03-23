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
        '/categorie/produit' => [[['_route' => 'categorie_produit', '_controller' => 'App\\Controller\\CategorieProduitController::index'], null, null, null, false, false, null]],
        '/categoriesoinmp' => [[['_route' => 'categorie_soin_m_p', '_controller' => 'App\\Controller\\CategorieSoinMPController::index'], null, null, null, false, false, null]],
        '/afficherCategorieSoinMP' => [[['_route' => 'afficherCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::listCategoriesSoinMP'], null, null, null, false, false, null]],
        '/afficherCategorieSoinMPs' => [[['_route' => 'afficherCategorieSoinMPs', '_controller' => 'App\\Controller\\CategorieSoinMPController::listCategoriesSoinMPs'], null, null, null, false, false, null]],
        '/ajouterCategorieSoinMP' => [[['_route' => 'ajouterCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::ajouterCategorieSoinMP'], null, null, null, false, false, null]],
        '/list/produit' => [[['_route' => 'list_produit', '_controller' => 'App\\Controller\\ListProduitController::index'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/parapharmacie' => [[['_route' => 'parapharmacie', '_controller' => 'App\\Controller\\ParapharmacieController::index'], null, null, null, false, false, null]],
        '/affichePara' => [[['_route' => 'affichePara', '_controller' => 'App\\Controller\\ParapharmacieController::affiche'], null, null, null, false, false, null]],
        '/parapharmacie/AjoutParapharmacie' => [[['_route' => 'AjoutParapharmacie', '_controller' => 'App\\Controller\\ParapharmacieController::add'], null, null, null, false, false, null]],
        '/afficheFrontListPara' => [[['_route' => 'afficheFrontListPara', '_controller' => 'App\\Controller\\ParapharmacieController::afficheFront'], null, null, null, false, false, null]],
        '/produit' => [[['_route' => 'produit', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/afficheBackProduit' => [[['_route' => 'afficheBackProduit', '_controller' => 'App\\Controller\\ProduitController::afficheBackProduit'], null, null, null, false, false, null]],
        '/regions' => [[['_route' => 'regions', '_controller' => 'App\\Controller\\RegionsController::index'], null, null, null, false, false, null]],
        '/afficheRegions' => [[['_route' => 'afficheRegions', '_controller' => 'App\\Controller\\RegionsController::affiche'], null, null, null, false, false, null]],
        '/regions/AjoutRegion' => [[['_route' => 'AjoutRegion', '_controller' => 'App\\Controller\\RegionsController::add'], null, null, null, false, false, null]],
        '/soin/m/p' => [[['_route' => 'soin_m_p', '_controller' => 'App\\Controller\\SoinMPController::index'], null, null, null, false, false, null]],
        '/afficherSoinMP' => [[['_route' => 'afficherSoinMP', '_controller' => 'App\\Controller\\SoinMPController::listSoinMP'], null, null, null, false, false, null]],
        '/ajouterSoinMP' => [[['_route' => 'ajouterSoinMP', '_controller' => 'App\\Controller\\SoinMPController::ajouterSoinMP'], null, null, null, false, false, null]],
        '/admin/upload/test' => [[['_route' => 'upload_test', '_controller' => 'App\\Controller\\SoinMPController::temporaryUploadAction'], null, null, null, false, false, null]],
        '/accueil' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\UserController::index'], null, null, null, false, false, null]],
        '/Patients' => [[['_route' => 'Patients', '_controller' => 'App\\Controller\\UserController::ListPatients'], null, null, null, false, false, null]],
        '/Medecins' => [[['_route' => 'Medecins', '_controller' => 'App\\Controller\\UserController::ListMedcins'], null, null, null, false, false, null]],
        '/Pharmaciens' => [[['_route' => 'Pharmaciens', '_controller' => 'App\\Controller\\UserController::ListPharmaciens'], null, null, null, false, false, null]],
        '/Parapharmaciens' => [[['_route' => 'Parapharmaciens', '_controller' => 'App\\Controller\\UserController::ListParapharmaciens'], null, null, null, false, false, null]],
        '/connexion' => [[['_route' => 'connexion', '_controller' => 'App\\Controller\\UserController::connexion'], null, null, null, false, false, null]],
        '/inscription' => [[['_route' => 'inscription', '_controller' => 'App\\Controller\\UserController::inscription'], null, null, null, false, false, null]],
        '/inscriptionMed' => [[['_route' => 'inscriptionMed', '_controller' => 'App\\Controller\\UserController::inscriptionMed'], null, null, null, false, false, null]],
        '/inscriptionPharmacien' => [[['_route' => 'inscriptionPharmacien', '_controller' => 'App\\Controller\\UserController::inscriptionPara'], null, null, null, false, false, null]],
        '/inscriptionParaph' => [[['_route' => 'inscriptionParaph', '_controller' => 'App\\Controller\\UserController::inscriptionParapharmacien'], null, null, null, false, false, null]],
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
                .'|/c(?'
                    .'|onnexionAdmin/([^/]++)(*:196)'
                    .'|ategorie/ModifierCategorie/([^/]++)/([^/]++)(*:248)'
                    .'|hoixCategorie/([^/]++)/([^/]++)(*:287)'
                .')'
                .'|/a(?'
                    .'|ffiche(?'
                        .'|C(?'
                            .'|ategorieProd/([^/]++)/([^/]++)(*:344)'
                            .'|lien(?'
                                .'|CategorieProd(?'
                                    .'|/([^/]++)/([^/]++)(*:393)'
                                    .'|uit/([^/]++)/([^/]++)/([^/]++)(*:431)'
                                .')'
                                .'|ListProduit/([^/]++)/([^/]++)(*:469)'
                                .'|Panier/([^/]++)(*:492)'
                            .')'
                        .')'
                        .'|P(?'
                            .'|arapharmacien(?'
                                .'|ListProduit/([^/]++)/([^/]++)(*:551)'
                                .'|Commande/([^/]++)(*:576)'
                            .')'
                            .'|rod(?'
                                .'|/([^/]++)/([^/]++)(*:609)'
                                .'|uit/([^/]++)/([^/]++)/([^/]++)(*:647)'
                            .')'
                        .')'
                        .'|FrontClientPara/([^/]++)(*:681)'
                        .'|rSoinMPs/([^/]++)(*:706)'
                    .')'
                    .'|ccueilOnline(?'
                        .'|/([^/]++)(*:739)'
                        .'|Med/([^/]++)(*:759)'
                        .'|P(?'
                            .'|harmacien/([^/]++)(*:789)'
                            .'|arapharmacien/([^/]++)(*:819)'
                        .')'
                    .')'
                .')'
                .'|/Supp(?'
                    .'|Categorie/([^/]++)/([^/]++)(*:865)'
                    .'|ListProd/([^/]++)/([^/]++)/([^/]++)(*:908)'
                    .'|/([^/]++)(*:925)'
                    .'|Prod/([^/]++)/([^/]++)(*:955)'
                    .'|Region/([^/]++)(*:978)'
                .')'
                .'|/Ajout(?'
                    .'|Categorie/([^/]++)/([^/]++)(*:1023)'
                    .'|Produit/([^/]++)/([^/]++)(*:1057)'
                .')'
                .'|/supprimer(?'
                    .'|CategorieSoinMP/([^/]++)(*:1104)'
                    .'|SoinMP/([^/]++)(*:1128)'
                    .'|P(?'
                        .'|atient/([^/]++)(*:1156)'
                        .'|harmacien/([^/]++)(*:1183)'
                    .')'
                    .'|Medecin/([^/]++)(*:1209)'
                .')'
                .'|/modifier(?'
                    .'|CategorieSoinMP/([^/]++)(*:1255)'
                    .'|SoinMP/([^/]++)(*:1279)'
                .')'
                .'|/Modifier(?'
                    .'|ListProduit/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:1348)'
                    .'|Produit/([^/]++)/([^/]++)(*:1382)'
                .')'
                .'|/listp/([^/]++)/([^/]++)(*:1416)'
                .'|/parapharmacie/ModifierParapharmacie/([^/]++)(*:1470)'
                .'|/regions/ModifierRegion/([^/]++)(*:1511)'
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
        196 => [[['_route' => 'connexionAdmin', '_controller' => 'App\\Controller\\AdminController::accueilAdmin'], ['iduser'], null, null, false, true, null]],
        248 => [[['_route' => 'modifierCategorie', '_controller' => 'App\\Controller\\CategorieProduitController::modifierPara'], ['id', 'iduser'], null, null, false, true, null]],
        287 => [[['_route' => 'choixCategorie', '_controller' => 'App\\Controller\\CategorieProduitController::choixCategorie'], ['id', 'iduser'], null, null, false, true, null]],
        344 => [[['_route' => 'afficheCategorieProd', '_controller' => 'App\\Controller\\CategorieProduitController::affiche'], ['id', 'iduser'], null, null, false, true, null]],
        393 => [[['_route' => 'afficheClienCategorieProd', '_controller' => 'App\\Controller\\CategorieProduitController::afficheClient'], ['idpara', 'iduser'], null, null, false, true, null]],
        431 => [[['_route' => 'afficheClienCategorieProduit', '_controller' => 'App\\Controller\\ProduitController::afficheClient'], ['idpara', 'idcat', 'iduser'], null, null, false, true, null]],
        469 => [[['_route' => 'afficheClienListProduit', '_controller' => 'App\\Controller\\ListProduitController::afficheClient'], ['idpanier', 'iduser'], null, null, false, true, null]],
        492 => [[['_route' => 'afficheClienPanier', '_controller' => 'App\\Controller\\PanierController::afficheClient'], ['iduser'], null, null, false, true, null]],
        551 => [[['_route' => 'afficheParapharmacienListProduit', '_controller' => 'App\\Controller\\ListProduitController::afficheParapharmacien'], ['idpanier', 'idpara'], null, null, false, true, null]],
        576 => [[['_route' => 'afficheParapharmacienCommande', '_controller' => 'App\\Controller\\PanierController::afficheParapharmacienCommande'], ['idpara'], null, null, false, true, null]],
        609 => [[['_route' => 'afficheProd', '_controller' => 'App\\Controller\\ProduitController::affiche'], ['id', 'iduser'], null, null, false, true, null]],
        647 => [[['_route' => 'afficheProduit', '_controller' => 'App\\Controller\\ProduitController::afficheProduit'], ['idpara', 'idp', 'iduser'], null, null, false, true, null]],
        681 => [[['_route' => 'afficheFrontClientPara', '_controller' => 'App\\Controller\\ParapharmacieController::afficheFrontClient'], ['iduser'], null, null, false, true, null]],
        706 => [[['_route' => 'afficherSoinMPs', '_controller' => 'App\\Controller\\SoinMPController::listSoinMPs'], ['id'], null, null, false, true, null]],
        739 => [[['_route' => 'accueilOnline', '_controller' => 'App\\Controller\\UserController::accueil'], ['iduser'], null, null, false, true, null]],
        759 => [[['_route' => 'accueilOnlineMed', '_controller' => 'App\\Controller\\UserController::accueilMed'], ['iduser'], null, null, false, true, null]],
        789 => [[['_route' => 'accueilOnlinePharmacien', '_controller' => 'App\\Controller\\UserController::accueilPharmacien'], ['iduser'], null, null, false, true, null]],
        819 => [[['_route' => 'accueilOnlineParapharmacien', '_controller' => 'App\\Controller\\UserController::accueilParapharmacien'], ['iduser'], null, null, false, true, null]],
        865 => [[['_route' => 'deleteCategorie', '_controller' => 'App\\Controller\\CategorieProduitController::delete'], ['id', 'iduser'], null, null, false, true, null]],
        908 => [[['_route' => 'deleteListProduit', '_controller' => 'App\\Controller\\ListProduitController::delete'], ['id', 'idpanier', 'iduser'], null, null, false, true, null]],
        925 => [[['_route' => 'deleteParapharmacie', '_controller' => 'App\\Controller\\ParapharmacieController::delete'], ['id'], null, null, false, true, null]],
        955 => [[['_route' => 'deleteProduit', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id', 'iduser'], null, null, false, true, null]],
        978 => [[['_route' => 'deleteRegion', '_controller' => 'App\\Controller\\RegionsController::delete'], ['id'], null, null, false, true, null]],
        1023 => [[['_route' => 'AjoutCategorie', '_controller' => 'App\\Controller\\CategorieProduitController::add'], ['id', 'iduser'], null, null, false, true, null]],
        1057 => [[['_route' => 'AjoutProduit', '_controller' => 'App\\Controller\\ProduitController::add'], ['id', 'iduser'], null, null, false, true, null]],
        1104 => [[['_route' => 'supprimerCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::SupprimerCategorieSoinMP'], ['id'], null, null, false, true, null]],
        1128 => [[['_route' => 'supprimerSoinMP', '_controller' => 'App\\Controller\\SoinMPController::SupprimerSoinMP'], ['id'], null, null, false, true, null]],
        1156 => [[['_route' => 'supprimerPatient', '_controller' => 'App\\Controller\\UserController::SupprimerPatients'], ['id'], null, null, false, true, null]],
        1183 => [[['_route' => 'supprimerPharmacien', '_controller' => 'App\\Controller\\UserController::SupprimerParapharmaciens'], ['id'], null, null, false, true, null]],
        1209 => [[['_route' => 'supprimerMedecin', '_controller' => 'App\\Controller\\UserController::SupprimerMedecins'], ['id'], null, null, false, true, null]],
        1255 => [[['_route' => 'modifierCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::modifierCategorieSoinMP'], ['id'], null, null, false, true, null]],
        1279 => [[['_route' => 'modifierSoinMP', '_controller' => 'App\\Controller\\SoinMPController::modifierSoinMP'], ['id'], null, null, false, true, null]],
        1348 => [[['_route' => 'modifierListProduit', '_controller' => 'App\\Controller\\ListProduitController::modifierPara'], ['id', 'idpanier', 'iduser', 'idprod'], null, null, false, true, null]],
        1382 => [[['_route' => 'modifierProduit', '_controller' => 'App\\Controller\\ProduitController::modifierPara'], ['id', 'iduser'], null, null, false, true, null]],
        1416 => [[['_route' => 'listp', '_controller' => 'App\\Controller\\ListProduitController::listp'], ['idpanier', 'idpara'], null, null, false, true, null]],
        1470 => [[['_route' => 'modifierParapharmacie', '_controller' => 'App\\Controller\\ParapharmacieController::modifierPara'], ['id'], null, null, false, true, null]],
        1511 => [
            [['_route' => 'modifierRegion', '_controller' => 'App\\Controller\\RegionsController::modifierPara'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
