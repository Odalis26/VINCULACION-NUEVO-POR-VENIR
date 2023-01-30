/*=============================================
EDITAR TERRENO
=============================================*/
$(".tablas").on("click", ".btnEditarTerreno", function(){

	var idTerreno = $(this).attr("idTerreno");

	var datos = new FormData();
    datos.append("idTerreno", idTerreno);

    $.ajax({

      url:"ajax/terrenos.ajax.php",
      method: "POST",
      data: datos,
      cache: false,
      contentType: false,
      processData: false,
      dataType:"json",
      success:function(respuesta){
      
      	   $("#idTerreno").val(respuesta["id"]);
	       $("#editarBeneficiario").val(respuesta["beneficiario"]);
	       $("#editarPerimetro").val(respuesta["perimetro"]);
	       $("#editarArea").val(respuesta["area"]);
	       $("#editarAdaptabilidad").val(respuesta["tipo_terreno"]);
	       $("#editarTipo_suelo").val(respuesta["tipo_suelo"]);
           $("#editarPorcentaje_agua").val(respuesta["porcentaje_agua"]);
		   $("#editarPorcentaje_minerales").val(respuesta["porcentaje_minerales"]);
	  }

  	})

})

/*eliminar terreno */
$(".tablas").on("click", ".btnEliminarTerreno", function(){

  var idTerreno = $(this).attr("idTerreno");

  swal({
    title: '¿Está seguro de borrar el terreno?',
    text: "¡Si no lo está puede cancelar la acción!",
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    cancelButtonText: 'Cancelar',
    confirmButtonText: 'Si, borrar terreno!'
  }).then(function(result){

    if(result.value){

      window.location = "index.php?ruta=terrenos&idTerreno="+idTerreno;

    }

  })

})


