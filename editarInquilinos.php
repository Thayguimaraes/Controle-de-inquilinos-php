<?php

if (!empty($_GET['cpfInquilino'])) {
    include_once("conexao.php");

    $cpf = $_GET['cpfInquilino'];

    $consultasql = "SELECT * FROM inquilinos WHERE cpfInquilino =$cpf";

    $result = $link->query($consultasql);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $name = $user_data['nomeInquilino'];
            $cpf = $user_data['cpfInquilino'];
            $telefone = $user_data['telefoneInquilino'];
            $dataNascimento = $user_data['dataNascimentoInquilino'];
            $imovelAlugado = $user_data['id_imovel'];
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
                <form method="post" action="updateInquilinos.php">
                    <div class="form-row">
                        <div class="col-md-8 mb-3">
                            <label for="validationCustom01">Nome completo</label>
                            <input type="text" class="form-control" id="nomeCompletoInquilino" name="nomeCompletoInquilino" value="<?php echo $name ?>" placeholder="Digite o Nome completo" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom04">CPF</label>
                            <input type="text" class="form-control" id="cpfInquilino" name="cpfInquilino" value="<?php echo $cpf ?>" placeholder="Digite o CPF" required>
                            <div class="invalid-feedback">
                                Gentileza preencher este campo
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom05">Telefone</label>
                            <input type="text" class="form-control" id="telefoneInquilino" name="telefoneInquilino" placeholder="Digite o Telefone" value="<?php echo $telefone ?>" required>
                            <div class="invalid-feedback">
                                Gentileza preencher este campo
                            </div>
                        </div>
                        <div class="col-md-4 mb-3">
                            <label for="validationCustom05">Data de nascimento</label>
                            <input type="date" class="form-control" id="dataNascimentoInquilino" name="dataNascimentoInquilino" placeholder="Digite sua data de nascimento" value="<?php echo $dataNascimento ?>" required>
                            <div class="invalid-feedback">
                                Gentileza preencher este campo
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <label for="">Imovel</label>
                            <select class="form-select" aria-label="Default select example imovelAlugado" id="imovelAlugado" value="<?php echo $imovelAlugado ?>" name="imovelAlugado">
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
                    <input type="submit" name="update" id="update">
                    <br>
                    <br>

                </form>

            </div>
        </div>
    </div>

</body>

</html>