<?php
include_once("conexao.php");

$sql = "SELECT * FROM inquilino ORDER BY id DESC";

$result_1 = $link->query($sql);

print_r($result_1);

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
    background-color: #DCDCDC;
}
h1 {
    color: #1C1C1C;
     margin-top: 350px;
     margin-left: 650px;
} 
</style>
</head>
<body>

<nav class="navbar fixed-top navbar-light bg-light">
    <a class="navbar-brand" href="#">Imoveis disponiveis</a>
    <a class="navbar-brand" href="locador.php">Cadastrar imovel</a>
    <a class="navbar-brand" href="inquilino.php">Cadastrar Inquilino</a>
</nav>


<div class="container">
<table class="table text white ">
  <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>

<table class="table text white">
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
            while($user_data = mysqli_fetch_assoc($result_1)){
                echo "<tr>";
                echo "<td>".$user_data['id']."<?td>";
                echo "<td>".$user_data['name']."<?td>";
                echo "<td>".$user_data['cpf']."<?td>";
                echo "<td>".$user_data['telefone']."<?td>";
                echo "<td>".$user_data['dataNascimento']."<?td>";
                echo "<td>".$user_data['imovel']."<?td>";
                echo "<td>Ações<?td>";
                echo "</tr>";
            }
        ?> 
  </tbody>
</table>


</div>



<script src="../aluguel-imoveis-php/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.6.3.min.js"></script>
</body>
</html>