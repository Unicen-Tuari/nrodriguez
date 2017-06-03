<?php

 require_once('libs/Smarty.class.php');

 class viewProducto{
   private $smarty;
   private $baseDir;

   function __construct(){
     $this->smarty = new smarty();
     $this->baseDir = 'http://'.$_SERVER['SERVER_NAME'] . dirname($_SERVER['PHP_SELF']).'/';
   }

   function getFormProducto($titulo,$errores,$action){
     $this->smarty->assign('titulo' , $titulo);
     $this->smarty->assign('errores',$errores);
     $this->smarty->assign('action', $action);
     $this->smarty->assign("baseDir", $this->baseDir);
     $this->smarty->display('form_producto.tpl');
   }

   function mostrarProductos($producto){
     $this->smarty->display('productos.tpl');
   }
 }

 ?>
