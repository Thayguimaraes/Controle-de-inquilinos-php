<?php

  if(isset($_POST['submit']))
  {
    include_once("conexao.php");

    $name = $_POST['nomeCompletoInquilino'];
    $cpf = $_POST['cpfInquilino'];
    $telefone = $_POST['telefoneInquilino'];
    $dataNascimento = $_POST['dataNascimentoInquilino'];
    $imovelAlugado = $_POST['imovelAlugado'];

    $result =  mysqli_query($link, "INSERT INTO inquilinos (nomeInquilino, cpfInquilino, telefoneInquilino, dataNascimentoInquilino, id_imovel) VALUES ('$name','$cpf','$telefone','$dataNascimento', '$imovelAlugado')"); 
    header('Location: index.php');
   
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquilino</title>
    <style>
      body{
        background-image:linear-gradient(#696969,#4F4F4F);
        height: 100vh;

      }
      
    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>


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
        <div class="card">
            <div class="card-header">
                <div class="card-header">
                    <h3>Dados do inquilino</h3>
                </div>
    <form method="post" action="inquilino.php">
        <div class="form-row">
            <div class="col-md-8 mb-3">
              <label for="validationCustom01">Nome completo</label>
              <input type="text" class="form-control" id="nomeCompletoInquilino" name="nomeCompletoInquilino" placeholder="Digite o Nome completo" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom04">CPF</label>
                  <input type="text" class="form-control" id="cpfInquilino" name="cpfInquilino" placeholder="Digite o CPF" required>
                  <div class="invalid-feedback">
                    Gentileza preencher este campo
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom05">Telefone</label>
                  <input type="text" class="form-control" id="telefoneInquilino" name="telefoneInquilino" placeholder="Digite o Telefone" required>
                  <div class="invalid-feedback">
                    Gentileza preencher este campo
                  </div>
                </div>
                <div class="col-md-4 mb-3">
                  <label for="validationCustom05">Data de nascimento</label>
                  <input type="date" class="form-control" id="dataNascimentoInquilino"  name="dataNascimentoInquilino" placeholder="Digite sua data de nascimento" required>
                  <div class="invalid-feedback">
                    Gentileza preencher este campo
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-5">
                  <label for="">Imovel</label>                 
                  <select class="form-select" aria-label="Default select example imovelAlugado" id="imovelAlugado" name="imovelAlugado" > 
                    <option>Selecione...</option>
                  <?php
                    include_once("conexao.php");
                    $query = "SELECT idimovel FROM imovel";
                    $imoveis = $link->query($query);
                    print_r($imoveis);
                ?>
                 <?php 
                     while($prod = mysqli_fetch_assoc($imoveis)) 
                 { ?> 
                 <option value="<?php echo $prod['idimovel'] ?>"><?php echo $prod['idimovel'] ?></option> 
                 <?php } ?>
                 </select>
                </div>
              </div>
              <br>
              <input type="submit" name="submit" id="submit">
              <br>
              <br>  
    
    </form>

</div>
</div>

</div>

<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<br>
<br>
<br>


<div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-header">
                    <h3>IMOVEIS DISPONIVEIS</h3>
                </div>
                <?php
                    include_once("conexao.php");

                    $sql = "SELECT * FROM imovel";

                    $result_tabela = $link->query($sql);

                ?>

              
<table class="table text white table-bg">
  <thead class="thead-light">
    <tr>
      <th scope="col">#id</th>
      <th scope="col">nome locador</th>
      <th scope="col">Aluguel</th>
      <th scope="col">rua</th>
      <th scope="col">numero</th>
      <th scope="col">bairro</th>
      <th scope="col">estado</th>
      <th scope="col">cep</th>
      <th scope="col">...</th>
    </tr>
  </thead>
  <tbody>
 <?php
            while($user_data = mysqli_fetch_assoc($result_tabela)){
                echo "<tr>";
                echo "<td>".$user_data['idimovel']."<?td>";
                echo "<td>".$user_data['nome']."<?td>";
                echo "<td>".$user_data['Aluguel']."<?td>";
                echo "<td>".$user_data['rua']."<?td>";
                echo "<td>".$user_data['numero']."<?td>";
                echo "<td>".$user_data['bairro']."<?td>";
                echo "<td>".$user_data['estado']."<?td>";
                echo "<td>".$user_data['cep']."<?td>";
                echo "<td>Ações<?td>";
                echo "</tr>";
            }
        ?> 
  </tbody>
</table>
</div>
        </div>

            </div>


</body>

</html>