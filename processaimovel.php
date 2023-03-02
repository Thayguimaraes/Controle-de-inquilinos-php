<?php


include_once("conexao.php");

$nomeLocador = $_POST['nomeLocador'];
$valorAluguel = $_POST['valorAluguel'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];


$result = mysqli_query($link, "INSERT INTO imoveis(nomeLocador, valorAluguel, rua, numero, bairro, estado, cep, id_imovel, id_inquilino) VALUES ('$nomeLocador','$valorAluguel','$rua','$numero', '$bairro', '$estado', '$numero',NOW(), NOW())");







?>
