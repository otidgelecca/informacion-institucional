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
    Route::get('/ce', function () {return view('codigo_etica/ce');});
});

Route::group(['prefix' => 'aip'], function() {
    Route::get('/', function () {return view('aip/aip');});
});

Route::group(['prefix' => 'ecoeficiencia'], function() {
    Route::get('/', function () {return view('ecoeficiencia/ecoeficiencia');});
});

Route::group(['prefix' => 'procesos-seleccion'], function() {
    Route::get('/procesos', function () {return view('procesos_seleccion/procesos');});
});

Route::group(['prefix' => 'sistema-control-interno'], function() {
    Route::get('/', function () {return view('sci/index');});
    Route::get('cp', function () {return view('sci/cp');});
    Route::get('diagnostico', function () {return view('sci/diagnostico');});
    Route::get('plan', function () {return view('sci/plan');});
    Route::get('actas', function () {return view('sci/actas');});
});

Route::group(['prefix' => 'plan-nacional-de-integridad-y-lucha-contra-la-corrupcion'], function() {
    Route::get('/', function () {return view('pilcc/index');});
    Route::get('documentos', function () {return view('pilcc/documentos');});
    Route::get('base', function () {return view('pilcc/base');});
    Route::get('informes', function () {return view('pilcc/informes');});    
});

Route::group(['prefix' => 'sistema-gestion-calidad'], function() {
    //Route::get('/', function () {return view('sistema_gestion_calidad/objetivo');});
    Route::get('/objetivo', function () {return view('sistema_gestion_calidad/objetivo');});
    Route::get('/politica', function () {return view('sistema_gestion_calidad/politica');});
});
/*
Route::group(['prefix' => '/'], function() {
    Route::get('index', function () {return view('welcome');});
});
*/
Route::group(['prefix' => 'sistema-gestion-antisoborno'], function() {
    //Route::get('/', function () {return view('sistema_antisoborno/objetivo');});
    Route::get('/objetivo', function () {return view('sistema_antisoborno/objetivo');});
    Route::get('/politica', function () {return view('sistema_antisoborno/politica');});
});

Route::group(['prefix' => 'manuales'], function() {
    Route::get('/manuales', function () {return view('manuales/manuales');});
});

Route::group(['prefix' => 'instrumentos-gestion'], function() {
    Route::get('/index', function () {return view('instrumentos_gestion/index');});
    Route::get('/rof', function () {return view('instrumentos_gestion/rof');});
    Route::get('/mpp', function () {return view('instrumentos_gestion/mpp');});
    Route::get('/pap', function () {return view('instrumentos_gestion/pap');});
    Route::get('/organigrama', function () {return view('instrumentos_gestion/organigrama');});
    Route::get('/rit', function () {return view('instrumentos_gestion/rit');});
    Route::get('/mof', function () {return view('instrumentos_gestion/mof');});
    Route::get('/cap', function () {return view('instrumentos_gestion/cap');});
    Route::get('/mapro', function () {return view('instrumentos_gestion/mapro');});
    Route::get('/mcc', function () {return view('instrumentos_gestion/mcc');});
    Route::get('/id', function () {return view('instrumentos_gestion/id');});
});

Route::group(['prefix' => 'planes-politicas'], function() {
    Route::get('/index', function () {return view('planes_politicas/index');});
    Route::get('/pege', function () {return view('planes_politicas/pege');});
    Route::get('/peti', function () {return view('planes_politicas/peti');});
    Route::get('/poinf', function () {return view('planes_politicas/poinf');});
    Route::get('/pei', function () {return view('planes_politicas/pei');});
    Route::get('/poi', function () {return view('planes_politicas/poi');});
});


