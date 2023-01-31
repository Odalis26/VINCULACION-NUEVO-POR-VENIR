<?php


require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/productos.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";
require_once "controladores/terrenosController.php";
require_once "controladores/informacion-fundacion.controlador.php";
require_once "controladores/telefono-fundacion.controlador.php";
require_once "controladores/correo-fundacion.controlador.php";
require_once "controladores/direccion-fundacion.controlador.php";

require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/productos.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/terrenos.php";
require_once "modelos/ventas.modelo.php";
require_once "modelos/informacion-fundacion.modelo.php";
require_once "modelos/telefono-fundacion.modelo.php";
require_once "modelos/correo-fundacion.modelo.php";
require_once "modelos/direccion-fundacion.modelo.php";
require_once "extensiones/vendor/autoload.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();