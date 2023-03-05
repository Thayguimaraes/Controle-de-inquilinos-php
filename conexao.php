
<?php

$servidor = '127.0.0.1';
$usuario = 'root';
$senha = 'root';
$dbname = 'sistemadeimoveis';



$link = new mysqli($servidor, $usuario, $senha, $dbname);

if($link->connect_errno)
{
echo "erro ao conectar ao banco de dados!";
}else{
    "Conexão efetuada com sucesso";
} 

?>