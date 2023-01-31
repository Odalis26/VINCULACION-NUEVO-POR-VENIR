<?php

error_reporting(0);

if(isset($_GET["fechaInicial"])){

    $fechaInicial = $_GET["fechaInicial"];
    $fechaFinal = $_GET["fechaFinal"];

}else{

$fechaInicial = null;
$fechaFinal = null;

}

$respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);

$arrayFechas = array();
$arrayVentas = array();
$sumaPagosMes = array();

foreach ($respuesta as $key => $value) {

	#Capturamos sólo el año y el mes
	$fecha = substr($value["fecha"],0,7);

	#Introducir las fechas en arrayFechas
	array_push($arrayFechas, $fecha);

	#Capturamos las ventas
	$arrayVentas = array($fecha => $value["total"]);

	#Sumamos los pagos que ocurrieron el mismo mes
	foreach ($arrayVentas as $key => $value) {
		
		$sumaPagosMes[$key] += $value;
	}

}


$noRepetirFechas = array_unique($arrayFechas);


?>

<!--=====================================
GRÁFICO DE DONACIONES
======================================-->


<div class="box box-solid bg-teal-gradient" style="background-color:white; color:#800080;">
	
	<div class="box-header" style="background-color:black; color:#00e7ff;">
		
 		<i class="fa fa-th" style="color:#00e7ff;"></i>

  		<h3 class="box-title" style="font-weight: 700;">Gráfico de donaciones</h3>

	</div>

	<div class="box-body border-radius-none nuevoGraficoVentas" style="background-color:white; color:#800080;">

		<div class="chart" id="line-chart-ventas" style="height: 250px; color:#00FF00;"></div>

  </div>

</div>

<script>
	
 var line = new Morris.Line({
    element          : 'line-chart-ventas',
    resize           : true,
    data             : [

    <?php

    if($noRepetirFechas != null){

	    foreach($noRepetirFechas as $key){

	    	echo "{ y: '".$key."', donaciones: ".$sumaPagosMes[$key]." },";


	    }

	    echo "{y: '".$key."', donaciones: ".$sumaPagosMes[$key]." }";

    }else{

       echo "{ y: '0', donaciones: '0' }";

    }

    ?>

    ],
    xkey             : 'y',
    ykeys            : ['donaciones'],
    labels           : ['donaciones'],
    lineColors       : ['#00e7ff'],
    lineWidth        : 2,
    hideHover        : 'auto',
    gridTextColor    : 'black',
    gridStrokeWidth  : 0.4,
    pointSize        : 4,
    pointStrokeColors: ['#00e7ff'],
    gridLineColor    : 'black',
    gridTextFamily   : 'Open Sans',
    preUnits         : '$',
    gridTextSize     : 10
  });

</script>