<?php

$item = null;
$valor = null;
$orden = "id";

$ventas = ControladorVentas::ctrSumaTotalVentas();

$categorias = ControladorCategorias::ctrMostrarCategorias($item, $valor);
$totalCategorias = count($categorias);

$clientes = ControladorClientes::ctrMostrarClientes($item, $valor);
$totalClientes = count($clientes);

$productos = ControladorProductos::ctrMostrarProductos($item, $valor, $orden);
$totalProductos = count($productos);

?>



<div class="col-lg-3 col-xs-6" style="width:300px; left:200px">

  <div class="small-box bg-aqua" style="background-color:#330470;">

    <div class="inner" style="background:#330470; border: 2px solid #FF5822; color:#FF5822;">

      <h3 style="color:#FF5822;">$
      <?php echo number_format($ventas["total"], 2); ?></h3>

      <p>Donaciones</p>

    </div>

    <div class="icon">

      <i class="bi bi-star-fill"></i>
      <svg xmlns="http://www.w3.org/2000/svg" style="color: #FF5822;" width="66" height="66" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
        <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
      </svg>

    </div>

    <a href="ventas" class="small-box-footer" style="background-color: #FF5822;border: 2px solid #FF5822;border-top: transparent; color:black;">

      Más info <i class="fa fa-arrow-circle-right" style="color:black;"></i>

    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6" style="width:300px; left:200px">

  <div class="small-box bg-green">

    <div class="inner" style="background:#1F8708; border: 2px solid #00FF00; color:#00FF00;">

      <h3><?php echo number_format($totalCategorias); ?></h3>

      <p>Categorías</p>

    </div>

    <div class="icon">

      <i class="ion ion-clipboard" style="color:#00FF00;"></i>

    </div>

    <a href="categorias" class="small-box-footer" style="border: 2px solid #00FF00;border-top: transparent; background-color:#00FF00; color:black;">

      Más info <i class="fa fa-arrow-circle-right" style="color:black;"></i>

    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6" style="width:300px; left:200px">

  <div class="small-box bg-yellow">

    <div class="inner" style="color:#F5EA04; border: 2px solid #F5EA04; background-color:#D59408;">

      <h3><?php echo number_format($totalClientes); ?></h3>

      <p>Beneficiarios</p>

    </div>

    <div class="icon">

      <i class="ion ion-person-add" style="color:#F5EA04;"></i>

    </div>

    <a href="clientes" class="small-box-footer" style="border: 2px solid #F5EA04;border-top: transparent; color:black;background-color:#F5EA04">

      Más info <i class="fa fa-arrow-circle-right" style="color:black;"></i>

    </a>

  </div>

</div>

<div class="col-lg-3 col-xs-6" style="width:300px; left:200px">

  <div class="small-box bg-red">

    <div class="inner" style="background:#02016D; border: 2px solid #FF0074; color: #FF0074;">

      <h3><?php echo number_format($totalProductos); ?></h3>

      <p>Productos</p>

    </div>

    <div class="icon">

      <i class="ion ion-ios-cart" style="color:#FF0074;"></i>

    </div>

    <a href="productos" class="small-box-footer" style="border: 2px solid #FF0074;border-top: transparent; color:black;background-color:#FF0074">

      Más info <i class="fa fa-arrow-circle-right" style="color:black;"></i>

    </a>

  </div>

</div>