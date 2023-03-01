<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inquilino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>


</head>
<body>
  <br>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-header">
                    <h3>Dados do inquilino</h3>
                </div>
    <form method="post" action="processa.php">
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
                  <input type="text" class="form-control" id="dataNascimentoInquilino"  name="dataNascimentoInquilino" placeholder="Digite sua data de nascimento" required>
                  <div class="invalid-feedback">
                    Gentileza preencher este campo
                  </div>
                </div>
              </div>
              <br>
              <button type="submit" class="btn btn-success">Enviar</button>
    </form>

</div>
</div>

</div>


</body>

</html>