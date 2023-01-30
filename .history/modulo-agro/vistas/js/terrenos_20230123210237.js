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

