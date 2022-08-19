<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-dark opacity-30">
       <div class="container-fluid">
         <a class="navbar-brand text-light" href="Navbar.html"><h4>Página inicial do gerente</h4></a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <ul class="navbar-nav me-auto mb-2 mb-lg-0">
             <li class="nav-item">
               <a class="nav-link active text-light opacity-30" aria-current="page" href="Produtos.html">Produtos</a>
             </li>
             <li class="nav-item">
               <a class="nav-link text-light opacity-30" href="VerPedidos.html">Ver Pedidos</a>
             </li>
             <li class="nav-item">
               <a class="nav-link text-light opacity-30" href="Funcionários.html">Funcionários</a>
             </li>
             <li class="nav-item">
               <a class="nav-link text-light opacity-30" href="DadosEmpresa.html">Dados da Empresa</a>
             </li>
           </ul>
           <form class="d-flex" role="search">
             <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
             <button class="btn btn-outline-success" type="submit">Pesquisar</button>
           </form>
         </div>
       </div>
     </nav>
     <div class="row p-4">
         <h2 class="d-flex justify-content-center">Cardápio Principal</h2>
     </div>

     <div class="d-flex justify-content-center">
         <button type="button"class="btn btn-primary text-white">+</button>
       </div>

     <div class="d-flex justify-content-center m-4 p-1" >
       <table class="table w-70 bg-secondary opacity-30">
        <thead>
          <tr>
            <th scope="col">Produto</th>
            <th scope="col ">
              <div class="d-flex justify-content-center">Descrição</div>
            </th>
            <th scope="col">
              <div class="d-flex justify-content-center">Preço</div>
            </th>
            <th scope="col">
              <div class="d-flex justify-content-center">Disponibilade</div>
            </th>
            <th scope="col">
              <div class="d-flex justify-content-center">Remover</div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">Batata frita com bacon</th>
            <td>
              <div class="d-flex justify-content-center">
                <p>Porção de batata frita com bacon (200g)</p>
              </div>
            </td>
            <td>
              <div class="d-flex justify-content-center">
                <p>R$12,00</p>
              </div>
            </td>
            <td>
              <div class="d-flex justify-content-center">
                  <p>Disponível</p>
                </div>
            </td>
            <td>
              <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-danger">Excluir</button>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">Espetinho de Carne</th>
            <td>
              <div class="d-flex justify-content-center">
                <p>Espetinho de carne bovina (100g</p>
              </div>
            </td>
            <td>
              <div class="d-flex justify-content-center">
                <p>R$10,00</p>
              </div>
            <td>
              <div class="d-flex justify-content-center">
                <p>Disponível</p>
              </div>
            </td>
            <td>
              <div class="d-flex justify-content-center p-2">
                <button type="button" class="btn btn-danger">Excluir</button>
              </div>
            </td>
          </tr>
          <tr>
            <th scope="row">Pizza de Bacon frango</th>
            <td>
              <div class="d-flex justify-content-center">
                <p>Pizza de bacon com  frango e mussarela com tomate 8 pedaços</p>
              </div>
            </td>
            <td>
              <div class="d-flex justify-content-center">
                <p>R$36,00</p>
              </div>
            </td>
            <td>
              <div class="d-flex justify-content-center">
                <p>Disponível</p>
              </div>
            </td>
            <td>
              <div class="d-flex justify-content-center p-2">
                <button type="button" class="btn btn-danger">Excluir</button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
