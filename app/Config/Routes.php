<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (is_file(SYSTEMPATH . 'Config/Routes.php')) {
    require SYSTEMPATH . 'Config/Routes.php';
}

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Main');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
//$routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Main::index');
$routes->get('/input', 'Input::index');

$routes->get('/input/index', 'Input::index');
$routes->post('/input/simpanSurat', 'Input::simpanSurat');


// $routes->get('/input/editsurat/', 'Input::editsurat');

$routes->get('/main', 'Main::index');
$routes->get('/main/surathariini', 'Main::surathariini');



$routes->get('/daftar', 'SuratMasuk::index');
$routes->get('/daftarnew', 'SuratMasuk::testing');

$routes->get('/expedisi', 'Expedisi::index');
$routes->post('/expedisi/tambah', 'Expedisi::tambahExpedisi');
// $routes->post('/expedisi/tambah', 'Expedisi::tambah');

$routes->get('/penerima', 'Penerima::index');
$routes->post('/penerima/tambah', 'Penerima::tambahPenerima');


$routes->get('/statistik', 'Statistik::index');

$routes->get('/master', 'Login::index');
$routes->get('/login/index', 'Login::index');
$routes->post('/login/cekuser', 'Login::cekUser');


// $routes->get('/penerima', 'Master::penerima');


$routes->post('/suratmasuk/suratkembali', 'SuratMasuk::suratkembali');
$routes->post('/suratmasuk/delete', 'SuratMasuk::delete');

// $routes->get('/suratmasuk/formedit', 'SuratMasuk::formedit');
$routes->post('/suratmasuk/kembalikansuratmasuk', 'SuratMasuk::kembalikansuratmasuk');

$routes->get('/suratmasuk/hapus/(:any)', 'SuratMasuk::hapus');
$routes->post('/suratmasuk/hapus/(:any)', 'SuratMasuk::hapus');
$routes->get('/suratmasuk/index', 'SuratMasuk::index');
// $routes->get('/suratmasuk/hapus/(:any)', 'SuratMasuk::index');
// $routes->delete('/suratmasuk/hapus/(:any)', 'SuratMasuk::hapus/$1');



// $routes->get('/daftar/new', 'SuratMasukNew::index');

$routes->get('/daftarnew', 'SuratMasukNew::index');

// $routes->post('/suratAjax', 'SuratMasuk::index2');





$routes->post('/input/simpan/', 'Input::simpan');

$routes->get('/cetak_laporan', 'Laporan::cetak_atlet');

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
