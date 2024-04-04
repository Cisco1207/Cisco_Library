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
        <style>
        
        /* Estilos para el modal */
        .modal-body img {
            width: 100%;
            height: auto;
        }
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
        $menulibros = $subMenu->getMenuLibros();
        echo $menulibros;

		?>

        <?php
                    $mensaje = "Libros de nuestra Base de Datos";
                    $Lista = "Visualiza Nuestras Listas";

        ?>
        
        <main class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                    <h3><?php echo $mensaje; ?></h3>

                    <?php
            $libreria = new DBGestionLibreria();
            $libros = $libreria->getLibros();
            $contador = 1;

            foreach ($libros as $libro) {
                echo '<p>' . $contador . '. ' . $libro['titulo'] . '</p>';
                $contador++; 
            }
            ?>

                      <h3><?php echo $Lista; ?></h3>
                      <hr class="my-4" />

            </div>               
                    </div>
                </div>
            </div>
         </main>

        
        <?php

        include ("template/ModalLibros.php")

        ?>


            <hr class="my-4" />

                </div>
            </div>


        </main>
       
        <?php
		    // Incluir el pie de página
			include ("template/pie.php")
		?>

        <script>
        $(document).ready(function(){
            $('.box').click(function(){
                var imgSrc = $(this).css('background-image');
                imgSrc = imgSrc.replace('url(','').replace(')','').replace(/\"/gi, "");
                $('#modalImage').attr('src', imgSrc);
            });
        });
    </script>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>
</html>
