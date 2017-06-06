<?php

class modelCategoria{
  private $db;

  public function __construct(){
    $this->db = new PDO('mysql:host=localhost;'. 'dbname=cps; charset=utf8',
                        'root','');
  }

  public function setCategoria($nombre){
    $insertar = $this->db->prepare("INSERT INTO categoria(nombre)" . "VALUES (?)");
    $insertar->execute(array($nombre));
  }

  public function getCategoria($nombre){
    $consulta = $this->db->prepare("SELECT * FROM categoria
                                    WHERE nombre LIKE ?");
    return $consulta->execute(array($nombre));
  }
}
?>
