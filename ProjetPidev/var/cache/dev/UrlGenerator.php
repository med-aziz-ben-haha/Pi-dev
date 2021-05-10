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
    'admin_category_index' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::index'], [], [['text', '/admin/categories']], [], []],
    'admin_category_add' => [[], ['_controller' => 'App\\Controller\\Admin\\CategoryController::add'], [], [['text', '/admin/category/add']], [], []],
    'admin_category_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/category']], [], []],
    'admin_category_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\CategoryController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/category']], [], []],
    'admin_media_index' => [[], ['_controller' => 'App\\Controller\\Admin\\MediaController::index'], [], [['text', '/admin/medias']], [], []],
    'admin_media_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MediaController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/media']], [], []],
    'admin_media_data_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\MediaDataController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/media-data']], [], []],
    'admin_pages_index' => [[], ['_controller' => 'App\\Controller\\Admin\\PagesController::index'], [], [['text', '/admin']], [], []],
    'admin_pages_homepage' => [[], ['_controller' => 'App\\Controller\\Admin\\PagesController::homepage'], [], [['text', '/homepage']], [], []],
    'admin_post_index' => [[], ['_controller' => 'App\\Controller\\Admin\\PostController::index'], [], [['text', '/admin/posts']], [], []],
    'admin_post_add' => [[], ['_controller' => 'App\\Controller\\Admin\\PostController::add'], [], [['text', '/admin/post/add']], [], []],
    'admin_post_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\PostController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/post']], [], []],
    'admin_post_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\PostController::delete'], [], [['text', '/delete'], ['variable', '/', '[^/]++', 'id'], ['text', '/admin/post']], [], []],
    'post_show_pdf' => [[], ['_controller' => 'App\\Controller\\Admin\\PostController::pdfAction'], [], [['text', '/pdf/pdf']], [], []],
    'admin_setting_index' => [[], ['_controller' => 'App\\Controller\\Admin\\SettingController::index'], [], [['text', '/admin/setting']], [], []],
    'api' => [[], ['_controller' => 'App\\Controller\\ApiController::index'], [], [['text', '/api']], [], []],
    'api_event_edit' => [['id'], ['_controller' => 'App\\Controller\\ApiController::majEvent'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/api']], [], []],
    'api_folder_post' => [[], ['_controller' => 'App\\Controller\\Api\\FolderController::postAction'], [], [['text', '/api/folder']], [], []],
    'api_folder_delete' => [[], ['_controller' => 'App\\Controller\\Api\\FolderController::deleteAction'], [], [['text', '/api/folder/delete']], [], []],
    'api_media_upload' => [[], ['_controller' => 'App\\Controller\\Api\\MediaController::uploadAction'], [], [['text', '/api/media/upload']], [], []],
    'api_media_delete' => [[], ['_controller' => 'App\\Controller\\Api\\MediaController::deleteAction'], [], [['text', '/api/media/delete']], [], []],
    'api_media_list' => [[], ['_controller' => 'App\\Controller\\Api\\MediaController::listAction'], [], [['text', '/api/media/list']], [], []],
    'calendar_index' => [[], ['_controller' => 'App\\Controller\\CalendarController::index'], [], [['text', '/calendar/calendar']], [], []],
    'calendar_new' => [[], ['_controller' => 'App\\Controller\\CalendarController::new'], [], [['text', '/calendar/new']], [], []],
    'calendar_show' => [['id'], ['_controller' => 'App\\Controller\\CalendarController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/calendar']], [], []],
    'calendar_edit' => [['id'], ['_controller' => 'App\\Controller\\CalendarController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/calendar']], [], []],
    'calendar_delete' => [['id'], ['_controller' => 'App\\Controller\\CalendarController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/calendar']], [], []],
    'categorie_produit' => [[], ['_controller' => 'App\\Controller\\CategorieProduitController::index'], [], [['text', '/categorie/produit']], [], []],
    'afficheCategorieProd' => [['id', 'iduser'], ['_controller' => 'App\\Controller\\CategorieProduitController::affiche'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/afficheCategorieProd']], [], []],
    'deleteCategorie' => [['id', 'iduser'], ['_controller' => 'App\\Controller\\CategorieProduitController::delete'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/SuppCategorie']], [], []],
    'AjoutCategorie' => [['id', 'iduser'], ['_controller' => 'App\\Controller\\CategorieProduitController::add'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/AjoutCategorie']], [], []],
    'modifierCategorie' => [['id', 'iduser'], ['_controller' => 'App\\Controller\\CategorieProduitController::modifierPara'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/categorie/ModifierCategorie']], [], []],
    'choixCategorie' => [['id', 'iduser'], ['_controller' => 'App\\Controller\\CategorieProduitController::choixCategorie'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/choixCategorie']], [], []],
    'afficheClienCategorieProd' => [['idpara', 'iduser'], ['_controller' => 'App\\Controller\\CategorieProduitController::afficheClient'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'idpara'], ['text', '/afficheClienCategorieProd']], [], []],
    'categorie_soin_m_p' => [[], ['_controller' => 'App\\Controller\\CategorieSoinMPController::index'], [], [['text', '/categoriesoinmp']], [], []],
    'afficherCategorieSoinMP' => [[], ['_controller' => 'App\\Controller\\CategorieSoinMPController::listCategoriesSoinMP'], [], [['text', '/afficherCategorieSoinMP']], [], []],
    'afficherCategorieSoinMPs' => [['iduser'], ['_controller' => 'App\\Controller\\CategorieSoinMPController::listCategoriesSoinMPs'], [], [['variable', '/', '[^/]++', 'iduser'], ['text', '/afficherCategorieSoinMPs']], [], []],
    'modifierCategorieSoinjson' => [['id', 'titre'], ['_controller' => 'App\\Controller\\CategorieSoinMPController::modifierCategorieSoinjson'], [], [['variable', '/', '[^/]++', 'titre'], ['variable', '/', '[^/]++', 'id'], ['text', '/Api/CatSoin/modifier']], [], []],
    'supprimerCategorieSoinjson' => [['id'], ['_controller' => 'App\\Controller\\CategorieSoinMPController::SupprimerCategorieSoinjson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Api/CatSoin/supprimer']], [], []],
    'ajouterCategorieSoinjson' => [['titre'], ['_controller' => 'App\\Controller\\CategorieSoinMPController::ajouterCategorieSoinjson'], [], [['variable', '/', '[^/]++', 'titre'], ['text', '/Api/CatSoin/Ajouter']], [], []],
    'afficherCategorieSoinMPsJson' => [[], ['_controller' => 'App\\Controller\\CategorieSoinMPController::listCategoriesSoinMPsJson'], [], [['text', '/Api/CatSoin/Afficher']], [], []],
    'ajouterCategorieSoinMP' => [[], ['_controller' => 'App\\Controller\\CategorieSoinMPController::ajouterCategorieSoinMP'], [], [['text', '/ajouterCategorieSoinMP']], [], []],
    'supprimerCategorieSoinMP' => [['id'], ['_controller' => 'App\\Controller\\CategorieSoinMPController::SupprimerCategorieSoinMP'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerCategorieSoinMP']], [], []],
    'modifierCategorieSoinMP' => [['id'], ['_controller' => 'App\\Controller\\CategorieSoinMPController::modifierCategorieSoinMP'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifierCategorieSoinMP']], [], []],
    'centre_medical_index' => [[], ['_controller' => 'App\\Controller\\CentreMedicalController::index'], [], [['text', '/centreMedical/']], [], []],
    'centre_medical_index_front' => [[], ['_controller' => 'App\\Controller\\CentreMedicalController::index_front'], [], [['text', '/centreMedical/front/']], [], []],
    'centre_medical_search' => [['data'], ['_controller' => 'App\\Controller\\CentreMedicalController::search'], [], [['variable', '/', '[^/]++', 'data'], ['text', '/centreMedical/search']], [], []],
    'centre_medical_new' => [[], ['_controller' => 'App\\Controller\\CentreMedicalController::new'], [], [['text', '/centreMedical/new']], [], []],
    'centre_medical_show' => [['id'], ['_controller' => 'App\\Controller\\CentreMedicalController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/centreMedical']], [], []],
    'centre_medical_edit' => [['id'], ['_controller' => 'App\\Controller\\CentreMedicalController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/centreMedical']], [], []],
    'centre_medical_delete' => [['id'], ['_controller' => 'App\\Controller\\CentreMedicalController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/centreMedical']], [], []],
    'contact' => [[], ['_controller' => 'App\\Controller\\ContactController::index'], [], [['text', '/contact']], [], []],
    'connect_google_start' => [[], ['_controller' => 'App\\Controller\\GoogleController::connectAction'], [], [['text', '/connect/google/']], [], []],
    'connect_google_check' => [[], ['_controller' => 'App\\Controller\\GoogleController::connectCheckAction'], [], [['text', '/connect/google/check/']], [], []],
    'inscription_google_start' => [[], ['_controller' => 'App\\Controller\\GoogleController::inscriptionAction'], [], [['text', '/inscription/google/']], [], []],
    'inscription_google_check' => [[], ['_controller' => 'App\\Controller\\GoogleController::inscriptionCheckAction'], [], [['text', '/inscription/google/check/']], [], []],
    'list_produit' => [[], ['_controller' => 'App\\Controller\\ListProduitController::index'], [], [['text', '/list/produit']], [], []],
    'afficheClienListProduit' => [['idpanier', 'iduser'], ['_controller' => 'App\\Controller\\ListProduitController::afficheClient'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'idpanier'], ['text', '/afficheClienListProduit']], [], []],
    'deleteListProduit' => [['id', 'idpanier', 'iduser'], ['_controller' => 'App\\Controller\\ListProduitController::delete'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'idpanier'], ['variable', '/', '[^/]++', 'id'], ['text', '/SuppListProd']], [], []],
    'modifierListProduit' => [['id', 'idpanier', 'iduser', 'idprod'], ['_controller' => 'App\\Controller\\ListProduitController::modifierPara'], [], [['variable', '/', '[^/]++', 'idprod'], ['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'idpanier'], ['variable', '/', '[^/]++', 'id'], ['text', '/ModifierListProduit']], [], []],
    'afficheParapharmacienListProduit' => [['idpanier', 'idpara'], ['_controller' => 'App\\Controller\\ListProduitController::afficheParapharmacien'], [], [['variable', '/', '[^/]++', 'idpara'], ['variable', '/', '[^/]++', 'idpanier'], ['text', '/afficheParapharmacienListProduit']], [], []],
    'listp' => [['idpanier', 'idpara'], ['_controller' => 'App\\Controller\\ListProduitController::listp'], [], [['variable', '/', '[^/]++', 'idpara'], ['variable', '/', '[^/]++', 'idpanier'], ['text', '/listp']], [], []],
    'main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/calendar']], [], []],
    'medicament' => [[], ['_controller' => 'App\\Controller\\MedicamentController::index'], [], [['text', '/medicament']], [], []],
    'listmedicament' => [[], ['_controller' => 'App\\Controller\\MedicamentController::listmedicament'], [], [['text', '/listmedicament']], [], []],
    'Medicamentajout' => [[], ['_controller' => 'App\\Controller\\MedicamentController::Medicamentajout'], [], [['text', '/Medicamentajout']], [], []],
    'Medicamentremove' => [['id'], ['_controller' => 'App\\Controller\\MedicamentController::remove'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Medicamentremove']], [], []],
    'Medicamentmodifier' => [['id'], ['_controller' => 'App\\Controller\\MedicamentController::medicamentmodifier'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Medicamentmodifier']], [], []],
    'recherchemed' => [[], ['_controller' => 'App\\Controller\\MedicamentController::recherche'], [], [['text', '/recherchemed']], [], []],
    'frontlistmedicament' => [[], ['_controller' => 'App\\Controller\\MedicamentController::frontlistmedicament'], [], [['text', '/frontlistmedicament']], [], []],
    'recherchemed2' => [[], ['_controller' => 'App\\Controller\\MedicamentController::recherche2'], [], [['text', '/recherchemed2']], [], []],
    'trimedicament' => [[], ['_controller' => 'App\\Controller\\MedicamentController::orderbynameqb'], [], [['text', '/trimedicament']], [], []],
    'PDF' => [[], ['_controller' => 'App\\Controller\\MedicamentController::hello'], [], [['text', '/PDF']], [], []],
    'Excel' => [[], ['_controller' => 'App\\Controller\\MedicamentController::export'], [], [['text', '/Excel']], [], []],
    'note_soin_m_p' => [[], ['_controller' => 'App\\Controller\\NoteSoinMPController::index'], [], [['text', '/note/soin/m/p']], [], []],
    'ajouternoteSMP' => [['id', 'iduser', 'valeur'], ['_controller' => 'App\\Controller\\NoteSoinMPController::ajouterNote'], [], [['variable', '/', '[^/]++', 'valeur'], ['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/ajouternoteSMP']], [], []],
    'ajouternoteSMPJson' => [['id', 'iduser', 'valeur', 'avis'], ['_controller' => 'App\\Controller\\NoteSoinMPController::ajouterNoteJson'], [], [['variable', '/', '[^/]++', 'avis'], ['variable', '/', '[^/]++', 'valeur'], ['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/Api/Note/Ajouter']], [], []],
    'ordonnance' => [[], ['_controller' => 'App\\Controller\\OrdonnanceController::index'], [], [['text', '/ordonnance']], [], []],
    'listordonnance' => [[], ['_controller' => 'App\\Controller\\OrdonnanceController::listordonnance'], [], [['text', '/listordonnance']], [], []],
    'listordonnanceuser' => [[], ['_controller' => 'App\\Controller\\OrdonnanceController::listordonnanceuser'], [], [['text', '/listordonnanceuser']], [], []],
    'Ordonnanceajout' => [[], ['_controller' => 'App\\Controller\\OrdonnanceController::Ordonnanceajout'], [], [['text', '/Ordonnanceajout']], [], []],
    'Ordonnanceremove' => [['id'], ['_controller' => 'App\\Controller\\OrdonnanceController::remove'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Ordonnanceremove']], [], []],
    'Ordonnancemodifier' => [['id'], ['_controller' => 'App\\Controller\\OrdonnanceController::modifier'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Ordonnancemodifier']], [], []],
    'triordonnance' => [[], ['_controller' => 'App\\Controller\\OrdonnanceController::orderbynameqb'], [], [['text', '/triordonnance']], [], []],
    'panier' => [[], ['_controller' => 'App\\Controller\\PanierController::index'], [], [['text', '/panier']], [], []],
    'afficheClienPanier' => [['iduser'], ['_controller' => 'App\\Controller\\PanierController::afficheClient'], [], [['variable', '/', '[^/]++', 'iduser'], ['text', '/afficheClienPanier']], [], []],
    'afficheParapharmacienCommande' => [['idpara'], ['_controller' => 'App\\Controller\\PanierController::afficheParapharmacienCommande'], [], [['variable', '/', '[^/]++', 'idpara'], ['text', '/afficheParapharmacienCommande']], [], []],
    'parapharmacie' => [[], ['_controller' => 'App\\Controller\\ParapharmacieController::index'], [], [['text', '/parapharmacie']], [], []],
    'affichePara' => [[], ['_controller' => 'App\\Controller\\ParapharmacieController::affiche'], [], [['text', '/affichePara']], [], []],
    'deleteParapharmacie' => [['id'], ['_controller' => 'App\\Controller\\ParapharmacieController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Supp']], [], []],
    'AjoutParapharmacie' => [[], ['_controller' => 'App\\Controller\\ParapharmacieController::add'], [], [['text', '/parapharmacie/AjoutParapharmacie']], [], []],
    'modifierParapharmacie' => [['id'], ['_controller' => 'App\\Controller\\ParapharmacieController::modifierPara'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/parapharmacie/ModifierParapharmacie']], [], []],
    'afficheFrontListPara' => [[], ['_controller' => 'App\\Controller\\ParapharmacieController::afficheFront'], [], [['text', '/afficheFrontListPara']], [], []],
    'afficheFrontClientPara' => [['iduser'], ['_controller' => 'App\\Controller\\ParapharmacieController::afficheFrontClient'], [], [['variable', '/', '[^/]++', 'iduser'], ['text', '/afficheFrontClientPara']], [], []],
    'postcategorie' => [[], ['_controller' => 'App\\Controller\\PostCategorieController::index'], [], [['text', '/postCategorie']], [], []],
    'afficherCategoriePost' => [[], ['_controller' => 'App\\Controller\\PostCategorieController::afficherCategoriePost'], [], [['text', '/afficherCategoriePost']], [], []],
    'afficherCategoriePostFront' => [[], ['_controller' => 'App\\Controller\\PostCategorieController::afficherCategoriePostFront'], [], [['text', '/afficherCategoriePostFront']], [], []],
    'SuppCatPost' => [['id'], ['_controller' => 'App\\Controller\\PostCategorieController::Supp'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/SuppCatPost']], [], []],
    'add' => [[], ['_controller' => 'App\\Controller\\PostCategorieController::add'], [], [['text', '/add']], [], []],
    'updateCategorie' => [['id'], ['_controller' => 'App\\Controller\\PostCategorieController::updateCategorie'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/updateCategorie']], [], []],
    'afficherPosttBack' => [[], ['_controller' => 'App\\Controller\\PostCategorieController::afficherPosttBack'], [], [['text', '/afficherPosttBack']], [], []],
    'postt_index' => [[], ['_controller' => 'App\\Controller\\PosttController::index'], [], [['text', '/postt/']], [], []],
    'postt_new' => [[], ['_controller' => 'App\\Controller\\PosttController::new'], [], [['text', '/postt/new']], [], []],
    'postt_show' => [['id'], ['_controller' => 'App\\Controller\\PosttController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/postt']], [], []],
    'postt_edit' => [['id'], ['_controller' => 'App\\Controller\\PosttController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/postt']], [], []],
    'postt_delete' => [['id'], ['_controller' => 'App\\Controller\\PosttController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/postt']], [], []],
    'postt_show_pdf' => [[], ['_controller' => 'App\\Controller\\PosttController::pdfAction'], [], [['text', '/postt/pdf/pdf']], [], []],
    'SuppPosttBack' => [['id'], ['_controller' => 'App\\Controller\\PosttController::SuppPosttBack'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/postt/SuppPosttBack']], [], []],
    'afficheProd' => [['id', 'iduser'], ['_controller' => 'App\\Controller\\ProduitController::affiche'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/afficheProd']], [], []],
    'produit' => [[], ['_controller' => 'App\\Controller\\ProduitController::index'], [], [['text', '/produit']], [], []],
    'deleteProduit' => [['id', 'iduser'], ['_controller' => 'App\\Controller\\ProduitController::delete'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/SuppProd']], [], []],
    'AjoutProduit' => [['id', 'iduser'], ['_controller' => 'App\\Controller\\ProduitController::add'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/AjoutProduit']], [], []],
    'modifierProduit' => [['id', 'iduser'], ['_controller' => 'App\\Controller\\ProduitController::modifierPara'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/ModifierProduit']], [], []],
    'afficheClienCategorieProduit' => [['idpara', 'idcat', 'iduser'], ['_controller' => 'App\\Controller\\ProduitController::afficheClient'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'idcat'], ['variable', '/', '[^/]++', 'idpara'], ['text', '/afficheClienCategorieProduit']], [], []],
    'afficheProduit' => [['idpara', 'idp', 'iduser'], ['_controller' => 'App\\Controller\\ProduitController::afficheProduit'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'idp'], ['variable', '/', '[^/]++', 'idpara'], ['text', '/afficheProduit']], [], []],
    'afficheBackProduit' => [[], ['_controller' => 'App\\Controller\\ProduitController::afficheBackProduit'], [], [['text', '/afficheBackProduit']], [], []],
    'reclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationController::index'], [], [['text', '/reclamation']], [], []],
    'afficherreclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationController::listreclamation'], [], [['text', '/afficherreclamation']], [], []],
    'afficherpdf' => [[], ['_controller' => 'App\\Controller\\ReclamationController::afficherpdf'], [], [['text', '/afficherpdf']], [], []],
    'afficherreclamations' => [[], ['_controller' => 'App\\Controller\\ReclamationController::listreclamations'], [], [['text', '/afficherreclamations']], [], []],
    'supprimerreclamation' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::Supprimerreclamation'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerreclamation']], [], []],
    'supprimerreclamations' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::Supprimerreclamations'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerreclamations']], [], []],
    'modifierreclamations' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::modifierreclamation'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifierreclamations']], [], []],
    'ajouterreclamation' => [[], ['_controller' => 'App\\Controller\\ReclamationController::ajouterreclamation'], [], [['text', '/ajouterreclamation']], [], []],
    'repondre' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::repondrereclamation'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/repondre']], [], []],
    'envreponse' => [['id'], ['_controller' => 'App\\Controller\\ReclamationController::envoyerreponse'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/envreponse']], [], []],
    'regions' => [[], ['_controller' => 'App\\Controller\\RegionsController::index'], [], [['text', '/regions']], [], []],
    'afficheRegions' => [[], ['_controller' => 'App\\Controller\\RegionsController::affiche'], [], [['text', '/afficheRegions']], [], []],
    'deleteRegion' => [['id'], ['_controller' => 'App\\Controller\\RegionsController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/SuppRegion']], [], []],
    'AjoutRegion' => [[], ['_controller' => 'App\\Controller\\RegionsController::add'], [], [['text', '/regions/AjoutRegion']], [], []],
    'modifierRegion' => [['id'], ['_controller' => 'App\\Controller\\RegionsController::modifierPara'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/regions/ModifierRegion']], [], []],
    'service_index' => [[], ['_controller' => 'App\\Controller\\ServiceController::index'], [], [['text', '/service/']], [], []],
    'service_showByCenter' => [['center'], ['_controller' => 'App\\Controller\\ServiceController::showByCenter'], [], [['variable', '/', '[^/]++', 'center'], ['text', '/service/showByCenter']], [], []],
    'service_showByCenter_front' => [['center'], ['_controller' => 'App\\Controller\\ServiceController::showByCenterFront'], [], [['variable', '/', '[^/]++', 'center'], ['text', '/service/front/showByCenter']], [], []],
    'product_search' => [['order', 'by'], ['order' => 'ASC', 'by' => 'id', '_controller' => 'App\\Controller\\ServiceController::search'], [], [['variable', '/', '[^/]++', 'by'], ['variable', '/', '[^/]++', 'order'], ['text', '/service/search']], [], []],
    'service_new' => [[], ['_controller' => 'App\\Controller\\ServiceController::new'], [], [['text', '/service/new']], [], []],
    'service_show' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::show'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/service']], [], []],
    'service_edit' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::edit'], [], [['text', '/edit'], ['variable', '/', '[^/]++', 'id'], ['text', '/service']], [], []],
    'service_delete' => [['id'], ['_controller' => 'App\\Controller\\ServiceController::delete'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/service']], [], []],
    'service_show_pdf' => [[], ['_controller' => 'App\\Controller\\ServiceController::pdfAction'], [], [['text', '/service/pdf/pdf']], [], []],
    'soin_m_p' => [[], ['_controller' => 'App\\Controller\\SoinMPController::index'], [], [['text', '/soin/m/p']], [], []],
    'supprimerSoinMPjson' => [['id'], ['_controller' => 'App\\Controller\\SoinMPController::SupprimerSoinMPjson'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/Api/Soin/Supprimer']], [], []],
    'StatSoinMPsJson' => [[], ['_controller' => 'App\\Controller\\SoinMPController::StatSoinMPsJson'], [], [['text', '/Api/Soin/Stat']], [], []],
    'ajouterSoinMPJson' => [['titre', 'description', 'adresse', 'categorie'], ['_controller' => 'App\\Controller\\SoinMPController::ajouterSoinMPJson'], [], [['variable', '/', '[^/]++', 'categorie'], ['variable', '/', '[^/]++', 'adresse'], ['variable', '/', '[^/]++', 'description'], ['variable', '/', '[^/]++', 'titre'], ['text', '/Api/Soin/Ajouter']], [], []],
    'modifierSoinMPJson' => [['id', 'titre', 'description', 'adresse', 'categorie'], ['_controller' => 'App\\Controller\\SoinMPController::modifierSoinMPJson'], [], [['variable', '/', '[^/]++', 'categorie'], ['variable', '/', '[^/]++', 'adresse'], ['variable', '/', '[^/]++', 'description'], ['variable', '/', '[^/]++', 'titre'], ['variable', '/', '[^/]++', 'id'], ['text', '/Api/Soin/Modifier']], [], []],
    'afficherSoinMPjson' => [[], ['_controller' => 'App\\Controller\\SoinMPController::listSoinMPjson'], [], [['text', '/Api/Soin/Afficher']], [], []],
    'afficherSoinMP' => [[], ['_controller' => 'App\\Controller\\SoinMPController::listSoinMP'], [], [['text', '/afficherSoinMP']], [], []],
    'afficherSoinMPs' => [['id', 'iduser'], ['_controller' => 'App\\Controller\\SoinMPController::listSoinMPs'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/afficherSoinMPs']], [], []],
    'afficherSoinMPsJson' => [['id', 'iduser'], ['_controller' => 'App\\Controller\\SoinMPController::listSoinMPsJson'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/Api/Soin/Afficher']], [], []],
    'afficherDetailSoinMPs' => [['id', 'iduser'], ['_controller' => 'App\\Controller\\SoinMPController::detailSoinMPs'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/afficherDetailSoinMPs']], [], []],
    'AfficherdetailSoinMPnote' => [['id', 'iduser'], ['_controller' => 'App\\Controller\\SoinMPController::detailSoinMPsnote'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/AfficherdetailSoinMPnote']], [], []],
    'ajouterSoinMP' => [[], ['_controller' => 'App\\Controller\\SoinMPController::ajouterSoinMP'], [], [['text', '/ajouterSoinMP']], [], []],
    'supprimerSoinMP' => [['id'], ['_controller' => 'App\\Controller\\SoinMPController::SupprimerSoinMP'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerSoinMP']], [], []],
    'modifierSoinMP' => [['id'], ['_controller' => 'App\\Controller\\SoinMPController::modifierSoinMP'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifierSoinMP']], [], []],
    'upload_test' => [[], ['_controller' => 'App\\Controller\\SoinMPController::temporaryUploadAction'], [], [['text', '/admin/upload/test']], [], []],
    'afficherStatSoinMP' => [[], ['_controller' => 'App\\Controller\\SoinMPController::afficherStatSoinMP'], [], [['text', '/afficherStatSoinMP']], [], []],
    'impression' => [['id', 'iduser'], ['_controller' => 'App\\Controller\\SoinMPController::impression'], [], [['variable', '/', '[^/]++', 'iduser'], ['variable', '/', '[^/]++', 'id'], ['text', '/impression']], [], []],
    'typereclamation' => [[], ['_controller' => 'App\\Controller\\TypereclamationController::index'], [], [['text', '/typereclamation']], [], []],
    'affichertypereclamation' => [[], ['_controller' => 'App\\Controller\\TypereclamationController::listtypereclamation'], [], [['text', '/affichertypereclamation']], [], []],
    'supprimertypereclamation' => [['id'], ['_controller' => 'App\\Controller\\TypereclamationController::Supprimertypereclamation'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimertypereclamation']], [], []],
    'ajoutertypereclamation' => [[], ['_controller' => 'App\\Controller\\TypereclamationController::ajoutertypereclamation'], [], [['text', '/ajoutertypereclamation']], [], []],
    'modifiertypereclamation' => [['id'], ['_controller' => 'App\\Controller\\TypereclamationController::modifiertypereclamation'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/modifiertypereclamation']], [], []],
    'afficherpdft' => [[], ['_controller' => 'App\\Controller\\TypereclamationController::afficherpdft'], [], [['text', '/afficherpdft']], [], []],
    'tri' => [[], ['_controller' => 'App\\Controller\\TypereclamationController::OrderByid'], [], [['text', '/tri']], [], []],
    'accueil' => [[], ['_controller' => 'App\\Controller\\UserController::index'], [], [['text', '/accueil']], [], []],
    'listUserJson' => [[], ['_controller' => 'App\\Controller\\UserController::listUserJson'], [], [['text', '/Api/User/list']], [], []],
    'modifierUserjson' => [['iduser', 'nom', 'prenom', 'adresse', 'tell'], ['_controller' => 'App\\Controller\\UserController::modifierUserjson'], [], [['variable', '/', '[^/]++', 'tell'], ['variable', '/', '[^/]++', 'adresse'], ['variable', '/', '[^/]++', 'prenom'], ['variable', '/', '[^/]++', 'nom'], ['variable', '/', '[^/]++', 'iduser'], ['text', '/Api/User/Profil']], [], []],
    'inscriptionjson' => [['login', 'mdp', 'mail', 'nom', 'prenom', 'sexe', 'adresse', 'tell', 'role', 'matricule', 'specialite'], ['_controller' => 'App\\Controller\\UserController::inscriptionjson'], [], [['variable', '/', '[^/]++', 'specialite'], ['variable', '/', '[^/]++', 'matricule'], ['variable', '/', '[^/]++', 'role'], ['variable', '/', '[^/]++', 'tell'], ['variable', '/', '[^/]++', 'adresse'], ['variable', '/', '[^/]++', 'sexe'], ['variable', '/', '[^/]++', 'prenom'], ['variable', '/', '[^/]++', 'nom'], ['variable', '/', '[^/]++', 'mail'], ['variable', '/', '[^/]++', 'mdp'], ['variable', '/', '[^/]++', 'login'], ['text', '/Api/User/inscription']], [], []],
    'connexionjson' => [['login', 'mdp'], ['_controller' => 'App\\Controller\\UserController::connexionjson'], [], [['variable', '/', '[^/]++', 'mdp'], ['variable', '/', '[^/]++', 'login'], ['text', '/Api/User/connexion']], [], []],
    'Patients' => [[], ['_controller' => 'App\\Controller\\UserController::ListPatients'], [], [['text', '/Patients']], [], []],
    'supprimerPatient' => [['id'], ['_controller' => 'App\\Controller\\UserController::SupprimerPatients'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerPatient']], [], []],
    'Medecins' => [[], ['_controller' => 'App\\Controller\\UserController::ListMedcins'], [], [['text', '/Medecins']], [], []],
    'supprimerMedecin' => [['id'], ['_controller' => 'App\\Controller\\UserController::SupprimerMedecins'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerMedecin']], [], []],
    'Pharmaciens' => [[], ['_controller' => 'App\\Controller\\UserController::ListPharmaciens'], [], [['text', '/Pharmaciens']], [], []],
    'supprimerPharmacien' => [['id'], ['_controller' => 'App\\Controller\\UserController::SupprimerPharmaciens'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerPharmacien']], [], []],
    'Parapharmaciens' => [[], ['_controller' => 'App\\Controller\\UserController::ListParapharmaciens'], [], [['text', '/Parapharmaciens']], [], []],
    'supprimerParapharmacien' => [['id'], ['_controller' => 'App\\Controller\\UserController::SupprimerParapharmaciens'], [], [['variable', '/', '[^/]++', 'id'], ['text', '/supprimerParapharmacien']], [], []],
    'connexion' => [[], ['_controller' => 'App\\Controller\\UserController::connexion'], [], [['text', '/connexion']], [], []],
    'deconnexion' => [[], ['_controller' => 'App\\Controller\\UserController::logout'], [], [['text', '/deconnexion']], [], []],
    'accueilOnline' => [['iduser'], ['_controller' => 'App\\Controller\\UserController::accueil'], [], [['variable', '/', '[^/]++', 'iduser'], ['text', '/accueilOnline']], [], []],
    'accueilOnlineMed' => [['iduser'], ['_controller' => 'App\\Controller\\UserController::accueilMed'], [], [['variable', '/', '[^/]++', 'iduser'], ['text', '/accueilOnlineMed']], [], []],
    'accueilOnlinePharmacien' => [['iduser'], ['_controller' => 'App\\Controller\\UserController::accueilPharmacien'], [], [['variable', '/', '[^/]++', 'iduser'], ['text', '/accueilOnlinePharmacien']], [], []],
    'accueilOnlineParapharmacien' => [['iduser'], ['_controller' => 'App\\Controller\\UserController::accueilParapharmacien'], [], [['variable', '/', '[^/]++', 'iduser'], ['text', '/accueilOnlineParapharmacien']], [], []],
    'inscription' => [[], ['_controller' => 'App\\Controller\\UserController::inscription'], [], [['text', '/inscription']], [], []],
    'verifinscription' => [[], ['_controller' => 'App\\Controller\\UserController::verifinscirption'], [], [['text', '/verifinscription']], [], []],
    'inscriptionMed' => [[], ['_controller' => 'App\\Controller\\UserController::inscriptionMed'], [], [['text', '/inscriptionMed']], [], []],
    'inscriptionPharmacien' => [[], ['_controller' => 'App\\Controller\\UserController::inscriptionPharmacien'], [], [['text', '/inscriptionPharmacien']], [], []],
    'inscriptionParapharmacien' => [[], ['_controller' => 'App\\Controller\\UserController::inscriptionPara'], [], [['text', '/inscriptionParapharmacien']], [], []],
    'modifierUser' => [['iduser'], ['_controller' => 'App\\Controller\\UserController::modifierUser'], [], [['variable', '/', '[^/]++', 'iduser'], ['text', '/modifierUser']], [], []],
    'modifierMed' => [['iduser'], ['_controller' => 'App\\Controller\\UserController::modifierMed'], [], [['variable', '/', '[^/]++', 'iduser'], ['text', '/modifierMed']], [], []],
    'modifierPhar' => [['iduser'], ['_controller' => 'App\\Controller\\UserController::modifierPhar'], [], [['variable', '/', '[^/]++', 'iduser'], ['text', '/modifierPhar']], [], []],
    'afficherUser' => [['iduser'], ['_controller' => 'App\\Controller\\UserController::afficherUser'], [], [['variable', '/', '[^/]++', 'iduser'], ['text', '/afficherUser']], [], []],
    'afficherStatUser' => [[], ['_controller' => 'App\\Controller\\UserController::afficherStatUser'], [], [['text', '/afficherStatUser']], [], []],
    'sitemap' => [[], ['_format' => 'xml', '_controller' => 'App\\Controller\\Website\\SitemapController::index'], [], [['text', '/sitemap.xml']], [], []],
    'liip_imagine_filter_runtime' => [['filter', 'hash', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterRuntimeAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path'], ['variable', '/', '[^/]++', 'hash'], ['text', '/rc'], ['variable', '/', '[A-z0-9_-]*', 'filter'], ['text', '/media/cache/resolve']], [], []],
    'liip_imagine_filter' => [['filter', 'path'], ['_controller' => 'Liip\\ImagineBundle\\Controller\\ImagineController::filterAction'], ['filter' => '[A-z0-9_-]*', 'path' => '.+'], [['variable', '/', '.+', 'path'], ['variable', '/', '[A-z0-9_-]*', 'filter'], ['text', '/media/cache/resolve']], [], []],
    'captcha_handler' => [[], ['_controller' => 'CaptchaBundle:CaptchaHandler:index'], [], [['text', '/captcha-handler']], [], []],
    'simple_captcha_handler' => [[], ['_controller' => 'CaptchaBundle:SimpleCaptchaHandler:index'], [], [['text', '/simple-captcha-handler']], [], []],
    'post_index.en' => [[], ['_controller' => 'App\\Controller\\Website\\PostController::index', '_locale' => 'en', '_canonical_route' => 'post_index'], [], [['text', '/posts']], [], []],
    'post_index_category.en' => [['category'], ['_controller' => 'App\\Controller\\Website\\PostController::index', '_locale' => 'en', '_canonical_route' => 'post_index_category'], [], [['variable', '/', '[^/]++', 'category'], ['text', '/posts']], [], []],
    'post_detail' => [['_locale', 'slug'], ['_controller' => 'App\\Controller\\Website\\PostController::detail'], [], [['variable', '/', '[^/]++', 'slug'], ['variable', '/', '[^/]++', '_locale']], [], []],
];
