<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proyecto # 1</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>  

<body>
  <form action="modifyE.php" method="post">
  <nav id="myNavbar" class="navbar navbar-default navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarCollapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Main Menu</a>
      </div>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav">
        </ul>
      </div>
    </div>
  </nav>
  <h1 class="text-center">Modificar</h1><hr>

  <div class="panel panel-default col-sm-7">
    <div class="panel-heading">
      <h3>Jornadas</h3>
    </div>
  <div class="panel-body"> 

<?php

     $CodigoE=$_GET["CodigoE"];
     $NombreE=$_GET["NombreE"];
     $CodigoD=$_GET["CodigoD"];
     $NombreJ=$_GET["NombreJ"];

       echo "<b>Codigo de Empleado: </b>$CodigoE<br>\n";
       echo "<input type=hidden name=CodigoE value=$CodigoE>\n";
       echo "<b>Nombre de Empleado:</b>\n";
       echo "<input type=text name=NombreE value=$NombreE ><br>\n";
       echo "<b>Codigo de Departamento: </b>$CodigoD<br>\n";
       echo "<input type=hidden name=CodigoD value=$CodigoD>\n";
       echo "<b>Nombre de Jornada: </b>$NombreJ<br>\n";
       echo "<input type=hidden name=NombreJ value=$NombreJ>\n";       
?>

       <input type="submit" name="submit" value="enviar">
     </form>
     <center>
         <a href="mantenimiento.php">regresar</a>
     </center>  
     </div>
     </div>
</body>
</html>