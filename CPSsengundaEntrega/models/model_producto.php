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
  function getProductos($start,$num_tot_page){
    $consultaProducto = $this->db->prepare("SELECT * FROM producto LIMIT $start,$num_tot_page");
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
  function totalProd(){
    $totalProd = $this->db->prepare("SELECT * FROM producto");
    $totalProd->execute();
    return $totalProd->rowCount();
  }

  function modifyNameProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET nombre = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyPriceProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET precio = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyColorProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET color = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyDisplayProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET display  = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyBrandProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET marca = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyProcessorProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET procesador = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyCamPrinProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET camaraPrincipal = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyCamSecProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET camaraSecundaria = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifySOProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET sistemaOp = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyNetProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET red = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyFrequencyProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET frecuencia = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyBatteryProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET bateria = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyTimeProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET tiempo = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyMemoryIProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET memoriaI = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyWeightProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET peso = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyDimensionProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET dimension = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyScreenProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET pantalla = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyBluetoothProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET bluetooth = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }
  function modifyVoiceDialingProduct($newValue,$id){
    $actualizar = $this->db->prepare("UPDATE producto SET marcaporVoz = ?
                                    WHERE id_producto = ?");
    $result = $actualizar->execute(array($newValue,$id));
  }

}
?>
