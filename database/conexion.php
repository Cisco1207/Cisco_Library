<?php

class DBGestionLibreria {

    private $servidor = 'localhost';
    private $dataBase = 'dblibreria';
    private $user = 'root';
    private $password = 'Escuel@12';


    

    private function getConexion() {

     //  $dns = "mysql:host=$this->servidor;dbname=$this->dataBase";
     //   $obPDO = new PDO($dns, $this->user, $this->password);

            
      //  return $obPDO;

      // Crear conexión
      $dns = new mysqli($this->servidor, $this->user, $this->password, $this->dataBase);

      // Verificar conexión
      if ($dns->connect_error) {
          die("Conexión fallida - ERROR de conexión: " . $dns->connect_error);
      }
      echo "";

      return $dns;
        
    }

    



    public function getAutores() {
        $conexion = $this->getConexion();
        $resultado = [];
    
        if ($conexion) {
            $sql = "SELECT * FROM autores";
            $resultado = $conexion->query($sql);
        }
    
        return $resultado;
    }

    public function getLibros() {
        $pdoConexion = $this->getConexion();
        $resultado = [];
    
        if (is_object($pdoConexion)) {
            $sql = "SELECT * FROM titulos";
            $resultado = $pdoConexion->query($sql);
        }
    
        return $resultado;
    }
    
    
    
}

?>