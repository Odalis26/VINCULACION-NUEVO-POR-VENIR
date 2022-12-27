<div id="back" style="background-color:#fffaf0; color:#800080;"></div>

<div class="login-box">

  <div class="login-box-body" style="background-color:#ff1493; color:#800080; font-family: monospace">
    <div class="login-logo">

      <img src="vistas/img/plantilla/" class="img-responsive" style="padding:30px 100px 0px 100px">

    </div>
    <p class="login-box-msg" style=" color:#fffaf0;  font-weight: bold; font-size: xx-large"> Ingresar al sistema</p>

    <form method="post">

      <div class="form-group has-feedback">

        <input type="text" class="form-control" placeholder="Usuario" name="ingUsuario" style="background-color:black; color:white;font-family: monospace;" required>
        <span class="glyphicon glyphicon-user form-control-feedback" style="background-color:#fffaf0; color:#ff69b4; "></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Contraseña" name="ingPassword" style="background-color:black; color:white;font-family: monospace;" required>
        <span class="glyphicon glyphicon-lock form-control-feedback" style="background-color:#fffaf0; color:#ff69b4;"></span>

      </div>
      <br>
      <div class="row">

        <div class="col-xs-4">

          <button type="submit" class="btn btn-primary btn-block btn-flat" style="background-color:#ff69b4; color:white; font-family: monospace; font-weight: bold; font-size: large; width:320px;  border: 6px solid #ff69b4;">Ingresar</button>

        </div>

      </div>

      <?php

      $login = new ControladorUsuarios();
      $login->ctrIngresoUsuario();

      ?>

    </form>

  </div>

</div>