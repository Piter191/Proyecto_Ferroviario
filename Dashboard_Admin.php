<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style_dashboard.css">


  <title>Dashboard Admin</title>
</head>
<body>


  <div class="d-flex">
    <div id="sidebar-container" class="bg-primary">
      <div class="logo">
      <center>
        <h4 class="text-light font-weight-bold" >Panel Administrador</h4>
        <img src="img/Logo_GEOTREN.png" width="150px" height="100px">
        <center>
      </div>

      
      <br>
      <div class="menu">
      <center>
      <button id="nada" type="button" class="btn btn-warning"><i class="icon ion-md-star mr-2 lead"></i>Inicio</button> </br> <br>
        <button id="userId" type="button" class="btn btn-warning"><i class="icon ion-md-person mr-2 lead"></i>Usuarios</button> </br> <br>
        <button id="trabajadorId" type="button" class="btn btn-warning"><i class="icon ion-md-build mr-2 lead"></i>Trabajadores</button> <br> <br>
        <button id="trenId" type="button" class="btn btn-warning"><i class="icon ion-md-train mr-2 lead"></i> Trenes</button> <br> <br>
        <button id="pendiente" type="button" class="btn btn-warning"><i class="icon ion-md-paper mr-2 lead"></i>Ordenes de Trabajo</button> <br> <br>
        <button id="mapaId" type="button" class="btn btn-warning"><i class="icon ion-md-locate mr-2 lead"></i>Mapa</button>
        </center>
      </div>
    </div>
    <div class="w-100">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <form class="d-flex position-relative">
            <input class="form-control me-2" type="Buscar" placeholder="Buscar" aria-label="Buscar">
            <button class="btn btn-search position-absolute" type="submit "><i class="icon ion-md-search"></i></button>
          </form>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
           
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <div id='table'>
        </div>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src='./dashboard_admin_usuario.js'></script>
  <script src='./dashboard_admin_trabajador.js'></script>
  <script src='./dashboard_admin_tren.js'></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>