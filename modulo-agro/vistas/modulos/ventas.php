<?php

if($_SESSION["perfil"] == "Especial"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

$xml = ControladorVentas::ctrDescargarXML();

if($xml){

  rename($_GET["xml"].".xml", "xml/".$_GET["xml"].".xml");

  echo '<a class="btn btn-block btn-success abrirXML" archivo="xml/'.$_GET["xml"].'.xml" href="ventas">Se ha creado correctamente el archivo XML <span class="fa fa-times pull-right"></span></a>';

}

?>
<br><br><br><br>
<div class="content-wrapper" style="background-color:#FFFFFF">

  <section class="content-header" style="background-color:#FFFFFF">
    
    <h1 style="color:#03A5C2; font-family: monospace; font-weight: bold;">
      
      Administrar donaciones
    
    </h1>

    <ol class="breadcrumb" style="background-color:#FFFFFF">
      
      <li><a href="inicio" style="background-color:white;color:black"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar donaciones</li>
    
    </ol>

  </section>

  <section class="content" style="background-color:#FFFFFF">

    <div class="box" style="background-color:#FFFFFF; border: 2px white solid;">

      <div class="box-header with-border" style="background-color:#FFFFFF; border: 2px white solid;">
  
        <a href="crear-venta">

          <button class="btn btn-primary"  style="background-color:#03A5C2; color:white; border: 2px #03A5C2 solid;">
            
            Agregar donación

          </button>

        </a>

         <button type="button" class="btn btn-default pull-right" id="daterange-btn">
           
            <span>
              <i class="fa fa-calendar"></i> 

              <?php

                if(isset($_GET["fechaInicial"])){

                  echo $_GET["fechaInicial"]." - ".$_GET["fechaFinal"];
                
                }else{
                 
                  echo 'Rango de fecha';

                }

              ?>
            </span>

            <i class="fa fa-caret-down"></i>

         </button>

      </div>

      <div class="box-body" style="background-color:white; color:black; border: 2px white solid;">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%" style="background-color:white; color:black; border: 2px white solid;">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Código </th>
           <th>Beneficiario</th>
           <th>Administrador de donaciones</th>
           <th>Forma de donaciones a la fundación</th>
           <th>Puntuación de entrada</th>
           <th>Puntuación de salida</th> 
           <th>Fecha</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

          if(isset($_GET["fechaInicial"])){

            $fechaInicial = $_GET["fechaInicial"];
            $fechaFinal = $_GET["fechaFinal"];

          }else{

            $fechaInicial = null;
            $fechaFinal = null;

          }

          $respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);

          foreach ($respuesta as $key => $value) {
           
           echo '<tr>

                  <td>'.($key+1).'</td>

                  <td>'.$value["codigo"].'</td>';

                  $itemCliente = "id";
                  $valorCliente = $value["id_cliente"];

                  $respuestaCliente = ControladorClientes::ctrMostrarClientes($itemCliente, $valorCliente);

                  echo '<td>'.$respuestaCliente["nombre"].'</td>';

                  $itemUsuario = "id";
                  $valorUsuario = $value["id_vendedor"];

                  $respuestaUsuario = ControladorUsuarios::ctrMostrarUsuarios($itemUsuario, $valorUsuario);

                  echo '<td>'.$respuestaUsuario["nombre"].'</td>

                  <td>'.$value["metodo_pago"].'</td>

                  <td>$ '.number_format($value["neto"],2).'</td>

                  <td>$ '.number_format($value["total"],2).'</td>

                  <td>'.$value["fecha"].'</td>

                  <td>

                    <div class="btn-group">

                      <a class="btn btn-success" href="index.php?ruta=ventas&xml='.$value["codigo"].'">xml</a>
                        
                      <button class="btn btn-info btnImprimirFactura" codigoVenta="'.$value["codigo"].'">

                        <i class="fa fa-print"></i>

                      </button>';

                      if($_SESSION["perfil"] == "Administrador"){

                      echo '<button class="btn btn-warning btnEditarVenta" idVenta="'.$value["id"].'"><i class="fa fa-pencil"></i></button>

                      <button class="btn btn-danger btnEliminarVenta" idVenta="'.$value["id"].'"><i class="fa fa-times"></i></button>';

                    }

                    echo '</div>  

                  </td>

                </tr>';
            }

        ?>
               
        </tbody>

       </table>

       <?php

      $eliminarVenta = new ControladorVentas();
      $eliminarVenta -> ctrEliminarVenta();

      ?>
       

      </div>

    </div>

  </section>

</div>




