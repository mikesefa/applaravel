<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PortfolioController;

use App\Http\Controllers\MessageController;

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

/*   Route::get('/',function(){
    echo "<a href='".route('contactos')."'>contacto1</a><br>";
    echo "<a href='".route('contactos')."'>contacto2</a><br>";
    echo "<a href='".route('contactos')."'>contacto3</a><br>";
    echo "<a href='".route('contactos')."'>contacto4</a><br>";
    echo "<a href='".route('contactos')."'>contacto5</a><br>";
}); */

 /* Route::get('contactame', function (){
    return 'seccion de contactos';})->name('contactos');/ */
   /*  Route::get('/',function(){
        return view('home');
    })->name('home'); */

    Route::view('/','home')->name('home');

     Route::view('/contact','contact')->name('contact');

    Route::get('/Portfolio','PortfolioController@index')->name('portfolio');

    Route::view('/about','about')->name('about');

    Route::post('contact', 'MessageController@store')->name('contact');/* ruta para el formulario */






