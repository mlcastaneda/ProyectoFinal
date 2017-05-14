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

$link = mysqli_connect('localhost', 'root', '', 'final') or die('Could not connect: ' . mysqlí_error());

$query = "select * from Jornada order by CodigoJ";
$result = mysqli_query( $link, $query) or die('Query failed: ' . mysqli_error());
$CodigoJ=0;
$NombreJ="";
$HoraEntrada="";
$HoraSalida="";


echo "<table class=\"table\">\n";
echo "\t<tr>\n";
echo "\t\t<th><b>Codigo de Jornada</b></th>\n";
echo "\t\t<th>Nombre de Jornada</th>\n";
echo "\t\t<th>Hora de Entrada</th>\n";
echo "\t\t<th>Hora de Salida</th>\n";
echo '<th></th>';
echo "\t</tr>\n";

while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {

   $CodigoJ=$line["codigoJ"];
   $NombreJ=$line["nombreJ"];
   $HoraEntrada=$line["horaEntrada"];
   $HoraSalida=$line["horaSalida"];

   echo "\t<tr>\n";
   echo "\t\t<td>$CodigoJ</td>\n";
   echo "\t\t<td>$NombreJ</td>\n";
   echo "\t\t<td>$HoraEntrada</td>\n";
   echo "\t\t<td>$HoraSalida</td>\n";  
   echo "\t\t<td><a href=eliminarJ.php?CodigoJ=$CodigoJ>Eliminar</a></td>\n";
   echo "\t\t<td><a href=modificarJ.php?CodigoJ=$CodigoJ&NombreJ=$NombreJ&HoraEntrada=$HoraEntrada&HoraSalida=$HoraSalida>Modificar</a></td>\n";
   echo "\t</tr>";
}



mysqli_close($link);


?>

</div>
</div>
</div>

<?php

$link = mysqli_connect('localhost', 'root', '', 'final') or die('Could not connect: ' . mysqli_error($link));

$query = "select * from departamento order by CodigoD";
$result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error($link));

$CodigoD=0;
$NombreD="";

echo "<table class=\"table\">\n";
echo "\t<tr>\n";
echo "\t\t<th><b>Codigo de departamento</b></th>\n";
echo "\t\t<th>Nombre de departamento</th>\n";
echo '<th></th>';
echo '<th></th>';
echo "\t</tr>\n";

while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {

   $CodigoD=$line["codigoD"];
   $NombreD=$line["nombreD"];

   echo "\t<tr>\n";
   echo "\t\t<td>$CodigoD</td>\n";
   echo "\t\t<td>$NombreD</td>\n";
   echo "\t\t<td><a href=eliminarD.php?CodigoD=$CodigoD>Eliminar</a></td>\n";
   echo "\t\t<td><a href=modificarD.php?CodigoD=$CodigoD&NombreD=$NombreD>Modificar</a></td>\n";
   echo "\t</tr>\n";
}
echo "</table>\n";

mysqli_close($link);

?>
</div>
</div>

  </body>
  </html>