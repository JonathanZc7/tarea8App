<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!DOCTYPE html>
<html>
<head>
  <title>Inicio</title>
  <style>
    body {
      background-color: cadetblue;
    }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><?php echo session('usuario'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </nav>
  <div class="text-center">
    <h1>Bienvenido al Menu Inicio</h1>
  </div>


<div class="text-center">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><?php echo session('usuario'); ?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
       
  
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('/usuarios/agregar') ?>">Usuario</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('/usuarios/editar/1') ?>">Editar </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('/usuarios/eliminar/1') ?>">Eliminar </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('/salir') ?>">Salir</a>
        </li>
      </ul>
    </div>
  </nav>
</div>


    <div class="container">
  <div class="row justify-content-center">
    <div class="card col-md-6 offset-md-3" style="background-color:cadetblue; border-color:darkblue;">
      <img class="card-img-top" src="holder.js/100x180/" alt="">
      <div class="card-body text-white">
        <div class="text-center">
          <h4 class="card-title"><Center>FORMULARIO DE INGRESO</Center></h4>
          <p class="card-text">Insertar los Datos Requeridos</p>
        </div>
      </div>
    </div>
  </div>
</div>

  
  </div>
  
  <div class="container">
  <div class="row justify-content-center">
    <form method="post" action="<?= site_url('/guardar') ?>" enctype="multipart/form-data" class="col-md-6 offset-md-3">
      <div class="form-group">
        
  <div class="text-center">
        <label for="Id">Id</label>
        <input id="Id" class="form-control" type="int" name="Id">

        <label for="Cedula">Cedula</label>
        <input id="Cedula" class="form-control" type="int" name="Cedula">

        <label for="Nombres">Nombres</label>
        <input id="Nombres" class="form-control" type="texto" name="Nombres">

        <label for="Correo">Correo Electronico</label>
        <input id="Correo" class="form-control" type="int" name="Correo">
        <label for="Password">Password</label>
        <input id="Password" class="form-control" type="password" name="Password">
      </div>
      </div>

      <div class="text-center">
      <input name="" id="" class="btn btn-primary" type="submit" value="GUARDAR">
      </div>
    </form>
  </div>
</div>



  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>