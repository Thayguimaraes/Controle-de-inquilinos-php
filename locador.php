
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Locador</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>


</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-header">
                    <h3>Adicionar um imovel</h3>
                </div>
    <form method="post" action="processa.php">
        <div class="form-row">
            <div class="col-md-8 mb-3">
              <label for="validationCustom01">Nome completo do proprietario</label>
              <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o Nome completo" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom01">Valor do Alugel</label>
              <input type="text" class="form-control" id="valorAluguel" name="valorAluguel" placeholder="Digite o valor do aluguel" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                  <label for="validationCustom03">Rua</label>
                  <input type="text" class="form-control" id="rua" name="rua" placeholder="Digite o nome da rua" required>
                  <div class="invalid-feedback">
                    Gentileza preencher este campo
                  </div>
                </div>
                <div class="col-md-2 mb-3">
                  <label for="validationCustom03">Nº</label>
                  <input type="text" class="form-control" id="numero" name="numero" placeholder="Digite o nome da casa" required>
                  <div class="invalid-feedback">
                    Gentileza preencher este campo
                  </div>
                </div>
                <div class="col-md-2 mb-3">
                  <label for="validationCustom04">Bairro</label>
                  <input type="text" class="form-control" id="bairro" name="bairro" placeholder="Digite o Bairro" required>
                  <div class="invalid-feedback">
                    Gentileza preencher este campo
                  </div>
                </div>
                <div class="col-md-2 mb-3">
                  <label for="validationCustom05">Estado</label>
                  <input type="text" class="form-control" id="estado" name="estado" placeholder="Digite o Estado" required>
                  <div class="invalid-feedback">
                    Gentileza preencher este campo
                  </div>
                </div>
                <div class="col-md-2 mb-3">
                  <label for="validationCustom05">CEP</label>
                  <input type="text" class="form-control" id="cep" name="cep" placeholder="Digite o CEP" required>
                  <div class="invalid-feedback">
                    Forneça um CEP válido.
                  </div>
                </div>
              </div>
              <br>
              <button class="btn btn-success">Enviar</button>
    </form>
</div>
</div>

</div>


<br>
<br>
<br>

<div class="container">
        <div class="card">
            <div class="card-header">
                <div class="card-header">
                    <h3>Imoveis ja Cadastrados</h3>
                </div>
    <form method="" action="">
        <div class="form-row">
            <div class="col-md-8 mb-3">
              <label for="validationCustom01">Nome completo do proprietario</label>
              <input type="text" class="form-control" id="nome" name="nome">
            </div>
            <div class="col-md-4 mb-3">
              <label for="validationCustom01">Valor do Alugel</label>
              <input type="text" class="form-control" id="valorAluguel" name="valorAluguel">
            </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-4">
                  <label for="validationCustom03">Rua</label>
                  <input type="text" class="form-control" id="rua" name="rua">
                </div>
                <div class="col-md-2 mb-2">
                  <label for="validationCustom03">Nº</label>
                  <input type="text" class="form-control" id="numero" name="numero">
                </div>
                <div class="col-md-2 mb-2">
                  <label for="validationCustom04">Bairro</label>
                  <input type="text" class="form-control" id="bairro" name="bairro">
                </div>
                <div class="col-md-2 mb-2">
                  <label for="validationCustom05">Estado</label>
                  <input type="text" class="form-control" id="estado" name="estado">
                </div>
                <div class="col-md-2 mb-2">
                  <label for="validationCustom05">CEP</label>
                  <input type="text" class="form-control" id="cep" name="cep">
                </div>
              </div>

              <div class="row">
              <div class="col-md-10 mb-3">
                  <label for="validationCustom05">Inquilinos residentes</label>
                  <input type="text" class="form-control" id="residentes" name="residentes">
                </div>
              </div>
              <br>
              <button class="btn btn-success">Enviar</button>
    </form>
</div>
</div>

</div>



</body>

</html>


