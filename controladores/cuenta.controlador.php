<?php

class ControladorCuentas{



    static public function ctrCrearCuenta(){


        if(isset($_POST["nombrecomercial"])){

            if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nombrecomercial"])){

                $ruta ="";

                    if(isset($_FILES["logoimg"]["tmp_name"])){ 

                        list($ancho, $alto) = getimagesize($_FILES["logoimg"]["tmp_name"]);

                        $nuevoancho = 150;
                        $nuevoalto = 150;

                        /**************  CREAMOS EL DIRECTORIO DONDE SE GUARDARA LA IMAGEN ***/

                        $directorio = "vistas/img/logos/".$_POST["nombrecomercial"];
                        mkdir($directorio, 0755);

                        if($_FILES["logoimg"]["type"] == "image/jpeg"){

                            $aleatorio = mt_rand(100,999); 

                            $ruta = "vistas/img/logos/".$_POST["nombrecomercial"]."/".$aleatorio.".jpg";

                            $origen = imagecreatefromjpeg($_FILES["logoimg"]["tmp_name"]);

                            $destino = imagecreatetruecolor($nuevoancho,$nuevoalto);

                            imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoancho, $nuevoalto, $ancho, $alto);

                            imagejpeg($destino, $ruta);

                        }

                        if($_FILES["logoimg"]["type"] == "image/png"){

                            $aleatorio = mt_rand(100,999); 

                            $ruta = "vistas/img/logos/".$_POST["nombrecomercial"]."/".$aleatorio.".png";

                            $origen = imagecreatefrompng($_FILES["logoimg"]["tmp_name"]);

                            $destino = imagecreatetruecolor($nuevoancho,$nuevoalto);

                            imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoancho, $nuevoalto, $ancho, $alto);

                            imagepng($destino, $ruta);

                        }

                        


                    }

                    $tabla = "bio_accounts";

                    $id_cta = bin2hex(openssl_random_pseudo_bytes(16));

                    $id_user = $_SESSION["id_user"];

                    $datos = array("id" => $id_cta,
                    "estatus" => $_POST["estatus"],
                    "nom_comercial" => $_POST["nombrecomercial"],
                    "acronimo" => $_POST["acronimo"],
                    "tel_principal" => $_POST["telefonoprincipal"],
                    "web" => $_POST["web"],
                    "biomedico" => $_POST["biomedico"],
                    "email" => $_POST["email"],
                    "date_entered" => date("Y-m-d H:i:s"),
                    "logoimg" => $ruta,
                    "razonsocial" => $_POST["razonsocial"],
                    "rfc" =>$_POST["rfc"],
                    "calle" =>$_POST["calle"],
                    "colonia" =>$_POST["colonia"],
                    "cp" =>$_POST["cp"],
                    "ciudad" =>$_POST["ciudad"],
                    "estado" =>$_POST["estado"],
                    "pais" =>$_POST["pais"],
                    "camas_censables" => $_POST["camas_censables"],
                    "sector" =>$_POST["sector"],
                    "perfil" =>$_POST["perfil"],
                    "registrado_por" => $id_user);

                    $respuesta = ModeloCuentas::mdlIngresarCuenta($tabla, $datos);

                    if($respuesta == "ok"){

                        if(isset($_POST["field_name"])){

                            $tablaubicaciones = "bio_ubicaciones_sububicaciones";
    
                            $id_ubicacion = bin2hex(openssl_random_pseudo_bytes(16));
    
                            $array_ubicaciones = $_POST["field_name"]; 
                            $array_sububicaciones = $_POST["sub_name"];
    
                            foreach ($array_ubicaciones as $clave=>$ubicacion){
    
                                $sububicacion = $array_sububicaciones[$clave];
    
                                $ubicaciones = array("id" => $id_ubicacion,
                                "id_cta" => $id_cta,
                                "ubicacion" => $ubicacion,
                                "sububicacion" => $sububicacion);
    
                            }

                            $respuestaubicaciones = ModeloUbicaciones::mdlIngresarUbicaciones($tablaubicaciones, $ubicaciones);
                            
                            if($respuestaubicaciones == "ok"){

                                echo '<script>
                
                                    Swal.fire({
                                        icon: "success",
                                        title: "Las ubicaciones han sido guardadas exitosamente",
                                        showConfirmButton: true, 
                                        confirmButtonText: "Cerrar",
                                        closeOnConfirm : false

                                    }).then((result)=>{
                                        if(result.value){
                                            window.location = "cuenta";
                                        }
                                    });
                
                                </script>';

                            }else{

                                echo '<script>
                
                                        Swal.fire({
                                            title: "Error al guardar las ubicaciones",
                                            icon: "error",
                                            showConfirmButton: true, 
                                            confirmButtonText: "Cerrar",
                                            closeOnConfirm : false
                                        }).then((result)=>{
                                            
                                                if(result.value){
                                                    window.location = "crearcuenta";
                                                }

                                        });
                                        
                                        </script>';
                            }


                        }


                        echo '<script>
                
                                Swal.fire({
                                    icon: "success",
                                    title: "La Cuenta ha sido creada exitosamente",
                                    showConfirmButton: true, 
                                    confirmButtonText: "Cerrar",
                                    closeOnConfirm : false

                                }).then((result)=>{
                                    if(result.value){
                                        window.location = "cuenta";
                                    }
                                });
                
                        </script>';

                    }else{

                        echo '<script>
                
                                        Swal.fire({
                                            title: "Error al crear las cuentas",
                                            icon: "error",
                                            showConfirmButton: true, 
                                            confirmButtonText: "Cerrar",
                                            closeOnConfirm : false
                                        }).then((result)=>{
                                            
                                                if(result.value){
                                                    window.location = "crearcuenta";
                                                }

                                        });
                                        
                                        </script>';

                    }

                    




            }else{

                echo '<script>
                
                Swal.fire({
                    title: "La cuenta no puede ir vacío o llevar caracteres especiales",
                    icon: "error",
                    showConfirmButton: true, 
                    confirmButtonText: "Cerrar",
                    closeOnConfirm : false
                }).then((result)=>{
                     
                        if(result.value){
                            window.location = "crearcuenta";
                        }

                });
                
                </script>';
            }

        }


    }

    static public function ctrMostrarCuentas($item,$valor){


        $tabla = "bio_accounts";

        $respuesta = ModeloCuentas::mdlMostrarCuentas($tabla, $item, $valor);

        return $respuesta;


    }



}