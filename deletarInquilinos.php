<?php

if (!empty($_GET['cpfInquilino'])) {
    include_once("conexao.php");

    $cpf = $_GET['cpfInquilino'];

    $consultasql = "SELECT * FROM inquilinos WHERE cpfInquilino =$cpf";

    $result = $link->query($consultasql);

    if ($result->num_rows > 0) {
     
     $deletesql = "DELETE FROM inquilinos WHERE cpfInquilino=$cpf";
     $resultDelete = $link->query($deletesql);
       
    } 
    
}
header('Location: index.php');
?>