<?php


include_once("conexao.php");

$name = $_POST['nomeCompletoInquilino'];
$cpf = $_POST['cpfInquilino'];
$telefone = $_POST['telefoneInquilino'];
$dataNascimento = $_POST['dataNascimentoInquilino'];


$result = mysqli_query($link, "INSERT INTO inquilino(name, cpf, telefone, dataNascimento, id) VALUES ('$name','$cpf','$telefone','$dataNascimento', NOW())");







?>