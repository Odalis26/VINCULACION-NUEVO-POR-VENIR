$(".nuevoLogo").change(function () {

	var logo = this.files[0];


	var datosLogo = new FileReader;
	datosLogo.readAsDataURL(logo);

	$(datosLogo).on("load", function (event) {

		var rutaLogo = event.target.result;

		$(".previsualizarEditar").attr("src", rutaLogo);

	})
})

$(".tablas").on("click", "button.btnEditarInformacion", function () {

	var idInformacion = $(this).attr("idInformacion");

	var datos = new FormData();
	datos.append("idInformacion", idInformacion);

	$.ajax({
		url: "ajax/informacion.ajax.php",
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
			$("#editarTelefono").val(respuesta["numero"]);
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
