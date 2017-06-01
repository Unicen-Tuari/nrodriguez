<?php

require_once('libs/Smarty.class.php');

class viewHome{
   private $smarty;

  public function __construct(){
    $this->smarty = new smarty();
  }

  public function mostrar(){
    $this->smarty->display('home.tpl');
  }
}



?>
