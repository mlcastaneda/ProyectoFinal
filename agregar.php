</!DOCTYPE html>
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
    </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-lg-12 text-center">
                <h1>Agregar</h1>
                <hr>
            </div>
        </div>
    </div>
    <div class="container">
    <h2> Jornada </h2>

    <form action="addJ.php" method="POST">
    <div class="form-inline">
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Codigo de Jornada</label>
      <INPUT onkeypress="return isNumberKey(event)" type="text" name="CodigoJ"><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Nombre de Jornada </label>
      <select class="form-horizontal" name="NombreJ" >
        <option value="Diurna">Diurna</option>
        <option value="Matutina">Matutina</option>
        <option value="Vespertina">Vespertina</option>
      </select><br><br>
        <label>Hora de entrada</label>
        <INPUT onkeypress="return isNumberKey(event)" type="time" name="HoraEntrada">
        <label>Hora de salida</label>
        <INPUT onkeypress="return isNumberKey(event)" type="time" name="HoraSalida"><br><br>
        <div>
        <button type="submit" class="btn bt-right btn-primary btn-lg" value="crearC"> Crear jornada</button>
        </div>
      </div>
      </form>
  <br>
  <hr>
    <div class="container">
    <h2> Ingresar Departamento </h2><br>

    <form action="addD.php" method="POST">
    <div class="form-inline">
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Codigo de Departamento</label>
      <INPUT onkeypress="return isNumberKey(event)" type="text" name="CodigoD"><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Nombre del Departamento</label>
      <INPUT type="text" name="NombreD"><br><br>
        <div>
        <button type="submit" class="btn bt-right btn-primary btn-lg" value="crearC"> Crear Departamento</button>
        </div>
    </div>
    </form>
    </div>
  <hr>
    <div class="container">
    <h2> Ingresar Empleados </h2><br>

    <form action="addE.php" method="POST">
    <div class="form-inline">
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Codigo de Empleado</label>
      <INPUT onkeypress="return isNumberKey(event)" type="text" name="CodigoE"><br><br> 
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Nombre de Empleados</label>
      <INPUT type="text" name="NombreE"><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Jornada </label>
      <select class="form-horizontal" name="NombreJ" >
        <option value="Diurna">Diurna</option>
        <option value="Matutina">Matutina</option>
        <option value="Vespertina">Vespertina</option>
      </select><br><br>
      <div>
      </div>
              <label class="col-sm-2 control-label" for="formGroupInputSmall">Departamento </label>  
<div>
    <?php

      $link = mysqli_connect('localhost', 'root', '', 'final') or die('Could not connect: ' . mysqli_error($link));


      $query = "select * from departamento order by codigoD";
      $result = mysqli_query($link, $query) or die('Query failed: ' . mysqli_error($link));

        $NombreD="";

        echo "<select name='CodigoD' class=\"form control\">\n";
        //$CodigoD=0;

        while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {

        $CodigoD=$line["codigoD"];
        $NombreD=$line["NombreD"];
        echo "<option value=\"$CodigoD\">$NombreD</option>";
        }

        echo "</select>\n";

      mysqli_close($link);

    ?>
</div>
        <div>
        <button type="submit" class="btn bt-right btn-primary btn-lg" value="crearC"> Crear Empleado</button>
        </div>
    </form>
   </div>
  <br>
  <hr>
</body>
</html>