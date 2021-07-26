<?php 

require_once "../controladores/cuenta.controlador.php";
require_once "../modelos/cuenta.modelo.php";

class AjaxCuentas{  

    /** EDITAR CUENTA */

    public $idCuenta;

    public function ajaxEditarCuenta(){

        $item = "id";
        $valor = $this->idCuenta;

        $respuesta = ControladorCuentas::ctrMostrarCuentas($item, $valor);

        echo json_encode($respuesta);

    }

}

if(isset($_POST["idCuenta"])){

    $cuenta = new AjaxCuentas();
    $cuenta -> idCuenta = $_POST["idCuenta"];
    $cuenta -> ajaxEditarCuenta();

}