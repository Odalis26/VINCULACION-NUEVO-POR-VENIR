<?php

if($_SESSION["perfil"] == "Especial"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper" style="background-color:#FFFFFF">

  <section class="content-header" style="background-color:#FFFFFF">
    
    <h1 style="color:#03A5C2">
      
      Crear donación
    
    </h1>

    <ol class="breadcrumb" style="background-color:#FFFFFF">
      
      <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Crear donación</li>
    
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

                <!--=====================================
                ENTRADA DEL ADMINISTRADOR DE DONACIONES
                ======================================-->
            
                <div class="form-group">
                
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-user"></i></span> 

                    <input type="text" class="form-control" id="nuevoVendedor" value="<?php echo $_SESSION["nombre"]; ?>"  style="background:black; color:white" readonly>

                    <input type="hidden" name="idVendedor" value="<?php echo $_SESSION["id"]; ?>" style="background:black; color:white">

                  </div>

                </div> 

                <!--=====================================
                ENTRADA DEL CÓDIGO
                ======================================--> 

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon" style="background:black; color:white"><i class="fa fa-key"></i></span>

                    <?php

                    $item = null;
                    $valor = null;

                    $ventas = ControladorVentas::ctrMostrarVentas($item, $valor);

                    if(!$ventas){

                      echo '<input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="10001" readonly style="background:black; color:white">';
                  

                    }else{

                      foreach ($ventas as $key => $value) {
                        
                        
                      
                      }

                      $codigo = $value["codigo"] + 1;



                      echo '<input type="text" class="form-control" id="nuevaVenta" name="nuevaVenta" value="'.$codigo.'" readonly style="background:black; color:white">';
                  

                    }

                    ?>
                    
                    
                  </div>
                
                </div>

                <!--=====================================
                ENTRADA DEL BENEFICIARIO
                ======================================--> 

                <div class="form-group">
                  
                  <div class="input-group">
                    
                    <span class="input-group-addon"><i class="fa fa-users"></i></span>
                    
                    <select class="form-control" id="seleccionarCliente" name="seleccionarCliente" required>

                    <option value="">Seleccionar </option>

                    <?php

                      $item = null;
                      $valor = null;

                      $categorias = ControladorClientes::ctrMostrarClientes($item, $valor);

                       foreach ($categorias as $key => $value) {

                         echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';

                       }

                    ?>

                    </select>
                    
                    <span class="input-group-addon"><button type="button" class="btn btn-default btn-xs" data-toggle="modal" data-target="#modalAgregarCliente" data-dismiss="modal">Agregar Beneficiario</button></span>
                  
                  </div>
                
                </div>

                <!--=====================================
                ENTRADA PARA AGREGAR PRODUCTO
                ======================================--> 

                <div class="form-group row nuevoProducto">

                

                </div>

                <input type="hidden" id="listaProductos" name="listaProductos">

                <!--=====================================
                BOTÓN PARA AGREGAR PRODUCTO
                ======================================-->

                <button type="button" class="btn btn-default hidden-lg btnAgregarProducto">Agregar producto</button>

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
                           
                              <input type="number" class="form-control input-lg" min="0" id="nuevoImpuestoVenta" name="nuevoImpuestoVenta" placeholder="0" required>

                               <input type="hidden" name="nuevoPrecioImpuesto" id="nuevoPrecioImpuesto" required>

                               <input type="hidden" name="nuevoPrecioNeto" id="nuevoPrecioNeto" required>

                              <span class="input-group-addon"><i class="fa fa-percent"></i></span>
                        
                            </div>

                          </td>

                           <td style="width: 50%">
                            
                            <div class="input-group">
                           
                              <span class="input-group-addon"><i class="ion ion-social-usd"></i></span>

                              <input type="text" class="form-control input-lg" id="nuevoTotalVenta" name="nuevoTotalVenta" total="" placeholder="00000" style="background:black; color:white" readonly required>

                              <input type="hidden" name="totalVenta" id="totalVenta" style="background:black; color:white">
                              
                        
                            </div>

                          </td>

                        </tr>

                      </tbody>

                    </table>

                  </div>

                </div>

                <hr>

                <!--=====================================
                ENTRADA MÉTODO DE DONACIÓN A LA FUNDACIÓN
                ======================================-->

                <div class="form-group row">
                  
                  <div class="col-xs-6" style="padding-right:0px">
                    
                     <div class="input-group">
                  
                      <select class="form-control" id="nuevoMetodoPago" name="nuevoMetodoPago" required>
                        <option value="" >Select. método de donación a la fundación</option>
                        <option value="Efectivo">Efectivo</option>                
                        <option value="TC">Tarjeta Crédito</option>
                        <option value="TD">Tarjeta Débito</option> 
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

            <button type="submit" class="btn btn-primary pull-right">Guardar </button>

          </div>

        </form>

        <?php

          $guardarVenta = new ControladorVentas();
          $guardarVenta -> ctrCrearVenta();
          
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

        <div class="modal-header" style="background:#FFC301; color:black">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Agregar Beneficiario</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="background:white; color:white">

          <div class="box-body" style="background:white; color:white; border:3px solid white">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#FFC301; color:black; border:3px solid #FFC301"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoCliente" placeholder="Ingresar nombre" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL DOCUMENTO ID -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#FFC301; color:black; border:3px solid #FFC301"><i class="fa fa-key"></i></span> 

                <input type="number" min="0" class="form-control input-lg" name="nuevoDocumentoId" placeholder="Ingresar documento" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL EMAIL -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#FFC301; color:black; border:3px solid #FFC301"><i class="fa fa-envelope"></i></span> 

                <input type="email" class="form-control input-lg" name="nuevoEmail" placeholder="Ingresar email" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL TELÉFONO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#FFC301; color:black; border:3px solid #FFC301"><i class="fa fa-phone"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar teléfono" data-inputmask="'mask':'(999) 999-9999'" data-mask required>

              </div>

            </div>

            <!-- ENTRADA PARA LA DIRECCIÓN -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#FFC301; color:black; border:3px solid #FFC301"><i class="fa fa-map-marker"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaDireccion" placeholder="Ingresar dirección" required>

              </div>

            </div>

             <!-- ENTRADA PARA LA FECHA DE NACIMIENTO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#FFC301; color:black; border:3px solid #FFC301"><i class="fa fa-calendar"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevaFechaNacimiento" placeholder="Ingresar fecha nacimiento" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask required>

              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" style="background-color:white; color:black; border: 2px white solid;">

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
