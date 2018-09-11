<?php

require_once '../logica/Valoracion.clase.php';
require_once '../util/funciones/Funciones.clase.php';
require_once 'token.validar.php';

if ( ! isset($_POST["token"])){
    Funciones::imprimeJSON(500, "Debe especificar un token", "");
    exit();
}

//Recibir el token
$token = $_POST["token"];

