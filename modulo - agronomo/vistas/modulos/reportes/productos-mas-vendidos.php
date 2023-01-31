<?php

$item = null;
$valor = null;
$orden = "ventas";

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

$colores = array("white", "black", "white", "black");

$totalVentas = ControladorProductos::ctrMostrarSumaVentas();


?>

<!--=====================================
PRODUCTOS MÁS DONADOS
======================================-->

<div class="box box-default"  style="background-color:#02016D; width:560px; left:200px;">

  <div class="box-header with-border" width="110px"style="background-color:#02016D;">

    <h3 class="box-title" style="color:#FFFFFF; font-weight:bolder">Productos más donados</h3>

  </div>

  <div class="box-body" style="background-color:#FF0074;border: 3px solid #FF0074;">

    <div class="row">


    </div>

  </div>

  <div class="box-footer no-padding" style="background-color:#FF0074;border: 3px solid #FF0074;">

    <ul class="nav nav-pills nav-stacked" style="background-color:#FF0074;border: 3px solid #FF0074;">

      <?php

      for ($i = 0; $i < 5; $i++) {

        echo '<li style="color:white; background-color:#FF0074;border: 3px solid #FF0074;">
						 
						 <a style="color:white; background-color:#FF0074;border: 3px solid #FF0074;">
						 <img src="'.$productos[$i]["imagen"].'"  class="img-thumbnail" width="90px"  style="margin-right:10px; background-color:#02016D; color: #02016D;"> 
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