
<aside class="main-sidebar"  style="background-color:white; ">

	 <section class="sidebar"  style="background-color:white;position:relative; top:150px ">

		<ul class="sidebar-menu"  style="background-color:white;">

		<?php

		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">
				<a href="inicio"  style="background-color:#330470;font-weight: bold;">
					<i class="fa fa-home"  style="color:#00FF00"></i>
					<span style="color:#00FF00">Inicio</span>
				</a>
			</li>
			<li>
				<a href="usuarios"  style="background-color:#04246E;font-weight: bold;">
					<i class="fa fa-user"  style="color:#F5EA04"></i>
					<span style="color:#F5EA04">Usuarios</span>
				</a>
			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

			echo '<li>
				<a href="categorias"  style="background-color:#1F8708;color:black;font-weight: bold;">
					<i class="fa fa-th" style="color:#00FF00"></i>
					<span style="color:#00FF00">Categorías</span>
				</a>
			</li>
			<li>
				<a href="productos"  style="background-color:#02016D;font-weight: bold;">
					<i class="fa fa-product-hunt" style="color:#FF0074"></i>
					<span style="color:#FF0074">Productos</span>
				</a>
			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Agrónomo"){

			echo '<li>
				<a href="clientes"  style="background-color:#D59408;color:black;font-weight: bold;">
					<i class="fa fa-users" style="color:#F5EA04"></i>
					<span style="color:#F5EA04">Beneficiarios</span>
				</a>
			</li>';

		}
		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Agrónomo"){

			echo '<li>
				<a href="terrenos"  style="background-color:#D59408;color:black;font-weight: bold;">
					<i class="fa fa-users" style="color:#F5EA04"></i>
					<span style="color:#F5EA04">Terrenos</span>
				</a>
			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" ||  $_SESSION["perfil"] == "Agrónomo"){

			echo '<li class="treeview">
				<a href="ventas"  style="background-color:#330470;font-weight: bold;">
					<i class="fa fa-list-ul"  style="background-color:#330470;color:#FF5822"></i>
					
					<span  style="background-color:#330470;color:#FF5822">Donaciones</span>
					
					<span class="pull-right-container"  style="background-color:#330470;">
					
						<i class="fa fa-angle-left pull-right"  style="background-color:#330470;color:#FF5822"></i>
					</span>
				</a>
				<ul class="treeview-menu" style="background-color:#330470;">
					
					<li>
						<a href="ventas"  style="background-color:#330470;font-weight: bold;">
							
							<i class="fa fa-circle-o" style="color:#FF5822"></i>
							<span style="color:#FF5822">Administrar</span>
						</a>
					</li>
					<li>
						<a href="crear-venta"  style="background-color:#330470;font-weight: bold;">
							
							<i class="fa fa-circle-o" style="color:#FF5822"></i>
							<span style="color:#FF5822">Crear donación</span>
						</a>
					</li>';

					if($_SESSION["perfil"] == "Administrador"){

					echo '<li>
						<a href="reportes"  style="background-color:#330470;font-weight: bold;">
							
							<i class="fa fa-circle-o" style="color:#FF5822"></i>
							<span style="color:#FF5822">Reporte </span>
						</a>
					</li>';

					}
				echo '</ul>
			</li>';

		}
		
		if ($_SESSION["perfil"] == "Administrador") {

			echo '<li class="active">
					<li>
						<a href="informacion-fundacion"  style="background-color:#615e9b; color:azure;">
						<i class="fa fa-globe"></i>
							<span><strong>Página estática</strong></span>
						</a>
					</li>';
		}


		?>

		</ul>

	 </section>

</aside>