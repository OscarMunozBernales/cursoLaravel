<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    // return 'Hola mundo!';
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
    
});

Route::get( 'contacto', [ 'as' => 'contactos', function(){
    return 'Sección de contactos';
}]);

Route::get( 'saludos/{nombre?}', function( $nombre = 'invitado' ){
    return "Hola $nombre";
})->where('nombre', '[a-zA-ZñÑ]+');
