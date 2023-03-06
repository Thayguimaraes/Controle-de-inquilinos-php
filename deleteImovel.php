<?php

if (!empty($_GET['cep'])) {
    include_once("conexao.php");

    $cep = $_GET['cep'];

    $consultasql = "SELECT * FROM imovel WHERE cep =$cep";

    $result = $link->query($consultasql);

    if ($result->num_rows > 0) {
     
     $deletesql = "DELETE FROM imovel WHERE cep=$cep";
     $resultDelete = $link->query($deletesql);
       
    } 
    
}
header('Location: index.php');
?>