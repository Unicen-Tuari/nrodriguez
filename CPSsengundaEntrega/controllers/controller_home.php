<?php
require_once('views/view_home.php');

class controllerHome{
   private $viewHome;

  public function __construct(){
    $this->viewHome = new viewHome();
  }

  public function mostrarHome(){
    session_start();
    if (!isset($_SESSION['logueado'])){
      header('Location: login');
      die();
    }
    else{
     $this->viewHome->mostrar('Homepage');
  }
}
}

?>
