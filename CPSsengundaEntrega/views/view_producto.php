<?php

 require_once('libs/Smarty.class.php');

 class viewProducto{
   private $smarty;

   function __construct(){
     $this->smarty = new smarty();
   }

   function getFormProducto($titulo,$errores){
     $this->smarty->assign('titulo' , $titulo);
     $this->smarty->assign('errores',$errores);
     $this->smarty->display('form_producto.tpl');
   }

   function mostrarProductos($producto){
     $this->smarty->display('productos.tpl');
   }
 }

 ?>
