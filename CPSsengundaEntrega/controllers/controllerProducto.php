<?php
require_once('viewProducto.php');
require_once('modelProducto.php');

class controllerProducto{
  private $vista;
  private $model;

  function __construct(){
    $this->vista = new viewProducto();
    $this->model = new modelProducto();
  }

  private function validarCampos(){
    $is_valido=false;
    $errores=array();
    foreach ($productos as $carac => $valor){
      if (isset($valor) && strlen(trim($valor))>0){
         $is_valido=true;
      else
         $errores[]='Error el campo ' . $carac . ' se encuentra vacio';
      }
    }
    if ($is_valido){
      return $is_valido
    }
    else
      return $errores;
  }

  function insertarProducto($productos){
      $
        $this->model->setProducto($productos['nombre'],$productos['precio'],
                                  $productos['marca'],$productos['color'],
                                  $_POST['display'],$productos['procesador'],
                                  $_POST['camPrin'],$POST['camSec'],
                                  $_POST['so'],$_POST['red'],$_POST['fBanda'],
                                  $_POST['bateria'],$_POST['memoriaI'],
                                  $_POST['peso'],$_POST['dimension'],
                                  $_POST['pantalla'],$_POST['bluetooth'],
                                  $_POST['marcaPorVoz']);
      }
    }



  function mostrarTodosProductos(){
      $productos = $this->model->getProductos();
      $productosAMostrar = array();
      foreach ($productos as $producto) {
            $productosAMostrar[]= $producto;
        }
      }
}
?>
