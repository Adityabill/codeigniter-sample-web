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
$routes->add('/product/(:any)/(:any)', 'Shop::product/$1/$2');
$routes->add('/render_html', function(){
	return "<div>
	<h1>Hello World!!!</h1>
	</div>";
});

$routes->group('admin', function($routes){
	$routes->add('', 'Admin\Admin_test::index');
	$routes->add('admin_bio/(:any)', 'Admin\Admin_bio::Admin_bio/$1');
	$routes->add('admin_test/(:any)', 'Admin\Admin_test::name/$1');
});

$routes->group('blogs', function($routes){
	$routes->add('', 'Blog\BlogController::index');
	$routes->get('addBlogs', 'Blog\BlogController::addBlogs');
	$routes->post('addBlogs', 'Blog\BlogController::showBlogs');
});

$routes->group('portfolio', function($routes){
	$routes->add('', 'Portfolio\PortfolioController::index');
	$routes->add('newindex', 'Portfolio\PortfolioController::newIndex');
	//$routes->add('/', 'Portfolio\PortfolioController::index');
	$routes->add('aboutme', 'Portfolio\PortfolioController::AboutMe');
	$routes->add('contactme', 'Portfolio\PortfolioController::ContactMe');
	$routes->add('register', 'Portfolio\PortfolioController::register');
	$routes->add('registration_display', 'Portfolio\PortfolioController::registration_display');
});

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
