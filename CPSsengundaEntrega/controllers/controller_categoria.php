<?php
require_once('views/view_categoria.php');

class controllerCategoria{
  private $viewCategoria;

  public function __construct(){
    $this->viewCategoria = new viewCategoria();
  }
  public function mostrarFormCategoria($errores,$action){
    $this->viewCategoria->getFormCategoria('Insertar Categoria',$errores,$action);
  }
}




?>
