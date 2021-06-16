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

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Your cart</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Product name</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$12</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Second product</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Third item</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Promo code</h6>
              <small>EXAMPLECODE</small>
            </div>
            <span class="text-success">−$5</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (USD)</span>
            <strong>$20</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <button type="submit" class="btn btn-secondary">Redeem</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Información Inmueble</h4>
        <form class="needs-validation" novalidate>
          <div class="row g-3">
          <div class="col-12">
              <label for="username" class="form-label">Conjunto Residencial</label>
              <div class="input-group has-validation">
                <span class="input-group-text">Cr</span>
                <input type="text" class="form-control" id="username" placeholder="" required>
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <label for="country" class="form-label">Pais</label>
              <select class="form-select" id="country" required>
                <option value="">Elegir...</option>
                <option>Colombia</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Departamento</label>
              <select class="form-select" id="state" required>
                <option value="">Elegir...</option>
                <option>Antioquia</option>                
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Ciudad</label>
              <select class="form-select" id="state" required>
                <option value="">Elegir...</option>
                <option>Medellin</option>
                <option>Bello</option>
                <option>Envigado</option>                
                <option>Itagui</option>
                <option>Sabaneta</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid town.
              </div>
            </div>
            <div class="col-12">
              <label for="address" class="form-label">Dirección</label>
              <input type="text" class="form-control" id="address" placeholder="" required>
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>
            <div class="col-sm-3">
              <label for="firstName" class="form-label">Número de Inmueble</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-9">
              <label for="lastName" class="form-label">Nombre Propietario</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>           

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Propietario)</span></label>
              <input type="email" class="form-control" id="email" placeholder="">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>           

            <div class="col-12">
              <label for="address2" class="form-label">Teléfono <span class="text-muted">(Propietario)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="">
            </div>
            
            <div class="col-sm-3">
              <label for="firstName" class="form-label">Cantidad de Habitantes</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-9">
              <label for="lastName" class="form-label">Valor Cuota Mensual</label>
              <input type="text" class="form-control" id="lastName" placeholder="$" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>   
          </div>           

          <hr class="my-4">

          <h4 class="mb-3">Información sobre ocupación del Inmueble</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="paypal">Propietario</label>
            </div>
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
              <label class="form-check-label" for="credit">Arrendado</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
              <label class="form-check-label" for="debit">Embargado</label>
            </div>            
          </div>
          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nombre Ocupante <span class="text-muted">(En caso de estar Arrendado)</span></label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>              
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Cantidad de Habitantes</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
              Cantidad de Habitantes es requerido
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Guarda Información</button>
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
