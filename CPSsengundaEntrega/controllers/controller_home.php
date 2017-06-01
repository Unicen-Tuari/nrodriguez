<?php
require_once('views/view_home.php');

class controllerHome{
   private $viewHome;

  public function __construct(){
    $this->viewHome = new viewHome();
  }

  public function mostrarHome(){
    $this->viewHome->mostrar();
  }
}

?>
