$(".nuevoLogo").change(function () {

	var logo = this.files[0];


	var datosLogo = new FileReader;
	datosLogo.readAsDataURL(logo);

	$(datosLogo).on("load", function (event) {

		var rutaLogo = event.target.result;

		$(".previsualizarEditar").attr("src", rutaLogo);

	})
})

/*=============================================
EDITAR INFORMACION
=============================================*/
$(".tablas").on("click", "button.btnEditarInformacion", function () {

	var idInformacion = $(this).attr("idInformacion");

	var datos = new FormData();
	datos.append("idInformacion", idInformacion);

	$.ajax({
		url: "ajax/informacion-fundacion.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function (respuesta) {
			$("#editarNombre").val(respuesta["nombre"]);
			$("#editarMision").val(respuesta["mision"]);
			$("#editarVision").val(respuesta["vision"]);
			$("#editarQuienesSomos").val(respuesta["quienes_somos"]);
			$("#editarCorreo").val(respuesta["correo"]);
			$("#logoActual").val(respuesta["logo"]);
			$("#idInformacion").val(respuesta["id"]);

			if (respuesta["logo"] != "") {

				$(".previsualizarEditar").attr("src", respuesta["logo"]);

			} else {

				$(".previsualizarEditar").attr("src", "vistas/img/logo/default/logo-default.jpg");

			}
		}
	})
})

/*=============================================
EDITAR TELEFONO
=============================================*/
$(".tablaTelefono").on("click", "button.btnEditarTelefono", function () {

	var idTelefono = $(this).attr("idTelefono");

	var datosTelefono = new FormData();
	datosTelefono.append("idTelefono", idTelefono);

	$.ajax({
		url: "ajax/telefono-fundacion.ajax.php",
		method: "POST",
		data: datosTelefono,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success: function (respuestatelefono) {
			$("#editarTelefono").val(respuestatelefono["telefono"]);
			$("#idTelefono").val(respuestatelefono["id"]);
		}
		
	})


})

/*=============================================
ELIMINAR TELEFONO
=============================================*/
$(".tablaTelefono").on("click", "button.btnEliminarTelefono", function () {

	var idTelefono = $(this).attr("idTelefono");

	swal({
		title: '¿Está seguro de borrar el telefono?',
		text: "¡Si no lo está puede cancelar la acción!",
		type: 'warning',
		showCancelButton: true,
		confirmButtonColor: '#3085d6',
		cancelButtonColor: '#d33',
		cancelButtonText: 'Cancelar',
		confirmButtonText: 'Si, borrar telefono!'
	}).then(function (result) {

		if (result.value) {

			window.location = "index.php?ruta=informacion-fundacion&idTelefono=" + idTelefono;

		}

	})

})
