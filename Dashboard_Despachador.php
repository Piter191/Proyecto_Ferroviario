<?php
session_start();

if(isset($_SESSION['user']))
{
    include('funciones/setup.php');


    if(isset($_GET['idusu']))
    {
        $sqlusu="select * from usuario where id_usuario=".$_GET['idusu'];
        $resultusu=mysqli_query(conectar(),$sqlusu);
        $datosusu=mysqli_fetch_array($resultusu);
    }
?>
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
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
  <link rel="icon" href="img/favicon_geotren.ico" type="image/x-icon" />

  <title>GEOTREN - Despachador</title>
</head>
<body>


  <div class="d-flex">
    <div id="sidebar-container" class="bg-primary">
      <div class="logo">
      <center>
        <h4 class="text-light font-weight-bold" >GEOTREN - Despachador</h4>
        <img src="img/Logo_GEOTREN.png" width="150px" height="100px">
        <center>
      </div>

      
      <br>
      <div class="menu">
      <center>
      <button id="nada" type="button" class="btn-warning"><i class="icon ion-md-star mr-2 lead"></i>Inicio</button> </br> <br>
      <button id="trabajoId" type="button" class="btn-warning"><i class="icon ion-md-clipboard mr-2 lead"></i>Ordenes de Trabajo</button> <br> <br>
      <button id="mapaId" type="button" class="btn-warning"><i class="icon ion-md-locate mr-2 lead"></i>Mapa</button> <br> <br>
        <a href="index.php"><button   type="button" class="btn-warning" >  <i class="icon ion-md-exit mr-2 lead"> </i> Cerrar Sesi??n  </button> </a>
        </center>
      </div>
    </div>
    <div class="w-100">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
    
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
           
          </div>
        </div>
      </nav>
      <div class="container-fluid">
        <div id='inicio'>
        </div>
      <div class="container-fluid">
        <div id='table'>
        </div>
      </div>
      <div class="container-fluid">
        <div id='mapa'>
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
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src='./js/dashboard_admin_usuario.js'></script>
  <script src='./js/dashboard_admin_trabajador.js'></script>
  <script src='./js/dashboard_despachador_trabajo.js'></script>
  <script src='./js/inicio_despachador.js'></script>
  <script src='./js/mapa.js'></script>
  <script src='./js/tableToExcel.js'></script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
</body>

</html>
<?php
}else{
    header('Location:acesso_denegado.php');
}
?>