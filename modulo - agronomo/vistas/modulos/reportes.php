<?php

if($_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>
<br><br><br><br>
<div class="content-wrapper" style="background-color:white;">

  <section class="content-header" style="background-color:white">
    
    <h1 style="color:#330470; font-family: monospace; font-weight: bold; position:relative; width:1170px; left:210px">
      
      Reportes de donaciones
    
    </h1>

    <ol class="breadcrumb" style="background-color:white">
      
      <li><a href="inicio"  style="background-color:white;color:#330470;"><i class="fa fa-dashboard" ></i> Inicio</a></li>
      
      <li class="active">Reportes de donaciones</li>
    
    </ol>

  </section>

  <section class="content" style="background-color:white">

    <div class="box" style="background-color:white; border: 2px white solid;">

      <div class="box-header with-border" style="background-color:white; border: 2px white solid;color:#03A5C2;  position:relative; width:1170px; left:200px">

        <div class="input-group">

          <button type="button" class="btn btn-default" id="daterange-btn2">
           
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

        <div class="box-tools pull-right" style="background-color:white; border: 2px white solid;color:#03A5C2">

        <?php

        if(isset($_GET["fechaInicial"])){

          echo '<a href="vistas/modulos/descargar-reporte.php?reporte=reporte&fechaInicial='.$_GET["fechaInicial"].'&fechaFinal='.$_GET["fechaFinal"].'">';

        }else{

           echo '<a href="vistas/modulos/descargar-reporte.php?reporte=reporte">';

        }         

        ?>
           
           <button class="btn btn-success" style="margin-top:5px">Descargar reporte en Excel</button>

          </a>

        </div>
         
      </div>

      <div class="box-body" style="background-color:white; border: 2px white solid;">
        
        <div class="row">

          <div class="col-xs-12">
            
            <?php

            include "reportes/grafico-ventas.php";

            ?>

          </div>

           <div class="col-md-6 col-xs-12">
             
            <?php

            include "reportes/productos-mas-vendidos.php";

            ?>

           </div>

            <div class="col-md-6 col-xs-12">
             
            <?php

            include "reportes/vendedores.php";

            ?>

           </div>

           <div class="col-md-6 col-xs-12" >
             
            <?php

            include "reportes/compradores.php";

            ?>

           </div>
          
        </div>

      </div>
      
    </div>

  </section>
 
 </div>
