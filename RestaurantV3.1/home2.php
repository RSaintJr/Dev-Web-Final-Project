<?php

session_start();

if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
    // If the user is not logged in, redirect them to the login page
    header("Location: index.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> 
    <link rel="stylesheet" href="CSS/style.css"/>
    <title>Illuminatte</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">Illuminatte</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=novo">Cadastro de Reserva</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=listar">Lista de Reservas</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
    <div class="row">
        <div class="col mt-5">
        <?php
            include ("Config.php"); 
            switch(@$_REQUEST["page"]){
            case "novo":
                include ("Cadastro.php");
            break;
            case "listar":
                include ("Lista.php");
            break;
            case "salvar":
                include ("Store.php");
            break;
            case "save":
              include ("Store.php");
              include ("Store2.php");
            break;
            case "editar":
              include ("Edit.php");
            break;
            default:
                print "<h1> Bem vindo ao Illuminatte</h1>";
                print "<br>";
                print "<br>";
                print "<div>
                  <li>
                    <a href='https://www.ifc-riodosul.edu.br/site/'> Instituto Federal Catarinense - Câmpus Rio do Sul</a>
                  </li>
                  <br>
                  <li>
                    BCC 2° Fase
                  </li>
                  <br>
                  <li>
                    <a>Esse é um projeto CRUD com uso de banco de dados SQL</a>
                  </li>
                  <br>
                  <li>
                    <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et imperdiet nunc. Proin vehicula commodo placerat. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean molestie ut libero at venenatis. Vivamus id imperdiet urna. Nullam non mauris vulputate risus bibendum interdum. Phasellus at risus eu massa rhoncus luctus. Ut tempus, sem vel bibendum imperdiet, neque velit efficitur odio, quis ultricies tortor orci non lectus.</a>
                  </li>
                  </div>";
        }
    ?>
        </div>
    </div>
</div>
</body>
</html>