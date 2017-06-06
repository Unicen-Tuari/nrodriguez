<?php
require_once('libs/Smarty.class.php');

class viewCategoria{
  private $smarty;
  private $baseDir;

  public function __construct(){
    $this->smarty = new Smarty();
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }
  public function getFormCategoria($titulo,$errores,$action){
    $this->smarty->assign('titulo',$titulo);
    $this->smarty->assign('baseDir',$this->baseDir);
    $this->smarty->display('form_categoria.tpl');
  }
}

?>
