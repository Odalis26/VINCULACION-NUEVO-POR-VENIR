<?php

if($_SESSION["perfil"] == "ingeniero"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<div class="content-wrapper"  style="background-color:#FFFFFF">

  <section class="content-header"  style="background-color:#FFFFFF">
    
    <h1 style="color:#228b22; font-family: monospace; font-weight: bold;">
      
      Administrar Terrenos
    
    </h1>

    <ol class="breadcrumb"  style="background-color:#FFFFFF">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar Terrenos</li>
    
    </ol>

  </section>

  <section class="content"  style="background-color:#FFFFFF">

    <div class="box" style="background-color:#FFFFFF; border: 2px white solid;">

      <div class="box-header with-border" style="background-color:#FFFFFF; border: 2px white solid;">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarTerreno" style="background-color:#04FA00; color:black; border: 2px #04FA00 solid;">
          
          Agregar terreno

        </button>

      </div>

      <div class="box-body"  style="background-color:white; color:black; border: 2px white solid;">
        
       <table class="table table-bordered table-striped dt-responsive tablaTerrenos" width="100%" style="background-color:white; color:black; border: 2px white solid;">
         
        <thead style="background-color:white; color:black; border: 2px white solid;">
         
         <tr style="background-color:white; color:black; border: 2px white solid;">
           
           <th style="width:10px; background-color:white; color:black; border: 2px white solid;">#</th>
           <th style="width:10px; background-color:white; color:black; border: 2px white solid;">beneficiario</th>
           <th style="width:10px; background-color:white; color:black; border: 2px white solid;">perimetro</th>
           <th style="width:10px; background-color:white; color:black; border: 2px white solid;">area</th>
           <th style="width:10px; background-color:white; color:black; border: 2px white solid;">adaptabilidad</th>
           <th style="width:10px; background-color:white; color:black; border: 2px white solid;">tipo de terreno</th>
           <th style="width:10px; background-color:white; color:black; border: 2px white solid;">tipo de suelo</th>
           <th style="width:10px; background-color:white; color:black; border: 2px white solid;">porcentaje de agua</th>
           <th style="width:10px; background-color:white; color:black; border: 2px white solid;">porcentaje de minerales</th>
           

         </tr> 

        </thead>

        <tbody>

        <?php

          $item = null;
          $valor = null;

          $terrenos = TerrenosController::ctrMostrarTerrenos($item, $valor);
         

          foreach ($terrenos as $key => $value) {
           
            $terrenos = TerrenosController::ctrMostrarTerrenos($item, $valor);
           
           
            echo ' <tr style="width:10px; background-color:white; color:black; border: 2px white solid;">

                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">'.($key+1).'</td>
                   
                    <td class="text-uppercase" style="width:10px; background-color:white; color:black; border: 2px white solid;">'.$value["clientes.nombre"].'</td>
                    <td class="text-uppercase" style="width:10px; background-color:white; color:black; border: 2px white solid;">'.$value["perimetro"].'</td>
                    <td class="text-uppercase" style="width:10px; background-color:white; color:black; border: 2px white solid;">'.$value["area"].'</td>
                    <td class="text-uppercase" style="width:10px; background-color:white; color:black; border: 2px white solid;">'.$value["adaptabilidad"].'</td>
                    <td class="text-uppercase" style="width:10px; background-color:white; color:black; border: 2px white solid;">'.$value["tipo_terreno"].'</td>
                    <td class="text-uppercase" style="width:10px; background-color:white; color:black; border: 2px white solid;">'.$value["tipo_suelo"].'</td>
                    <td class="text-uppercase" style="width:10px; background-color:white; color:black; border: 2px white solid;">'.$value["porcentaje_agua"].'</td>
                    <td class="text-uppercase" style="width:10px; background-color:white; color:black; border: 2px white solid;">'.$value["porcentaje_minerales"].'</td>

                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">

                      <div class="btn-group" >
                          
                        <button class="btn btn-warning btnEditarTerreno" style="background:#63FC00; color:black; border: 2px #63FC00 solid;" idTerreno="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarTerreno"><i class="fa fa-pencil"></i></button>';

                        if($_SESSION["perfil"] == "Administrador"){

                          echo '<button class="btn btn-danger btnEliminarTerreno" style="background:#6A0436; color:white; border: 2px #6A0436 solid;" idTerreno="'.$value["id"].'"><i class="fa fa-times"></i></button>';

                        }

                      echo '</div>  

                    </td>

                  </tr>';
                      }
          
        

        ?>

        </tbody>

       </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL AGREGAR TERRENO
======================================-->

<div id="modalAgregarTerreno" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#04FA00; color:black">

          <button type="button" class="close" data-dismiss="modal" style="color:black">&times;</button>

          <h4 class="modal-title" >Agregar terreno</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="background:white; color:white">

          <div class="box-body" style="background:white; color:white; border: 2px white solid;">

            <!-- ENTRADA PARA EL BENEFICIARIO -->
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#D5005B; color:white; border: 2px #D5005B solid;"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg" id="id_beneficiario" name="id_beneficiario" required>
                  
                  <option value="">Selecionar beneficiario</option>

                  <?php

                  $item = null;
                  $valor = null;

                  $clientes = ControladorClientes::ctrMostrarClientes($item, $valor);

                  foreach ($clientes as $key => $value) {
                    
                    echo '<option value="'.$value["id"].'">'.$value["nombre"].'</option>';
                  }

                  ?>
  
                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL  -->
            
            <div class="form-group">
              
              <div class="input-group">
                <!--<input type="text" class="form-control input-lg" name="id_beneficiario" placeholder="id_beneficiario" required>-->
                <input type="text" class="form-control input-lg" name="perimetro" placeholder="perimetro" required>
                <input type="text" class="form-control input-lg" name="area" placeholder="area" required>
                <input type="text" class="form-control input-lg" name="adaptabilidad" placeholder="adaptabilidad" required>
                <input type="text" class="form-control input-lg" name="tipo_terreno" placeholder="tipo de terreno" required>
                <input type="text" class="form-control input-lg" name="tipo_suelo" placeholder="tipo de suelo" required>
                <input type="text" class="form-control input-lg" name="porcentaje_agua" placeholder="porcentaje de agua" required>
                <input type="text" class="form-control input-lg" name="porcentaje_minerales" placeholder="porcentaje de minerales" required>
              </div>

            </div>
  
          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer"style="background-color:white; color:black; border: 2px white solid;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal" style="background:#6A0436; color:white; border: 2px #6A0436 solid;">Salir</button>

          <button type="submit" class="btn btn-primary" style="background:#4CEB02; color:black; border: 2px #4CEB02 solid;">Guardar Terreno</button>

        </div>

        <?php

          $crearTerreno = new TerrenosController();
          $crearTerreno -> ctrCrearTerrenos();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR TERRENO
======================================-->

<div id="modalEditarTerreno" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header"  style="background:#D5005B; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar terreno</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="background:white; color:white">

          <div class="box-body" style="background:white; color:white; border: 2px white solid;">


            <!-- ENTRADA PARA SELECCIONAR BENEFICIARIO -->

            <div class="form-group" style="background:white; color:white">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#D5005B; color:white; border: 2px #D5005B solid;"><i class="fa fa-th"></i></span> 

                <select class="form-control input-lg"  style="background:black; color:white" name="id_beneficiario" readonly required>
                  
                  <option id="id_beneficiario" style="background:black; color:white"></option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA EL PERIMETRO -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#D5005B; color:white; border: 2px #D5005B solid;"><i class="fa fa-code"></i></span> 

                <input type="text" class="form-control input-lg" id="perimetro" name="perimetro" style="background:black; color:white" readonly required>

              </div>

            </div>

            <!-- ENTRADA PARA EL AREA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#D5005B; color:white; border: 2px #D5005B solid;"><i class="fa fa-product-hunt"></i></span> 

                <input type="text" class="form-control input-lg" id="area" name="area" required>

              </div>

            </div>

             <!-- ENTRADA PARA ADAPTABILIDAD  -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#D5005B; color:white; border: 2px #D5005B solid;"><i class="fa fa-check"></i></span> 

                <input type="number" class="form-control input-lg" id="adaptabilidad" name="adaptabilidad" min="0" required>

              </div>

            </div>

             <!-- ENTRADA PARA TIPO DE TERRENO-->

             <div class="form-group row">

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon" style="background:#D5005B; color:white; border: 2px #D5005B solid;"><i class="fa fa-arrow-up"></i></span> 

                    <input type="number" class="form-control input-lg" id="tipo_terreno" name="tipo_terreno" step="any" min="0" required>

                  </div>

                </div>

                <!-- ENTRADA PARA TIPO DE SUELO -->

                <div class="col-xs-6">
                
                  <div class="input-group">
                  
                    <span class="input-group-addon" style="background:#D5005B; color:white; border: 2px #D5005B solid;"><i class="fa fa-arrow-down"></i></span> 

                    <input type="number" class="form-control input-lg" id="tipo_suelo" name="tipo_suelo" step="any" min="0" style="background:black; color:white" readonly required>

                  </div>
                
                  <br>

                  <!-- CHECKBOX PARA PORCENTAJE DE AGUA  -->

                  <div class="col-xs-6">
                    
                    <div class="form-group">
                      
                      <label>
                        
                        <input type="checkbox" class="minimal porcentaje" checked>
                        Utilizar procentaje
                      </label>

                    </div>

                  </div>

                  <!-- ENTRADA PARA PORCENTAJE DE AGUA -->

                  <div class="col-xs-6" style="padding:0">
                    
                    <div class="input-group">
                      
                      <input type="number" class="form-control input-lg porcentaje_agua" min="0" value="40" required>

                      <span class="input-group-addon" style="background:#D5005B; color:white; border: 2px #D5005B solid;"><i class="fa fa-percent"></i></span>

                    </div>

                  </div>

                </div>

            </div>
            
                  <!-- CHECKBOX PARA PORCENTAJE DE MINERALES  -->

                  <div class="col-xs-6">
                    
                    <div class="form-group">
                      
                      <label>
                        
                        <input type="checkbox" class="minimal porcentaje" checked>
                        Utilizar procentaje
                      </label>

                    </div>

                  </div>

                  <!-- ENTRADA PARA PORCENTAJE DE MINERALES -->

                  <div class="col-xs-6" style="padding:0">
                    
                    <div class="input-group">
                      
                      <input type="number" class="form-control input-lg porcentaje_minerales" min="0" value="40" required>

                      <span class="input-group-addon" style="background:#D5005B; color:white; border: 2px #D5005B solid;"><i class="fa fa-percent"></i></span>

                    </div>

                  </div>

                </div>

            </div>

           

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" style="background-color:white; color:black; border: 2px white solid;">

          <button type="button" class="btn btn-default pull-left" style="background:#6A0436; color:white; border: 2px #6A0436 solid;" data-dismiss="modal">Salir</button>

          <button type="submit" class="btn btn-primary" style="background:#D5005B; color:white; border: 2px #D5005B solid;">Guardar cambios</button>

        </div>

      </form>

        <?php

          $editarTerreno = new TerrenosController();
          $editarTerreno -> ctrEditarTerreno();

        ?>      

    </div>

  </div>

</div>


<?php

  
?>


