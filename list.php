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
  <h1 class="text-center">Listar</h1><hr>


  <!--Tablita Partidas-->

  <div class="panel panel-default col-sm-7">
    <div class="panel-heading">
      <h3>Partidas</h3>
    </div>
  <div class="panel-body"> 

<?php

$link = mysqli_connect('localhost', 'root', '', 'contabilidad') or die('Could not connect: ' . mysqli_error($link));

$query = "select * from Partidas P, DetallePartida DP where P.NumPartida = DP.NumPartida order by DP.NumPartida";
$result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));

$NumPartida=0;
$Fecha="";
$Descripcion="";

echo "<table class=\"table\">\n";
echo "\t<tr>\n";
echo "\t\t<th><b>Numero de Partida</b></th>\n";
echo "\t\t<th>Numero de Cuenta</th>\n";
echo "\t\t<th>Fecha</th>\n";
echo "\t\t<th>Descripcion</th>\n";
echo "\t\t<th>Debe/Haber</th>\n";
echo "\t\t<th>Valor</th>\n";
echo '<th></th>';
echo '<th></th>';
echo "\t</tr>\n";

while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {

   $NumeroP=$line["NumPartida"];
   $NumeroC=$line["NumCuenta"];
   $Fecha=$line["Fecha"];
   $Descripcion=$line["Descripcion"];
   $DebeHaber =$line["DebeHaber"];
   $Valor = $line["Valor"];

   echo "\t<tr>\n";
   echo "\t\t<td>$NumeroP</td>\n";
   echo "\t\t<td>$NumeroC</td>\n";
   echo "\t\t<td>$Fecha</td>\n";
   echo "\t\t<td>$Descripcion</td>\n";
   echo "\t\t<td>$DebeHaber</td>\n";
   echo "\t\t<td>$Valor</td>\n";

   echo "\t\t<td><a href=deleteP.php?NumeroP=$NumeroP>eliminar</a></td>\n";
   echo "\t\t<td><a href=modificar.php?NumeroC=$NumeroC&NumeroP=$NumeroP&Fecha=$Fecha&Descripcion=$Descripcion&DebeHaber=$DebeHaber&Valor=$Valor>modificar</a></td>\n";
   echo "\t</tr>\n";
}
echo "</table>\n";

mysqli_close($link);

?>  
</div>
</div>

  <div class="panel panel-default col-sm-7">
    <div class="panel-heading">
      <h3>Cuentas</h3>
    </div>
  <div class="panel-body"> 

<?php

$link = mysqli_connect('localhost', 'root', '', 'contabilidad') or die('Could not connect: ' . mysqli_error($link));

$query = "select * from Cuentas order by NumCuenta";
$result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error($link));

$NumCuenta=0;
$NombreCuenta="";
$Tipo="";

echo "<table class=\"table\">\n";
echo "\t<tr>\n";
echo "\t\t<th><b>Numero de Cuenta</b></th>\n";
echo "\t\t<th>Nombre de Cuenta</th>\n";
echo "\t\t<th>Opcion</th>\n";
echo '<th></th>';
echo '<th></th>';
echo "\t</tr>\n";

while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {

   $NumeroC=$line["NumCuenta"];
   $NombreC=$line["NombreCuenta"];
   $Opcion=$line["Tipo"];

   echo "\t<tr>\n";
   echo "\t\t<td>$NumeroC</td>\n";
   echo "\t\t<td>$NombreC</td>\n";
   echo "\t\t<td>$Opcion</td>\n";
   echo "\t\t<td><a href=delete.php?NumeroC=$NumeroC>eliminar</a></td>\n";
   echo "\t\t<td><a href=modify.php?NumeroC=$NumeroC&NombreC=$NombreC&Tipo=$Opcion>modificar</a></td>\n";
   echo "\t</tr>\n";
}
echo "</table>\n";

mysqli_close($link);

?>
</div>
</div>


  </body>
  </html>