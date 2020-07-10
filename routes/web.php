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

Route::get('/', [ 'as' => 'home', function(){
    return view( 'home' );
    
}]);

Route::get( 'contacto', [ 'as' => 'contactos', function(){
    return view( 'contactos' );
}]);

Route::get( 'saludos/{nombre?}', [ 'as' => 'saludos', function( $nombre = 'invitado' ){
    // return view( 'saludos', [ 'nombre' => $nombre ]);
    // return view( 'saludos' )->with(['nombre' => $nombre]);
    return view( 'saludos', compact('nombre') );

}])->where('nombre', '[a-zA-ZñÑ]+');
