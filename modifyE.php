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
      </div>

      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="nav navbar-nav">
        </ul>
      </div>
    </div>
  </nav><br>

<?php
$CodigoE = $_POST['CodigoE'];
$NombreE = $_POST['NombreE'];

$link = mysqli_connect('localhost', 'root', '', 'final') or die('Could not connect: ' . mysqli_error($link));

$query = "UPDATE empleado SET NombreE='$NombreE' WHERE CodigoE=$CodigoE";
$result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));
echo "El registro ha sido modificado exitosamente<br>";

mysqli_close($link);

?>
     <center>
         <a href="mantenimiento.php">regresar</a>
     </center>

  </body>
</html>
