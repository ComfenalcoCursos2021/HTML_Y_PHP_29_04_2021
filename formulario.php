<?php
    echo <<<NOMBRE
    Tu nombre es: $_REQUEST[nombre] <br>
NOMBRE;
    echo <<<EDAD
    Tu edad es: $_REQUEST[edad] <br>
EDAD;
    echo <<<GENERO
    Tu genero es: $_REQUEST[genero] <br>
GENERO;
    echo <<<EMAIL
    Tu correo electronico es: $_REQUEST[email] <br>
EMAIL;
    echo <<<EMAIL
    Tu estatura es: $_REQUEST[altura] <br><br>
EMAIL;
    echo <<<COMENTARIO
    $_REQUEST[comentario] <br>
COMENTARIO;

?>