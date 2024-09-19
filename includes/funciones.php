<?php

require 'app.php';

function incluir_template ( $nombre, $inicio = false ){
    include TEMPLAETES_URL . "/{$nombre}.php";
}
?>