<?php
include_once("conexao.php");

$sql = "SELECT * FROM inquilinos";

$result_tabela = $link->query($sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Up imoveis</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
     <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

     <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Rajdhani:wght@600&family=Raleway:ital,wght@1,100;1,200;1,300&family=Roboto:ital,wght@0,300;0,400;0,500;1,500&family=Ubuntu:wght@400;500;700&display=swap');

body {
  background-image:linear-gradient(#708090,#4F4F4F);
  height: 100vh;
}
h1 {
    color: #1C1C1C;
     margin-top: 350px;
     margin-left: 650px;
} 
.table-bg{
  background: rgb(0,0,0,0.5);
  color: #fff;
  border-radius: 15px;
}
</style>
</head>
<body>

<nav class="navbar fixed-top navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Inquilinos Ja Cadastrados</a>
    <a class="navbar-brand" href="locador.php">Cadastrar imovel</a>
    <a class="navbar-brand" href="inquilino.php">Cadastrar Inquilino</a>
</nav>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="container">

<table class="table text white table-bg">
  <thead class="thead-light">
    <tr>
      <th scope="col">#id</th>
      <th scope="col">nome</th>
      <th scope="col">cpf</th>
      <th scope="col">telefone</th>
      <th scope="col">dataNascimento</th>
      <th scope="col">imovel</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
 <?php
            while($user_data = mysqli_fetch_assoc($result_tabela)){
                echo "<tr>";
                echo "<td>".$user_data['idinquilinos']."<?td>";
                echo "<td>".$user_data['nomeInquilino']."<?td>";
                echo "<td>".$user_data['cpfInquilino']."<?td>";
                echo "<td>".$user_data['telefoneInquilino']."<?td>";
                echo "<td>".$user_data['dataNascimentoInquilino']."<?td>";
                echo "<td>".$user_data['id_imovel']."<?td>";
                echo "<td>Ações<?td>";
                echo "</tr>";
            }
        ?> 
  </tbody>
</table>


</div>



</body>
</html>