<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
route::get('hola-mundo', function(){
	return view('hola-mundo');
});

route::get('contacto/{nombre?}/{edad?}', function($nombre = "Alejandro Paineñanco",$edad = null){
	/*

	//puede ser de esta forma
	return view('contacto', array(
			"nombre"=>$nombre,
			"edad"=>$edad
	));
	*/
	//tambien puede ser mas orientado a objeto
	return view('contacto.contacto')
		->with('nombre',$nombre)
		->with('edad',$edad)
		->with('frutas',array('melocoton','naranja','pera','piña','platano' ));

})->where([
	'nombre' => '[A-Za-z]+',
	'edad'=>'[0-9]+'
]);

route::group(['prefix' => 'fruteria'], function(){

	route::get('/frutas', 'FrutasController@getIndex');
	route::get('/naranjas/{admin?}', ['middleware' => 'EsAdmin',
											'uses' =>'FrutasController@getNaranjas'
							   		 ]);
	route::get('/peras', 'FrutasController@getPeras');

});
route::post('/recibir/form', 'FrutasController@recibirFormulario');

Route::controller('notas', 'notescontroller');
//Route::get('notas/note', 'notescontroller@getNote');



Route::auth();

Route::get('/home', 'HomeController@index');
