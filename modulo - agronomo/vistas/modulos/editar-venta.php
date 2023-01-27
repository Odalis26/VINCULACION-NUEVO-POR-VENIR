<br><br><br><br>
<div class="content-wrapper" style="background-color:#FFFFFF;position:relative; left:200px; width:1300px;">

  <section class="content-header" style="background-color:#FFFFFF">
    
    <h1 style="color:#330470; font-family: monospace; font-weight: bold;position:relative; width:4500px; left:15px">
      
      Editar donación
    
    </h1>

    <ol class="breadcrumb" style="background-color:#FFFFFF">
      
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Editar donación</li>
    
    </ol>

  </section>

  <section class="content" style="background-color:#FFFFFF">

    <div class="row">

      <!--=====================================
      EL FORMULARIO
      ======================================-->
      
      <div class="col-lg-5 col-xs-12">
        
        <div class="box box-success" style="background-color:#FFFFFF; border: 2px white solid;">
          
          <div class="box-header with-border" style="background-color:#FFFFFF; border: 2px white solid;"></div>

          <form role="form" method="post" class="formularioVenta" style="background-color:#FFFFFF; border: 2px white solid;">

            <div class="box-body" style="background-color:#FFFFFF; border: 2px white solid;">
  
              <div class="box" style="background:white; color:white">

                <?php

                    $item = "id";
                    $valor = $_GET["idVenta"];

                    $venta = ControladorVentas::ctrMostrarVentas($item, $valor);

                    $itemUsuario = "id";
                    $valorUsuario = $venta["id_vendedor"];

                    $vendedor = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                    $itemCliente = "id";
                    $valorCliente = $venta["id_cliente"];

                    $cliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

                    $porcentajeImpuesto = $venta["impuesto"] * 100 / $venta["neto"];


                ?>

                <!--=====================================
                ENTRADA DEL ADMINISTRADOR DE DONACIONES
                ======================================-->
            
                <div class="form-group">
                
                  <div class="input-group">
                    
                    <span class="input-group-addon" style="background-color:#330470; color:white; border: 3px #330470 solid;"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control" id="nuevoVendedor" value="<?php echo $vendedor["nombre"]; ?>"  style="background:black; color:white" readonly>

                    <input type="hidden" name="idVendedor" value="<?php echo $vendedor["id"]; ?>" style="background:black; color:white">

                  </div>

                </div> 

                <!--=====================================
                ENTRADA DEL CÓDIGO
                ======================================--> 

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon" style="background:#330470; color:white; border: 3px #330470 solid;"><i class="fa fa-key"></i></span>

                   <input type="text" class="form-control" id="nuevaVenta" name="editarVenta" value="<?php echo $venta["codigo"]; ?>" style="background:black; color:white" readonly>
               
                  </div>
                
                </div>

                <!--=====================================
                ENTRADA DEL BENEFICIARIO
                ======================================--> 

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon" style="background:#D59408; color:white; border: 2px #D59408 solid;"><i class="fa fa-users"></i></span>
                    
                    <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" style="background:#FFC301; color:black; font-weight:bold;border: 2px #FFC301 solid;" required>

                    <option value="<?php echo $cliente["id"]; ?>"><?php echo $cliente["nombre"]; ?></option>

                    <?php

                      $item = null;
                      $valor = null;

                      $categorias = ControladorClientes::ctrMostrarClientes($item, $valor);

                       foreach ($categorias as $key => $value) {

                         echo '<option style="background:black; color:white" value="'.$value["id"].'">'.$value["nombre"].'</option>';

                       }

                    ?>

                    </select>
                    
                    <span class="input-group-addon" style="background:#D59408; color:white; border: 2px #D59408 solid;"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal" style="background:#D59408; color:black; border: 2px #D59408 solid;">Agregar Beneficiario</button></span>
                  
                  </div>
                
                </div>

                <!--=====================================
                ENTRADA PARA AGREGAR PRODUCTO
                ======================================--> 

                <div class="form-group row nuevoProducto" style="background:#FFF4EB; color:white;">

                <?php

                $listaProducto = json_decode($venta["productos"], true);

                foreach ($listaProducto as $key => $value) {

                  $item = "id";
                  $valor = $value["id"];
                  $orden = "id";

                  $respuesta = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

                  $stockAntiguo = $respuesta["stock"] + $value["cantidad"];
                  
                  echo '<div class="row" style="padding:5px 15px">
            
                        <div class="col-xs-6" style="padding-right:0px">
            
                          <div class="input-group">
                
                            <span class="input-group-addon"><button type="button" class="btn btn-danger btn-xs quitarProducto" idProducto="'.$value["id"].'"><i class="fa fa-times"></i></button></span>

                            <input type="text"  style="background:black; color:white" class="form-control nuevaDescripcionProducto" idProducto="'.$value["id"].'" name="agregarProducto" value="'.$value["descripcion"].'" readonly required>

                          </div>

                        </div>

                        <div class="col-xs-3">
              
                          <input type="number" class="form-control nuevaCantidadProducto" name="nuevaCantidadProducto" min="1" value="'.$value["cantidad"].'" stock="'.$stockAntiguo.'" nuevoStock="'.$value["stock"].'" required>

                        </div>

                        <div class="col-xs-3 ingresoPrecio" style="padding-left:0px">

                          <div class="input-group">

                            <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>
                   
                            <input type="text" style="background:black; color:white" class="form-control nuevoPrecioProducto" precioReal="'.$respuesta["precio_venta"].'" name="nuevoPrecioProducto" value="'.$value["total"].'" readonly required>
   
                          </div>
               
                        </div>

                      </div>';
                }


                ?>

                </div>

                <input type="hidden" id="listaProductos" name="listaProductos">

                <!--=====================================
                BOTÓN PARA AGREGAR PRODUCTO
                ======================================-->

                <button type="button" class="btn btn-default hidden-lg btnAgregarProducto" style="background-color:#D30606; color:white; border: 1px #D30606 solid;">Agregar producto</button>

                <hr>

                <div class="row">

                  <!--=====================================
                  ENTRADA IMPUESTOS Y TOTAL
                  ======================================-->
                  
                  <div class="col-xs-8 pull-right">
                    
                    <table class="table">

                      <thead>

                        <tr>
                          <th>Impuesto</th>
                          <th>Total</th>      
                        </tr>

                      </thead>

                      <tbody>
                      
                        <tr>
                          
                          <td style="width: 50%">
                            
                            <div class="input-group">
                           
                              <input type="number" class="form-control input-lg" min="0" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" value="<?php echo $porcentajeImpuesto; ?>" required>

                               <input type="hidden" name="nuevoPrecioImpuesto" id="nuevoPrecioImpuesto" value="<?php echo $venta["impuesto"]; ?>" required>

                               <input type="hidden" name="nuevoPrecioNeto" id="nuevoPrecioNeto" value="<?php echo $venta["neto"]; ?>" required>

                              <span class="input-group-addon" style="background:#FF5822; color:white; border: 2px #FF5822 solid;"><i class="fa fa-percent"></i></span>
                        
                            </div>

                          </td>

                           <td style="width: 50%">
                            
                            <div class="input-group">
                           
                              <span class="input-group-addon" style="background:#FF5822; color:white; border: 2px #FF5822 solid;"><i class="ion ion-social-usd"></i></span>

                              <input type="text" class="form-control input-lg" id="nuevoTotalVenta" name="nuevoTotalVenta" total="<?php echo $venta["neto"]; ?>"  value="<?php echo $venta["total"]; ?>" style="background:black; color:white" readonly required>

                              <input type="hidden" name="totalVenta" value="<?php echo $venta["total"]; ?>" id="totalVenta">
                              
                        
                            </div>

                          </td>

                        </tr>

                      </tbody>

                    </table>

                  </div>

                </div>

                <hr>

                <!--=====================================
                ENTRADA MÉTODO DE DONACIÓN
                ======================================-->
                <hr>
                <div class="form-group row">
                  
                  <div class="col-xs-6" style="padding-right:0px">
                    
                     <div class="input-group">
                  
                      <select class="form-control" id="nuevoMetodoPago" name="nuevoMetodoPago"  style="background:#FF5822; color:white; font-weight:bold;border: 2px #FF5822 solid;position:relative; width:313px; left:-150px" required>
                        <option value="" style="background:#330470; color:white">Select. método de donación a la fundación</option>
                        <option value="Efectivo" style="background:black; color:white">Efectivo</option>
                        <option value="TC" style="background:black; color:white">Tarjeta Crédito</option>
                        <option value="TD" style="background:black; color:white">Tarjeta Débito</option>                  
                      </select>    

                    </div>

                  </div>

                  <div class="cajasMetodoPago"></div>

                  <input type="hidden" id="listaMetodoPago" name="listaMetodoPago">

                </div>

                <br>
      
              </div>

          </div>

          <div class="box-footer" style="background-color:#FFFFFF; border: 2px white solid;">

            <button type="submit" class="btn btn-primary pull-right">Guardar cambios</button>

          </div>

        </form>

        <?php

          $editarVenta = new ControladorVentas();
          $editarVenta -> ctrEditarVenta();
          
        ?>

        </div>
            
      </div>

      <!--=====================================
      LA TABLA DE PRODUCTOS
      ======================================-->

      <div class="col-lg-7 hidden-md hidden-sm hidden-xs" style="background-color:#FFFFFF; border: 2px white solid;">
        
        <div class="box box-warning" style="background-color:#FFFFFF; border: 2px white solid;">

          <div class="box-header with-border" style="background-color:#FFFFFF; border: 2px white solid;"></div>

          <div class="box-body" style="background-color:#FFFFFF; border: 2px white solid; color:black">
            
            <table class="table table-bordered table-striped dt-responsive tablaVentas" style="background-color:#FFFFFF; border: 2px white solid;">
              
               <thead>

                 <tr>
                  <th style="width: 10px">#</th>
                  <th>Imagen</th>
                  <th>Código</th>
                  <th>Descripcion</th>
                  <th>Stock</th>
                  <th>Acciones</th>
                </tr>

              </thead>

            </table>

          </div>

        </div>


      </div>

    </div>
   
  </section>

</div>

<!--=====================================
MODAL AGREGAR CLIENTE
======================================-->

<div id="modalAgregarCliente" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#D59408; color:black">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Beneficiario</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body"  style="background:white; color:white">

          <div class="box-body" style="background:white; color:white; border:3px solid white">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#D59408; color:#F5EA04; border:3px solid #D59408"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" style="border: 2px #D59408 solid;background:white;color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DOCUMENTO ID -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#D59408; color:#F5EA04; border:3px solid #D59408"><i class="fa fa-key"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" style="border: 2px #D59408 solid;background:white;color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#D59408; color:#F5EA04; border:3px solid #D59408"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" style="border: 2px #D59408 solid;background:white;color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#D59408; color:#F5EA04; border:3px solid #D59408"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask style="border: 2px #D59408 solid;background:white;color:black;" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#D59408; color:#F5EA04; border:3px solid #D59408"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" style="border: 2px #D59408 solid;background:white;color:black;" required>

              </div>

            </div>

             <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#D59408; color:#F5EA04; border:3px solid #D59408"><i class="fa fa-calendar"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask style="border: 2px #D59408 solid;background:white;color:black;" required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" style="background-color:white; color:#F5EA04; border: 2px white solid;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal" style="background:#6A0436; color:white; border: 2px #6A0436 solid;">Salir</button>

          <button type="submit" class="btn btn-primary" style="background:#FFC301; color:black; border: 2px #FFC301 solid;">Guardar beneficiario</button>

        </div>

      </form>

      <?php

        $crearCliente = new ControladorClientes();
        $crearCliente -> ctrCrearCliente();

      ?>

    </div>

  </div>

</div>
