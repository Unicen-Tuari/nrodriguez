<?php
  class modelProducto{
    private $db;
    function __construct(){
      $this->db = new PDO('mysql:host=localhost;'. 'dbname=cps;charset=utf8',
                        'root','');
    }

  function setProducto($producto){
    $insertar = $this->db->prepare("INSERT INTO producto (nombre,precio,marca,
                                  color,display,procesador,camaraPrincipal,
                                  camaraSecundaria,sistemaOp,red,frecuencia,
                                  bateria,tiempo,memoriaI,peso,dimension,
                                  pantalla,bluetooth,marcaporVoz,id_categoria) ".
                                  "VALUES (?,?,?,?,?,?,?,?,?,?,?,
                                           ?,?,?,?,?,?,?,?,?)");
    $result = $insertar->execute(array($producto['nombre'],$producto['precio'],
                                       $producto['marca'],$producto['color'],
                                       $producto['display'],
                                       $producto['procesador'],
                                       $producto['camPrin'],$producto['camSec'],
                                       $producto['so'],$producto['red'],
                                       $producto['fBanda'],
                                       $producto['bateria'],$producto['tiempo'],
                                       $producto['memoriaI'],$producto['peso'],
                                       $producto['dimension'],
                                       $producto['pantalla'],$producto['bluetooth'],
                                       $producto['marcaPorVoz'],
                                       $producto['categoria']));

  }

  function getProductos(){
    $consultaProducto=$this->db->prepare("SELECT * FROM producto LIMIT 12");
    $producto=$consultaProducto->execute();
    return $producto->fetchall();
  }

  function getProductobyName($nombre){
    $consultaProducto=$this->db->prepare("SELECT nombre,precio FROM producto
                                         WHERE nombre LIKE ?");
    $productos=$consultaProducto->execute(array($nombre));
    return $productos->fetchall();
  }

}
?>
