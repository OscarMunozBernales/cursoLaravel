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
                <a href="<?php echo route( 'home' )?>">HOME</a>
                <a href="<?php echo route( 'saludos', 'Oscar' )?>">SALUDOS</a>
                <a href="<?php echo route( 'contactos' )?>">CONTACTO</a>
            </nav>
        </header>

    </body>
</html>