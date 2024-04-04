<?php

class Comentario {

   private string $ruta = './app/data/comentario.txt';
   private string $rutaContador = './app/data/contador.txt';

   public function getForm($mostrar = true): string {
      if ($mostrar) {
        return require("./template/formulario_contacto.php");
      }

      return "";

    }

   // procesar formulario
   public function processForm() {
       // $data = $_GET;
       if ( isset($_POST['guardar'])) {
            $data = $_POST;
            // print_r($data);
            $text = '<div class="container">
                        <div class="alert alert-success" role="alert">
                            Hola %s, tu comentario ha sido recibido!
                        </div>
                        <div class="alert alert-dark" role="alert">
                            Comentario: %s
                        </div>
                    </div>';

            // Guardar en una fuente de datos.
            $resultado = $this->guardarDatos($data['nombre'], $data['comentario']);
            $resultado = '<div class="container">' . $resultado. '</div>';
            echo $resultado;
            return sprintf($text, $data['nombre'], $data['comentario']);
       }

   }

   // guardar los datos
   private function guardarDatos (string $nombre, string $comentario){
       $mensaje  = "";
       $html = '<span class="badge text-bg-danger">%s</span>';
    // filtrar los datos
       $nombre = trim($nombre);
       $comentario = trim($comentario);

       // Validar los datos
       if ( strlen($nombre) < 3 ) $mensaje  = sprintf($html, 'El nombre es muy corto.');
       if ( strlen($comentario) < 10 ) $mensaje .= sprintf($html, 'El comentario es muy corto');
       if ( strlen($comentario) > 50 ) {
         $mensaje .= sprintf($html, 'El comentario es muy largo');
       }

       if (empty($mensaje) ) {
        $numero = $this->contador();
        //Proceder a guardar
        $prepararData[$numero] =  array('nombre' => $nombre, 'comentario' => $comentario);
        $prepararData = json_encode($prepararData). '####';
        file_put_contents($this->ruta, $prepararData, FILE_APPEND);
        $mensaje = sprintf($html, 'El comentario ha sido recibido.');

       }


       return $mensaje;
   }

   private function contador() {
    if( !is_file($this->rutaContador)) {
      file_put_contents($this->rutaContador, 0);
    }
      $contador = file_get_contents($this->rutaContador);
      $contador += 1;
      file_put_contents($this->rutaContador, $contador);
      return $contador;
   }

   public function getCantidaComentario() {
      if( !is_file($this->rutaContador)) {
        file_put_contents($this->rutaContador, 0);
      }
      $cantidad = file_get_contents($this->rutaContador);
      $html = '<div class="container">
                  <button type="button" class="btn btn-outline-dark">
                  %d comentarios</button>
               </div>';
      return sprintf($html, $cantidad);
   }

   // mostrar los datos
   public function mostrarComentario() {
      $data = file_get_contents($this->ruta);
      $data = explode('####', $data);
      array_pop($data);

      $posicion = 0;
      $html = '%s
                <div class="alert alert-success" role="alert">
                       %s
                </div>';
      $text = "";
      foreach ($data as $index => $campo) {
         $campo = json_decode($campo, true);
        //list($numero, $datos) = $campo;
        $datos = $campo[++$posicion];
        $text .= sprintf($html, $datos['nombre'], $datos['comentario']);
      }

      return $text;
   }

}
?>