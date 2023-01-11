<aside class="main-sidebar"  style="background-color:white;">

	 <section class="sidebar"  style="background-color:white;">

		<ul class="sidebar-menu"  style="background-color:#ff1493;">

		<?php

		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicio"  style="background-color:black;font-weight: bold;">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="usuarios"  style="background-color:#04246E;font-weight: bold;">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

			echo '<li>

				<a href="categorias"  style="background-color:#04FA00;color:black;font-weight: bold;">

					<i class="fa fa-th"></i>
					<span>Categorías</span>

				</a>

			</li>

			<li>

				<a href="productos"  style="background-color:#ff1493;font-weight: bold;">

					<i class="fa fa-product-hunt"></i>
					<span>Productos</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li>

				<a href="clientes"  style="background-color:#FFC301;color:black;font-weight: bold;">

					<i class="fa fa-users"></i>
					<span>Beneficiarios</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li class="treeview">

				<a href="ventas"  style="background-color:#03A5C2;font-weight: bold;">

					<i class="fa fa-list-ul"  style="background-color:#03A5C2;"></i>
					
					<span  style="background-color:#03A5C2;">Donaciones</span>
					
					<span class="pull-right-container"  style="background-color:#03A5C2;">
					
						<i class="fa fa-angle-left pull-right"  style="background-color:#03A5C2;"></i>

					</span>

				</a>

				<ul class="treeview-menu" style="background-color:#03A5C2;">
					
					<li>

						<a href="ventas"  style="background-color:#03A5C2;font-weight: bold;">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar</span>

						</a>

					</li>

					<li>

						<a href="crear-venta"  style="background-color:#03A5C2;font-weight: bold;">
							
							<i class="fa fa-circle-o"></i>
							<span>Crear donación</span>

						</a>

					</li>';

					if($_SESSION["perfil"] == "Administrador"){

					echo '<li>

						<a href="reportes"  style="background-color:#03A5C2;font-weight: bold;">
							
							<i class="fa fa-circle-o"></i>
							<span>Reporte </span>

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