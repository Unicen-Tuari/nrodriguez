<?php
require_once('views/view_categoria.php');
require_once('models/model_categoria.php');
require_once('models/model_categorias_disponibles.php');

class controllerCategoria{
  private $viewCategoria;
  private $modelCategoria;
  public function __construct(){
    $this->viewCategoria = new viewCategoria();
    $this->modelCategoria = new modelCategoria();
  }
  public function mostrarFormCategoria($errores,$action,$listaCat=array()){
    $this->viewCategoria->getFormCategoria('Insertar Categoria',$errores,
                                           $action,$listaCat);
  }
  public function insertarCategoria($action){
    $model_cat_disp = new modelCatDisp();
    $listaCat = $model_cat_disp->getCategorias();
    if (isset($_POST['nombre']) && strlen(trim($_POST['nombre']))>0){
       $nombre = $_POST['nombre'];
      if ($this->validarCategoria($nombre)){
        $errores="";
      }
      else{
        $errores = 'No es una categoria valida';
      }
    }
    else{
      $errores = 'El campo nombre esta vacio';
    }
    if($errores===""){
      $this->modelCategoria->setCategoria($nombre);
      $this->mostrarFormCategoria($errores,$action);
    }
    else{
      echo $errores;
       $this->mostrarFormCategoria($errores,'insertar',$listaCat);
    }
}
  private function validarCategoria($nombre){
    $model_cat_disp = new modelCatDisp();
    $categoriasDisp = $model_cat_disp->getCategorias();
      foreach ($categoriasDisp as $categoria){
        if((strpos($nombre, $categoria)===false)){
          return false;
        }
        else{
          return true;
        }
      }
    }
}
?>
