<?php

require_once "conexion.php";

class ModeloCuentas{

    /** CREAR CUENTA */

    static public function mdlIngresarCuenta($tabla, $datos){


        $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(id,estatus,nom_comercial,acronimo,tel_principal,web,biomedico,email,pais,ciudad,estado,razonsocial,rfc,calle,colonia,cp,camas_censables,sector,perfil,date_entered,registrado_por,logo)VALUES(:id,UPPER(:estatus),UPPER(:nom_comercial),UPPER(:acronimo),:tel_principal,:web,UPPER(:biomedico),:email,UPPER(:pais),UPPER(:ciudad),UPPER(:estado),UPPER(:razonsocial),UPPER(:rfc),UPPER(:calle),UPPER(:colonia),:cp,UPPER(:camas_censables),UPPER(:sector),UPPER(:perfil),:date_entered,:registrado_por,:logo)");

        $stmt -> bindParam(":id", $datos["id"], PDO::PARAM_STR);
        $stmt -> bindParam(":estatus", $datos["estatus"], PDO::PARAM_STR);
        $stmt -> bindParam(":nom_comercial", $datos["nom_comercial"], PDO::PARAM_STR);
        $stmt -> bindParam(":acronimo", $datos["acronimo"], PDO::PARAM_STR);
        $stmt -> bindParam(":tel_principal", $datos["tel_principal"], PDO::PARAM_STR);
        $stmt -> bindParam(":web", $datos["web"], PDO::PARAM_STR);
        $stmt -> bindParam(":biomedico", $datos["biomedico"], PDO::PARAM_STR);
        $stmt -> bindParam(":email", $datos["email"], PDO::PARAM_STR);
        $stmt -> bindParam(":date_entered", $datos["date_entered"], PDO::PARAM_STR);
        $stmt -> bindParam(":logo", $datos["logoimg"], PDO::PARAM_STR);
        $stmt -> bindParam(":razonsocial", $datos["razonsocial"], PDO::PARAM_STR);
        $stmt -> bindParam(":rfc", $datos["rfc"], PDO::PARAM_STR);
        $stmt -> bindParam(":calle", $datos["calle"], PDO::PARAM_STR);
        $stmt -> bindParam(":colonia", $datos["colonia"], PDO::PARAM_STR);
        $stmt -> bindParam(":cp", $datos["cp"], PDO::PARAM_STR);
        $stmt -> bindParam(":ciudad", $datos["ciudad"], PDO::PARAM_STR);
        $stmt -> bindParam(":estado", $datos["estado"], PDO::PARAM_STR);
        $stmt -> bindParam(":pais", $datos["pais"], PDO::PARAM_STR);
        $stmt -> bindParam(":camas_censables", $datos["camas_censables"], PDO::PARAM_STR);
        $stmt -> bindParam(":sector", $datos["sector"], PDO::PARAM_STR);
        $stmt -> bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);
        $stmt -> bindParam(":registrado_por", $datos["registrado_por"], PDO::PARAM_STR);


        if($stmt->execute()){
            return "ok";
        }else{
            return  "error";
        }

        $stmt->close();
        $stmt = null;


    }

    static public function mdlMostrarCuentas($tabla, $item, $valor){

        if($item != null){

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ");

            $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

            $stmt -> execute();

            return $stmt -> fetch();


        }else{

            $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

            $stmt -> execute();

            return $stmt -> fetchAll();

        }

        $stmt -> close();
        $stmt = null;

    }

    

}

class ModeloUbicaciones{

    static public function mdlIngresarUbicaciones($tablaubicaciones, $ubicaciones){

        $stmt = Conexion::conectar()->prepare("INSERT INTO $tablaubicaciones(id,id_cta,ubicacion,sububicacion)VALUES(:id,:id_cta,:ubicacion,:sububicacion)");

        $stmt -> bindParam(":id", $ubicaciones["id"], PDO::PARAM_STR);
        $stmt -> bindParam(":id_cta", $ubicaciones["id_cta"], PDO::PARAM_STR);
        $stmt -> bindParam(":ubicacion", $ubicaciones["ubicacion"], PDO::PARAM_STR);
        $stmt -> bindParam(":sububicacion", $ubicaciones["sububicacion"], PDO::PARAM_STR);

        if($stmt->execute()){
            return "ok";
        }else{
            return  "error";
        }

        $stmt->close();
        $stmt = null;

    }
}