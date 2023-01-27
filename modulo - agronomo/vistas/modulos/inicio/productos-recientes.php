<?php

$item = null;
$valor = null;
$orden = "id";

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);

 ?>


<div class="box box-primary"style="border: 2px solid #FF0074;width:580px; left:28px">

  <div class="box-header with-border" style="color:black; background-color:#FF0074;">

    <h3 class="box-title" style="color:#FFFFFF;font-weight:bolder">Productos añadidos recientemente</h3>

    <div class="box-tools pull-right">

      <button type="button" class="btn btn-box-tool" data-widget="collapse" style="background-color:#02016D;">

        <i class="fa fa-minus"></i>

      </button>

      <button type="button" class="btn btn-box-tool" data-widget="remove" style="background-color:#D5073C;">

        <i class="fa fa-times"></i>

      </button>

    </div>

  </div>
  
  <div class="box-body" style="color:#FFFFFF;background-color:#02016D">

    <ul class="products-list product-list-in-box">

    <?php

    for($i = 0; $i < 10; $i++){

      echo '<li class="item">

        <div class="product-img">

        <img src="'.$productos[$i]["imagen"].'" alt="Product Image" style="margin-right:10px;width:120px; background-color:#02016D; color: #050005;">

        </div>

        <div class="product-info">

          <a href="" class="product-title" style="color:#FFFFFF;background-color:#02016D">

            '.$productos[$i]["descripcion"].'

            <span class="label label-warning pull-right">$'.$productos[$i]["precio_venta"].'</span>

          </a>
    
       </div>

      </li>';

    }

    ?>

    </ul>

  </div>

  <div class="box-footer text-center"  style="color:black; background-color:#FF0074;">

    <a href="productos" class="uppercase"  style="background-color:#FF0074;">Ver todos los productos</a>
  
  </div>

</div>
