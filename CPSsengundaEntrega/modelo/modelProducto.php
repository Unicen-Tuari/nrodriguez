<?php
  class modelProducto{
    private $db;
    function __construct(){
      $this->db=new PDO('mysql:host=localhost;'. 'dbname=cps;charset=utf8',
                        'root','');
    }
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

  function setProducto($nombre,$precio,$marca,$color,$display,$procesador,
                      $camaraP,$camaraS,$so,$red,$frecuencia,$bateria,
                      $tiempo,$memoriaI,$peso,$dimension,$pantalla,$b,$voz)
  {


    $insertar = $this->db->prepare("INSERT INTO producto (nombre,precio,marca,
                                  color,display,procesador,camaraPrincipal,
                                  camaraSecundaria,sistemaOp,red,frecuencia,
                                  bateria,tiempo,memoriaI,peso,dimension,
                                  pantalla,bluetooth,marcaporVoz) ".
                                  "VALUES (?,?,?,?,?,?,?,?,?,?,?,
                                           ?,?,?,?,?,?,?,?)");
    $result = $insertar->execute(array($nombre,$precio,$marca,$color,$display,
                                       $procesador,$camaraP,
                                       $camaraS,$so,
                                       $red,$frecuencia,$bateria,
                                       $tiempo,$memoriaI,$peso,$dimension,
                                       $pantalla,$b,$voz));

  }



?>