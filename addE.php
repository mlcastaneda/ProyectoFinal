</!DOCTYPE html>
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
</head>
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

<?php
$codigoE = $_POST["CodigoE"];
$nombreE = $_POST["NombreE"];
$codigoD = $_POST["CodigoD"];
$nombreJ = $_POST["NombreJ"];


$link = mysqli_connect('localhost', 'root', '', 'final') or die('Could not connect: ' . mysqli_error($link));

$query = "INSERT INTO Empleado VALUES ($codigoE, '$nombreE', $codigoD, '$nombreJ')";

echo $query;
$result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));
echo '         El registro fue insertado exitosamente<br>';

mysqli_close($link);

?>


    <div class="container">
     <center>
         <a href="index.html">Regresar</a>
     </center>
    </div>
  </body>
</html>
