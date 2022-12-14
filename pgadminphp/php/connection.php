<?php 
class Db{
  private $host = "localhost";
  private $user = "root";
  private $pass = "";
  private $db = "practica2";
  public $connection;
  

  public function __construct()
  {
    $this->connection = new mysqli($this->host, $this->user, $this->pass, $this->db) or die(mysqli_error($this->connection));
  }

  public function insert($tabla, $datos){
    $resultado = $this->connection->query("INSERT INTO $tabla VALUES (null, $datos)") or die($this->connection->error);
    if($resultado) return true;
    return false;
  }

  public function buscar($tabla, $condicion){
    $resultado = $this->connection->query("SELECT * FROM $tabla WHERE $condicion") or die($this->connection->error);
    if($resultado){
      return $resultado->fetch_all(MYSQLI_ASSOC);
    }
    return false;
  }

  public function actualizar($tabla, $campos, $condicion){
    $resultado = $this->connection->query("UPDATE $tabla SET $campos WHERE $condicion") or die($this->connection->error);
    return true;
  }

  public function borrar($tabla, $condicion){
    $resultado = $this->connection->query("DELETE FROM $tabla WHERE $condicion") or die($this->connection->error);
  }

}
?>