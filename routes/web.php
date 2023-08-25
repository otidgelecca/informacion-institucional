<?php
/*
Route::group(['prefix' => 'sistema-control-interno'], function() {
    Route::get('cp', 'HomeController@cp');
    Route::get('diagnostico', 'HomeController@diagnostico');
    Route::post('plan', 'HomeController@plan');
});
*/

Route::get('/', function () {
	return view('normativas');
	//return redirect('https://www.igp.gob.pe/institucional/normativas');
});
Route::get('/index', function () {
	return view('normativas');
	//return redirect('https://www.igp.gob.pe/institucional/normativas');
});

/*Route::group(['prefix' => '/'], function() {
    Route::get('index', function () {return view('welcome');});
});*/

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
    Route::get('cp', function () {return view('sci/timeline');});
    Route::get('diagnostico', function () {return view('sci/diagnostico');});
    Route::get('plan-accion-remediacion', function () {return view('sci/plan-accion-remediacion');});
    Route::get('actas', function () {return view('sci/actas');});
    Route::get('timeline', function () {return view('sci/timeline');});
    Route::get('priorizacion', function () {return view('sci/priorizacion');});
    Route::get('evaluacion-riesgos', function () {return view('sci/evaluacion-riesgos');});
    Route::get('plan-accion-control', function () {return view('sci/plan-accion-control');});
    Route::get('sep', function () {return view('sci/sep');});
    Route::get('eas', function () {return view('sci/eas');});
    Route::get('comite-actas', function () {return view('sci/comite-actas');});
    Route::get('reporte-funcionarios', function () {return view('sci/reporte-funcionarios');});
});

Route::group(['prefix' => 'integridad-y-lucha-contra-la-corrupcion'], function() {
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

Route::group(['prefix' => 'sistema-gestion-seguridad'], function() {
    //Route::get('/', function () {return view('sistema_gestion_calidad/objetivo');});
    Route::get('/objetivo', function () {return view('sistema_gestion_seguridad/objetivo');});
    Route::get('/politica', function () {return view('sistema_gestion_seguridad/politica');});
});

Route::group(['prefix' => 'sistema-gestion-antisoborno'], function() {


    //Route::get('/', function () {return view('sistema_antisoborno/objetivo');});
    Route::get('/objetivo', function () {return view('sistema_antisoborno/objetivo');});
    Route::get('/politica', function () {
		$url = "https://www.gob.pe/institucion/igp/informes-publicaciones/3202358-sistema-de-gestion-antisoborno";
		return Redirect::to($url);

	});
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
    Route::get('/mapa', function () {return view('instrumentos_gestion/mapa');});
});

Route::group(['prefix' => 'planes-politicas'], function() {
    Route::get('/', function () {return view('planes_politicas/index');});
    Route::get('/index', function () {return view('planes_politicas/index');});
    Route::get('/pege', function () {return view('planes_politicas/pege');});
    Route::get('/peti', function () {return view('planes_politicas/peti');});
    Route::get('/poinf', function () {return view('planes_politicas/poinf');});
    Route::get('/pgd', function () {return view('planes_politicas/pgd');});
    Route::get('/pei-poi', function () {return view('planes_politicas/pei-poi');});
    Route::get('/pei', function () {return view('planes_politicas/pei');});
    Route::get('/poi', function () {return view('planes_politicas/poi');});
    Route::get('/poievaluacion', function () {return view('planes_politicas/poievaluacion');});
    Route::get('/peievaluacion', function () {return view('planes_politicas/peievaluacion');});
});

Route::group(['prefix' => 'csst'], function() {
    Route::get('/index', function () {return view('csst/index');});
    Route::get('/acta', function () {return view('csst/acta');});

});

Route::group(['prefix' => 'seguridad_salud_trabajo'], function() {
    Route::get('/index', function () {return view('csst/index');});
    Route::get('/formatos', function () {return view('csst/formatos');});

});

Route::group(['prefix' => 'lineamientos-organizacion-estado'], function() {
    Route::get('/loe', function () {return view('loe/loe');});

});
