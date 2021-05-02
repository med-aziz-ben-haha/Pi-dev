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
        '/admin' => [
            [['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null],
            [['_route' => 'admin_pages_index', '_controller' => 'App\\Controller\\Admin\\PagesController::index'], null, null, null, false, false, null],
        ],
        '/admin/categories' => [[['_route' => 'admin_category_index', '_controller' => 'App\\Controller\\Admin\\CategoryController::index'], null, null, null, false, false, null]],
        '/admin/category/add' => [[['_route' => 'admin_category_add', '_controller' => 'App\\Controller\\Admin\\CategoryController::add'], null, null, null, false, false, null]],
        '/admin/medias' => [[['_route' => 'admin_media_index', '_controller' => 'App\\Controller\\Admin\\MediaController::index'], null, null, null, false, false, null]],
        '/homepage' => [[['_route' => 'admin_pages_homepage', '_controller' => 'App\\Controller\\Admin\\PagesController::homepage'], null, null, null, false, false, null]],
        '/admin/posts' => [[['_route' => 'admin_post_index', '_controller' => 'App\\Controller\\Admin\\PostController::index'], null, null, null, false, false, null]],
        '/admin/post/add' => [[['_route' => 'admin_post_add', '_controller' => 'App\\Controller\\Admin\\PostController::add'], null, null, null, false, false, null]],
        '/pdf/pdf' => [[['_route' => 'post_show_pdf', '_controller' => 'App\\Controller\\Admin\\PostController::pdfAction'], null, ['GET' => 0], null, false, false, null]],
        '/admin/setting' => [[['_route' => 'admin_setting_index', '_controller' => 'App\\Controller\\Admin\\SettingController::index'], null, null, null, false, false, null]],
        '/api' => [[['_route' => 'api', '_controller' => 'App\\Controller\\ApiController::index'], null, null, null, false, false, null]],
        '/api/folder' => [[['_route' => 'api_folder_post', '_controller' => 'App\\Controller\\Api\\FolderController::postAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/folder/delete' => [[['_route' => 'api_folder_delete', '_controller' => 'App\\Controller\\Api\\FolderController::deleteAction'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/media/upload' => [[['_route' => 'api_media_upload', '_controller' => 'App\\Controller\\Api\\MediaController::uploadAction'], null, ['POST' => 0], null, false, false, null]],
        '/api/media/delete' => [[['_route' => 'api_media_delete', '_controller' => 'App\\Controller\\Api\\MediaController::deleteAction'], null, ['DELETE' => 0], null, false, false, null]],
        '/api/media/list' => [[['_route' => 'api_media_list', '_controller' => 'App\\Controller\\Api\\MediaController::listAction'], null, ['GET' => 0], null, false, false, null]],
        '/calendar/calendar' => [[['_route' => 'calendar_index', '_controller' => 'App\\Controller\\CalendarController::index'], null, ['GET' => 0], null, false, false, null]],
        '/calendar/new' => [[['_route' => 'calendar_new', '_controller' => 'App\\Controller\\CalendarController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/categorie/produit' => [[['_route' => 'categorie_produit', '_controller' => 'App\\Controller\\CategorieProduitController::index'], null, null, null, false, false, null]],
        '/categoriesoinmp' => [[['_route' => 'categorie_soin_m_p', '_controller' => 'App\\Controller\\CategorieSoinMPController::index'], null, null, null, false, false, null]],
        '/afficherCategorieSoinMP' => [[['_route' => 'afficherCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::listCategoriesSoinMP'], null, null, null, false, false, null]],
        '/Api/CatSoin/Afficher' => [[['_route' => 'afficherCategorieSoinMPsJson', '_controller' => 'App\\Controller\\CategorieSoinMPController::listCategoriesSoinMPsJson'], null, null, null, false, false, null]],
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
        '/afficherPosttBack' => [[['_route' => 'afficherPosttBack', '_controller' => 'App\\Controller\\PostCategorieController::afficherPosttBack'], null, null, null, false, false, null]],
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
        '/sitemap.xml' => [[['_route' => 'sitemap', '_format' => 'xml', '_controller' => 'App\\Controller\\Website\\SitemapController::index'], null, null, null, false, false, null]],
        '/captcha-handler' => [[['_route' => 'captcha_handler', '_controller' => 'CaptchaBundle:CaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
        '/simple-captcha-handler' => [[['_route' => 'simple_captcha_handler', '_controller' => 'CaptchaBundle:SimpleCaptchaHandler:index'], null, ['GET' => 0], null, false, false, null]],
        '/posts' => [[['_route' => 'post_index', '_controller' => 'App\\Controller\\Website\\PostController::index', '_locale' => 'en'], null, null, null, false, false, null]],
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
                    .'|dmin/(?'
                        .'|category/([^/]++)/(?'
                            .'|edit(*:467)'
                            .'|delete(*:481)'
                        .')'
                        .'|media(?'
                            .'|/([^/]++)/edit(*:512)'
                            .'|\\-data/([^/]++)/edit(*:540)'
                        .')'
                        .'|post/([^/]++)/(?'
                            .'|edit(*:570)'
                            .'|delete(*:584)'
                        .')'
                    .')'
                    .'|pi/([^/]++)/edit(*:610)'
                    .'|ffiche(?'
                        .'|C(?'
                            .'|ategorieProd/([^/]++)/([^/]++)(*:661)'
                            .'|lien(?'
                                .'|CategorieProd(?'
                                    .'|/([^/]++)/([^/]++)(*:710)'
                                    .'|uit/([^/]++)/([^/]++)/([^/]++)(*:748)'
                                .')'
                                .'|ListProduit/([^/]++)/([^/]++)(*:786)'
                                .'|Panier/([^/]++)(*:809)'
                            .')'
                        .')'
                        .'|r(?'
                            .'|CategorieSoinMPs/([^/]++)(*:848)'
                            .'|SoinMPs/([^/]++)/([^/]++)(*:881)'
                            .'|DetailSoinMPs/([^/]++)/([^/]++)(*:920)'
                            .'|User/([^/]++)(*:941)'
                        .')'
                        .'|P(?'
                            .'|arapharmacien(?'
                                .'|ListProduit/([^/]++)/([^/]++)(*:999)'
                                .'|Commande/([^/]++)(*:1024)'
                            .')'
                            .'|rod(?'
                                .'|/([^/]++)/([^/]++)(*:1058)'
                                .'|uit/([^/]++)/([^/]++)/([^/]++)(*:1097)'
                            .')'
                        .')'
                        .'|FrontClientPara/([^/]++)(*:1132)'
                    .')'
                    .'|jouternoteSMP/([^/]++)/([^/]++)/([^/]++)(*:1182)'
                    .'|ccueilOnline(?'
                        .'|/([^/]++)(*:1215)'
                        .'|Med/([^/]++)(*:1236)'
                        .'|P(?'
                            .'|harmacien/([^/]++)(*:1267)'
                            .'|arapharmacien/([^/]++)(*:1298)'
                        .')'
                    .')'
                .')'
                .'|/Supp(?'
                    .'|Cat(?'
                        .'|egorie/([^/]++)/([^/]++)(*:1348)'
                        .'|Post/([^/]++)(*:1370)'
                    .')'
                    .'|ListProd/([^/]++)/([^/]++)/([^/]++)(*:1415)'
                    .'|/([^/]++)(*:1433)'
                    .'|Prod/([^/]++)/([^/]++)(*:1464)'
                    .'|Region/([^/]++)(*:1488)'
                .')'
                .'|/A(?'
                    .'|jout(?'
                        .'|Categorie/([^/]++)/([^/]++)(*:1537)'
                        .'|Produit/([^/]++)/([^/]++)(*:1571)'
                    .')'
                    .'|pi/(?'
                        .'|Note/Ajouter/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:1635)'
                        .'|Soin/Afficher/([^/]++)/([^/]++)(*:1675)'
                        .'|User/(?'
                            .'|inscription/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:1775)'
                            .'|connexion/([^/]++)/([^/]++)(*:1811)'
                        .')'
                    .')'
                    .'|fficherdetailSoinMPnote/([^/]++)/([^/]++)(*:1863)'
                .')'
                .'|/s(?'
                    .'|upprimer(?'
                        .'|CategorieSoinMP/([^/]++)(*:1913)'
                        .'|reclamation(?'
                            .'|/([^/]++)(*:1945)'
                            .'|s/([^/]++)(*:1964)'
                        .')'
                        .'|SoinMP/([^/]++)(*:1989)'
                        .'|typereclamation/([^/]++)(*:2022)'
                        .'|P(?'
                            .'|a(?'
                                .'|tient/([^/]++)(*:2053)'
                                .'|rapharmacien/([^/]++)(*:2083)'
                            .')'
                            .'|harmacien/([^/]++)(*:2111)'
                        .')'
                        .'|Medecin/([^/]++)(*:2137)'
                    .')'
                    .'|ervice/(?'
                        .'|s(?'
                            .'|howByCenter/([^/]++)(*:2181)'
                            .'|earch(?:/([^/]++)(?:/([^/]++))?)?(*:2223)'
                        .')'
                        .'|front/showByCenter/([^/]++)(*:2260)'
                        .'|([^/]++)(?'
                            .'|(*:2280)'
                            .'|/edit(*:2294)'
                            .'|(*:2303)'
                        .')'
                    .')'
                .')'
                .'|/m(?'
                    .'|odifier(?'
                        .'|CategorieSoinMP/([^/]++)(*:2354)'
                        .'|reclamations/([^/]++)(*:2384)'
                        .'|SoinMP/([^/]++)(*:2408)'
                        .'|typereclamation/([^/]++)(*:2441)'
                        .'|User/([^/]++)(*:2463)'
                        .'|Med/([^/]++)(*:2484)'
                        .'|Phar/([^/]++)(*:2506)'
                    .')'
                    .'|edia/cache/resolve/(?'
                        .'|([A-z0-9_-]*)/rc/([^/]++)/(.+)(*:2568)'
                        .'|([A-z0-9_-]*)/(.+)(*:2595)'
                    .')'
                .')'
                .'|/M(?'
                    .'|odifier(?'
                        .'|ListProduit/([^/]++)/([^/]++)/([^/]++)/([^/]++)(*:2668)'
                        .'|Produit/([^/]++)/([^/]++)(*:2702)'
                    .')'
                    .'|edicament(?'
                        .'|remove/([^/]++)(*:2739)'
                        .'|modifier/([^/]++)(*:2765)'
                    .')'
                .')'
                .'|/listp/([^/]++)/([^/]++)(*:2800)'
                .'|/Ordonnance(?'
                    .'|remove/([^/]++)(*:2838)'
                    .'|modifier/([^/]++)(*:2864)'
                .')'
                .'|/p(?'
                    .'|arapharmacie/ModifierParapharmacie/([^/]++)(*:2922)'
                    .'|ost(?'
                        .'|t/(?'
                            .'|([^/]++)(?'
                                .'|(*:2953)'
                                .'|/edit(*:2967)'
                                .'|(*:2976)'
                            .')'
                            .'|SuppPosttBack/([^/]++)(*:3008)'
                        .')'
                        .'|s/([^/]++)(*:3028)'
                    .')'
                .')'
                .'|/updateCategorie/([^/]++)(*:3064)'
                .'|/re(?'
                    .'|pondre/([^/]++)(*:3094)'
                    .'|gions/ModifierRegion/([^/]++)(*:3132)'
                .')'
                .'|/envreponse/([^/]++)(*:3162)'
                .'|/impression/([^/]++)/([^/]++)(*:3200)'
                .'|/([^/]++)/([^/]++)(*:3227)'
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
        467 => [[['_route' => 'admin_category_edit', '_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], ['id'], null, null, false, false, null]],
        481 => [[['_route' => 'admin_category_delete', '_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], ['id'], null, null, false, false, null]],
        512 => [[['_route' => 'admin_media_edit', '_controller' => 'App\\Controller\\Admin\\MediaController::edit'], ['id'], null, null, false, false, null]],
        540 => [[['_route' => 'admin_media_data_edit', '_controller' => 'App\\Controller\\Admin\\MediaDataController::edit'], ['id'], null, null, false, false, null]],
        570 => [[['_route' => 'admin_post_edit', '_controller' => 'App\\Controller\\Admin\\PostController::edit'], ['id'], null, null, false, false, null]],
        584 => [[['_route' => 'admin_post_delete', '_controller' => 'App\\Controller\\Admin\\PostController::delete'], ['id'], null, null, false, false, null]],
        610 => [[['_route' => 'api_event_edit', '_controller' => 'App\\Controller\\ApiController::majEvent'], ['id'], ['PUT' => 0], null, false, false, null]],
        661 => [[['_route' => 'afficheCategorieProd', '_controller' => 'App\\Controller\\CategorieProduitController::affiche'], ['id', 'iduser'], null, null, false, true, null]],
        710 => [[['_route' => 'afficheClienCategorieProd', '_controller' => 'App\\Controller\\CategorieProduitController::afficheClient'], ['idpara', 'iduser'], null, null, false, true, null]],
        748 => [[['_route' => 'afficheClienCategorieProduit', '_controller' => 'App\\Controller\\ProduitController::afficheClient'], ['idpara', 'idcat', 'iduser'], null, null, false, true, null]],
        786 => [[['_route' => 'afficheClienListProduit', '_controller' => 'App\\Controller\\ListProduitController::afficheClient'], ['idpanier', 'iduser'], null, null, false, true, null]],
        809 => [[['_route' => 'afficheClienPanier', '_controller' => 'App\\Controller\\PanierController::afficheClient'], ['iduser'], null, null, false, true, null]],
        848 => [[['_route' => 'afficherCategorieSoinMPs', '_controller' => 'App\\Controller\\CategorieSoinMPController::listCategoriesSoinMPs'], ['iduser'], null, null, false, true, null]],
        881 => [[['_route' => 'afficherSoinMPs', '_controller' => 'App\\Controller\\SoinMPController::listSoinMPs'], ['id', 'iduser'], null, null, false, true, null]],
        920 => [[['_route' => 'afficherDetailSoinMPs', '_controller' => 'App\\Controller\\SoinMPController::detailSoinMPs'], ['id', 'iduser'], null, null, false, true, null]],
        941 => [[['_route' => 'afficherUser', '_controller' => 'App\\Controller\\UserController::afficherUser'], ['iduser'], null, null, false, true, null]],
        999 => [[['_route' => 'afficheParapharmacienListProduit', '_controller' => 'App\\Controller\\ListProduitController::afficheParapharmacien'], ['idpanier', 'idpara'], null, null, false, true, null]],
        1024 => [[['_route' => 'afficheParapharmacienCommande', '_controller' => 'App\\Controller\\PanierController::afficheParapharmacienCommande'], ['idpara'], null, null, false, true, null]],
        1058 => [[['_route' => 'afficheProd', '_controller' => 'App\\Controller\\ProduitController::affiche'], ['id', 'iduser'], null, null, false, true, null]],
        1097 => [[['_route' => 'afficheProduit', '_controller' => 'App\\Controller\\ProduitController::afficheProduit'], ['idpara', 'idp', 'iduser'], null, null, false, true, null]],
        1132 => [[['_route' => 'afficheFrontClientPara', '_controller' => 'App\\Controller\\ParapharmacieController::afficheFrontClient'], ['iduser'], null, null, false, true, null]],
        1182 => [[['_route' => 'ajouternoteSMP', '_controller' => 'App\\Controller\\NoteSoinMPController::ajouterNote'], ['id', 'iduser', 'valeur'], ['GET' => 0], null, false, true, null]],
        1215 => [[['_route' => 'accueilOnline', '_controller' => 'App\\Controller\\UserController::accueil'], ['iduser'], null, null, false, true, null]],
        1236 => [[['_route' => 'accueilOnlineMed', '_controller' => 'App\\Controller\\UserController::accueilMed'], ['iduser'], null, null, false, true, null]],
        1267 => [[['_route' => 'accueilOnlinePharmacien', '_controller' => 'App\\Controller\\UserController::accueilPharmacien'], ['iduser'], null, null, false, true, null]],
        1298 => [[['_route' => 'accueilOnlineParapharmacien', '_controller' => 'App\\Controller\\UserController::accueilParapharmacien'], ['iduser'], null, null, false, true, null]],
        1348 => [[['_route' => 'deleteCategorie', '_controller' => 'App\\Controller\\CategorieProduitController::delete'], ['id', 'iduser'], null, null, false, true, null]],
        1370 => [[['_route' => 'SuppCatPost', '_controller' => 'App\\Controller\\PostCategorieController::Supp'], ['id'], null, null, false, true, null]],
        1415 => [[['_route' => 'deleteListProduit', '_controller' => 'App\\Controller\\ListProduitController::delete'], ['id', 'idpanier', 'iduser'], null, null, false, true, null]],
        1433 => [[['_route' => 'deleteParapharmacie', '_controller' => 'App\\Controller\\ParapharmacieController::delete'], ['id'], null, null, false, true, null]],
        1464 => [[['_route' => 'deleteProduit', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id', 'iduser'], null, null, false, true, null]],
        1488 => [[['_route' => 'deleteRegion', '_controller' => 'App\\Controller\\RegionsController::delete'], ['id'], null, null, false, true, null]],
        1537 => [[['_route' => 'AjoutCategorie', '_controller' => 'App\\Controller\\CategorieProduitController::add'], ['id', 'iduser'], null, null, false, true, null]],
        1571 => [[['_route' => 'AjoutProduit', '_controller' => 'App\\Controller\\ProduitController::add'], ['id', 'iduser'], null, null, false, true, null]],
        1635 => [[['_route' => 'ajouternoteSMPJson', '_controller' => 'App\\Controller\\NoteSoinMPController::ajouterNoteJson'], ['id', 'iduser', 'valeur', 'avis'], null, null, false, true, null]],
        1675 => [[['_route' => 'afficherSoinMPsJson', '_controller' => 'App\\Controller\\SoinMPController::listSoinMPsJson'], ['id', 'iduser'], null, null, false, true, null]],
        1775 => [[['_route' => 'inscriptionjson', '_controller' => 'App\\Controller\\UserController::inscriptionjson'], ['login', 'mdp', 'mail', 'nom', 'prenom', 'sexe', 'adresse', 'tell'], null, null, false, true, null]],
        1811 => [[['_route' => 'connexionjson', '_controller' => 'App\\Controller\\UserController::connexionjson'], ['login', 'mdp'], null, null, false, true, null]],
        1863 => [[['_route' => 'AfficherdetailSoinMPnote', '_controller' => 'App\\Controller\\SoinMPController::detailSoinMPsnote'], ['id', 'iduser'], null, null, false, true, null]],
        1913 => [[['_route' => 'supprimerCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::SupprimerCategorieSoinMP'], ['id'], null, null, false, true, null]],
        1945 => [[['_route' => 'supprimerreclamation', '_controller' => 'App\\Controller\\ReclamationController::Supprimerreclamation'], ['id'], null, null, false, true, null]],
        1964 => [[['_route' => 'supprimerreclamations', '_controller' => 'App\\Controller\\ReclamationController::Supprimerreclamations'], ['id'], null, null, false, true, null]],
        1989 => [[['_route' => 'supprimerSoinMP', '_controller' => 'App\\Controller\\SoinMPController::SupprimerSoinMP'], ['id'], null, null, false, true, null]],
        2022 => [[['_route' => 'supprimertypereclamation', '_controller' => 'App\\Controller\\TypereclamationController::Supprimertypereclamation'], ['id'], null, null, false, true, null]],
        2053 => [[['_route' => 'supprimerPatient', '_controller' => 'App\\Controller\\UserController::SupprimerPatients'], ['id'], null, null, false, true, null]],
        2083 => [[['_route' => 'supprimerParapharmacien', '_controller' => 'App\\Controller\\UserController::SupprimerParapharmaciens'], ['id'], null, null, false, true, null]],
        2111 => [[['_route' => 'supprimerPharmacien', '_controller' => 'App\\Controller\\UserController::SupprimerPharmaciens'], ['id'], null, null, false, true, null]],
        2137 => [[['_route' => 'supprimerMedecin', '_controller' => 'App\\Controller\\UserController::SupprimerMedecins'], ['id'], null, null, false, true, null]],
        2181 => [[['_route' => 'service_showByCenter', '_controller' => 'App\\Controller\\ServiceController::showByCenter'], ['center'], ['GET' => 0], null, false, true, null]],
        2223 => [[['_route' => 'product_search', 'order' => 'ASC', 'by' => 'id', '_controller' => 'App\\Controller\\ServiceController::search'], ['order', 'by'], ['GET' => 0], null, false, true, null]],
        2260 => [[['_route' => 'service_showByCenter_front', '_controller' => 'App\\Controller\\ServiceController::showByCenterFront'], ['center'], ['GET' => 0], null, false, true, null]],
        2280 => [[['_route' => 'service_show', '_controller' => 'App\\Controller\\ServiceController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2294 => [[['_route' => 'service_edit', '_controller' => 'App\\Controller\\ServiceController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2303 => [[['_route' => 'service_delete', '_controller' => 'App\\Controller\\ServiceController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        2354 => [[['_route' => 'modifierCategorieSoinMP', '_controller' => 'App\\Controller\\CategorieSoinMPController::modifierCategorieSoinMP'], ['id'], null, null, false, true, null]],
        2384 => [[['_route' => 'modifierreclamations', '_controller' => 'App\\Controller\\ReclamationController::modifierreclamation'], ['id'], null, null, false, true, null]],
        2408 => [[['_route' => 'modifierSoinMP', '_controller' => 'App\\Controller\\SoinMPController::modifierSoinMP'], ['id'], null, null, false, true, null]],
        2441 => [[['_route' => 'modifiertypereclamation', '_controller' => 'App\\Controller\\TypereclamationController::modifiertypereclamation'], ['id'], null, null, false, true, null]],
        2463 => [[['_route' => 'modifierUser', '_controller' => 'App\\Controller\\UserController::modifierUser'], ['iduser'], null, null, false, true, null]],
        2484 => [[['_route' => 'modifierMed', '_controller' => 'App\\Controller\\UserController::modifierMed'], ['iduser'], null, null, false, true, null]],
        2506 => [[['_route' => 'modifierPhar', '_controller' => 'App\\Controller\\UserController::modifierPhar'], ['iduser'], null, null, false, true, null]],
        2568 => [[['_route' => 'liip_imagine_filter_runtime', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter', 'hash', 'path'], ['GET' => 0], null, false, true, null]],
        2595 => [[['_route' => 'liip_imagine_filter', '_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter', 'path'], ['GET' => 0], null, false, true, null]],
        2668 => [[['_route' => 'modifierListProduit', '_controller' => 'App\\Controller\\ListProduitController::modifierPara'], ['id', 'idpanier', 'iduser', 'idprod'], null, null, false, true, null]],
        2702 => [[['_route' => 'modifierProduit', '_controller' => 'App\\Controller\\ProduitController::modifierPara'], ['id', 'iduser'], null, null, false, true, null]],
        2739 => [[['_route' => 'Medicamentremove', '_controller' => 'App\\Controller\\MedicamentController::remove'], ['id'], null, null, false, true, null]],
        2765 => [[['_route' => 'Medicamentmodifier', '_controller' => 'App\\Controller\\MedicamentController::medicamentmodifier'], ['id'], null, null, false, true, null]],
        2800 => [[['_route' => 'listp', '_controller' => 'App\\Controller\\ListProduitController::listp'], ['idpanier', 'idpara'], null, null, false, true, null]],
        2838 => [[['_route' => 'Ordonnanceremove', '_controller' => 'App\\Controller\\OrdonnanceController::remove'], ['id'], null, null, false, true, null]],
        2864 => [[['_route' => 'Ordonnancemodifier', '_controller' => 'App\\Controller\\OrdonnanceController::modifier'], ['id'], null, null, false, true, null]],
        2922 => [[['_route' => 'modifierParapharmacie', '_controller' => 'App\\Controller\\ParapharmacieController::modifierPara'], ['id'], null, null, false, true, null]],
        2953 => [[['_route' => 'postt_show', '_controller' => 'App\\Controller\\PosttController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        2967 => [[['_route' => 'postt_edit', '_controller' => 'App\\Controller\\PosttController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        2976 => [[['_route' => 'postt_delete', '_controller' => 'App\\Controller\\PosttController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        3008 => [[['_route' => 'SuppPosttBack', '_controller' => 'App\\Controller\\PosttController::SuppPosttBack'], ['id'], null, null, false, true, null]],
        3028 => [[['_route' => 'post_index_category', '_controller' => 'App\\Controller\\Website\\PostController::index', '_locale' => 'en'], ['category'], null, null, false, true, null]],
        3064 => [[['_route' => 'updateCategorie', '_controller' => 'App\\Controller\\PostCategorieController::updateCategorie'], ['id'], null, null, false, true, null]],
        3094 => [[['_route' => 'repondre', '_controller' => 'App\\Controller\\ReclamationController::repondrereclamation'], ['id'], null, null, false, true, null]],
        3132 => [[['_route' => 'modifierRegion', '_controller' => 'App\\Controller\\RegionsController::modifierPara'], ['id'], null, null, false, true, null]],
        3162 => [[['_route' => 'envreponse', '_controller' => 'App\\Controller\\ReclamationController::envoyerreponse'], ['id'], ['GET' => 0], null, false, true, null]],
        3200 => [[['_route' => 'impression', '_controller' => 'App\\Controller\\SoinMPController::impression'], ['id', 'iduser'], null, null, false, true, null]],
        3227 => [
            [['_route' => 'post_detail', '_controller' => 'App\\Controller\\Website\\PostController::detail'], ['_locale', 'slug'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
