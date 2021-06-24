<div class="container">
          <div class="row">
          <?php foreach ($datosaptos as $datoapto):?>            
            <div class="col-12 col-sm-12 col-md-6 col-lg-4 mt-3"> 
              <div class="card" style="width: 18rem;"> 
                <span><b>Apartamento</b> </span><h3 class="card-title text-center"><?php echo ($datoapto->num_apto)?></h3>
                <div class="card-body">
                   <span> <b>Pais:</b>  </span><p class="card-text"><?php echo ($datoapto->pais)?></p>
                   <span> <b>Municipio:</b>  </span><p class="card-text"><?php echo ($datoapto->ciudad)?></p>
                   <span> <b>Unidad Residencial:</b>  </span><p class="card-text"><?php echo ($datoapto->nombre_conjunto)?></p>
                   <span> <b>Propietario:</b>  </span><p class="card-text"><?php echo ($datoapto->propietario)?></p> 
                   <span> <b>Valor Cuota Mensual $</b> </span> <p class="card-text"><?php echo ($datoapto->valor_cuota)?></p>   
                   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editar<?php echo ($datoapto->num_apto)?>">
                    Registrar Pagos
                  </button>                             
                </div> 
              </div> 
              <div class="modal fade" id="editar<?php echo ($datoapto->num_apto)?>"   tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel"> <b>Sistema de Gestión de Pagos Año 2021</b>  <br> Apartamento: <?php echo ($datoapto->num_apto)?> </h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                  <table class="table">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Mes</th>
                          <th scope="col">Valor Pagado</th>
                          <th scope="col">Confirmar</th>            
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Enero</td>
                          <td><input class="form-control form-control-sm" type="text" placeholder="$" aria-label=".form-control-sm example" id="valorEnero" value="$120000" disabled></td>                              
                          <td><select class="form-select form-select-sm" aria-label=".form-select-sm example" id="enero" name="enero" onchange="Enero();">
                            <option selected>Seleccione una ópcion</option>
                            <option value="1">Al día</option>
                            <option value="2">Mora</option>
                            <option value="3">Cobro Jurídico</option>
                          </select></td>                              
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Febrero</td>
                          <td><input class="form-control form-control-sm" type="text" placeholder="$" aria-label=".form-control-sm example" id="valorFebrero" value="$120000" disabled></td>                        
                          <td><select class="form-select form-select-sm" aria-label=".form-select-sm example" id="febrero" onchange="Febrero();">
                            <option selected>Seleccione una ópcion</option>
                            <option value="1">Al día</option>                            
                            <option value="2">Mora</option>
                            <option value="3">Cobro Jurídico</option>
                          </select></td>
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Marzo</td>
                          <td><input class="form-control form-control-sm" type="text" placeholder="$" aria-label=".form-control-sm example" id="valorMarzo" value="$120000" disabled></td>                        
                          <td><select class="form-select form-select-sm" aria-label=".form-select-sm example" id="marzo" onchange="Marzo();">
                            <option selected>Seleccione una ópcion</option>
                            <option value="1">Al día</option>                            
                            <option value="2">Mora</option>
                            <option value="3">Cobro Jurídico</option>
                          </select></td>
                        </tr>
                        <tr>
                          <th scope="row">4</th>
                          <td>Abril</td>
                          <td><input class="form-control form-control-sm" type="text" placeholder="$" aria-label=".form-control-sm example" id="valorAbril" value="$120000" disabled></td>                        
                          <td><select class="form-select form-select-sm" aria-label=".form-select-sm example" id="abril" onchange="Abril();">
                            <option selected>Seleccione una ópcion</option>
                            <option value="1">Al día</option>                            
                            <option value="2">Mora</option>
                            <option value="3">Cobro Jurídico</option>
                          </select></td>
                        </tr>
                        <tr>
                          <th scope="row">5</th>
                          <td>Mayo</td>
                          <td><input class="form-control form-control-sm" type="text" placeholder="$" aria-label=".form-control-sm example" id="valorMayo" value="$120000" disabled></td>                       
                          <td><select class="form-select form-select-sm" aria-label=".form-select-sm example" id="mayo" onchange="Mayo();">
                            <option selected>Seleccione una ópcion</option>
                            <option value="1">Al día</option>                            
                            <option value="2">Mora</option>
                            <option value="3">Cobro Jurídico</option>
                          </select></td> 
                        </tr>
                        <tr>
                          <th scope="row">6</th>
                          <td>Junio</td>
                          <td><input class="form-control form-control-sm" type="text" placeholder="$" aria-label=".form-control-sm example" id="valorJunio" value="$120000" disabled></td>                        
                          <td><select class="form-select form-select-sm" aria-label=".form-select-sm example" id="junio" onchange="Junio();">
                            <option selected>Seleccione una ópcion</option>
                            <option value="1">Al día</option>                            
                            <option value="2">Mora</option>
                            <option value="3">Cobro Jurídico</option>
                          </select></td>
                        </tr>
                        <tr>
                          <th scope="row">7</th>
                          <td>Julio</td>
                          <td><input class="form-control form-control-sm" type="text" placeholder="$" aria-label=".form-control-sm example" id="valorJulio" value="$120000" disabled></td>                       
                          <td><select class="form-select form-select-sm" aria-label=".form-select-sm example" id="julio" onchange="Julio();">
                            <option selected>Seleccione una ópcion</option>
                            <option value="1">Al día</option>
                            <option value="2">Mora</option>
                            <option value="3">Cobro Jurídico</option>
                          </select></td>
                        </tr>
                        <tr>
                          <th scope="row">8</th>
                          <td>Agosto</td>
                          <td><input class="form-control form-control-sm" type="text" placeholder="$" aria-label=".form-control-sm example" id="valorAgosto" value="$120000" disabled></td>                        
                          <td><select class="form-select form-select-sm" aria-label=".form-select-sm example" id="agosto" onchange="Agosto();">
                            <option selected>Seleccione una ópcion</option>
                            <option value="1">Al día</option>
                            <option value="2">Mora</option>
                            <option value="3">Cobro Jurídico</option>
                          </select></td>
                        </tr>
                        <tr>
                          <th scope="row">9</th>
                          <td>Septiembre</td>
                          <td><input class="form-control form-control-sm" type="text" placeholder="$" aria-label=".form-control-sm example" id="valorSeptiembre" value="$120000" disabled></td>                        
                          <td><select class="form-select form-select-sm" aria-label=".form-select-sm example" id="septiembre" onchange="Septiembre();">
                            <option selected>Seleccione una ópcion</option>
                            <option value="1">Al día</option>
                            <option value="2">Mora</option>
                            <option value="3">Cobro Jurídico</option>
                          </select></td>
                        </tr>
                        <tr>
                          <th scope="row">10</th>
                          <td>Octubre</td>
                          <td><input class="form-control form-control-sm" type="text" placeholder="$" aria-label=".form-control-sm example" id="valorOctubre" value="$120000" disabled></td>                        
                          <td><select class="form-select form-select-sm" aria-label=".form-select-sm example" id="octubre" onchange="Octubre();">
                            <option selected>Seleccione una ópcion</option>
                            <option value="1">Al día</option>
                            <option value="2">Mora</option>
                            <option value="3">Cobro Jurídico</option>
                          </select></td>
                        </tr>
                        <tr>
                          <th scope="row">11</th>
                          <td>Noviembre</td>
                          <td><input class="form-control form-control-sm" type="text" placeholder="$" aria-label=".form-control-sm example" id="valorNoviembre" value="$120000" disabled></td>                        
                          <td><select class="form-select form-select-sm" aria-label=".form-select-sm example" id="noviembre" onchange="Noviembre();">
                            <option selected>Seleccione una ópcion</option>
                            <option value="1">Al día</option>
                            <option value="2">Mora</option>
                            <option value="3">Cobro Jurídico</option>
                          </select></td>
                        </tr>
                        <tr>
                          <th scope="row">12</th>
                          <td>Diciembre</td>
                          <td><input class="form-control form-control-sm" type="text" placeholder="$" aria-label=".form-control-sm example" id="valorDiciembre" value="$120000" disabled></td>                        
                          <td><select class="form-select form-select-sm" aria-label=".form-select-sm example" id="diciembre" onchange="Diciembre();">
                            <option selected>Seleccione una ópcion</option>
                            <option value="1">Al día</option>
                            <option value="2">Mora</option>
                            <option value="3">Cobro Jurídico</option>
                          </select></td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                      <button type="button" class="btn btn-primary" onclick="return resultado()">Guardar Cambios</button>
                    </div>
                  </div>     
                </div>
              </div>
            </div>         
            <?php endforeach ?> 
          </div>          
        </div>         
      <script src="<?php echo base_URL();?>/assets/js/validation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>