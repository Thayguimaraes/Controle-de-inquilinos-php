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
      background-image: linear-gradient(#708090, #4F4F4F);
      height: 100vh;
    }

    h1 {
      color: #1C1C1C;
      margin-top: 350px;
      margin-left: 650px;
    }

    .table-bg {
      background: rgb(0, 0, 0, 0.5);
      color: #fff;
      border-radius: 15px;
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
        while ($user_data = mysqli_fetch_assoc($result_tabela)) {
          echo "<tr>";
          echo "<td>" . $user_data['idinquilinos'] . "<?td>";
          echo "<td>" . $user_data['nomeInquilino'] . "<?td>";
          echo "<td>" . $user_data['cpfInquilino'] . "<?td>";
          echo "<td>" . $user_data['telefoneInquilino'] . "<?td>";
          echo "<td>" . $user_data['dataNascimentoInquilino'] . "<?td>";
          echo "<td>" . $user_data['id_imovel'] . "<?td>";
          echo "<td>

                 <a class='btn btn-sm btn-primary' href='editarInquilinos.php?cpfInquilino=$user_data[cpfInquilino]'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                 <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                  </svg>
                  </a>

                  <a class='btn btn-sm btn-danger' href='deletarInquilinos.php?cpfInquilino=$user_data[cpfInquilino]'>
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


</body>

</html>