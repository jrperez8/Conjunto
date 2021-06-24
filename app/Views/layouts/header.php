<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conjunto Residencial</title>
    <link  rel="icon"   href="<?php echo base_URL();?>/assets/images/ima8.jpg" type="image/png"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_URL();?>/assets/css/estilos.css">
    <link rel="stylesheet" href="<?php echo base_URL();?>/assets/css/fontello.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">    
</head>
<body>
<header class="p-3 bg-dark text-white">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
      <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
        <img src="<?php echo base_URL();?>/assets/images/img1.jpg" class="bi me-2" width="40" height="32"></img>
      </a>

      <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
        <li><a href="location.href='aptos'" class="nav-link px-2 text-white">Apartamentos</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Contacto</a></li>        
      </ul>

      <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
      <?php 
               foreach ($datousuarios as $datousuario){
                echo "<h4 class='text-warning amiri'>Hola {$datousuario->name} </h4>";
        } ?>  
      </form>

      <div class="text-end">        
        <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Cerrar Sesión</button>
      </div>
    </div>
  </div>
</header>