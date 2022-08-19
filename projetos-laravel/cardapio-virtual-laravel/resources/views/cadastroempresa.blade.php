<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>

    <body class="vh-100 bg-light">
      <div class="d-flex h-100 align-items-center">
        <div class="border border-black container-sm bg-secondary w-50 p-4 d-flex opacity-30 flex-column">
            <div class="d-flex justify-content-center text-white p-2">
              <h2>Cadastro<h2>
            </div>
      <form class="row g-3">
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">CNPJ</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Razão Social</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Nome Fantasia</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Telefone</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
          <div class="col-12">
            <label for="inputAddress" class="form-label">Gerente Responsável</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="inputEmail4" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="inputEmail4">
          </div>
          <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Senha</label>
            <input type="password" class="form-control" id="inputPassword4">
          </div>
          <div class="col-12">
            <label for="inputAddress2" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="">
          </div>
          <div class="col-md-6">
            <label for="inputCity" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="inputCity">
          </div>
          <div class="col-md-4">
            <label for="inputState" class="form-label">Estado</label>
            <select id="inputState" class="form-select">
              <option selected>Estado</option>
              <option>SP</option>
              <option>PR</option>
              <option>RJ</option>
              <option>TO</option>
            </select>
          </div>
          <div class="col-md-2">
            <label for="inputZip" class="form-label">CEP</label>
            <input type="text" class="form-control" id="inputZip">
          </div>
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="gridCheck"></input>
              <label class="form-check-label" for="gridCheck">
                Lembre-me
              </label>
            </div>
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary">Entrar</button>
            </div>
          </div>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
