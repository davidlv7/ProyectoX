<?php

    # Agregar Productos ---------------------
    # ---- 100% ----
    # -------------------------------------
    //Se instancia a un objeto de l clase controlador para que se manden llamar todos los metodo que cominican a la vista con el controlador
    $controlador = new Controlador();


    // Si se presionó el botón de guardar datos
    if (isset($_POST["guardar"])) {
        // Antes de guardar se verifica que el código de producto ya existe, si existe se coloca el mensaje
        // correspondiente al usuario
        if($controlador->existeCodigoController()){
            // Se llama al método del controlador para preparar los datos
            $controlador->guardarProductoController();
        }else{
            echo '<script> 
                    alert("El código ya existe, ingrese un nuevo código");                            
                </script>';
        }
        
    }

    // Se obtienen los datos de las categorias para extraer los nombre y mostrarlos en el form
    $categorias = $controlador->datosCategoriasController();
?>

<div class="card page-header p-0">
    <div class="card-block front-icon-breadcrumb row align-items-end">
        <div class="breadcrumb-header col">
            <div class="big-icon">
                <i class="ti-plus"></i>
            </div>
            <div class="d-inline-block">
                <h5> Agregar producto </h5>
                <span> Nuevo producto </span>
            </div>
        </div>
        <div class="col">
        <div class="page-header-breadcrumb">
            <ul class="breadcrumb-title"> <!--  Se redirecciona al inventario-->
                <li class="breadcrumb-item"><a href="index.php?action=inventario"> Inicio </a>
                </li>
                <li class="breadcrumb-item"><a href="#"> Nuevo Producto </a>
                </li>
            </ul>
        </div>
        </div>
    </div>
</div>

<div class="page-body">

        <div class="card">
            
            <div class="card-block">
                <!-- Basic group add-ons start -->
                <div class="m-b-20">
                    <center> <h4 class="sub-title">Complete todos los datos del producto</h4> <center>

                    <!-- FORMULARIO PARA AGREGAR UN PRODUCTO (importante el enctype para las imagenes/fotos) -->
                    <form method="POST" enctype="multipart/form-data">
                        <!-- Código-->
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label"> Código </label>
                            <div class="col-sm-8 col-lg-10">
                                <div class="input-group">                                    
                                    <input type="text" class="form-control" name="codigo" required placeholder="Código del producto">
                                </div>
                            </div>
                        </div>

                        <!-- Nombre del producto -->
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label"> Producto </label>
                            <div class="col-sm-8 col-lg-10">
                                <div class="input-group">                                    
                                    <input type="text" class="form-control" name="producto" required placeholder="Nombre del producto">
                                </div>
                            </div>
                        </div>

                        <!-- Seleccionar la categoria con un select -->
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label"> Categoria </label>
                            <div class="col-sm-8 col-lg-10">
                                <div class="input-group">                                    
                                    <select name="categoria" class="form-control">
                                        <?php 
                                            // Ciclo que trae todas las categorias
                                            foreach ($categorias as $categoria) {
                                                echo "<option>";                                                
                                                echo $categoria["nombre"];
                                                echo "</option>";
                                            }
                                         ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Fijar precio -->
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label"> Precio </label>
                            <div class="col-sm-8 col-lg-10">
                                <div class="input-group">                                    
                                    <input type="text" class="form-control" name="precio" required placeholder="Precio del producto">
                                </div>
                            </div>
                        </div>

                        <!-- Establecer stock inicial -->
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label"> Stock </label>
                            <div class="col-sm-8 col-lg-10">
                                <div class="input-group">                                    
                                    <input type="number" class="form-control" name="stock" required placeholder="Stock inicial">
                                </div>
                            </div>
                        </div>

                        <!-- Cargar la foto -->
                        <div class="row">
                            <label class="col-sm-4 col-lg-2 col-form-label">Foto</label>
                            <div class="col-sm-8 col-lg-10">
                                <div class="input-group">
                                    <span class="input-group-addon" id="basic-addon2"><i class="fas fa-image"></i></span>
                                    <input type="file" class="form-control input-lg" name="foto" required />
                                </div>
                            </div>
                        </div>

                        
                        <!-- Botón para accionar el form y enviar los datos GET/POST -->
                        <div class="card-footer">
                            <center> <input type="submit" class="btn btn-primary input-lg" name="guardar" value="Guardar Datos" /> </center>
                        </div>

                    </form>
                    <!-- FIN FORMULARIO PARA AGREGAR UN PRODUCTO -->
                </div>
                <!-- Basic group add-ons end -->
            </div>

        </div>
</div>