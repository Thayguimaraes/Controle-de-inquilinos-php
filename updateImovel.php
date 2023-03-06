<?php

if(isset($_POST['update']))
    {
 
include_once("conexao.php");

$nomeLocador = $_POST['nomeLocador'];
$valorAluguel = $_POST['valorAluguel'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

$sql =  "UPDATE imovel SET nome ='$nomeLocador',  Aluguel='$valorAluguel ', rua='$rua', numero='$numero', bairro='$bairro',estado= '$estado', cep, '$cep' WHERE cep='$cpf'"; 

$result = $link->query($sql);
    }

    header('Location: index.php');

    ?>
