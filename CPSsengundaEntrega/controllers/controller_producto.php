<?php
require_once('views/view_producto.php');
require_once('models/model_producto.php');

class controllerProducto{
  private $vista;
  private $model;

  function __construct(){
    $this->vista = new viewProducto();
    $this->model = new modelProducto();
  }

private function validaCampo($caracteristica){
    if (isset($caracteristica) && strlen(trim($caracteristica))>0){
      return true;
    }
    else {
      return false;

    }
  }

function insertarProducto(){

      $errores=array();
      $producto=array();
      if ($this->validaCampo($_POST['producto'])){
        $producto['nombre']=$_POST['producto'];
      }
      else {
        $errores[]="Error: El campo nombre está vacio";
      }
      if ($this->validaCampo($_POST['precio'])){
        $producto['precio'] = $_POST['precio'];
      }
      else{
        $errores[]="Error: El campo precio está vacio";
      }
      if ($this->validaCampo($_POST['marca'])){
        $producto['marca'] = $_POST['marca'];
      }
      else{
        $errores[]="Error: El campo marca está vacio";
      }
      if ($this->validaCampo($_POST['color'])){
        $producto['color'] = $_POST['color'];
      }
      else{
        $errores[]="Error: El campo color está vacio";
      }
      if ($this->validaCampo($_POST['display'])){
        $producto['display'] = $_POST['display'];
      }
      else{
        $errores[]="Error: El campo display está vacio";
      }
      if ($this->validaCampo($_POST['procesador'])){
        $producto['procesador'] = $_POST['procesador'];
      }
      else{
        $errores[]="Error: El campo procesador está vacio";
      }
      if ($this->validaCampo($_POST['camPrin'])){
        $producto['camPrin'] = $_POST['camPrin'];
      }
      else {
        $errores[]="Error: El campo camara primaria está vacio";
      }
      if ($this->validaCampo($_POST['camSec'])){
        $producto['camSec'] = $_POST['camSec'];
      }
      else {
        $errores[]="Error: El campo camara secundaria está vacio";
      }
      if ($this->validaCampo($_POST['so'])){
        $producto['so'] = $_POST['so'];
      }
      else{
        $errores[]="Error: El campo sistema operativo está vacio";
      }
      if ($this->validaCampo($_POST['red'])){
        $producto['red'] = $_POST['red'];
      }
      else{
        $errores[]="Error: El campo red está vacio";
      }
      if ($this->validaCampo($_POST['fBanda'])){
        $producto['fBanda'] = $_POST['fBanda'];
      }
      else{
        $errores[]="Error: El campo frecuencia está vacio";
      }
      if ($this->validaCampo($_POST['bateria'])){
        $producto['bateria'] = $_POST['bateria'];
      }
      else{
        $errores[]="Error: El campo bateria está vacio";
      }

      if ($this->validaCampo($_POST['tiempo'])){
        $producto['tiempo'] = $_POST['tiempo'];
      }
      else {
        $errores[]="Error: El campo tiempo está vacio";
      }
      if ($this->validaCampo($_POST['memoriaI'])){
        $producto['memoriaI'] = $_POST['memoriaI'];
      }
      else {
        $errores[]="Error: El campo memoria interna está vacio";
      }
      if ($this->validaCampo($_POST['peso'])){
        $producto['peso'] = $_POST['peso'];
      }
      else{
        $errores[]="Error: El campo peso está vacio";
      }

      if ($this->validaCampo($_POST['dimension'])){
        $producto['dimension'] = $_POST['dimension'];
      }
      else{
        $errores[]="Error: El campo dimension está vacio";
      }
      if ($this->validaCampo($_POST['dimension'])){
        $producto['dimension'] = $_POST['dimension'];
      }
      if ($this->validaCampo($_POST['pantalla'])){
        $producto['pantalla'] = $_POST['pantalla'];
      }
      else{
        $errores[]="Error: El campo pantalla está vacio";
      }
      if ($this->validaCampo($_POST['bluetooth'])){
        $producto['bluetooth'] = $_POST['bluetooth'];
      }
      else{
        $errores[]="Error: El campo bluetooth está vacio";
      }
      if ($this->validaCampo($_POST['marcaPorVoz'])){
        $producto['marcaPorVoz'] = $_POST['marcaPorVoz'];
      }
      else {
        $errores[]="Error: El campo marcación por voz está vacio";
      }
      if (sizeof($errores)==0) {
        $this->model->setProducto($producto);
        $this->vista->getFormProducto('Insertar Producto',$errores);
      }
      else{
        $this->vista->getFormProducto('Insertar Producto',$errores);
      }
}

function getFormProducto($errores=[]){
  $this->vista->getFormProducto('Insertar Producto',$errores);
}

function mostrarTodosProductos(){
      $productos = $this->model->getProductos();
      $productosAMostrar = array();
      foreach ($productos as $producto) {
            $productosAMostrar[]= $producto;
        }
      $this->vista->mostrarProductos();
}
}
?>
