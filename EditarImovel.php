<?php

if (!empty($_GET['cep'])) {
  include_once("conexao.php");

  $cep = $_GET['cep'];

  $consultasql = "SELECT * FROM imovel WHERE cep =$cep";

  $result = $link->query($consultasql);

  if ($result->num_rows > 0) {
    while ($user_data = mysqli_fetch_assoc($result)) {
      $nomeLocador = $user_data['nome'];
      $valorAluguel = $user_data['Aluguel'];
      $rua = $user_data['rua'];
      $numero = $user_data['numero'];
      $bairro = $user_data['bairro'];
      $estado = $user_data['estado'];
      $cep = $user_data['cep'];
    }
  } else {
    header('Location: index.php');
  }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Locador</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <style>
    body {
      background-image: linear-gradient(#00BFFF, #4F4F4F);
      height: 100vh;

    }
  </style>

</head>

<body>
  <nav class="navbar fixed-top navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Inquilinos Ja Cadastrados</a>
    <a class="navbar-brand" href="adicionarImovel.php">Cadastrar imovel</a>
    <a class="navbar-brand" href="adicionarInquilinos.php">Cadastrar Inquilino</a>
  </nav>
  <br>
  <br>
  <br>
  <br>
  <br>

  <div class="container">
    <div class="card">
      <div class="card-header">
        <div class="card-header">
          <h3>Dados do imovel</h3>
        </div>
        <form method="post" action="updateImovel.php">
          <div class="form-row">
            <div class="col-md-8 mb-3">
              <label for="validationCustom01">Nome completo do proprietario</label>
              <input type="text" class="form-control" id="nomeLocador" name="nomeLocador" placeholder="Digite o Nome completo" value="<?php echo $nomeLocador ?>" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom01">Valor do Alugel</label>
              <input type="text" class="form-control" id="valorAluguel" name="valorAluguel" placeholder="Digite o valor do aluguel" value="<?php echo $valorAluguel ?>" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-4 mb-3">
              <label for="validationCustom03">Rua</label>
              <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite o nome da rua" value="<?php echo $rua ?>" required>
              <div class="invalid-feedback">
                Gentileza preencher este campo
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="validationCustom03">Nº</label>
              <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite o nome da casa" value="<?php echo $numero ?>" required>
              <div class="invalid-feedback">
                Gentileza preencher este campo
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="validationCustom04">Bairro</label>
              <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o Bairro" value="<?php echo $bairro ?>" required>
              <div class="invalid-feedback">
                Gentileza preencher este campo
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="validationCustom05">Estado</label>
              <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite o Estado" value="<?php echo $estado ?>" required>
              <div class="invalid-feedback">
                Gentileza preencher este campo
              </div>
            </div>
            <div class="col-md-2 mb-3">
              <label for="validationCustom05">CEP</label>
              <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o CEP" value="<?php echo $cep ?>" required>
              <div class="invalid-feedback">
                Forneça um CEP válido.
              </div>
            </div>
          </div>
      </div>
      <br>
      <br>
      <button class="button" id="button">
        <input type="submit" name="submit" id="submit" placeholder="Enviar">
      </button>



      </form>
    </div>
  </div>

  </div>


</body>

</html>