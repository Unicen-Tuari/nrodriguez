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
                                  pantalla,bluetooth,marcaporVoz,id_categoria)
                                  VALUES (?,?,?,?,?,?,?,?,?,?,?,
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
    $consultaProducto = $this->db->prepare("SELECT * FROM producto LIMIT 12");
    $producto=$consultaProducto->execute();
    return $consultaProducto->fetchall();
  }

  function getProductoById($id_Prod){
    $consultaProducto = $this->db->prepare("SELECT * FROM producto
                                         WHERE id_producto = ?");
    $producto = $consultaProducto->execute(array($id_Prod));
    return $consultaProducto->fetch();
  }

  function getProductosByCat($id){
    $consultaProducto = $this->db->prepare("SELECT * FROM producto p
                                            WHERE p.id_categoria = ?");
    $consultaProducto->execute(array($id));
    return $consultaProducto->fetchAll();
  }

  function deleteProducto($id_Prod){
    $delete = $this->db->prepare("DELETE FROM producto
                                    WHERE id_producto = ?");
    $delete->execute(array($id_Prod));
  }

}
?>
