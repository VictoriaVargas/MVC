<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Cuentas</h3>
                    <p class="text-subtitle text-muted">
                        <div class="buttons">
                            <a href="crearcuenta" class="btn btn-light rounded-pill">Crear Cuenta</a>
                        </div></p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="inicio">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cuenta
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"></h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped" id="table1">

                        <thead>

                            <tr>
                                <th>#</th>
                                <th>Fecha de Alta</th>
                                <th>Estatus</th>
                                <th>Acrónimo</th>
                                <th>Nombre Comercial</th>
                                <th>Ciudad</th>
                                <th>Pais</th>
                                <th>Editar</th>
                                
                            </tr>

                        </thead>

                        <tbody>

                            <?php 

                                $item = null;
                                $valor = null; 

                                $cuentas = ControladorCuentas::ctrMostrarCuentas($item,$valor);

                                foreach($cuentas as $key => $value){

                                    echo '<tr>

                                        <td>'.$key.'</td>
                                        <td>'.$value["date_entered"].'</td>
                                        <td>'.$value["estatus"].'</td>
                                        <td>'.$value["acronimo"].'</td>
                                        <td>'.$value["nom_comercial"].'</td>
                                        <td>'.$value["ciudad"].'</td>
                                        <td>'.$value["pais"].'</td>
                                        <td>
                                            <div class="btn-group">
                                                <button class="btn btn-warning btnEditarCuenta" idCuenta="'.$value["id"].'" ><i class="bi bi-pencil-square"></i></button>
                                            </div>
                                        </td>
                                    
                                    </tr>';

                                }
                            
                            ?> 

                        </tbody>

                    </table>
                </div>
            </div>
        </section>
    </div>
</div>





