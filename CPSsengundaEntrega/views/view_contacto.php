<?php
require_once('libs/Smarty.class.php');

class viewContacto{
     private $vista;
     private $baseDir;

  function __construct(){
    $this->vista = new Smarty();
    $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
  }

  function getFormContact($titulo,$errores){
    $this->vista->assign('titulo',$titulo);
    $this->vista->assign("baseDir",$this->baseDir);
    $this->vista->display('form_consulta.tpl');
  }
}
?>
