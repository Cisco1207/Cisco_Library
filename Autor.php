<?php

    include 'database/conexion.php';

?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Cisco Library. Los Mejores Libros.</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <style>

        .autor {
            display: flex;
            align-items: center; /* Alinea verticalmente los elementos */
            margin-bottom: 10px; /* Espacio entre cada autor */
        }

        .perfil {
            width: 50px; /* Ancho del recuadro de perfil */
            height: 50px; /* Altura del recuadro de perfil */
            background-color: #ccc; /* Color de fondo del recuadro de perfil */
            border-radius: 50%; /* Para hacerlo circular */
            display: flex;
            justify-content: center; /* Centra el icono verticalmente */
            align-items: center; /* Centra el icono horizontalmente */
        }

        /* Añade estilos adicionales según tus preferencias */
        </style>



    </head>
    <body>
    <?php
            // menu superior
			include ("template/menu_superior.php");

             // Incluir el archivo que contiene la clase Submenu
        require_once 'clases/Submenu.php';
        // Crear una instancia de la clase Submenu
        $subMenu = new Submenu();
        // Llamar al método getMenu() y guardar el resultado en una variable
        $menuautor = $subMenu->getMenuAutor();
        echo $menuautor;
		?>

        <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">

            <h3>Nuestros Escritores</h>

            <hr class="my-4" />


                </div>
            </div>
        </div>
        
        
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5 text-center">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                    <?php
                    $libreria = new DBGestionLibreria();
                    $autores = $libreria->getAutores();
                    foreach ($autores as $registro) {
                        echo '<div class="autor">';
                        echo '<div class="perfil">';
                        echo '<i class="fas fa-user"></i>'; // Icono de usuario de Font Awesome
                        echo '</div>';
                        echo '<p>' . $registro['nombre'] . ' ' . $registro['apellido'] . '</p>';
                        echo '</div>';
                    }
                    ?>





                    </div>
                </div>
            </div>
        </article>

        <?php
		    // Incluir el pie de página
			include ("template/pie.php")
		?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
