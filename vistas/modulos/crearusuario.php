

<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Usuarios</h3>
                    <p class="text-subtitle text-muted"></p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="inicio">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Crear Usuario
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <form class="form"  method="POST" enctype="multipart/form-data">
            <section class="section">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <!-- Campo de Nombre -->    
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="last-name-column">Nombre Completo</label>
                                    <input type="text" name="nombrecompleto" id="last-name-column" class="form-control">
                                </div>
                            </div>
                            <!-- Campo de Nombre --> 
                            
                            <!-- Campo Usuario --> 
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="city-column">Usuario</label>
                                    <input type="text" id="usuario" class="form-control" name="user">
                                    <div id="resultado"></div>
                                </div>
                            </div>
                            <!-- Campo Usuario --> 

                            <!-- Campo Contraseña -->
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="country-floating">Contraseña</label>
                                    <input type="text" id="country-floating" class="form-control" name="password">
                                </div>
                            </div>
                            <!-- Campo Contraseña -->   

                            <!-- Campo Tipo de Usuario -->
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label>Tipo de Usuario</label>
                                    <fieldset class="form-group">
                                        <select class="form-select" id="basicSelect" name="tipodeusuario">
                                            <option value=""></option>
                                            <option value="Admin">Admin</option>
                                            <option value="Biomedico">Biomedico</option>
                                        </select>
                                    </fieldset>
                                </div>
                            </div>
                            <!-- Campo Tipo de Usuario -->

                            <!-- Campo Correo -->
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Email</label>
                                    <input type="email" id="email-id-column" class="form-control" name="email">
                                </div>
                            </div>
                            <!-- Campo Correo -->

                            <!-- Campo Telefono -->
                            <div class="col-md-6 col-12">
                                <div class="form-group">
                                    <label for="email-id-column">Telefono</label>
                                    <input type="text" class="form-control" name="telefono">
                                </div>
                            </div>
                            <!-- Campo Telefono -->

                            <!-- Campo Tipo de Usuario -->
                            <div class="col-md-6 col-12">                           
                                <div class="form-group">                            
                                    <label>Status</label>                           
                                    <fieldset class="form-group">                           
                                        <select class="form-select" id="basicSelect" name="status">                         
                                            <option>Activo</option>                         
                                            <option>Inactivo</option>                           
                                        </select>                           
                                    </fieldset>                         
                                </div>                          
                            </div>
                            <!-- Campo Tipo de Usuario -->


                            <!-- Campo Imagen de Usuario -->
                            <div class="col-md-6 col-12">                           
                                <div class="form-group">                            
                                    <label for="">Imagen de Usuario - Avatar (El archivo no debe pesar mas de 2 MB) Formato Admitido "JPG" o "PNG"</label> 
                                    <br>                          
                                    <input type="file" class="nuevaFoto" name="nuevaFoto">     
                                    <br>
                                    <br>
                                    <img src="vistas/dist/assets/images/faces/1.jpg" class="previsualizar" style="width:150px; height:150px;" alt="">
                                </div>                          
                            </div>
                            <!-- Campo Imagen de Usuario -->


                        </div>
                    </div>
                </div>
            </section>
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>
                <?php 
                    $crearUsuario = new ControladorUsuarios();
                    $crearUsuario -> ctrCrearUsuario();
                ?>
            </div>
        </form>
    </div>
</div>




/*=============================================
=            Section comment block            =
=============================================*/

<div id="main-content">
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Editar Cuenta</h3>
                    <p class="text-subtitle text-muted">Rellena los campos</p>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="dashboard.php">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Editar Cuenta</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- // Basic multiple Column Form section start -->
        <form class="form" method="POST" enctype="multipart/form-data">
            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Información General</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    
                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Estatus</label>
                                                    <fieldset class="form-group">
                                                        <select class="form-select" id="estatus" name="estatus">
                                                            <option value=""></option>
                                                            <option value="Prospecto">Prospecto</option>
                                                            <option value="Cuenta Activa">Cuenta Activa</option>
                                                            <option value="Cuenta Inactiva">Cuenta Inactiva</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">Nombre Comercial</label>
                                                    <input type="text" id="a" value="" class="form-control" name="nombrecomercial">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Acrónimo</label>
                                                    <input type="text" id="city-column" class="form-control" name="acronimo">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="country-floating">Teléfono Principal</label>
                                                    <input type="text" id="country-floating" class="form-control" name="telefonoprincipal">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="company-column">Página Web</label>
                                                    <input type="text" id="company-column" class="form-control"
                                                        name="web" >
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Biomédico Asignado</label>
                                                    <input type="text" id="biomedico" class="form-control" name="biomedico" list="listabiomedicos" onkeyup=selectBiomedico();>
                                                    <datalist id="listabiomedicos" class="form-group">
                                                        
                                                    </datalist>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-id-column">Email</label>
                                                    <input type="email" id="email-id-column" class="form-control"
                                                        name="email">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="email-id-column">Logo</label>
                                                    <input type="file" class="form-control logoimg"
                                                        name="logoimg">
                                                </div>
                                            </div>
                                            
                                        </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- // Basic multiple Column Form section end -->

        <!-- // Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Datos Fiscales</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">

                                        <div class="row">
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="first-name-column">Razon Social</label>
                                                    <input type="text" id="razonsocial" class="form-control" name="razonsocial">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">RFC</label>
                                                    <input type="text" id="rfc" class="form-control" name="rfc">    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Calle Y Numero</label>
                                                    <input type="text" id="calle" class="form-control" name="calle">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Colonia</label>
                                                    <input type="text" id="colonia" class="form-control" name="colonia">    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">C.P</label>
                                                    <input type="text" id="cp" class="form-control" name="cp">    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Ciudad</label>
                                                    <input type="text" id="ciudad" class="form-control" name="ciudad">    
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Estado</label>
                                                    <input type="text" id="estado" class="form-control" name="estado">
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="city-column">Pais</label>
                                                    <input type="text" id="pais" class="form-control" name="pais">
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- // Basic multiple Column Form section end -->


        <!-- // Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Información Específica</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">

                                        <div class="row">

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label for="last-name-column">No. de Camas Censables</label>
                                                    <input type="text" id="last-name-column" class="form-control"
                                                         name="camas_censables">
                                                </div>
                                            </div>

                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Sector</label>
                                                    <fieldset class="form-group">
                                                        <select class="form-select" id="sector" name="sector">
                                                            <option value="Sector Publico">Sector Público</option>
                                                            <option>Sector Privado</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-12">
                                                <div class="form-group">
                                                    <label>Perfil</label>
                                                    <fieldset class="form-group">
                                                        <select class="form-select" id="perfil" name="perfil">
                                                            <option value="Clinica/Hospital">Clínica/Hospital</option>
                                                            <option>Consultorio</option>
                                                            <option>Empresa de Servicios</option>
                                                            <option>Fabricante</option>
                                                            <option>Laboratorio</option>
                                                            <option>Profesional de la Salud Independiente</option>
                                                            <option>Universidad</option>
                                                        </select>
                                                    </fieldset>
                                                </div>
                                            </div>
                                        </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- // Basic multiple Column Form section end -->

        <!-- // Basic multiple Column Form section start -->
            <section id="multiple-column-form">
                <div class="row match-height">
                    <div class="col-12">
                        <div class="card card_wrapper">
                            <div class="card-header">
                                <h4 class="card-title">Ubicaciones y Sub ubicaciones</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row field_wrapper" >
                                        <div class="col-md-6 col-12">
                                            <label>Ubicacion</label>
                                            <select class="form-control" name="field_name[]" value="" >
                                                <option value="opcionuno">Opcion 1</option>
                                                <option value="opciondos">Opcion 2</option>
                                                <option value="opciontres">Opcion 3</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <label>Sub-Ubicacion</label>
                                            <input type="text" class="form-control" name="sub_name[]" value="" placeholder="Sub Ubicacion"/>
                                        </div>

                                    </div>
                                    <a href="javascript:void(0);" class="add_button" title="Agregar sububicación">Agregar SubUbicacion<i class="bi bi-plus-circle"></i></a>
                                </div>
                            </div>  
                        </div>

                    </div>
                </div>
            </section> 
        <!-- // Basic multiple Column Form section end -->
            <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary me-1 mb-1">Guardar</button>                                  
            </div>
            <?php 
            
            /* $crearCuenta = new ControladorCuentas();
            $crearCuenta -> ctrCrearCuenta(); */
            
            ?>
        </form>
    </div>
</div>


/*=====  End of Section comment block  ======*/

