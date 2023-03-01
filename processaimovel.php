<?php


include_once("conexao.php");

$nome = $_POST['nome'];
$cpf = $_POST['valorAluguel'];
$telefone = $_POST['rua'];
$dataNascimento = $_POST['dataNascimentoInquilino'];


$result = mysqli_query($link, "INSERT INTO inquilino(nome, cpf, telefone, dataNascimento, id) VALUES ('$nome','$cpf','$telefone','$dataNascimento', NOW())");







?>