<?php
require_once('libs/Smarty.class.php');

class viewCategoria{
  private $smarty;
  private $baseDir;

  public function __construct(){
    $this->smarty = new Smarty();
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }
  public function getFormCategoria($titulo,$errores,$action,$listaCat){
    $this->smarty->assign('titulo',$titulo);
    $this->smarty->assign('tituloLista','Lista de Categorias Validas');
    $this->smarty->assign('errores',$errores);
    $this->smarty->assign('action',$action);
    $this->smarty->assign('lista',$listaCat);
    $this->smarty->assign("baseDir",$this->baseDir);
    $this->smarty->display('form_categoria.tpl');
  }
  public function getListaCategorias($listaCat){
    $this->smarty->assign('categorias',$listaCat);
    $this->smarty->assign('baseDir',$this->baseDir);
    return $this->smarty->fetch('listaMarcas.tpl');
  }
}

?>
