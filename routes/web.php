<?php

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;

//enrutamiento ,closure
/* Route::get('/', function () {// '/' significa la raiz de nuestra vista home
    //return view('welcome');// retorna la vista welcome()
    //return "HOLA DESDE WEB.PHP";
}); */

//enviar parametro opcionales por ruta
/* Route::get('saludo/{nombre?}', function ($nombre = 'invitado'){
    return 'saludos '. $nombre;
});
 */

//RUTAS CON NOMBRES!!!

/* Route::get('contactame', function (){
    return 'seccion de contactos';})->name('contactos');/ */
/*  Route::get('/',function(){
        return view('home');
    })->name('home'); */

Route::view('/', 'home')->name('home');

Route::view('/contact', 'contact')->name('contact');


Route::resource('projects', 'ProjectController')
    ->parameters(['index' => 'project'])
    ->names('projects');

/* Route::get('/index','ProjectController@index')->name('projects.index');

    Route::get('/index/crear','ProjectController@create')->name('projects.create');

    Route::get('/index/{project}/editar','ProjectController@edit')->name('projects.edit');

   Route::patch('/index/{project}','ProjectController@update')->name('projects.update');//actualizar proyectos

    Route::post('/index','ProjectController@store')->name('projects.store');

    Route::get('/index/{project}','ProjectController@show')->name('projects.show');

    Route::delete('/index/{project}','ProjectController@destroy')->name('projects.destroy');

 */

Route::view('/about', 'about')->name('about');

Route::post('contact', 'MessageController@store')->name('contact');/* ruta para el formulario */

Auth::routes(/* ['register'=> false] */);
