<?php


include_once("conexao.php");

$name = $_POST['nomeCompletoInquilino'];
$cpf = $_POST['cpfInquilino'];
$telefone = $_POST['telefoneInquilino'];
$dataNascimento = $_POST['dataNascimentoInquilino'];
$imovelAlugado = $_POST['imovelAlugado'];


$result = mysqli_query($link, "INSERT INTO inquilino(name, cpf, telefone, dataNascimento, id, imovel) VALUES ('$name','$cpf','$telefone','$dataNascimento', NOW(), '$imovelAlugado')"); 

?>

