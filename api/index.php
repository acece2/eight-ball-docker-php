<?php

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);

if ($httpMethod == "POST" && $uri == "/eight-ball-docker-php/api/index.php")
{
    $message = getResponse();
    echo $message;
} else {
    echo "404 URL NOT FOUND";
}

function getResponse()
{
    $number = rand( 1 , 21 );
    switch ($number) {
        case 1:
            $message = 'En mi opinión, sí';
            return $message;
        case 2:
            $message = 'Es cierto';
            return $message;
        case 3:
            $message = ' Es decididamente así';
            return $message;
        case 4:
            $message = 'Probablemente';
            return $message;
        case 5:
            $message = ' Buen pronóstico';
            return $message;
        case 6:
            $message = 'Todo apunta a que sí';
            return $message;
        case 7:
            $message = 'Sin duda';
            return $message;
        case 8:
            $message = 'Sí';
            return $message;
        case 9:
            $message = 'Sí - definitivamente';
            return $message;
        case 10:
            $message = 'Debes confiar en ello';
            return $message;
        case 11:
            $message = 'Respuesta vaga, vuelve a intentarlo';
            return $message;
        case 12:
            $message = 'Pregunta en otro momento';
            return $message;
        case 13:
            $message = 'Será mejor que no te lo diga ahora';
            return $message;
        case 14:
            $message = 'No puedo predecirlo ahora';
            return $message;
        case 15:
            $message = 'Concéntrate y vuelve a preguntar';
            return $message;
        case 16:
            $message = 'Puede ser';
            return $message;
        case 17:
            $message = 'No cuentes con ello';
            return $message;
        case 18:
            $message = ' Mi respuesta es no';
            return $message;
        case 19:
            $message = 'Mis fuentes me dicen que no';
            return $message;
        case 20:
            $message = 'Las perspectivas no son buenas';
            return $message;
        case 21:
            $message = 'Muy dudoso';
            return $message;
    }
}


