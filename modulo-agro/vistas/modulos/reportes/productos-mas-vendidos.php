<?php

$item = null;
$valor = null;
$orden = "ventas";

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

$colores = array("yellow", "red", "green", "aqua", "purple", "blue", "cyan", "magenta", "orange", "gold");

$totalVentas = ControladorProductos::ctrMostrarSumaVentas();


?>

<!--=====================================
PRODUCTOS MÁS DONADOS
======================================-->

<div class="box box-default"  style="background-color:#00B8E5">

  <div class="box-header with-border" width="110px"style="background-color:#023C55;">

    <h3 class="box-title" style="color:#FFFFFF; font-weight:bolder">Productos más donados</h3>

  </div>

  <div class="box-body" style="background-color:black;">

    <div class="row">


    </div>

  </div>

  <div class="box-footer no-padding" style="background-color:#2B022D;">

    <ul class="nav nav-pills nav-stacked" style="background-color:#2B022D;">

      <?php

      for ($i = 0; $i < 5; $i++) {

        echo '<li>
						 
						 <a style="color:white; background-color:black;">
						 <img src="'.$productos[$i]["imagen"].'"  class="img-thumbnail" width="90px"  style="margin-right:10px; background-color:#07D5C2; color: #050005;"> 
						 ' . $productos[$i]["descripcion"] . '

						 <span class="pull-right text-' . $colores[$i] . '">   
						 ' . ceil($productos[$i]["ventas"] * 100 / $totalVentas["total"]) . '%
						 </span>
							
						 </a>

      				</li>';
      }

      ?>


    </ul>

  </div>

</div>