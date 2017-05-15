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
  <form action="modifyR.php" method="post">
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
      <h3>Reportes</h3>
    </div>
  <div class="panel-body"> 

<?php

   $CodigoE=$_GET["CodigoE"];
   $nombreE=$_GET["NombreE"];
   $CodigoD=$_GET["CodigoD"];
   $NombreJ=$_GET["NombreJ"];
   $HoraEntrada = $_GET["HoraEntrada"];
   $HoraSalida = $_GET["HoraSalida"];
 //  $FechaMarca =$_GET["echaMarca"];
 //  $Motivo=$_GET["Motivo"];

       echo "<b>Nombre de empleado: </b>$nombreE<br>\n";
       echo "<input type=hidden name=nombreE value=$nombreE>\n";
       echo "<b>Codigo de Empleado: </b>$CodigoE<br>\n";
       echo "<b>Codigo de Departamento: </b>$CodigoD<br>\n";
       echo "<input type=hidden name=CodigoD value=$CodigoD>\n";
       echo "<b>Nombre de Jornada: </b>$NombreJ<br>\n";
       echo "<input type=hidden name=NombreJ value=$NombreJ>\n\n"; 
       echo "<b>Hora de Entrada: </b>$HoraEntrada<br>\n";
       echo "<input type=hidden name=HoraEntrada value=$HoraEntrada>\n\n";
       echo "<b>Hora de Salida: </b>$HoraSalida<br>\n";
       echo "<input type=hidden name=HoraSalida value=$HoraSalida>\n\n";
?>

<?php

$link = mysqli_connect('localhost', 'root', '', 'final') or die('Could not connect: ' . mysqli_error($link));

$query = "select E.codigoE, E.nombreE, E.codigoD, E.nombreJ, E.HoraEntrada, E.horaSalida, M.fechaMarca, P.Motivo from empleado E, Marcas M, permiso P where E.CodigoE=M.CodigoE and E.CodigoE=P.CodigoE";
$result = mysqli_query($link, $query) or die('Query failed: ' . mysql_error($link));

$CodigoD=0;
$NombreD="";

echo "<table class=\"table\">\n";
echo "\t<tr>\n";
echo "\t\t<th><b>Fecha</b></th>\n";
echo "\t\t<th>Nombre de empleado</th>\n";
echo "\t\t<th>Codigo de departamento</th>\n";
echo "\t\t<th>Nombre de jornada</th>\n";
echo '<th></th>';
echo '<th></th>';
echo "\t</tr>\n";

while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {

   $fechaMarca=$line["fechaMarca"];
   $CodigoE=$line["codigoE"];
   $NombreE=$line["nombreE"];
   $CodigoD=$line["codigoD"];
   $NombreJ=$line["nombreJ"];
   //$Motivo=$line["Motivo"];

   echo "\t<tr>\n";
   echo "\t\t<td>$fechaMarca</td>\n";   
   echo "\t\t<td>$NombreE</td>\n";
   echo "\t\t<td>$CodigoD</td>\n";
   echo "\t\t<td>$CodigoE</td>\n";
   echo "\t\t<td>$NombreJ</td>\n";
   //echo "\t\t<td>$Motivo</td>\n";   
   echo "\t</tr>\n";
}
echo "</table>\n";

mysqli_close($link);

?>



     </form>
     <center>
         <a href="mantenimiento.php">regresar</a>
     </center>  
     </div>
     </div>
</body>
</html>