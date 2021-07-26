<?php 

session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMMS | Biomédica Aplicada</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="vistas/assets/css/bootstrap.css">
    <link rel="stylesheet" href="vistas/assets/vendors/simple-datatables/style.css">
    <link rel="stylesheet" href="vistas/assets/vendors/perfect-scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="vistas/assets/vendors/bootstrap-icons/bootstrap-icons.css">
    <link rel="stylesheet" href="vistas/assets/css/app.css">
    <link rel="shortcut icon" href="vistas/assets/images/favicon.svg" type="image/x-icon">

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>


    <script src="vistas/assets/js/extensions/sweetalert2.js"></script>
    <script src="vistas/assets/vendors/sweetalert2/sweetalert2.all.min.js"></script>
    
</head>

<body>

    <?php 
    
    if(isset($_SESSION["iniciarSesion"]) && $_SESSION["iniciarSesion"] == "ok"){
        echo '<div id="app">';

            include "modulos/lateral.php";

                echo '<div id="main" class="layout-navbar">';
            
                /*==============================
                            ENCABEZADO
                ==============================*/

                include "modulos/cabezote.php"; 
                
                /*==============================
                        CONTENIDO
                ==============================*/
                if(isset($_GET["ruta"])){

                    if($_GET["ruta"] == "inicio" || $_GET["ruta"] == "cuenta" || $_GET["ruta"] == "activos" || $_GET["ruta"] == "proveedores" || $_GET["ruta"] == "tickets" || $_GET["ruta"] == "mantenimiento" || $_GET["ruta"] == "usuarios" || $_GET["ruta"] == "perfiles" || $_GET["ruta"] == "crearusuario" || $_GET["ruta"] == "salir" || $_GET["ruta"] == "crearcuenta" || $_GET["ruta"] == "editarcuenta"){

                        include "modulos/".$_GET["ruta"].".php";

                    }else{

                        include "modulos/404.php";

                    }

                }else{

                }
            
            
                /*==============================
                        PIE DE PAGINA
                ==============================*/

                include "modulos/footer.php";
                echo ' 
                        </div>
                    </div>';
            
                }else{

                    include "modulos/login.php";
                    
                }

            ?>
            
            
        </div>
    </div>
    
    <script src="vistas/assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="vistas/assets/js/bootstrap.bundle.min.js"></script>
    
    <script src="vistas/assets/vendors/simple-datatables/simple-datatables.js"></script>

    <script>

        // Simple Datatable

        let table1 = document.querySelector('#table1');

        let dataTable = new simpleDatatables.DataTable(table1);

    </script>

    <script src="vistas/assets/js/main.js"></script>
    <script src="vistas/js/usuarios.js"></script>
    <script src="vistas/js/cuentas.js"></script>
    
</body>

</html>