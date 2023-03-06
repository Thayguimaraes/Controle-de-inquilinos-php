<?php

function successAlert($bold, $message){
  echo '<div class="container"><div class="alert alert-success fade in"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>'.$bold.'</strong> '.$message.'</div></div>';
}

if (isset($_POST['submit'])) {
  include_once("conexao.php");

  $name = $_POST['nomeCompletoInquilino'];
  $cpf = $_POST['cpfInquilino'];
  $telefone = $_POST['telefoneInquilino'];
  $dataNascimento = $_POST['dataNascimentoInquilino'];
  $imovelAlugado = $_POST['imovelAlugado'];

  $verifica_inquilino = "SELECT cpfInquilino FROM inquilinos WHERE cpfInquilino = '$cpf'";

  $result = mysqli_query($link, $verifica_inquilino);
  $row = mysqli_num_rows($result);

  $alerta = "Inquilino Cadastrado com sucesso";

  if ($row == 0) {
    $result =  mysqli_query($link, "INSERT INTO inquilinos (nomeInquilino, cpfInquilino, telefoneInquilino, dataNascimentoInquilino, id_imovel) VALUES ('$name','$cpf','$telefone','$dataNascimento', '$imovelAlugado')");
    header('Location: index.php');
   
    
    
 
   
  } else {
    header('Location: adicionarInquilinos.php');
  }
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
    body {
      background-image: linear-gradient(#696969, #4F4F4F);
      height: 100vh;

    }
  </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.js"></script>


</head>

<script type="text/javascript">
      function alerta(){
        var mensagem = confirm("Inquilino cadastrado com sucesso!");
      }
</script>

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
  <br>
  <div class="container">
    <div class="card">
      <div class="card-header">
        <div class="card-header">
          <h3>Dados do inquilino</h3>
        </div>
        <form method="post" action="adicionarInquilinos.php">
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
              <input type="date" class="form-control" id="dataNascimentoInquilino" name="dataNascimentoInquilino" placeholder="Digite sua data de nascimento" required>
              <div class="invalid-feedback">
                Gentileza preencher este campo
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-5">
              <label for="">Imovel</label>
              <select class="form-select" aria-label="Default select example imovelAlugado" id="imovelAlugado" name="imovelAlugado">
                <option>Selecione...</option>
                <?php
                include_once("conexao.php");
                $query = "SELECT idimovel FROM imovel";
                $imoveis = $link->query($query);
                print_r($imoveis);
                ?>
                <?php
                while ($prod = mysqli_fetch_assoc($imoveis)) { ?>
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
            while ($user_data = mysqli_fetch_assoc($result_tabela)) {
              echo "<tr>";
              echo "<td>" . $user_data['idimovel'] . "<?td>";
              echo "<td>" . $user_data['nome'] . "<?td>";
              echo "<td>" . $user_data['Aluguel'] . "<?td>";
              echo "<td>" . $user_data['rua'] . "<?td>";
              echo "<td>" . $user_data['numero'] . "<?td>";
              echo "<td>" . $user_data['bairro'] . "<?td>";
              echo "<td>" . $user_data['estado'] . "<?td>";
              echo "<td>" . $user_data['cep'] . "<?td>";
              echo "<td>
                
                <a class='btn btn-sm btn-primary' href='editarImovel.php?cep=$user_data[cep]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                 </svg>
                 </a>

                 <a class='btn btn-sm btn-danger' href='deleteImovel.php?cep=$user_data[cep]'>
                 <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash3-fill' viewBox='0 0 16 16'>
                   <path d='M11 1.5v1h3.5a.5.5 0 0 1 0 1h-.538l-.853 10.66A2 2 0 0 1 11.115 16h-6.23a2 2 0 0 1-1.994-1.84L2.038 3.5H1.5a.5.5 0 0 1 0-1H5v-1A1.5 1.5 0 0 1 6.5 0h3A1.5 1.5 0 0 1 11 1.5Zm-5 0v1h4v-1a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5ZM4.5 5.029l.5 8.5a.5.5 0 1 0 .998-.06l-.5-8.5a.5.5 0 1 0-.998.06Zm6.53-.528a.5.5 0 0 0-.528.47l-.5 8.5a.5.5 0 0 0 .998.058l.5-8.5a.5.5 0 0 0-.47-.528ZM8 4.5a.5.5 0 0 0-.5.5v8.5a.5.5 0 0 0 1 0V5a.5.5 0 0 0-.5-.5Z'/>
                 </svg>
                 </a>
                 <?td>";
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