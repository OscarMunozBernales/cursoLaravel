# Como mostrar HTML con las vistas

Para mostrar una vista html dentro del archivo de las rutas, vamos a returnar una funcion llamada <pre>view( 'nommbre_vista' )</pre>
el nombre de la vista no tiene que ir con extensión y siempre hace referencia a la ubicación <pre> resources/views </pre> dentro de la carpeta
view vamos a tener todas nuestras vistas

Ejemplos:
Dentro del archivo de rutas:
```php
Route::get('/', [ 'as' => 'home', function(){
    return view( 'home' ); // ACÁ RETORNAMOS LA VISTA HOME.PHP
    
}]);

Route::get( 'contacto', [ 'as' => 'contactos', function(){
    return view( 'contactos' ); // ACÁ RETORNAMOS LA VISTA CONTACTOS.PHP
}]);

Route::get( 'saludos/{nombre?}', [ 'as' => 'saludos', function( $nombre = 'invitado' ){
    // EXISTEN 3 FORMAS DISTINTAS PARA ENVIAR PARAMETROS A LAS VISTAS
    return view( 'saludos', [ 'nombre' => $nombre ]);
    return view( 'saludos' )->with(['nombre' => $nombre]);
    return view( 'saludos', compact('nombre') );
    // ACÁ RETORNAMOS LA VISTA SALUDOS.PHP

}])->where('nombre', '[a-zA-ZñÑ]+');
```
A continuación vamos a mostrar el arcivo de las vistas

home.php
```html
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>
    </head>
    <body>

        <h1>HOME</h1>
        <header>
            <nav>
                <a href="<?php echo route( 'home' )?>">HOME</a> // DENTRO DE ESTE NAV LLAMAMOS A LAS RUTAS POR SU NOMBRE Y NO POR SU URL
                <a href="<?php echo route( 'saludos', 'Oscar' )?>">SALUDOS</a> // ADEMAS A LA VISTA SALUDOS LE ENVIAMOS UN PARAMETRO POR GET
                <a href="<?php echo route( 'contactos' )?>">CONTACTO</a>
            </nav>
        </header>

    </body>
</html>
```

saludos.php
```html
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h1> Saludos <?php echo $nombre ?> </h1>
    </body>
</html>
```

contactos.php
```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactos</title>
</head>
<body>
    <h1> Contactos </h1>
</body>
</html>
```