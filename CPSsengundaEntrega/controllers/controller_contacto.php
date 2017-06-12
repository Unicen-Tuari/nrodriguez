<?php
require_once('views/view_contacto.php');

class controllerContacto{
     private $vista;

  function __construct(){
    $this->vista = new viewContacto();
  }

  function mostrarFormContacto($errores){
    $this->vista->getFormContact('Contacto',$errores);
  }
}




?>
