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
    <h2> Permisos </h2>

    <form action="addP.php" method="POST">
    <div class="form-inline">
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Fecha de permiso </label>
      <INPUT id="FechaP"  type="date" name="FechaP"><br><br>
      <label class="col-sm-2 control-label" for="formGroupInputSmall">Codigo de empleado</label>
      <INPUT onkeypress="return isNumberKey(event)" type="text" name="CodigoE"><br><br>
        <label class="col-sm-2 control-label" for="formGroupInputSmall">Motivo de falta</label>
        <textarea rows="4" cols="50" name="Motivo">
        </textarea>
        <div>
        <button type="submit" class="btn bt-right btn-primary btn-lg" value="crearC"> Crear permiso</button>
        </div>
      </div>
      </form>
  <br>
  </hr>
  </body>
  </html>>