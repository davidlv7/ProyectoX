<nav class="navbar header-navbar pcoded-header header-theme=theme2 " >
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <a class="mobile-search morphsearch-search" href="#">
                            <i class="ti-search"></i>
                        </a> <!-- Se redirecciona al inventario -->
                        <a href="index.php?action=inventario">
                            <img class="img-fluid" src="Public/img/logo_raspaditos_2.png" alt="Theme-Logo" width="200px" height="200px" />
                        </a>
                        <a class="mobile-options">
                            <i class="ti-more"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>

                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()">
                                    <i class="ti-fullscreen"></i>
                                </a>
                            </li>
                        </ul>

                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                
                                <a href="#!"> <!-- Se coloca la foto del usaurio en sesión con $_SESSION -->
                                    <img src="fotos/<?= $_SESSION['foto'] ?>" class="img-radius" alt="User-Profile-Image">
                                    <!-- Se muestra el nombre del usuario en sesión -->
                                    <span> <?= $_SESSION['nombre'] ?> </span> <i class="ti-angle-down"></i>
                                </a>
                                
                                <ul class="show-notification profile-notification">

                                    <li>
                                        <!-- Se cierra sesión -->
                                        <a href="index.php?action=salir">
                                            <i class="ti-shift-right"> </i> Salir
                                        </a>
                                    </li>
                                </ul>
                            
                            </li>
                        </ul>


                    </div>
                </div>
            </nav>