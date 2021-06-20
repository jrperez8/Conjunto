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
        <li><a href="#" class="nav-link px-2 text-white">Apartamentos</a></li>
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
<section>
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="<?php echo base_URL();?>/assets/images/img1.jpg" alt="" width="72" height="57">
      <h2>Formulario de Registro de Inmuebles</h2>
      <p class="lead">Por favor diligencie la información completa de su inmueble. Esta sirve para realizar una gestión adecuada de cada propiedad.</p>
    </div>
    <div class="row">
      <div class="col-sm-8">
      <form class="row g-3 needs-validation" action="<?php echo base_url(). '/apto'?>" method="POST" name="form1" onsubmit="return registerValidation()" enctype="multipart/form-data" novalidate>
       <div class="col-md-12">
         <label for="validationCustom01" class="form-label">Conjunto Residencial</label>
         <input type="text" class="form-control" id="conjunto" name="conjunto" required>
      </div>
      <div class="col-md-4">
         <label for="validationCustom01" class="form-label">Pais</label>
         <input type="text" class="form-control" id="country" name="country" required>
      </div>
      <div class="col-md-4">
         <label for="validationCustom01" class="form-label">Departamento</label>
         <input type="text" class="form-control" id="state" name="state" required>
      </div>
      <div class="col-md-4">
         <label for="validationCustom01" class="form-label">Ciudad</label>
         <input type="text" class="form-control" id="city" name="city" required>
      </div>
      <div class="col-md-12">
         <label for="validationCustom01" class="form-label">Dirección</label>
         <input type="text" class="form-control" id="address" name="address" required>
      </div>
      <div class="col-md-4">
         <label for="validationCustom01" class="form-label">Número de Apartamento</label>
         <input type="text" class="form-control" id="apto" name="apto" required>
      </div> 
      <div class="col-md-8">
         <label for="validationCustom01" class="form-label">Propietario</label>
         <input type="text" class="form-control" id="owner" name="owner" required>
      </div>       
      <div class="col-md-12">
        <label for="validationCustomUsername" class="form-label">Email</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="text" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend" required>     
        </div>
      </div>
  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">Teléfono Propietario</label>
    <div class="input-group has-validation">
     <input type="text" class="form-control" id="phone" name="phone" required>      
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">Número de Ocupantes</label>
    <div class="input-group has-validation">
     <input type="text" class="form-control" id="hab" required>      
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Valor Cuota Administración</label>
    <input type="text" class="form-control" id="cuota" name="cuota" placeholder="$" required>    
  </div>
      
      <div>
         <label for="">SELECCIONA QUIEN OCUPA ACTUALMENTE LA VIVIENDA</label>
            <input class="form-check-input" type="radio" name="estado" value="propietario">PROPIETARIO</input>           
            <input class="form-check-input" type="radio" name="estado" value="arriendo">ARRIENDO</input>             
       </div>  
       <div class="col-md-8">
         <label for="validationCustom01" class="form-label">Nombre Arrendatario</label>
         <input type="text" class="form-control" id="ocupante" name="ocupante" required>
      </div>
      <div class="col-md-8">
         <label for="validationCustom01" class="form-label">Número de Ocupantes (Arriendo)</label>
         <input type="text" class="form-control" id="habitantes" name="habitantes" required>
      </div>
        <div class="col-12">
            <button type="submit" value="REGISTRARSE" class="btn btn-warning" id="btn_registro">Registrarse</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
         </div>
      </form>
      </div>
    </div>
  
  </main>
</div>
</section>
<footer class="main-footer mt-2">
    <div class="container">
            <div class="row">
                <div class="col-md-4">
                  <h2 class="column__title amiri text-warning">Sistema de Administración de Recaudo</h2>
                    <p class="column__txt">Administre de forma ágil y segura su copropiedad</p>
                </div>
                <div class="col-md-4">
                    <h2 class="column__title amiri text-warning">Contáctanos</h2>
                     <p class="column__txt icon-location">Medellín - Colombia</p>
                     <p class="column__txt icon-phone">444-4444</p>
                     <p class="column__txt"> <a href="" class="icon-mail-alt">sistemarecaudo@gmail.com</a></p>
                </div>
                <div class="col-md-4">
                     <h2 class="column__title amiri text-warning">Siguenos en nuestras redes</h2>
                      <p class="column__txt"><a href="" class="icon-facebook-squared">Facebook</a></p>
                     <p class="column__txt"><a href="" class="icon-twitter">Twitter</a></p>
                     <p class="column__txt"><a href="" class="icon-youtube-play">Youtube</a></p>
                </div>
            </div>           
        </div>
        <p class="copy text-warning">Sistema de Administración de Recaudo® | Todos los Derechos Reservados</p>
    </footer>

  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-warning text-white">
        <h5 class="modal-title" id="exampleModalLabel">Cerrar Sesión</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p>Deseas Cerrar tu Sesión?</p>
      </div>
      <div class="modal-footer">
        <form method="POST" action="<?php echo base_url();?>/signout">
         <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
         <button type="submit" class="btn btn-warning" onclick="location.href='<?php echo base_URL();?>'">Confirmar</button>
        </form>        
      </div>
    </div>
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>
