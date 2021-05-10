<?PHP include ("../seguridad.php");?>
<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Página principal de la Aplicación Web Hardware Store Inventory">
    <meta name="author" content="Hardware Store Inventory">

    <title>HSI - Crear Cliente</title>

    <!-- Fuentes personalizadas para esta plantilla-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Estilos personalizados para esta plantilla-->
    <link href="../css/estilo.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Envoltorio de página -->
    <div id="wrapper">

        <!-- Barra lateral -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Barra lateral: marca -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../index.php">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-hammer"></i>
                </div>
                <div class="sidebar-brand-text mx-3">HSI (APP)<sup>1.0</sup></div>
            </a>

            <!-- Divisor -->
            <hr class="sidebar-divider my-0">
            <hr class="sidebar-divider">

            <!-- Encabezado -->
            <div class="sidebar-heading">Gestión Control</div>

            <!-- Elemento de navegación: panel -->
            <li class="nav-item active">
                <a class="nav-link" href="../index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Página Principal</span></a>
            </li>

            <!-- Divisor -->
            <hr class="sidebar-divider">

            <!-- Encabezado -->
            <div class="sidebar-heading">Gestión General</div>

            <!-- Elemento de navegación: menú desplegable del Administrador -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Administración</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Gestión de cuentas:</h6>
                        <a class="collapse-item" href="../usuarios.php">Usuarios</a>
                    </div>
                </div>
            </li>

            <!-- Elemento de navegación: menú desplegable de ventas -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapsethree">
                    <i class="far fa-money-bill-alt"></i>
                    <span>Vender</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Acerca de la venta:</h6>
                        <a class="collapse-item" href="../vender.php">Hacer una Venta</a>
                    </div>
                </div>
            </li>

            <!-- Elemento de navegación: menú desplegable de tesorería -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="true" aria-controls="collapseFour">
                    <i class="fas fa-piggy-bank"></i>
                    <span>Tesorería</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Detalle de tesorería:</h6>
                        <a class="collapse-item" href="../ventas.php">Historial de ventas</a>
                        <a class="collapse-item" href="../caja.php">Caja</a>
                    </div>
                </div>
            </li>

            <!-- Elemento de navegación: menú desplegable de productos -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="true" aria-controls="collapseFive">
                    <i class="fas fa-box-open"></i>
                    <span>Productos</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Detalle de productos:</h6>
                        <a class="collapse-item" href="../productos.php">Lista de productos</a>
                    </div>
                </div>
            </li>

            <!-- Elemento de navegación: menú desplegable de inventario -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSix"
                    aria-expanded="true" aria-controls="collapseSix">
                    <i class="fas fa-boxes"></i>
                    <span>Inventario</span>
                </a>
                <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Sobre Inventario:</h6>
                        <a class="collapse-item" href="../inventario.php">Inventario</a>
                        <a class="collapse-item" href="../abastecer.php">Abastecer</a>
                        <a class="collapse-item" href="../h_abastecer.php">Historial abastecimiento</a>
                    </div>
                </div>
            </li>

            <!-- Elemento de navegación: menú desplegable de proveedores -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseSeven"
                    aria-expanded="true" aria-controls="collapseSeven">
                    <i class="fas fa-truck-moving"></i>
                    <span>Proveedores</span>
                </a>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Detalle de proveedores:</h6>
                        <a class="collapse-item" href="../proveedores.php">Lista de proveedores</a>
                    </div>
                </div>
            </li>

            <!-- Elemento de navegación: menú desplegable de clientes -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseEight"
                    aria-expanded="true" aria-controls="collapseEight">
                    <i class="fas fa-users"></i>
                    <span>Clientes</span>
                </a>
                <div id="collapseEight" class="collapse" aria-labelledby="headingEight"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Detalle de clientes:</h6>
                        <a class="collapse-item" href="../clientes.php">Lista de clientes</a>
                    </div>
                </div>
            </li>


            <!-- Divisor -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Alternar barra lateral (barra lateral) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Mensaje de la barra lateral -->
            <div class="sidebar-card">
                <img class="sidebar-card-illustration mb-2" src="../img/undraw_rocket.svg" alt="">
                <p class="text-center mb-2"><strong>Hardware Store Inventory</strong> esta feliz que haga uso de su software, estamos para usted!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Contáctanos!</a>
            </div>

        </ul>
        <!-- Fin de la barra lateral -->

        <!-- Envoltorio de contenido -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Contenido principal -->
            <div id="content">

                <!-- Barra superior -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Alternar barra lateral (barra superior) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Búsqueda de la barra superior -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Buscar..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Barra superior de navegación -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Elemento de navegación: menú desplegable de búsqueda (solo visible XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Menú desplegable - Mensajes -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Buscar..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Elemento de navegación: alertas -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Contador - Alertas / Para Notificaciones
                                <span class="badge badge-danger badge-counter">3+</span> -->
                            </a>
                            <!-- Menú desplegable - Alertas -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Centro de Alertas
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Abril 12, 2021</div>
                                        <span class="font-weight-bold">Hay que reforzar la seguridad!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Abril 21, 2021</div>
                                        $290.29 han sido depositados a tu cuenta!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Mayo 04, 2021</div>
                                        Alerta Máxima: Nosotros tenemos que terminar rápido.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Ver todas las Alertas</a>
                            </div>
                        </li>

                        <!-- Elemento de navegación - Mensajes -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Contador - Mensajes -->
                                <!-- <span class="badge badge-danger badge-counter">7</span> -->
                            </a>
                            <!-- Menú desplegable - Mensajes -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Centro de Mensajes
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../img/undraw_profile_1.svg"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hola! soy un hijuemadre que critica todo y de mente
                                            muy cerrada.</div>
                                        <div class="small text-gray-500">esteban Labrador · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../img/undraw_profile_2.svg"
                                            alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Solo me preocupa mi trabajo así que nadie me pregunte
                                            nada, es su trabajo</div>
                                        <div class="small text-gray-500">Stiven Ortega · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="../img/undraw_profile_3.svg"
                                            alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Agradezco que entiendan por que no participo tanto pero
                                            cada vez que pueda de una!</div>
                                        <div class="small text-gray-500">Marlon Mayorga · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Disgustado por el deficit de trabajo en equipo, espero pronto
                                              caigan en cuenta y estemos juntos en esto...</div>
                                        <div class="small text-gray-500">Andrés Acosta · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Leer más Mensajes</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Elemento de navegación: información del usuario -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?PHP echo $_SESSION["nick"];?></span>
                                <img class="img-profile rounded-circle"
                                    src="../img/undraw_profile.svg">
                            </a>
                            <!-- Menú desplegable - Información del usuario -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Perfil
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Cerrar sesión
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- Fin de la barra superior -->

                <!-- Contenido de la página de inicio -->
                <div class="container-fluid">

										<a href="../clientes.php" class="btn btn-danger float-right"><i class="fas fa-window-close"></i> Cancelar</a>

                    <!-- Encabezado de página -->
                    <h1 class="h3 mb-4 text-gray-800">Agregar un Cliente</h1>
                    <?php
                    require '../conexion/conexion.php';
                          $sql = "SELECT * FROM typeid";
                          $result = $con->query( $sql );
                      ?>
										<form action="guardar.php" method="post" class="user">

											<!-- Fila de columna -->
											<div class="col-lg-6 mb-4">

													<!-- Formulario -->
													<div class="card shadow mb-4" style="width: 60rem;">
															<div class="card-header py-3">
																	<h6 class="m-0 font-weight-bold text-primary text-center">Formulario para Clientes</h6>
															</div>
															<div class="card-body">
																<div class="form-group row">
																		<div class="col-sm-4 mb-3 mb-sm-0">
                                        <select name="tipoid" class="form-control form-select-user text-gray-600" id="ejemploTipoid">
                                          <option value="" disabled selected>Selecione...</option>
                                            <?php
                                            while ($typeid = $result->fetch_assoc() ) {
                                              echo "<option value='".$typeid['idtypeid']."'>".$typeid['nomtypeid']."</option>";
                                           }
                                           ?>
                                         </select>
                                   </div>
                                   <div class="col-sm-4">
                                       <input name="numid" type="number" class="form-control form-control-user" id="ejemploNumid"
                                           placeholder="Número de identificación">
                                   </div>
                                   <div class="col-sm-4">
                                       <input name="nomperson" type="text" class="form-control form-control-user" id="ejemploNomperson"
                                           placeholder="Nombre...">
                                   </div>
                               </div>
                               <div class="form-group row">
                                   <div class="col-sm-4 mb-3 mb-sm-0">
                                       <input name="apeperson" type="text" class="form-control form-control-user" id="ejemploApeperson"
																						placeholder="Apellido...">
																		</div>
                                    <div class="col-sm-4 mb-3 mb-sm-0">
																				<input name="address" type="text" class="form-control form-control-user" id="ejemploAddress"
																						placeholder="Dirección">
																		</div>
                                    <div class="col-sm-4">
																				<input name="phone" type="tel" class="form-control form-control-user" id="ejemploPhone"
																						placeholder="Número de contacto">
																		</div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-4 mb-3 mb-sm-0">

  																			<a class="btn btn-primary btn-user btn-block" type="submit" name="" value=""><i class="fas fa-plus"></i> Crear Cliente</a>

                                    </div>
																</div>

														</form>
															</div>
													</div>


											</div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- Fin del contenido principal -->

            <!-- Pie de página -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Hardware Store Inventory 2021</span>
                    </div>
                </div>
            </footer>
            <!-- Fin del pie de página -->

        </div>
        <!-- Contenedor de fin de contenido-->

    </div>
    <!-- Contenedor de fin de página -->

    <!-- Desplazarse hasta el botón superior-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Modal de cierre de sesión-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">¿Seguro que quieres salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Cerrar sesión" si está listo para finalizar su sesión actual.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                    <a class="btn btn-primary" href="../salir.php">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
