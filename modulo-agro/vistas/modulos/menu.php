<aside class="main-sidebar"  style="background-color:white;">

	 <section class="sidebar"  style="background-color:white;">

		<ul class="sidebar-menu"  style="background-color:#ff1493;">

		<?php

		if($_SESSION["perfil"] == "Administrador"){

			echo '<li class="active">

				<a href="inicios"  style="background-color:black;">

					<i class="fa fa-home"></i>
					<span>Inicio</span>

				</a>

			</li>

			<li>

				<a href="usuarios"  style="background-color:#04246E;">

					<i class="fa fa-user"></i>
					<span>Usuarios</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Especial"){

			echo '<li>

				<a href="categorias"  style="background-color:#04FA00;color:black;">

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

				<a href="clientes"  style="background-color:#FFC301;color:black">

					<i class="fa fa-users"></i>
					<span>Beneficiarios</span>

				</a>

			</li>
			<li>

				<a href="terrenos"  style="background-color:#E9967A;color:black">

					<i class="fa fa-area-chart"></i>
					<span>terrenos</span>

				</a>

			</li>';

		}

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor"){

			echo '<li class="treeview">

				<a href="#"  style="background-color:#03A5C2;">

					<i class="fa fa-list-ul"  style="background-color:#03A5C2;"></i>
					
					<span  style="background-color:#03A5C2;">Donaciones</span>
					
					<span class="pull-right-container"  style="background-color:#03A5C2;">
					
						<i class="fa fa-angle-left pull-right"  style="background-color:#03A5C2;"></i>

					</span>

				</a>

				<ul class="treeview-menu" style="background-color:#03A5C2;">
					
					<li>

						<a href="ventas"  style="background-color:#03A5C2;">
							
							<i class="fa fa-circle-o"></i>
							<span>Administrar donaciones</span>

						</a>

					</li>

					<li>

						<a href="crear-venta"  style="background-color:#03A5C2;">
							
							<i class="fa fa-circle-o"></i>
							<span>Crear donación</span>

						</a>

					</li>';

					if($_SESSION["perfil"] == "Administrador"){

					echo '<li>

						<a href="reportes"  style="background-color:#03A5C2;">
							
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