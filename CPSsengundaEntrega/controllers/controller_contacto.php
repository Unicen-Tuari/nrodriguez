<?php
require_once('views/view_contacto.php');

class controllerContacto{
     private $vista;

  function __construct(){
    $this->vista = new viewContacto();
  }

  function mostrarFormContacto($errores,$action){
    $this->vista->getFormContact('Contacto',$errores,$action);
  }
}




?>
