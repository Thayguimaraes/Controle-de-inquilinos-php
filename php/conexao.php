<?php

$hostname = "localhost";
$bancodedados = "clientes";
$usuario = "root";
$senha = "";

$mysqli = new mysql($hostname, $bancodedados, $usuario, $senha);
if($mysqli -> connect_errno){
    echo "falha ao conectar: (" . $mysql->connect_errno . ")" . $mysqli->connect_error;
}