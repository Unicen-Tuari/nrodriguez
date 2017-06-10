<?php

require_once('libs/Smarty.class.php');

class viewHome{
   private $smarty;
   private $baseDir;

  public function __construct(){
    $this->smarty = new smarty();
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  public function mostrar($titulo){
    $this->smarty->assign('titulo',$titulo);
    $this->smarty->assign("baseDir", $this->baseDir);
    $this->smarty->display('home.tpl');
  }
}



?>
