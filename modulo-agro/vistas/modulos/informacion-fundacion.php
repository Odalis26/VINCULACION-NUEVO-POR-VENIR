<?php

if ($_SESSION["perfil"] == "Especial") {

  echo '<script>
    window.location = "inicio";
  </script>';
  return;
}

?>

<div class="content-wrapper" style="background-color:#FFFFFF">

  <section class="content-header" style="background-color:#FFFFFF">
    <h1 style="color:#615e9b; font-family: monospace; font-weight: bold;">
      Administrar página estática
    </h1>
    <ol class="breadcrumb" style="background-color:#FFFFFF">
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      <li class="active">Administrar página estática</li>
    </ol>
  </section>

  <section class="content" style="background-color:#FFFFFF">

    <!-- INFORMACION GENERAL  -->
    <div class="box" style="background-color:#FFFFFF; border: 2px white solid;">

      <div class="box-body" style="background-color:white; color:black; border: 2px white solid;">

        <table class="table table-bordered table-striped dt-responsive tablas" width="100%"
          style="background-color:white; color:black; border: none;">

          <thead style="background-color:white; color:black; border: 2px white solid;">
            <h3 style="color:#615e9b;">Información general</h3>
            <tr>
              <th style="width:10%;">Nombre</th>
              <th style="width:20%;">Misión</th>
              <th style="width:20%;">Visión</th>
              <th style="width:20%;">Quiénes somos</th>
              <th style="width:10%;">Correo</th>
              <th style="">Logo</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $item = null;
            $valor = null;
            $informacion = ControladorInformacion::ctrMostrarInformacion($item, $valor);

            foreach ($informacion as $key => $value) {
              echo '<td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $value["nombre"] . '</td>
            <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $value["mision"] . '</td>
            <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $value["vision"] . '</td>
                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $value["quienes_somos"] . '</td>
                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $value["correo"] . '</td>
                    <td><img src="' . $value["logo"] . '" width="120px"></td>
                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">
                    <div class="btn-group" >
                        <button class="btn btn-warning btnEditarInformacion" style="background:#63FC00; color:black; border: 2px #63FC00 solid;" idInformacion="' . $value["id"] . '" data-toggle="modal" data-target="#modalEditarInformacion"><i class="fa fa-pencil"></i></button>
                    </div>
                    </td>
                  </tr>';
            }
            ?>
          </tbody>

        </table>

      </div>

    </div>

    <!-- TELEFONO -->
    <div class="box" style="background-color:#FFFFFF; border: 2px white solid;">


      <div class="box-body" style="background-color:white; color:black; border: 2px white solid;">

        <table class="table table-bordered table-striped dt-responsive tablaTelefono" width="100%"
          style="background-color:white; color:black; border: 1px black solid;">

          <thead style="background-color:white; color:black; border: 2px white solid;">
            <h3 style="color:#615e9b;">Teléfono</h3>
            <div class="box-header with-border" style="background-color:white; border: 2px white solid;">

              <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarTelefono"
                style="background-color:#615e9b; color:white; border: 2px #615e9b solid;">

                Agregar teléfono

              </button>

            </div>

            <tr>
              <th style="width:10%;">Teléfono</th>
            </tr>
          </thead>

          <tbody>
            <?php
            $item = null;
            $valor = null;
            $telefono = ControladorTelefonoFundacion::ctrMostrarTelefonos($item, $valor);

            foreach ($telefono as $key => $numero) {
              echo '
                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">' . $numero["telefono"] . '</td>
                    <td style="width:10px; background-color:white; color:black; border: 2px white solid;">
                    <div class="btn-group" >
                        <button class="btn btn-warning btnEditarTelefono" style="background:#63FC00; color:black; border: 2px #63FC00 solid;" idTelefono="' . $numero["id"] . '" data-toggle="modal" data-target="#modalEditarTelefono"><i class="fa fa-pencil"></i></button>
                        <button class="btn btn-danger btnEliminarTelefono" style="background:#6A0436; color:white; border: 2px #6A0436 solid;" idTelefono="' . $numero["id"] . '"><i class="fa fa-times"></i></button>
                    </div>
                    </td>
                  </tr>';
            }
            ?>
          </tbody>

        </table>

      </div>

    </div>

  </section>

</div>

<!--=====================================
MODAL EDITAR PAGINA ESTATICA
======================================-->

<div id="modalEditarInformacion" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <div class="modal-header" style="background:#615e9b; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Editar información </h4>

        </div>

        <div class="modal-body" style="background:white; color:white">

          <div class="box-body" style="background:white; color:white; border: 2px white solid;">

            <!-- ENTRADA PARA EL NOMBRE -->

            <div class="form-group" style="background:white; color:white">

              <div class="input-group">

                <span class="input-group-addon" style="background:white; color:black; border: 2px #615e9b solid;"><i
                    class="fa fa-home"></i></span>
                <input type="text" class="form-control input-lg" name="editarNombre" id="editarNombre"
                  style="background-color: #615e9b;  color: azure; border:none" required>
                <input type="hidden" name="idInformacion" id="idInformacion" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL MISION -->

            <div class="form-group" style="background:white; color:white">

              <div class="input-group">

                <span class="input-group-addon" style="background:white; color:black; border: 2px #615e9b solid;"><i
                    class="fa fa-users"></i></span>
                <textarea class="form-control input-lg" name="editarMision" id="editarMision" rows="5"
                  style="background-color: #615e9b;  color: azure; border:none" required></textarea>

              </div>

            </div>

            <!-- ENTRADA PARA EL VISION -->

            <div class="form-group" style="background:white; color:white">

              <div class="input-group">

                <span class="input-group-addon" style="background:white; color:black; border: 2px #615e9b solid;"><i
                    class="fa fa-users"></i></span>
                <textarea class="form-control input-lg" name="editarVision" id="editarVision" rows="5"
                  style="background-color: #615e9b;  color: azure; border:none" required></textarea>

              </div>

            </div>

            <!-- ENTRADA PARA QUIENES SOMOS -->

            <div class="form-group" style="background:white; color:white">

              <div class="input-group">

                <span class="input-group-addon" style="background:white; color:black; border: 2px #615e9b solid;"><i
                    class="fa fa-users"></i></span>
                <textarea class="form-control input-lg" name="editarQuienesSomos" id="editarQuienesSomos" rows="5"
                  style="background-color: #615e9b;  color: azure; border:none" required></textarea>

              </div>

            </div>

            <!-- ENTRADA PARA EL CORREO -->

            <div class="form-group" style="background:white; color:white">

              <div class="input-group">

                <span class="input-group-addon" style="background:white; color:black; border: 2px #615e9b solid;"><i
                    class="fa fa-envelope"></i></span>
                <input type="text" class="form-control input-lg" name="editarCorreo" id="editarCorreo"
                  style="background-color: #615e9b;  color: azure; border:none" required>

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

            <div class="form-group">

              <div class="panel" style="background:white; color:black; border: 2px white solid;">SUBIR IMAGEN</div>
              <input type="file" class="nuevoLogo" name="nuevoLogo" accept="image/*"
                style="background:#615e9b; color:white;">
              <img src="vistas/img/logo/default/logo-default.jpg" style="border: none; background-color:white;"
                class="img-thumbnail previsualizarEditar" width="180px">
              <input type="hidden" name="logoActual" id="logoActual">

            </div>

          </div>

        </div>

        <div class="modal-footer" style="background-color:white; color:black; border: 2px white solid;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal"
            style="background:#6A0436; color:white; border: 2px #6A0436 solid;">Salir</button>
          <button type="submit" class="btn btn-primary"
            style="background:#615e9b; color:white; border: 2px #615e9b solid;">Guardar cambios</button>

        </div>

        <?php
        $editarInformacion = new ControladorInformacion();
        $editarInformacion->ctrEditarInformacion();
        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL AGREGAR TELEFONO
======================================-->

<div id="modalAgregarTelefono" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#615e9b; color:white">

          <button type="button" class="close" data-dismiss="modal" style="color:black">&times;</button>

          <h4 class="modal-title">Agregar teléfono</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="background:white; color:white">

          <div class="box-body" style="background:white; color:white; border: 2px white solid;">
            <br>
            <!-- ENTRADA PARA EL NUMERO -->

            <div class="form-group" style="background:white; color:white">

              <div class="input-group">

                <span class="input-group-addon" style="background:white; color:black; border: 2px #615e9b solid;"><i
                    class="fa fa-phone"></i></span>
                <input type="text" class="form-control input-lg" name="nuevoTelefono" placeholder="Ingresar telefono"
                style="background-color: #615e9b;  color: azure; border:none;" required>
                <input type="hidden" name="idInformacion" id="idInformacion" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" style="background-color:white; color:black; border: 2px white solid;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal"
            style="background:#6A0436; color:white; border: 2px #6A0436 solid;">Salir</button>

          <button type="submit" class="btn btn-primary"
            style="background:#615e9b; color:white; border: 2px #615e9b solid;">Guardar teléfono</button>

        </div>

        <?php

        $crearTelefono = new ControladorTelefonoFundacion();
        $crearTelefono->ctrCrearTelefono();

        ?>

      </form>

    </div>

  </div>

</div>


<!--=====================================
MODAL EDITAR TELEFONO
======================================-->

<div id="modalEditarTelefono" class="modal fade" role="dialog">

  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#615e9b; color:white">

          <button type="button" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title">Editar telefono</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="background:white; color:white">

          <div class="box-body" style="background:white; color:white; border: 2px white solid;">
            <br>

            <!-- ENTRADA PARA EL NUMERO -->

            <div class="form-group" style="background:white; color:white">

              <div class="input-group">

                <span class="input-group-addon" style="background:white; color:black; border: 2px #615e9b solid;"><i
                    class="fa fa-phone"></i></span>
                <input type="text" class="form-control input-lg" name="editarTelefono" id="editarTelefono"
                  style="background-color: #615e9b;  color: azure; border:none;" required>
                <input type="hidden" name="idTelefono" id="idTelefono" required>

              </div>

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" style="background-color:white; color:black; border: 2px white solid;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal"
            style="background:#6A0436; color:white; border: 2px #6A0436 solid;">Salir</button>

          <button type="submit" class="btn btn-primary"
            style="background:#615e9b; color:white; border: 2px #615e9b solid;">Guardar cambios</button>

        </div>

        <?php

        $editarTelefono = new ControladorTelefonoFundacion();
        $editarTelefono->ctrEditarTelefono();

        ?>

      </form>

    </div>

  </div>

</div>

<?php

$borrarTelefono = new ControladorTelefonoFundacion();
$borrarTelefono->ctrBorrarTelefono();

?>