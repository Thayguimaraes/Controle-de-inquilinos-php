<?php

if(isset($_POST['update']))
    {
   
include_once("conexao.php");

$name = $_POST['nomeCompletoInquilino'];
$cpf = $_POST['cpfInquilino'];
$telefone = $_POST['telefoneInquilino'];
$dataNascimento = $_POST['dataNascimentoInquilino'];
$imovelAlugado = $_POST['imovelAlugado'];

$sql =  "UPDATE inquilinos SET nomeInquilino ='$name',  cpfInquilino='$cpf ', telefoneInquilino='$telefone', dataNascimentoInquilino='$dataNascimento', id_imovel='$imovelAlugado' WHERE cpfInquilino='$cpf'"; 
  
$result = $link->query($sql);
 
    }
    header('Location: index.php');
 ?>