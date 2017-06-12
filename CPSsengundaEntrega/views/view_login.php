<?php

require_once('libs/Smarty.class.php');

class viewLogin{
  private $smarty;
  private $baseDir;

  public function __construct(){
    $this->smarty = new Smarty();
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  public function mostrarLogin($titulo,$errores,$action=''){
    $this->smarty->assign('titulo',$titulo);
    $this->smarty->assign('errores',$errores);
    $this->smarty->assign('action',$action);
    $this->smarty->assign('baseDir',$this->baseDir);
    $this->smarty->display('form_login.tpl');
  }
}




?>
