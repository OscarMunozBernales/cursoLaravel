# RUTAS

El archivos de las rutas se encuentra en la carpeta
<pre> routes/web.php </pre>

Las rutas en laravel se definien de la siguiente forma
```php
Route::get('/', function(){
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>'; 
    // OCUPAMOS LA FUNCION ROUTE PARA LLAMAR A LA RUTA POR SU NOMBRE 'AS'
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
    echo '<a href="'. route('contactos') .'">Contactanos</a><br>';
});

Route::get( 'contacto', [ 'as' => 'contactos', function(){
    // RUTAS CON NOMBRE 'AS'
    return 'Sección de contactos';
}]);

Route::get( 'saludos/{nombre?}', function( $nombre = 'invitado' ){
    // SI QUEREMOS QUE EL PARAMETRO SEA OPCIONAL DEJAMOS EL SIGNO ? Y LE 
    // ASIGAMOS UN VALOR POR DEFECTO EN LA FUNCION
    return 'Hola ' . $nombre;
})->where('nombre', '[a-zA-ZñÑ]'); 
// PARA VALIDAR QUE NOMBRE SOLO CONTENGA CARACTERES Y NO NUMEROS COLOCAMOS
// LA EXPRESION REGULAR EN LA PROPIEDAD WHERE DE LA RUTA


```