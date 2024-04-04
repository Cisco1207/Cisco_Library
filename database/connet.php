<?php

        $nombre = trim($_POST['nombre']);
        $correo = trim($_POST['correo']);
        $asunto = trim($_POST['asunto']);
        $comentario = trim($_POST['comentario']);
        $fecha = date("d/m/y");

        //Database connection
        $conn = new mysqli('localhost','root','Escuel@12','dblibreria');
        if($conn->connect_error){
            echo "$conn->connect_error";
            die("Connection Failed : ". $conn->connect_error);
        } else {
            $stmt = $conn->prepare("insert into contacto(correo, nombre, asunto, comentario, fecha) values(?, ?, ?, ?, ?)");
            $stmt->bind_param("sssss", $correo, $nombre, $asunto, $comentario, $fecha);
            $execval = $stmt->execute();
            echo $execval;
            if($execval){
                echo '<script>
                    alert("Su Mensaje fue enviado correctamente");
                    window.location = "../index.php";
                </script>
                ';

            
            $stmt->close();
            $conn->close();

            }

        }

?>