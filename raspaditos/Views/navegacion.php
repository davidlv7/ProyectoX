<nav class="pcoded-navbar">
    <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
    <div class="pcoded-inner-navbar main-menu">
        
        <div class="">
            <div class="main-menu-header">
                <div class="user-details">
                    <!-- Se muestra el nombre del usuario en session-->
                    <span> <h3>  <?= $_SESSION['nombre'] ?>  </h3> </span>
                    <span> Administrador </span>
                </div>
            </div>
        </div>


        <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation">Administración</div>

        <ul class="pcoded-item pcoded-left-item">
            
            <!-- Quitando el dashboard de la navegación
            <li class="pcoded-hasmenu">
                <a href="index.php?action=dashboard">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                    <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                    <span class="pcoded-mcaret"></span>
                </a>
                
            </li>
            -->

            <li class="pcoded-hasmenu">
                <a href="#!">
                    <span class="pcoded-micon"><i class="ti-package"></i>  <b>W</b></span>
                    <span class="pcoded-mtext"  data-i18n="nav.widget.main">Inventario</span>
                    <span class="pcoded-mcaret"></span>
                </a>

                <!-- Lista desplegable -->
                <ul class="pcoded-submenu">
                    <li class=""> <!-- Se redirecciona al inventario -->
                        <a href="index.php?action=inventario">
                            <span class="pcoded-mtext" data-i18n="nav.dash.default"><i class="ti-agenda"></i> Lista de productos</span>
                        </a>
                    </li>
                    <li class="">  <!-- Se redirecciona a agregar productos -->
                        <a href="index.php?action=agregar_producto">
                            <span class="pcoded-mtext" data-i18n="nav.dash.ecommerce"> <i class="ti-plus"></i> Agregar producto</span>
                        </a>
                    </li>
                </ul>
            </li>


            <li class="pcoded-hasmenu">
                <a href="#">
                    <span class="pcoded-micon"><i class="ti-bookmark"></i><b>W</b></span>
                    <span class="pcoded-mtext"  data-i18n="nav.widget.main">Categorias</span>
                    <span class="pcoded-mcaret"></span>
                </a>

                <!-- Lista desplegable -->
                <ul class="pcoded-submenu">
                    <li class=""> <!-- Se redirecciona al listado de categorias -->
                        <a href="index.php?action=categorias">
                            <span class="pcoded-mtext" data-i18n="nav.dash.default"><i class="ti-agenda"></i> Lista de categorías</span>
                        </a>
                    </li>
                    <li class="">   <!-- Se redirecciona a agregar categorias -->
                        <a href="index.php?action=agregar_categoria">
                            <span class="pcoded-mtext" data-i18n="nav.dash.ecommerce"> <i class="ti-plus"></i> Agregar categoría</span>
                        </a>
                    </li>

                </ul>

            </li>

<!-- Seccion para agregar las sucursales -->
            <li class="pcoded-hasmenu">
                <a href="#!">
                    <span class="pcoded-micon"><i class="ti-home"></i><b>W</b></span>
                    <span class="pcoded-mtext"  data-i18n="nav.widget.main">Sucursales</span>
                    <span class="pcoded-mcaret"></span>
                </a>

                <ul class="pcoded-submenu">
                    <li class="">  <!-- Se redirecciona al listado de sucursales -->
                        <a href="#!">
                            <span class="pcoded-hasmenu" data-i18n="nav.dash.default"><i class="ti-agenda"></i> Lista de sucursales</span>
                        </a>
                    </li>
                    <li class=""> <!-- Se redirecciona a agregar usuario -->
                        <a href="#!">
                            <span class="pcoded-mtext" data-i18n="nav.dash.ecommerce"> <i class="ti-plus"></i> Agregar sucursal</span>
                        </a>
                    </li>
                    <li class="">  <!-- Se redirecciona al listado de personal -->
                        <a href="#!">
                            <span class="pcoded-hasmenu" data-i18n="nav.dash.default"><i class="ti-agenda"></i> Lista de personal</span>
                        </a>
                    </li>
                    <li class=""> <!-- Se redirecciona a agregar personal -->
                        <a href="#!">
                            <span class="pcoded-mtext" data-i18n="nav.dash.ecommerce"> <i class="ti-plus"></i> Agregar personal</span>
                        </a>
                    </li>

                </ul>

            </li>
<!-- Seccion para agregar las sucursales -->

            <li class="pcoded-hasmenu">
                <a href="#!">
                    <span class="pcoded-micon"><i class="ti-user"></i><b>W</b></span>
                    <span class="pcoded-mtext"  data-i18n="nav.widget.main">Usuarios</span>
                    <span class="pcoded-mcaret"></span>
                </a>

                <ul class="pcoded-submenu">
                    <li class="">  <!-- Se redirecciona al listado de usuarios -->
                        <a href="index.php?action=usuarios">
                            <span class="pcoded-mtext" data-i18n="nav.dash.default"><i class="ti-agenda"></i> Lista de usuarios</span>
                        </a>
                    </li>
                    <li class=""> <!-- Se redirecciona a agregar usuario -->
                        <a href="index.php?action=agregar_usuario">
                            <span class="pcoded-mtext" data-i18n="nav.dash.ecommerce"> <i class="ti-plus"></i> Agregar usuario</span>
                        </a>
                    </li>

                </ul>

            </li>


        </ul>
        
    </div>
</nav>