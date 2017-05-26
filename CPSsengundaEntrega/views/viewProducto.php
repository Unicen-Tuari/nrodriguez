<?php

 require_once('libs/Smarty.class.php');

 class viewProducto{
   private $smarty;

   function __construct(){
     $this->smarty = new smarty();
   }

   function insertarProducto($titulo){
     $this->smarty->assign('titulo' , $titulo);
     $this->smarty->display('form_producto.tpl');
   }
 }

 ?>
