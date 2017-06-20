<?php
require_once('views/view_producto.php');
require_once('views/view_categoria.php');
require_once('models/model_producto.php');
require_once('models/model_categoria.php');

class controllerProducto{
  private $vistaProducto;
  private $modelProducto;
  private $vistaCategoria;
  private $modelCategoria;

  function __construct(){
    $this->vistaProducto = new viewProducto();
    $this->modelProducto = new modelProducto();
    $this->vistaCategoria = new viewCategoria();
    $this->modelCategoria = new modelCategoria();
  }

private function validaCampo($caracteristica){
    if (isset($caracteristica) && strlen(trim($caracteristica))>0){
      return true;
    }
    else {
      return false;
    }
  }

public function insertarProducto($action){
      $errores=array();
      $producto=array();
      if ($this->validaCampo($_POST['producto'])){
        $producto['nombre'] = $_POST['producto'];
      }
      else {
        $errores['nombre'] = "Error: El campo nombre está vacio";
      }
      if ($this->validaCampo($_POST['precio'])){
        $producto['precio'] = $_POST['precio'];
      }
      else{
        $errores['precio'] = "Error: El campo precio está vacio";
      }
      if ($this->validaCampo($_POST['marca'])){
        $producto['marca'] = $_POST['marca'];
      }
      else{
        $errores['marca'] = "Error: El campo marca está vacio";
      }
      if ($this->validaCampo($_POST['color'])){
        $producto['color'] = $_POST['color'];
      }
      else{
        $errores['color'] = "Error: El campo color está vacio";
      }
      if ($this->validaCampo($_POST['display'])){
        $producto['display'] = $_POST['display'];
      }
      else{
        $errores['display'] = "Error: El campo display está vacio";
      }
      if ($this->validaCampo($_POST['procesador'])){
        $producto['procesador'] = $_POST['procesador'];
      }
      else{
        $errores['procesador'] = "Error: El campo procesador está vacio";
      }
      if ($this->validaCampo($_POST['camPrin'])){
        $producto['camPrin'] = $_POST['camPrin'];
      }
      else {
        $errores['camPrin'] = "Error: El campo camara primaria está vacio";
      }
      if ($this->validaCampo($_POST['camSec'])){
        $producto['camSec'] = $_POST['camSec'];
      }
      else {
        $errores['camSec'] = "Error: El campo camara secundaria está vacio";
      }
      if ($this->validaCampo($_POST['so'])){
        $producto['so'] = $_POST['so'];
      }
      else{
        $errores['so']="Error: El campo sistema operativo está vacio";
      }
      if ($this->validaCampo($_POST['red'])){
        $producto['red'] = $_POST['red'];
      }
      else{
        $errores['red'] = "Error: El campo red está vacio";
      }
      if ($this->validaCampo($_POST['fBanda'])){
        $producto['fBanda'] = $_POST['fBanda'];
      }
      else{
        $errores['fbanda'] = "Error: El campo frecuencia está vacio";
      }
      if ($this->validaCampo($_POST['bateria'])){
        $producto['bateria'] = $_POST['bateria'];
      }
      else{
        $errores['bateria'] = "Error: El campo bateria está vacio";
      }

      if ($this->validaCampo($_POST['tiempo'])){
        $producto['tiempo'] = $_POST['tiempo'];
      }
      else {
        $errores['tiempo'] = "Error: El campo tiempo está vacio";
      }
      if ($this->validaCampo($_POST['memoriaI'])){
        $producto['memoriaI'] = $_POST['memoriaI'];
      }
      else {
        $errores['memoriaI'] = "Error: El campo memoria interna está vacio";
      }
      if ($this->validaCampo($_POST['peso'])){
        $producto['peso'] = $_POST['peso'];
      }
      else{
        $errores['peso'] = "Error: El campo peso está vacio";
      }

      if ($this->validaCampo($_POST['dimension'])){
        $producto['dimension'] = $_POST['dimension'];
      }
      else{
        $errores['dimension'] = "Error: El campo dimension está vacio";
      }
      if ($this->validaCampo($_POST['dimension'])){
        $producto['dimension'] = $_POST['dimension'];
      }
      if ($this->validaCampo($_POST['pantalla'])){
        $producto['pantalla'] = $_POST['pantalla'];
      }
      else{
        $errores['pantalla'] = "Error: El campo pantalla está vacio";
      }
      if ($this->validaCampo($_POST['bluetooth'])){
        $producto['bluetooth'] = $_POST['bluetooth'];
      }
      else{
        $errores['bluetooth'] = "Error: El campo bluetooth está vacio";
      }
      if ($this->validaCampo($_POST['marcaPorVoz'])){
        $producto['marcaPorVoz'] = $_POST['marcaPorVoz'];
      }
      else {
        $errores['marcaPorVoz'] = "Error: El campo marcación por voz está vacio";
      }
      if ($this->validaCampo($_POST['categoria'])){
        $producto['categoria'] = $_POST['categoria'];
      }
      else {
        $errores['categoria'] = "Error: El campo categoria está vacio";
      }
      if (sizeof($errores)==0) {
        $this->modelProducto->setProducto($producto);
        $this->mostrarFormProducto($errores,$action);
      }
      else{
        $this->mostrarFormProducto($errores,'insertar');
      }
}

public function mostrarFormProducto($errores,$action){
  $this->vistaProducto->getFormProducto('Insertar Producto',$errores,$action);
}

private function existeCategoria($id){
  $listaCat = $this->modelCategoria->getCategorias();
  foreach ($listaCat as $categoria) {
    if ($id==$categoria['id_categoria']){
      return true;
    }
  }
   return false;
}

public function mostrarTodosProductos($errores=[],$id){
      $existeCat = $this->existeCategoria($id);
      $cantidadProd = $this->modelCategoria->cantidadProductoByCat($id);
      $num_prod_page = 3;
      $totalProd=$this->modelProducto->totalProd();
      $page = isset($_GET['page']) ? $_GET['page'] : 1;
      $start = ($page-1)*$num_prod_page;
      $prev=$page-1;
      $next=$page+1;
      if ($start==0){
        $init = $start+1;
        $fin = $init+2;
      }
      else{
        $init = $start+1;
        $fin = $init+2;
      }
      switch ($id){
        case '':
          $productos = $this->modelProducto->getProductos($start,$num_prod_page);
          $listaCat = $this->modelCategoria->getCategorias();
          $this->vistaProducto->mostrarProductos($productos,$errores,$listaCat,
                                                 $init,$fin,$totalProd,$prev,$next);
          break;
        default:
           if ($existeCat && $cantidadProd>0){
             $productos = $this->modelProducto->getProductosByCat($id);
             $listaCat = $this->modelCategoria->getCategorias();
             $this->vistaProducto->mostrarProductos($productos,$errores,$listaCat,
                                                    $init,$fin,$totalProd,$prev,$next);
           }
           else{
             $errores[] = "No se encontraron productos con esa categoria";
             $productos = $this->modelProducto->getProductos();
             $listaCat = $this->modelCategoria->getCategorias();
             $this->vistaProducto->mostrarProductos($productos,$errores,$listaCat,
                                                    $init,$fin,$prev,$next);
           }
           break;
      }
}


 function borrarProducto($id_Prod){
   $errores=array();
   if ($id_Prod !=''){
     if ($this->modelProducto->getProductoById($id_Prod)){
       $this->modelProducto->deleteProducto($id_Prod);
     }
     else{
       $errores[] = 'Error: El producto no existe';
     }
   }
   else {
      $errores[] = 'Error: Se esperaba un ID';
   }
   $this->mostrarTodosProductos($errores,'');
 }

 function mostrarDetProducto($id_Prod){
   $producto = $this->modelProducto->getProductoById($id_Prod);
   $this->vistaProducto->getDetailsProd('Detalle Producto',$producto);
 }

 private function comprobarCantProd(){
   if (sizeOf($_POST)>4){
     $error[] = 'Solo se puede hasta 4 ';
   }
   elseif (sizeOf($_POST)<=1){
     $error[] = 'No se seleccionaron productos suficientes';
   }
   else{
     $error = '';
   }
   return $error;
 }

 public function mostrarProdComp(){
   $productos=array();
   $errores = $this->comprobarCantProd();
   if ($errores==''){
     foreach($_POST as $id => $value){
       $productos[$id] = $this->modelProducto->getProductoById($id);
     }
     $this->vistaProducto->mostrarCompProd($productos,'Comparar Productos');
     }
   else{
     $errores;
     $this->mostrarTodosProductos($errores,1);
    }
  }

  public function mostrarFormModificarProd($errores,$id,$action){
    $producto = $this->modelProducto->getProductoById($id);
    $this->vistaProducto->getFormModifyProd('Modificar Producto',$errores,$id,
                                             $producto,$action);
  }

  public function modificarProducto($action,$id){
        $errores=array();
        foreach($_POST as $caract => $value){
          if ($this->validaCampo($value)){
            $caracteristica = $caract;
            $newValue = $value;
          }
          else{
            $errores[$caract] = "Error: Campo " . $caract . " vacio";
          }
        }
        if (sizeof($errores)==0) {
          switch ($caracteristica){
            case 'nombre':
            $this->modelProducto->modifyNameProduct($newValue,$id);
            break;
            case 'precio':
            $this->modelProducto->modifyPriceProduct($newValue,$id);
            break;
            case 'marca':
            $this->modelProducto->modifyBrandProduct($newValue,$id);
            break;
            case 'color':
            $this->modelProducto->modifyColorProduct($newValue,$id);
            break;
            case 'display':
            $this->modelProducto->modifyDisplayProduct($newValue,$id);
            break;
            case 'procesador':
            $this->modelProducto->modifyProcessorProduct($newValue,$id);
            break;
            case 'camPrin':
            $this->modelProducto->modifyCamPrinProduct($newValue,$id);
            break;
            case 'camSec':
            $this->modelProducto->modifyCamSecProduct($newValue,$id);
            break;
            case 'so':
            $this->modelProducto->modifySOProduct($newValue,$id);
            break;
            case 'red':
            $this->modelProducto->modifyNetProduct($newValue,$id);
            break;
            case 'frecuencia':
            $this->modelProducto->modifyFrequencyProduct($newValue,$id);
            break;
            case 'bateria':
            $this->modelProducto->modifyBatteryProduct($newValue,$id);
            break;
            case 'tiempo':
            $this->modelProducto->modifyTimeProduct($newValue,$id);
            break;
            case 'memoriaI':
            $this->modelProducto->modifyMemoryIProduct($newValue,$id);
            break;
            case 'peso':
            $this->modelProducto->modifyWeightProduct($newValue,$id);
            break;
            case 'dimension':
            $this->modelProducto->modifyDimensionProduct($newValue,$id);
            break;
            case 'pantalla':
            $this->modelProducto->modifyScreenProduct($newValue,$id);
            break;
            case 'bluetooth':
            $this->modelProducto->modifyBluetoothProduct($newValue,$id);
            break;
            case 'marcaXVoz':
            $this->modelProducto->modifyVoiceDialingProduct($newValue,$id);
            break;
          }
          $this->mostrarFormModificarProd($errores,$id,$action);
        }
        else{
          $this->mostrarFormModificarProd($errores,$id,'modificar');
        }
  }
}

?>
