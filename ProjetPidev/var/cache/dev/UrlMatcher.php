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
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/calendar/calendar' => [[['_route' => 'calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, ['GET' => 0], null, false, false, null]],
        '/calendar/new' => [[['_route' => 'calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie/produit' => [[['_route' => 'categorie_produit', '_controller' => 'App\\Controller\\CategorieProduitController::index'], null, null, null, false, false, null]],
        '/categoriesoinmp' => [[['_route' => 'categorie_soin_m_p', '_controller' => 'App\\Controller\\CategorieSoinMPController::index'], null, null, null, false, false, null]],
        '/afficherCategorieSoinMP' => [[['_route' => 'afficherCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::listCategoriesSoinMP'], null, null, null, false, false, null]],
        '/ajouterCategorieSoinMP' => [[['_route' => 'ajouterCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::ajouterCategorieSoinMP'], null, null, null, false, false, null]],
        '/centreMedical' => [[['_route' => 'centre_medical_index', '_controller' => 'App\\Controller\\CentreMedicalController::index'], null, ['GET' => 0], null, true, false, null]],
        '/centreMedical/front' => [[['_route' => 'centre_medical_index_front', '_controller' => 'App\\Controller\\CentreMedicalController::index_front'], null, ['GET' => 0], null, true, false, null]],
        '/centreMedical/new' => [[['_route' => 'centre_medical_new', '_controller' => 'App\\Controller\\CentreMedicalController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
        '/connect/google' => [[['_route' => 'connect_google_start', '_controller' => 'App\\Controller\\GoogleController::connectAction'], null, null, null, true, false, null]],
        '/connect/google/check' => [[['_route' => 'connect_google_check', '_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], null, null, null, true, false, null]],
        '/inscription/google' => [[['_route' => 'inscription_google_start', '_controller' => 'App\\Controller\\GoogleController::inscriptionAction'], null, null, null, true, false, null]],
        '/inscription/google/check' => [[['_route' => 'inscription_google_check', '_controller' => 'App\\Controller\\GoogleController::inscriptionCheckAction'], null, null, null, true, false, null]],
        '/list/produit' => [[['_route' => 'list_produit', '_controller' => 'App\\Controller\\ListProduitController::index'], null, null, null, false, false, null]],
        '/calendar' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/medicament' => [[['_route' => 'medicament', '_controller' => 'App\\Controller\\MedicamentController::index'], null, null, null, false, false, null]],
        '/listmedicament' => [[['_route' => 'listmedicament', '_controller' => 'App\\Controller\\MedicamentController::listmedicament'], null, null, null, false, false, null]],
        '/Medicamentajout' => [[['_route' => 'Medicamentajout', '_controller' => 'App\\Controller\\MedicamentController::Medicamentajout'], null, null, null, false, false, null]],
        '/recherchemed' => [[['_route' => 'recherchemed', '_controller' => 'App\\Controller\\MedicamentController::recherche'], null, null, null, false, false, null]],
        '/frontlistmedicament' => [[['_route' => 'frontlistmedicament', '_controller' => 'App\\Controller\\MedicamentController::frontlistmedicament'], null, null, null, false, false, null]],
        '/recherchemed2' => [[['_route' => 'recherchemed2', '_controller' => 'App\\Controller\\MedicamentController::recherche2'], null, null, null, false, false, null]],
        '/trimedicament' => [[['_route' => 'trimedicament', '_controller' => 'App\\Controller\\MedicamentController::orderbynameqb'], null, null, null, false, false, null]],
        '/PDF' => [[['_route' => 'PDF', '_controller' => 'App\\Controller\\MedicamentController::hello'], null, null, null, false, false, null]],
        '/Excel' => [[['_route' => 'Excel', '_controller' => 'App\\Controller\\MedicamentController::export'], null, null, null, false, false, null]],
        '/note/soin/m/p' => [[['_route' => 'note_soin_m_p', '_controller' => 'App\\Controller\\NoteSoinMPController::index'], null, null, null, false, false, null]],
        '/ordonnance' => [[['_route' => 'ordonnance', '_controller' => 'App\\Controller\\OrdonnanceController::index'], null, null, null, false, false, null]],
        '/listordonnance' => [[['_route' => 'listordonnance', '_controller' => 'App\\Controller\\OrdonnanceController::listordonnance'], null, null, null, false, false, null]],
        '/listordonnanceuser' => [[['_route' => 'listordonnanceuser', '_controller' => 'App\\Controller\\OrdonnanceController::listordonnanceuser'], null, null, null, false, false, null]],
        '/Ordonnanceajout' => [[['_route' => 'Ordonnanceajout', '_controller' => 'App\\Controller\\OrdonnanceController::Ordonnanceajout'], null, null, null, false, false, null]],
        '/triordonnance' => [[['_route' => 'triordonnance', '_controller' => 'App\\Controller\\OrdonnanceController::orderbynameqb'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier', '_controller' => 'App\\Controller\\PanierController::index'], null, null, null, false, false, null]],
        '/parapharmacie' => [[['_route' => 'parapharmacie', '_controller' => 'App\\Controller\\ParapharmacieController::index'], null, null, null, false, false, null]],
        '/affichePara' => [[['_route' => 'affichePara', '_controller' => 'App\\Controller\\ParapharmacieController::affiche'], null, null, null, false, false, null]],
        '/parapharmacie/AjoutParapharmacie' => [[['_route' => 'AjoutParapharmacie', '_controller' => 'App\\Controller\\ParapharmacieController::add'], null, null, null, false, false, null]],
        '/afficheFrontListPara' => [[['_route' => 'afficheFrontListPara', '_controller' => 'App\\Controller\\ParapharmacieController::afficheFront'], null, null, null, false, false, null]],
        '/postCategorie' => [[['_route' => 'postcategorie', '_controller' => 'App\\Controller\\PostCategorieController::index'], null, null, null, false, false, null]],
        '/afficherCategoriePost' => [[['_route' => 'afficherCategoriePost', '_controller' => 'App\\Controller\\PostCategorieController::afficherCategoriePost'], null, null, null, false, false, null]],
        '/afficherCategoriePostFront' => [[['_route' => 'afficherCategoriePostFront', '_controller' => 'App\\Controller\\PostCategorieController::afficherCategoriePostFront'], null, null, null, false, false, null]],
        '/add' => [[['_route' => 'add', '_controller' => 'App\\Controller\\PostCategorieController::add'], null, null, null, false, false, null]],
        '/postt' => [[['_route' => 'postt_index', '_controller' => 'App\\Controller\\PosttController::index'], null, ['GET' => 0], null, true, false, null]],
        '/postt/new' => [[['_route' => 'postt_new', '_controller' => 'App\\Controller\\PosttController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/postt/pdf/pdf' => [[['_route' => 'postt_show_pdf', '_controller' => 'App\\Controller\\PosttController::pdfAction'], null, ['GET' => 0], null, false, false, null]],
        '/produit' => [[['_route' => 'produit', '_controller' => 'App\\Controller\\ProduitController::index'], null, null, null, false, false, null]],
        '/afficheBackProduit' => [[['_route' => 'afficheBackProduit', '_controller' => 'App\\Controller\\ProduitController::afficheBackProduit'], null, null, null, false, false, null]],
        '/reclamation' => [[['_route' => 'reclamation', '_controller' => 'App\\Controller\\ReclamationController::index'], null, null, null, false, false, null]],
        '/afficherreclamation' => [[['_route' => 'afficherreclamation', '_controller' => 'App\\Controller\\ReclamationController::listreclamation'], null, null, null, false, false, null]],
        '/afficherpdf' => [[['_route' => 'afficherpdf', '_controller' => 'App\\Controller\\ReclamationController::afficherpdf'], null, null, null, false, false, null]],
        '/afficherreclamations' => [[['_route' => 'afficherreclamations', '_controller' => 'App\\Controller\\ReclamationController::listreclamations'], null, null, null, false, false, null]],
        '/ajouterreclamation' => [[['_route' => 'ajouterreclamation', '_controller' => 'App\\Controller\\ReclamationController::ajouterreclamation'], null, null, null, false, false, null]],
        '/regions' => [[['_route' => 'regions', '_controller' => 'App\\Controller\\RegionsController::index'], null, null, null, false, false, null]],
        '/afficheRegions' => [[['_route' => 'afficheRegions', '_controller' => 'App\\Controller\\RegionsController::affiche'], null, null, null, false, false, null]],
        '/regions/AjoutRegion' => [[['_route' => 'AjoutRegion', '_controller' => 'App\\Controller\\RegionsController::add'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'service_index', '_controller' => 'App\\Controller\\ServiceController::index'], null, ['GET' => 0], null, true, false, null]],
        '/service/new' => [[['_route' => 'service_new', '_controller' => 'App\\Controller\\ServiceController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/service/pdf/pdf' => [[['_route' => 'service_show_pdf', '_controller' => 'App\\Controller\\ServiceController::pdfAction'], null, ['GET' => 0], null, false, false, null]],
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
        '/verifinscription' => [[['_route' => 'verifinscription', '_controller' => 'App\\Controller\\UserController::verifinscirption'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscriptionMed' => [[['_route' => 'inscriptionMed', '_controller' => 'App\\Controller\\UserController::inscriptionMed'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscriptionPharmacien' => [[['_route' => 'inscriptionPharmacien', '_controller' => 'App\\Controller\\UserController::inscriptionPharmacien'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/inscriptionParapharmacien' => [[['_route' => 'inscriptionParapharmacien', '_controller' => 'App\\Controller\\UserController::inscriptionPara'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/afficherStatUser' => [[['_route' => 'afficherStatUser', '_controller' => 'App\\Controller\\UserController::afficherStatUser'], null, null, null, false, false, null]],
        '/captcha-handler' => [[['_route' => 'captcha_handler', '_controller' => 'CaptchaBundle:CaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
        '/simple-captcha-handler' => [[['_route' => 'simple_captcha_handler', '_controller' => 'CaptchaBundle:SimpleCaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
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
                    .'|a(?'
                        .'|lendar/([^/]++)(?'
                            .'|(*:226)'
                            .'|/edit(*:239)'
                            .'|(*:247)'
                        .')'
                        .'|tegorie/ModifierCategorie/([^/]++)/([^/]++)(*:299)'
                    .')'
                    .'|hoixCategorie/([^/]++)/([^/]++)(*:339)'
                    .'|entreMedical/(?'
                        .'|search/([^/]++)(*:378)'
                        .'|([^/]++)(?'
                            .'|(*:397)'
                            .'|/edit(*:410)'
                            .'|(*:418)'
                        .')'
                    .')'
                .')'
                .'|/a(?'
                    .'|pi/([^/]++)/edit(*:450)'
                    .'|ffiche(?'
                        .'|C(?'
                            .'|ategorieProd/([^/]++)/([^/]++)(*:501)'
                            .'|lien(?'
                                .'|CategorieProd(?'
                                    .'|/([^/]++)/([^/]++)(*:550)'
                                    .'|uit/([^/]++)/([^/]++)/([^/]++)(*:588)'
                                .')'
                                .'|ListProduit/([^/]++)/([^/]++)(*:626)'
                                .'|Panier/([^/]++)(*:649)'
                            .')'
                        .')'
                        .'|r(?'
                            .'|CategorieSoinMPs/([^/]++)(*:688)'
                            .'|SoinMPs/([^/]++)/([^/]++)(*:721)'
                            .'|DetailSoinMPs/([^/]++)/([^/]++)(*:760)'
                            .'|User/([^/]++)(*:781)'
                        .')'
                        .'|P(?'
                            .'|arapharmacien(?'
                                .'|ListProduit/([^/]++)/([^/]++)(*:839)'
                                .'|Commande/([^/]++)(*:864)'
                            .')'
                            .'|rod(?'
                                .'|/([^/]++)/([^/]++)(*:897)'
                                .'|uit/([^/]++)/([^/]++)/([^/]++)(*:935)'
                            .')'
                        .')'
                        .'|FrontClientPara/([^/]++)(*:969)'
                    .')'
                    .'|jouternoteSMP/([^/]++)/([^/]++)/([^/]++)(*:1018)'
                    .'|ccueilOnline(?'
                        .'|/([^/]++)(*:1051)'
                        .'|Med/([^/]++)(*:1072)'
                        .'|P(?'
                            .'|harmacien/([^/]++)(*:1103)'
                            .'|arapharmacien/([^/]++)(*:1134)'
                        .')'
                    .')'
                .')'
                .'|/Supp(?'
                    .'|Cat(?'
                        .'|egorie/([^/]++)/([^/]++)(*:1184)'
                        .'|Post/([^/]++)(*:1206)'
                    .')'
                    .'|ListProd/([^/]++)/([^/]++)/([^/]++)(*:1251)'
                    .'|/([^/]++)(*:1269)'
                    .'|Prod/([^/]++)/([^/]++)(*:1300)'
                    .'|Region/([^/]++)(*:1324)'
                .')'
                .'|/A(?'
                    .'|jout(?'
                        .'|Categorie/([^/]++)/([^/]++)(*:1373)'
                        .'|Produit/([^/]++)/([^/]++)(*:1407)'
                    .')'
                    .'|fficherdetailSoinMPnote/([^/]++)/([^/]++)(*:1458)'
                .')'
                .'|/s(?'
                    .'|upprimer(?'
                        .'|CategorieSoinMP/([^/]++)(*:1508)'
                        .'|reclamation(?'
                            .'|/([^/]++)(*:1540)'
                            .'|s/([^/]++)(*:1559)'
                        .')'
                        .'|SoinMP/([^/]++)(*:1584)'
                        .'|typereclamation/([^/]++)(*:1617)'
                        .'|P(?'
                            .'|a(?'
                                .'|tient/([^/]++)(*:1648)'
                                .'|rapharmacien/([^/]++)(*:1678)'
                            .')'
                            .'|harmacien/([^/]++)(*:1706)'
                        .')'
                        .'|Medecin/([^/]++)(*:1732)'
                    .')'
                    .'|ervice/(?'
                        .'|s(?'
                            .'|howByCenter/([^/]++)(*:1776)'
                            .'|earch(?:/([^/]++)(?:/([^/]++))?)?(*:1818)'
                        .')'
                        .'|front/showByCenter/([^/]++)(*:1855)'
                        .'|([^/]++)(?'
                            .'|(*:1875)'
                            .'|/edit(*:1889)'
                            .'|(*:1898)'
                        .')'
                    .')'
                .')'
                .'|/modifier(?'
                    .'|CategorieSoinMP/([^/]++)(*:1946)'
                    .'|reclamations/([^/]++)(*:1976)'
                    .'|SoinMP/([^/]++)(*:2000)'
                    .'|typereclamation/([^/]++)(*:2033)'
                    .'|User/([^/]++)(*:2055)'
                    .'|Med/([^/]++)(*:2076)'
                    .'|Phar/([^/]++)(*:2098)'
                .')'
                .'|/M(?'
                    .'|odifier(?'
                        .'|ListProduit/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:2170)'
                        .'|Produit/([^/]++)/([^/]++)(*:2204)'
                    .')'
                    .'|edicament(?'
                        .'|remove/([^/]++)(*:2241)'
                        .'|modifier/([^/]++)(*:2267)'
                    .')'
                .')'
                .'|/listp/([^/]++)/([^/]++)(*:2302)'
                .'|/Ordonnance(?'
                    .'|remove/([^/]++)(*:2340)'
                    .'|modifier/([^/]++)(*:2366)'
                .')'
                .'|/p(?'
                    .'|arapharmacie/ModifierParapharmacie/([^/]++)(*:2424)'
                    .'|ostt/([^/]++)(?'
                        .'|(*:2449)'
                        .'|/edit(*:2463)'
                        .'|(*:2472)'
                    .')'
                .')'
                .'|/updateCategorie/([^/]++)(*:2508)'
                .'|/re(?'
                    .'|pondre/([^/]++)(*:2538)'
                    .'|gions/ModifierRegion/([^/]++)(*:2576)'
                .')'
                .'|/envreponse/([^/]++)(*:2606)'
                .'|/impression/([^/]++)/([^/]++)(*:2644)'
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
        226 => [[['_route' => 'calendar_show', '_controller' => 'App\\Controller\\CalendarController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        239 => [[['_route' => 'calendar_edit', '_controller' => 'App\\Controller\\CalendarController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        247 => [[['_route' => 'calendar_delete', '_controller' => 'App\\Controller\\CalendarController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        299 => [[['_route' => 'modifierCategorie', '_controller' => 'App\\Controller\\CategorieProduitController::modifierPara'], ['id', 'iduser'], null, null, false, true, null]],
        339 => [[['_route' => 'choixCategorie', '_controller' => 'App\\Controller\\CategorieProduitController::choixCategorie'], ['id', 'iduser'], null, null, false, true, null]],
        378 => [[['_route' => 'centre_medical_search', '_controller' => 'App\\Controller\\CentreMedicalController::search'], ['data'], ['GET' => 0], null, false, true, null]],
        397 => [[['_route' => 'centre_medical_show', '_controller' => 'App\\Controller\\CentreMedicalController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        410 => [[['_route' => 'centre_medical_edit', '_controller' => 'App\\Controller\\CentreMedicalController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        418 => [[['_route' => 'centre_medical_delete', '_controller' => 'App\\Controller\\CentreMedicalController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        450 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\ApiController::majEvent'], ['id'], ['PUT' => 0], null, false, false, null]],
        501 => [[['_route' => 'afficheCategorieProd', '_controller' => 'App\\Controller\\CategorieProduitController::affiche'], ['id', 'iduser'], null, null, false, true, null]],
        550 => [[['_route' => 'afficheClienCategorieProd', '_controller' => 'App\\Controller\\CategorieProduitController::afficheClient'], ['idpara', 'iduser'], null, null, false, true, null]],
        588 => [[['_route' => 'afficheClienCategorieProduit', '_controller' => 'App\\Controller\\ProduitController::afficheClient'], ['idpara', 'idcat', 'iduser'], null, null, false, true, null]],
        626 => [[['_route' => 'afficheClienListProduit', '_controller' => 'App\\Controller\\ListProduitController::afficheClient'], ['idpanier', 'iduser'], null, null, false, true, null]],
        649 => [[['_route' => 'afficheClienPanier', '_controller' => 'App\\Controller\\PanierController::afficheClient'], ['iduser'], null, null, false, true, null]],
        688 => [[['_route' => 'afficherCategorieSoinMPs', '_controller' => 'App\\Controller\\CategorieSoinMPController::listCategoriesSoinMPs'], ['iduser'], null, null, false, true, null]],
        721 => [[['_route' => 'afficherSoinMPs', '_controller' => 'App\\Controller\\SoinMPController::listSoinMPs'], ['id', 'iduser'], null, null, false, true, null]],
        760 => [[['_route' => 'afficherDetailSoinMPs', '_controller' => 'App\\Controller\\SoinMPController::detailSoinMPs'], ['id', 'iduser'], null, null, false, true, null]],
        781 => [[['_route' => 'afficherUser', '_controller' => 'App\\Controller\\UserController::afficherUser'], ['iduser'], null, null, false, true, null]],
        839 => [[['_route' => 'afficheParapharmacienListProduit', '_controller' => 'App\\Controller\\ListProduitController::afficheParapharmacien'], ['idpanier', 'idpara'], null, null, false, true, null]],
        864 => [[['_route' => 'afficheParapharmacienCommande', '_controller' => 'App\\Controller\\PanierController::afficheParapharmacienCommande'], ['idpara'], null, null, false, true, null]],
        897 => [[['_route' => 'afficheProd', '_controller' => 'App\\Controller\\ProduitController::affiche'], ['id', 'iduser'], null, null, false, true, null]],
        935 => [[['_route' => 'afficheProduit', '_controller' => 'App\\Controller\\ProduitController::afficheProduit'], ['idpara', 'idp', 'iduser'], null, null, false, true, null]],
        969 => [[['_route' => 'afficheFrontClientPara', '_controller' => 'App\\Controller\\ParapharmacieController::afficheFrontClient'], ['iduser'], null, null, false, true, null]],
        1018 => [[['_route' => 'ajouternoteSMP', '_controller' => 'App\\Controller\\NoteSoinMPController::ajouterNote'], ['id', 'iduser', 'valeur'], ['GET' => 0], null, false, true, null]],
        1051 => [[['_route' => 'accueilOnline', '_controller' => 'App\\Controller\\UserController::accueil'], ['iduser'], null, null, false, true, null]],
        1072 => [[['_route' => 'accueilOnlineMed', '_controller' => 'App\\Controller\\UserController::accueilMed'], ['iduser'], null, null, false, true, null]],
        1103 => [[['_route' => 'accueilOnlinePharmacien', '_controller' => 'App\\Controller\\UserController::accueilPharmacien'], ['iduser'], null, null, false, true, null]],
        1134 => [[['_route' => 'accueilOnlineParapharmacien', '_controller' => 'App\\Controller\\UserController::accueilParapharmacien'], ['iduser'], null, null, false, true, null]],
        1184 => [[['_route' => 'deleteCategorie', '_controller' => 'App\\Controller\\CategorieProduitController::delete'], ['id', 'iduser'], null, null, false, true, null]],
        1206 => [[['_route' => 'SuppCatPost', '_controller' => 'App\\Controller\\PostCategorieController::Supp'], ['id'], null, null, false, true, null]],
        1251 => [[['_route' => 'deleteListProduit', '_controller' => 'App\\Controller\\ListProduitController::delete'], ['id', 'idpanier', 'iduser'], null, null, false, true, null]],
        1269 => [[['_route' => 'deleteParapharmacie', '_controller' => 'App\\Controller\\ParapharmacieController::delete'], ['id'], null, null, false, true, null]],
        1300 => [[['_route' => 'deleteProduit', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id', 'iduser'], null, null, false, true, null]],
        1324 => [[['_route' => 'deleteRegion', '_controller' => 'App\\Controller\\RegionsController::delete'], ['id'], null, null, false, true, null]],
        1373 => [[['_route' => 'AjoutCategorie', '_controller' => 'App\\Controller\\CategorieProduitController::add'], ['id', 'iduser'], null, null, false, true, null]],
        1407 => [[['_route' => 'AjoutProduit', '_controller' => 'App\\Controller\\ProduitController::add'], ['id', 'iduser'], null, null, false, true, null]],
        1458 => [[['_route' => 'AfficherdetailSoinMPnote', '_controller' => 'App\\Controller\\SoinMPController::detailSoinMPsnote'], ['id', 'iduser'], null, null, false, true, null]],
        1508 => [[['_route' => 'supprimerCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::SupprimerCategorieSoinMP'], ['id'], null, null, false, true, null]],
        1540 => [[['_route' => 'supprimerreclamation', '_controller' => 'App\\Controller\\ReclamationController::Supprimerreclamation'], ['id'], null, null, false, true, null]],
        1559 => [[['_route' => 'supprimerreclamations', '_controller' => 'App\\Controller\\ReclamationController::Supprimerreclamations'], ['id'], null, null, false, true, null]],
        1584 => [[['_route' => 'supprimerSoinMP', '_controller' => 'App\\Controller\\SoinMPController::SupprimerSoinMP'], ['id'], null, null, false, true, null]],
        1617 => [[['_route' => 'supprimertypereclamation', '_controller' => 'App\\Controller\\TypereclamationController::Supprimertypereclamation'], ['id'], null, null, false, true, null]],
        1648 => [[['_route' => 'supprimerPatient', '_controller' => 'App\\Controller\\UserController::SupprimerPatients'], ['id'], null, null, false, true, null]],
        1678 => [[['_route' => 'supprimerParapharmacien', '_controller' => 'App\\Controller\\UserController::SupprimerParapharmaciens'], ['id'], null, null, false, true, null]],
        1706 => [[['_route' => 'supprimerPharmacien', '_controller' => 'App\\Controller\\UserController::SupprimerPharmaciens'], ['id'], null, null, false, true, null]],
        1732 => [[['_route' => 'supprimerMedecin', '_controller' => 'App\\Controller\\UserController::SupprimerMedecins'], ['id'], null, null, false, true, null]],
        1776 => [[['_route' => 'service_showByCenter', '_controller' => 'App\\Controller\\ServiceController::showByCenter'], ['center'], ['GET' => 0], null, false, true, null]],
        1818 => [[['_route' => 'product_search', 'order' => 'ASC', 'by' => 'id', '_controller' => 'App\\Controller\\ServiceController::search'], ['order', 'by'], ['GET' => 0], null, false, true, null]],
        1855 => [[['_route' => 'service_showByCenter_front', '_controller' => 'App\\Controller\\ServiceController::showByCenterFront'], ['center'], ['GET' => 0], null, false, true, null]],
        1875 => [[['_route' => 'service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1889 => [[['_route' => 'service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1898 => [[['_route' => 'service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1946 => [[['_route' => 'modifierCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::modifierCategorieSoinMP'], ['id'], null, null, false, true, null]],
        1976 => [[['_route' => 'modifierreclamations', '_controller' => 'App\\Controller\\ReclamationController::modifierreclamation'], ['id'], null, null, false, true, null]],
        2000 => [[['_route' => 'modifierSoinMP', '_controller' => 'App\\Controller\\SoinMPController::modifierSoinMP'], ['id'], null, null, false, true, null]],
        2033 => [[['_route' => 'modifiertypereclamation', '_controller' => 'App\\Controller\\TypereclamationController::modifiertypereclamation'], ['id'], null, null, false, true, null]],
        2055 => [[['_route' => 'modifierUser', '_controller' => 'App\\Controller\\UserController::modifierUser'], ['iduser'], null, null, false, true, null]],
        2076 => [[['_route' => 'modifierMed', '_controller' => 'App\\Controller\\UserController::modifierMed'], ['iduser'], null, null, false, true, null]],
        2098 => [[['_route' => 'modifierPhar', '_controller' => 'App\\Controller\\UserController::modifierPhar'], ['iduser'], null, null, false, true, null]],
        2170 => [[['_route' => 'modifierListProduit', '_controller' => 'App\\Controller\\ListProduitController::modifierPara'], ['id', 'idpanier', 'iduser', 'idprod'], null, null, false, true, null]],
        2204 => [[['_route' => 'modifierProduit', '_controller' => 'App\\Controller\\ProduitController::modifierPara'], ['id', 'iduser'], null, null, false, true, null]],
        2241 => [[['_route' => 'Medicamentremove', '_controller' => 'App\\Controller\\MedicamentController::remove'], ['id'], null, null, false, true, null]],
        2267 => [[['_route' => 'Medicamentmodifier', '_controller' => 'App\\Controller\\MedicamentController::medicamentmodifier'], ['id'], null, null, false, true, null]],
        2302 => [[['_route' => 'listp', '_controller' => 'App\\Controller\\ListProduitController::listp'], ['idpanier', 'idpara'], null, null, false, true, null]],
        2340 => [[['_route' => 'Ordonnanceremove', '_controller' => 'App\\Controller\\OrdonnanceController::remove'], ['id'], null, null, false, true, null]],
        2366 => [[['_route' => 'Ordonnancemodifier', '_controller' => 'App\\Controller\\OrdonnanceController::modifier'], ['id'], null, null, false, true, null]],
        2424 => [[['_route' => 'modifierParapharmacie', '_controller' => 'App\\Controller\\ParapharmacieController::modifierPara'], ['id'], null, null, false, true, null]],
        2449 => [[['_route' => 'postt_show', '_controller' => 'App\\Controller\\PosttController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2463 => [[['_route' => 'postt_edit', '_controller' => 'App\\Controller\\PosttController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2472 => [[['_route' => 'postt_delete', '_controller' => 'App\\Controller\\PosttController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        2508 => [[['_route' => 'updateCategorie', '_controller' => 'App\\Controller\\PostCategorieController::updateCategorie'], ['id'], null, null, false, true, null]],
        2538 => [[['_route' => 'repondre', '_controller' => 'App\\Controller\\ReclamationController::repondrereclamation'], ['id'], null, null, false, true, null]],
        2576 => [[['_route' => 'modifierRegion', '_controller' => 'App\\Controller\\RegionsController::modifierPara'], ['id'], null, null, false, true, null]],
        2606 => [[['_route' => 'envreponse', '_controller' => 'App\\Controller\\ReclamationController::envoyerreponse'], ['id'], ['GET' => 0], null, false, true, null]],
        2644 => [
            [['_route' => 'impression', '_controller' => 'App\\Controller\\SoinMPController::impression'], ['id', 'iduser'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
