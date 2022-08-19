<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('titulo')</title>
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
     @yield('conteudo')

  </body>
</html>
