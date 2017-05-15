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

<?php
  $CodigoE = $_GET['CodigoE'];

  $link = mysqli_connect('localhost', 'root', '', 'final') or die('Could not connect: ' . mysqli_error($link));

  $query = "SELECT CodigoE From empleado Where CodigoE = $CodigoE";
  $result = mysqli_query($link, $query) or die ('Query failed: ' . mysqli_error($link));
  $FLAG = true;

  while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
    echo "No se puede eliminar porque esta siendo utilizada.  ";
    $FLAG = false;
  }

  if($FLAG) {
    $query1 = "DELETE FROM Empleado WHERE CodigoE=$CodigoE";
    $result1 =mysqli_query($link, $query1) or die('Query failed: ' . mysqli_error($link));
    echo 'El resultado ha sido eliminado exitosamente';
  }
  mysqli_close($link);

?>
    <div class="container">
     <center>
         <a href="index.html">Regresar</a>
     </center>
    </div>
  </body>
</html>
