<?php

    include 'database/conexion.php'

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
        <link href="css/estilo.css" rel="stylesheet" />
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
        $menu = $subMenu->getMenu();
        echo $menu;

        ?>
        <!-- Main Content-->
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <!-- Post preview-->
                  
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Post preview-->
                    <div class="post-preview">
            
                        <a href="index.php">
                            <h2 class="post-title">¡EXPLORA!</h2>
                            <p>Explora nuestra extensa biblioteca virtual y descubre un universo de posibilidades. 
                                Desde intrigantes novelas de misterio que te mantendrán al borde de tu asiento
                                hasta inspiradoras historias de superación personal que tocarán tu corazón. Sea cual sea tu pasión, 
                                estamos aquí para satisfacer tus deseos literarios más profundos.</p>

                            <p>Sumérgete en las páginas de nuestros libros y déjate llevar por la magia de la lectura. 
                                Experimenta el placer de perderse en mundos ficticios, conocer personajes inolvidables y 
                                explorar ideas que desafían tus pensamientos..</p>
                        </a>
                        <p class="post-meta">
                            Posted by
                            <a href="index.php">Cisco Library</a>
                            on July 12, 2024
                        </p>
                    </div>
          
                    <!-- Divider-->
                    <hr class="my-4" />
                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="Libros.php">Ver Libros →</a></div>
                   
                </div>
            </div>
        </div>
        
        <?php
		    // Incluir el pie de página
			include ("template/pie.php");
		?>
       
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
