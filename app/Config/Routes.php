<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php'))
{
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/', 'Home::index');






// tambahanku
$routes->resource('photos');

// Equivalent to the following:
$routes->get('photos/new',             'Photos::new'); //C show form
$routes->post('photos',                'Photos::create'); //C post form
$routes->get('photos',                 'Photos::index'); //Read all--> show list for each
$routes->get('photos/(:segment)',      'Photos::show/$1'); // Read by Id--> view detail with id
$routes->get('photos/(:segment)/edit', 'Photos::edit/$1'); //Read by Id -->show form with Id
$routes->put('photos/(:segment)',      'Photos::update/$1'); // Edit by ID --> full modify
$routes->patch('photos/(:segment)',    'Photos::update/$1'); // Edit by ID--> partial modify
$routes->delete('photos/(:segment)',   'Photos::delete/$1'); // Delete

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php'))
{
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
