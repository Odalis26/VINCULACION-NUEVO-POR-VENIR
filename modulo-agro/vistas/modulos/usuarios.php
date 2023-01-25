<?php

if($_SESSION["perfil"] == "Especial" || $_SESSION["perfil"] == "Vendedor"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}

?>

<br><br><br><br>
<div class="content-wrapper" style="background-color:white; position:relative; width:500px; left:900px">

  <section class="content-header" style="background-color:white">
    
    <h1 style="color:#04246E; font-family: monospace; font-weight: bold;">
      
      Administrar usuarios
    
    </h1>

    <ol class="breadcrumb" style="background-color:white">
      
      <li><a href="inicio" style="background-color:white;color:black"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Administrar usuarios</li>
    
    </ol>

  </section>

  <section class="content" style="background-color:white">

    <div class="box" style="background-color:white; border: 2px white solid;">

      <div class="box-header with-border" style="background-color:white; border: 2px white solid;">
  
        <button class="btn btn-primary" data-toggle="modal" data-target="#modalAgregarUsuario" style="background-color:#04246E; color:#F5EA04; border: 2px #04246E solid;">
          
          Agregar usuario

        </button>

      </div>

      <div class="box-body" style="background-color:white; color:black; border: 2px white solid;">
        
       <table class="table table-bordered table-striped dt-responsive tablas" width="100%" style="background-color:white; color:black; border: 2px white solid;">
         
        <thead>
         
         <tr>
           
           <th style="width:10px">#</th>
           <th>Nombre</th>
           <th>Usuario</th>
           <th>Foto</th>
           <th>Perfil</th>
           <th>Estado</th>
           <th>Último login</th>
           <th>Acciones</th>

         </tr> 

        </thead>

        <tbody>

        <?php

        $item = null;
        $valor = null;

        $usuarios = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

       foreach ($usuarios as $key => $value){
         
          echo ' <tr>
                  <td>'.($key+1).'</td>
                  <td>'.$value["nombre"].'</td>
                  <td>'.$value["usuario"].'</td>';

                  if($value["foto"] != ""){

                    echo '<td><img src="'.$value["foto"].'" class="img-thumbnail" width="120px" style="border: 4px #04246E solid;"></td>';

                  }else{

                    echo '<td><img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail" width="120px" style="border: 4px #04246E solid;"></td>';

                  }

                  echo '<td>'.$value["perfil"].'</td>';

                  if($value["estado"] != 0){

                    echo '<td><button class="btn btn-success btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="0">Activado</button></td>';

                  }else{

                    echo '<td><button class="btn btn-danger btn-xs btnActivar" idUsuario="'.$value["id"].'" estadoUsuario="1">Desactivado</button></td>';

                  }             

                  echo '<td>'.$value["ultimo_login"].'</td>
                  <td>

                    <div class="btn-group">
                        
                      <button class="btn btn-warning btnEditarUsuario" idUsuario="'.$value["id"].'" data-toggle="modal" data-target="#modalEditarUsuario"><i class="fa fa-pencil"></i></button>

                      <button class="btn btn-danger btnEliminarUsuario" idUsuario="'.$value["id"].'" fotoUsuario="'.$value["foto"].'" usuario="'.$value["usuario"].'"><i class="fa fa-times"></i></button>

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
MODAL AGREGAR USUARIO
======================================-->

<div id="modalAgregarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#04246E; color:white">

          <button type="button" style="color:#F5EA04;" class="close" data-dismiss="modal">&times;</button>

          <h4 class="modal-title"  style="color:#F5EA04;">Agregar usuario</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="background:white; color:white">

          <div class="box-body" style="background:white; color:white; border: 2px white solid;">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#04246E; color:#F5EA04; border: 2px #04246E solid;"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoNombre" placeholder="Ingresar nombre" style="border: 2px #04246E solid;background:white;color:#04246E;" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#04246E; color:#F5EA04; border: 2px #04246E solid;"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" name="nuevoUsuario" placeholder="Ingresar usuario" id="nuevoUsuario" style="border: 2px #04246E solid;background:white;color:#04246E;" required>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#04246E; color:#F5EA04; border: 2px #04246E solid;"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" name="nuevoPassword" placeholder="Ingresar contraseña" style="border: 2px #04246E solid; background:white;color:#04246E;" required>

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#04246E; color:#F5EA04; border: 2px #04246E solid;"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="nuevoPerfil" style="background:white; color:#04246E; border: 2px #04246E solid; ">
                  
                  <option value="" style="background:#04246E;border: 2px #04246E solid; color:white;">Selecionar perfil</option>

                  <option value="Administrador">Administrador</option>

                  <option value="Especial">Especial</option>

                  <option value="Vendedor">Vendedor</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel" style="background:white; color:#04246E; border: 2px white solid;">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="nuevaFoto" style="background:#04246E; color:white; border: 2px #04246E solid;">

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" class="img-thumbnail previsualizar" width="130px" style="background:#04246E; color:#04246E; border: 2px #04246E solid;">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer"  style="background-color:white; color:black; border: 2px white solid;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal" style="background:#6A0436; color:white; border: 2px #6A0436 solid;">Salir</button>

          <button type="submit" class="btn btn-primary" style="background:#04246E; color:#F5EA04; border: 2px #04246E solid;">Guardar usuario</button>

        </div>

        <?php

          $crearUsuario = new ControladorUsuarios();
          $crearUsuario -> ctrCrearUsuario();

        ?>

      </form>

    </div>

  </div>

</div>

<!--=====================================
MODAL EDITAR USUARIO
======================================-->

<div id="modalEditarUsuario" class="modal fade" role="dialog">
  
  <div class="modal-dialog">

    <div class="modal-content">

      <form role="form" method="post" enctype="multipart/form-data">

        <!--=====================================
        CABEZA DEL MODAL
        ======================================-->

        <div class="modal-header" style="background:#04246E; color:white">

          <button type="button" class="close" data-dismiss="modal" style="background:#04246E; color:white">&times;</button>

          <h4 class="modal-title" style="background:#04246E;color:#F5EA04;">Editar usuario</h4>

        </div>

        <!--=====================================
        CUERPO DEL MODAL
        ======================================-->

        <div class="modal-body" style="background:white; color:white">

          <div class="box-body" style="background:white; color:white; border: 2px white solid;">

            <!-- ENTRADA PARA EL NOMBRE -->
            
            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#F5EA04; color:#04246E; border: 2px transparent solid;"><i class="fa fa-user"></i></span> 

                <input type="text" class="form-control input-lg" id="editarNombre" name="editarNombre" value="" style="border: 2px #F5EA04 solid;background:#04246E;color:white;" required>

              </div>

            </div>

            <!-- ENTRADA PARA EL USUARIO -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#F5EA04; color:#04246E; border: 2px transparent solid;"><i class="fa fa-key"></i></span> 

                <input type="text" class="form-control input-lg" id="editarUsuario" name="editarUsuario"  value="" style="border: 2px #F5EA04 solid;background:white;color:#04246E;" readonly>

              </div>

            </div>

            <!-- ENTRADA PARA LA CONTRASEÑA -->

             <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#F5EA04; color:#04246E; border: 2px transparent solid;"><i class="fa fa-lock"></i></span> 

                <input type="password" class="form-control input-lg" name="editarPassword" placeholder="Escriba la nueva contraseña" style="border: 2px #F5EA04 solid;background:#04246E;color:white;">

                <input type="hidden" id="passwordActual" name="passwordActual" style="background:#000; color:white;">

              </div>

            </div>

            <!-- ENTRADA PARA SELECCIONAR SU PERFIL -->

            <div class="form-group">
              
              <div class="input-group">
              
                <span class="input-group-addon" style="background:#F5EA04; color:#04246E; border: 2px transparent solid;"><i class="fa fa-users"></i></span> 

                <select class="form-control input-lg" name="editarPerfil" style="border: 2px #F5EA04 solid;background:#04246E;color:white;">
                  
                  <option value="" id="editarPerfil" style="background:white;border: 2px #F5EA04 solid;color:#04246E"></option>

                  <option value="Administrador">Administrador</option>

                  <option value="Especial">Especial</option>

                  <option value="Vendedor">Vendedor</option>

                </select>

              </div>

            </div>

            <!-- ENTRADA PARA SUBIR FOTO -->

             <div class="form-group">
              
              <div class="panel" style="background:white; color:#04246E; border: 2px white solid;">SUBIR FOTO</div>

              <input type="file" class="nuevaFoto" name="editarFoto" style="background:#F5EA04; color:#04246E; border: 2px #F5EA04 solid;">

              <p class="help-block">Peso máximo de la foto 2MB</p>

              <img src="vistas/img/usuarios/default/anonymous.png" style="background:#F5EA04; color:#04246E; border: 2px #F5EA04 solid;" class="img-thumbnail previsualizarEditar" width="130px">

              <input type="hidden" name="fotoActual" id="fotoActual">

            </div>

          </div>

        </div>

        <!--=====================================
        PIE DEL MODAL
        ======================================-->

        <div class="modal-footer" style="background:white; color:white; border: 2px white solid;">

          <button type="button" class="btn btn-default pull-left" data-dismiss="modal" style="background:#6A0436; color:white; border: 2px #6A0436 solid;">Salir</button>

          <button type="submit" class="btn btn-primary" style="background:#F5EA04; color:#04246E; border: 2px #F5EA04 solid;">Modificar usuario</button>

        </div>

     <?php

          $editarUsuario = new ControladorUsuarios();
          $editarUsuario -> ctrEditarUsuario();

        ?> 

      </form>

    </div>

  </div>

</div>

<?php

  $borrarUsuario = new ControladorUsuarios();
  $borrarUsuario -> ctrBorrarUsuario();

?> 


