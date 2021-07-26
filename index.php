<?php 

/** ======================================== 
 * 
 *  CONTROLADORES
 * 
 */
require_once "controladores/plantilla.controlador.php";
require_once "controladores/activos.controlador.php";
require_once "controladores/cuenta.controlador.php";
require_once "controladores/mantenimiento.controlador.php";
require_once "controladores/proveedores.controlador.php";
require_once "controladores/tickets.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/crearusuario.controlador.php";

/** ======================================== 
 * 
 *  MODELOS
 * 
 */


require_once "modelos/activos.modelo.php";
require_once "modelos/cuenta.modelo.php";
require_once "modelos/mantenimiento.modelo.php";
require_once "modelos/proveedores.modelo.php";
require_once "modelos/tickets.modelo.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/crearusuario.modelo.php";


$plantilla = new ControladorPlantilla();

$plantilla -> ctrPlantilla();







