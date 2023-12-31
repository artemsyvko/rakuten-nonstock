<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('ItemManagement');
$routes->setDefaultController('OrderManagement');
$routes->setDefaultController('SalesAnalysis');
$routes->setDefaultController('ItemImport');
$routes->setDefaultController('RMSItemDelete');
$routes->setDefaultController('Blacklist');
$routes->setDefaultController('NgKeyword');
$routes->setDefaultController('TrackingPrice');
$routes->setDefaultController('MailTemplate');
$routes->setDefaultController('MyAccount');

$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'LandingPage::index');

service('auth')->routes($routes);

service('auth')->routes($routes, ['except' => ['login', 'register']]);
$routes->get('login', '\App\Controllers\Auth\LoginController::loginView');
$routes->get('register', '\App\Controllers\Auth\RegisterController::registerView');

$routes->get('/item-management', 'ItemManagement::index');
$routes->get('/item-management/edit', 'ItemManagement::edit');

$routes->get('/order-management', 'OrderManagement::index');
$routes->get('/order-management/edit', 'OrderManagement::edit');

$routes->get('/sales-analysis', 'SalesAnalysis::index');

$routes->get('/item-import', 'ItemImport::index');
$routes->get('/item-import/error', 'ItemImport::import_error');

$routes->get('/item-listing', 'ItemListing::index');
$routes->get('/item-listing/error', 'ItemListing::listing_error');

$routes->get('/rms-item-delete', 'RMSItemDelete::index');

$routes->get('/blacklist', 'Blacklist::index');

$routes->get('/ngkeyword', 'NgKeyword::index');

$routes->get('/tracking-price-setting', 'TrackingPrice::index');

$routes->get('/mail-template', 'MailTemplate::index');

$routes->get('/my-account', 'MyAccount::index');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
