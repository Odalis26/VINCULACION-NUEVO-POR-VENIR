<aside class="main-sidebar"  style="background-color:#ff1493;">

	 <section class="sidebar"  style="background-color:#ff1493;">

		<ul class="sidebar-menu"  style="background-color:#ff1493;">

		<?php

		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicio"  style="background-color:#ff1493;">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="usuarios"  style="background-color:#ff1493;">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

			echo '<li>

				<a href="categorias"  style="background-color:#ff1493;">

					<i class="fa fa-th"></i>
					<span>Categorías</span>

				</a>

			</li>

			<li>

				<a href="productos"  style="background-color:#ff1493;">

					<i class="fa fa-product-hunt"></i>
					<span>Productos</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li>

				<a href="clientes"  style="background-color:#ff1493;">

					<i class="fa fa-users"></i>
					<span>Propietario de terreno</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li class="treeview">

				<a href="#"  style="background-color:#ff1493;">

					<i class="fa fa-list-ul"  style="background-color:#ff1493;"></i>
					
					<span  style="background-color:#ff1493;">Donaciones</span>
					
					<span class="pull-right-container"  style="background-color:#ff1493;">
					
						<i class="fa fa-angle-left pull-right"  style="background-color:#ff1493;"></i>

					</span>

				</a>

				<ul class="treeview-menu">
					
					<li>

						<a href="ventas"  style="background-color:#ff1493;">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar donaciones</span>

						</a>

					</li>

					<li>

						<a href="crear-venta"  style="background-color:#ff1493;">
							
							<i class="fa fa-circle-o"></i>
							<span>Crear donación</span>

						</a>

					</li>';

					if($_SESSION["perfil"] == "Administrador"){

					echo '<li>

						<a href="reportes"  style="background-color:#ff1493;">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte de donaciones</span>

						</a>

					</li>';

					}

				

				echo '</ul>

			</li>';

		}

		?>

		</ul>

	 </section>

</aside>