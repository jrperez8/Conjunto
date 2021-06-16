<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.82.0">
    <title>Conjunto Residencial</title>
    <link rel="stylesheet" href="<?php echo base_URL();?>/assets/css/estilos.css">
    <link rel="stylesheet" href="<?php echo base_URL();?>/assets/css/fontello.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">


    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/heroes/">   

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="heroes.css" rel="stylesheet">
  </head>
  <body>
    <section>
        <div class="container col-xxl-8 px-4 py-5">
         <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
        <img src="<?php echo base_URL();?>/assets/images/img1.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">Sistema de Administración de Recaudo</h1>
        <p class="lead">Administre de forma ágil y segura su copropiedad</p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-warning btn-lg px-4 me-md-2" data-bs-toggle="modal" data-bs-target="#exampleModal2" >Registro Administrador</button>
            <button type="button" class="btn btn-outline-warning text-dark btn-lg px-4" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Ingreso Administrador</button>
        </div>
        </div>
    </div>
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
        <div class="modal-header bg-warning">
            <h5 class="modal-title text center amiri" id="exampleModalLabel">INICIO DE SESIÓN</h5> 
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>       
        </div>
        <div class="modal-body">
        
        <form method="POST" action="<?php echo base_url();?>/signin">
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="username">
                    <div id="emailHelp" class="form-text">No tiene una Cuenta? <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">Cree una</a></div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">                     
                    </div>                 
                    <div class="mb-3">
                        <button type="submit" value="" class="btn btn-warning" id="btn_ingreso">INICIAR SESIÓN</button> 
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCELAR</button>                   
                    </div>                 
        </form>
        </div>     
        </div>
    </div>
    </div> 
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header bg-warning">
        <h5 class="modal-title" id="exampleModalLabel">INGRESE SUS DATOS DE USUARIO</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <form class="row g-3 needs-validation" action="<?php echo base_url(). '/add'?>" method="POST" name="form1" onsubmit="return registerValidation()" enctype="multipart/form-data" novalidate>
       <div class="col-md-12">
         <label for="validationCustom01" class="form-label">Nombre Completo</label>
         <input type="text" class="form-control" id="name" name="name" required>
      </div>
      <div class="col-md-12">
         <label for="validationCustom01" class="form-label">Nombre de Usuario</label>
         <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="col-md-12">
        <label for="validationCustomUsername" class="form-label">Email</label>
        <div class="input-group has-validation">
          <span class="input-group-text" id="inputGroupPrepend">@</span>
          <input type="text" class="form-control" id="email" name="email" aria-describedby="inputGroupPrepend" required>     
        </div>
      </div>
  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">Password</label>
    <div class="input-group has-validation">
     <input type="password" class="form-control" id="password1" name="password" required>      
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustomUsername" class="form-label">Confirme su Password</label>
    <div class="input-group has-validation">
     <input type="password" class="form-control" id="password2" required>      
    </div>
  </div>
  <div class="col-md-6">
    <label for="validationCustom03" class="form-label">Ciudad</label>
    <input type="text" class="form-control" id="city" name="city" required>    
  </div>       
     
        <div class="col-12">
            <button type="submit" value="REGISTRARSE" class="btn btn-warning" id="btn_registro">Registrarse</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
         </div>
      </form>
      </div>      
    </div>
  </div>
</div>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>