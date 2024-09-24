<?php


function conectar_db () : mysqli {
    $db = mysqli_connect('localhost', 'root', '', 'bienesraices_crud');

    if(!$db) {
        echo "Error al conectar";
        exit;
    }

    return $db;
}
?>