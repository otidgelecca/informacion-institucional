<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::group(['prefix' => 'sistema-control-interno'], function() {
    Route::get('cp', 'HomeController@cp');
    Route::get('diagnostico', 'HomeController@diagnostico');
    Route::post('plan', 'HomeController@plan');
});
*/


Route::group(['prefix' => 'codigo-etica'], function() {
    Route::get('/', function () {return view('codigo_etica/ce');});
});

Route::group(['prefix' => 'aip'], function() {
    Route::get('/', function () {return view('aip/aip');});
});

Route::group(['prefix' => 'ecoeficiencia'], function() {
    Route::get('/', function () {return view('ecoeficiencia/ecoeficiencia');});
});

Route::group(['prefix' => 'procesos-seleccion'], function() {
    Route::get('/', function () {return view('procesos_seleccion/procesos');});
});

Route::group(['prefix' => 'sistema-control-interno'], function() {
    Route::get('/', function () {return view('sci/cp');});
    Route::get('cp', function () {return view('sci/cp');});
    Route::get('diagnostico', function () {return view('sci/diagnostico');});
    Route::get('plan', function () {return view('sci/plan');});
    Route::get('actas', function () {return view('sci/actas');});
});

Route::group(['prefix' => 'plan-nacional-de-integridad-y-lucha-contra-la-corrupcion'], function() {
    Route::get('/', function () {return view('pilcc/documentos');});
    Route::get('documentos', function () {return view('pilcc/documentos');});
    Route::get('base', function () {return view('pilcc/base');});
    Route::get('informes', function () {return view('pilcc/informes');});    
});

Route::group(['prefix' => 'sistema-gestion-calidad'], function() {
    Route::get('/', function () {return view('sistema_gestion_calidad/objetivo');});
    Route::get('/objetivo', function () {return view('sistema_gestion_calidad/objetivo');});
    Route::get('/politica', function () {return view('sistema_gestion_calidad/politica');});
});
/*
Route::group(['prefix' => '/'], function() {
    Route::get('index', function () {return view('welcome');});
});
*/


/*
Route::get('/', function () {
    return view('welcome');
});
*/

/*
Route::get('/sistema-control-interno/cp', function () {
    return view('sci/cp');
});

Route::get('/sistema-control-interno/diagnostico', function () {
    return view('sci/diagnostico');
});

Route::get('/sistema-control-interno/plan', function () {
    return view('sci/plan');
});

Route::get('/sistema-control-interno/actas', function () {
    return view('sci/actas');
});
*/
/*
Route::get('/plan-nacional-de-integridad-y-lucha-contra-la-corrupcion/documentos', function () {
    return view('pilcc/documentos');
});

Route::get('/plan-nacional-de-integridad-y-lucha-contra-la-corrupcion/base', function () {
    return view('pilcc/base');
});

Route::get('/plan-nacional-de-integridad-y-lucha-contra-la-corrupcion/informes', function () {
    return view('pilcc/informes');
});
*/


Route::group(['prefix' => 'sistema-gestion-antisoborno'], function() {
    Route::get('/', function () {return view('sistema_antisoborno/objetivo');});
    Route::get('/objetivo', function () {return view('sistema_antisoborno/objetivo');});
    Route::get('/politica', function () {return view('sistema_antisoborno/politica');});
});



Route::group(['prefix' => 'manuales'], function() {
    Route::get('/', function () {return view('manuales/manuales');});
});


