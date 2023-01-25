<div id="back" style="background-color:white; color:#072664;"></div>

<div class="login-box" style="position:relative;top: -50px;">
  <img src="vistas/img/plantilla/logo.jpeg" class="img-responsive" width="500px" style="">
  <br>  <br>
  <div class="login-box-body" style="background-color:#FF3B76; color:#800080; font-family: monospace;border: 5px #FF692B dashed;">
    <div class="login-logo">

    </div>
    <p class="login-box-msg" style=" color:#fffaf0;  font-weight: bold; font-size: xx-large"> Ingresar al sistema</p>

    <form method="post">

      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" style="background-color:white; color:black;font-family: monospace;" required>
        <span class="glyphicon glyphicon-user form-control-feedback" style="background-color:#FF9B02; color:#F7FF00; "></span>

      </div>

      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" style="background-color:white; color:black;font-family: monospace;" required>
        <span class="glyphicon glyphicon-lock form-control-feedback" style="background-color:#07660E; color:#61FF00;"></span>

      </div>
      <br>
      <div class="row">

        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat" style="background-color:#0228FF; color:white; font-family: monospace; font-weight: bold; font-size: large; width:320px;  border: 3px solid #472988;">Ingresar</button>

        </div>

      </div>

      <?php

      $login = new ControladorUsuarios();
      $login->ctrIngresoUsuario();

      ?>

    </form>

  </div>

</div>