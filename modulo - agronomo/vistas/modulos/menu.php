


<aside class="main-sidebar"  style="background-color:white;">

	 <section class="sidebar"  style="background-color:white;">

		<ul class="sidebar-menu"  style="background-color:white;">

		<?php

		if($_SESSION["perfil"] == "Administrador"){

			echo '<br><br><br><br><br><br><br><li class="active">

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

			echo '<br><br><br><br><br><br><br><li>

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

		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor" || $_SESSION["perfil"] == "Agrónomo"){

			echo '<br><br><br><br><br><br><br><li>

				<a href="clientes"  style="background-color:#D59408;color:black;font-weight: bold;">

					<i class="fa fa-users" style="color:#F5EA04"></i>
					<span style="color:#F5EA04">Beneficiarios</span>

				</a>

			</li>';

		}
		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Agrónomo"){

			echo '<li>
				<a href="terrenos"  style="background-color:#00FF00;color:black;font-weight: bold;">
				<i class="bi bi-globe-americas" style="color:#1F8708"></i>
				<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-globe-americas" viewBox="0 0 16 16">
					<path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0ZM2.04 4.326c.325 1.329 2.532 2.54 3.717 3.19.48.263.793.434.743.484-.08.08-.162.158-.242.234-.416.396-.787.749-.758 1.266.035.634.618.824 1.214 1.017.577.188 1.168.38 1.286.983.082.417-.075.988-.22 1.52-.215.782-.406 1.48.22 1.48 1.5-.5 3.798-3.186 4-5 .138-1.243-2-2-3.5-2.5-.478-.16-.755.081-.99.284-.172.15-.322.279-.51.216-.445-.148-2.5-2-1.5-2.5.78-.39.952-.171 1.227.182.078.099.163.208.273.318.609.304.662-.132.723-.633.039-.322.081-.671.277-.867.434-.434 1.265-.791 2.028-1.12.712-.306 1.365-.587 1.579-.88A7 7 0 1 1 2.04 4.327Z"/>
			  	</svg>
					<span style="color:black">Terrenos</span>
				</a>
			</li>';

		}
		if($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Vendedor" || $_SESSION["perfil"] == "Agrónomo"){

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
							<span style="color:#FF5822">Reporte</span>

						</a>

					</li>';

					}
				

				echo '</ul>

			</li>';

		}
		if ($_SESSION["perfil"] == "Administrador" || $_SESSION["perfil"] == "Agrónomo") {

			echo '
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