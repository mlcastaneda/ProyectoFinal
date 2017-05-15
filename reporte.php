<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Proyecto Final</title>

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
    </nav>
    </div>
  <h1 class="text-center">Tablas</h1><hr>


  <div class="panel panel-default col-sm-7">
    <div class="panel-heading">
    </div>
  <div class="panel-body"> 

<?php

$link = mysqli_connect('localhost', 'root', '', 'final') or die('Could not connect: ' . mysqli_error($link));

$query = "select E.codigoE, E.nombreE, E.codigoD, E.nombreJ, E.horaEntrada, E.horaSalida, M.fechaMarca from empleado E, Marcas M where E.CodigoE=M.CodigoE";
$result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));

$CodigoD=0;
$NombreD="";

echo "<table class=\"table\">\n";
echo "\t<tr>\n";
echo "\t\t<th><b>Codigo de empleado</b></th>\n";
echo "\t\t<th>Nombre de empleado</th>\n";
echo "\t\t<th>Codigo de departamento</th>\n";
echo "\t\t<th>Nombre de jornada</th>\n";
echo '<th></th>';
echo '<th></th>';
echo "\t</tr>\n";

while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {

   $CodigoE=$line["codigoE"];
   $NombreE=$line["nombreE"];
   $CodigoD=$line["codigoD"];
   $NombreJ=$line["nombreJ"];
   $HoraEntrada = $line["horaEntrada"];
   $HoraSalida = $line["horaSalida"];
   $fechaMarca =$line["fechaMarca"];

   echo "\t<tr>\n";
   echo "\t\t<td>$CodigoE</td>\n";
   echo "\t\t<td>$NombreE</td>\n";
   echo "\t\t<td>$CodigoD</td>\n";
   echo "\t\t<td>$NombreJ</td>\n";

   echo "\t\t<td><a href=report.php?CodigoE=$CodigoE&fechaMarca=$fechaMarca&NombreE=$NombreE&CodigoD=$CodigoD&NombreJ=$NombreJ&HoraEntrada=$HoraEntrada&HoraSalida=$HoraSalida>Reporte de empleado</a></td>\n";
   echo "\t</tr>\n";
}
echo "</table>\n";

mysqli_close($link);

?>

  </body>
  </html>