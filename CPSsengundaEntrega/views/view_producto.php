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

   function mostrarProductos($productos,$errores,$listaCat,$init,$fin,
                             $totalProd,$prev,$next){
     $this->smarty->assign('productos',$productos);
     $this->smarty->assign('errores',$errores);
     $this->smarty->assign('titulo', 'Productos');
     $this->smarty->assign("baseDir", $this->baseDir);
     $this->smarty->assign('lista',$listaCat);
     $this->smarty->assign('init',$init);
     $this->smarty->assign('totalProd',$totalProd);
     $this->smarty->assign('fin',$fin);
     $this->smarty->assign('prev',$prev);
     $this->smarty->assign('next',$next);
     $this->smarty->display('productos.tpl');
   }

   function getDetailsProd($titulo,$producto){
     $this->smarty->assign('titulo',$titulo);
     $this->smarty->assign('producto',$producto);
     $this->smarty->assign("baseDir", $this->baseDir);
     $this->smarty->display('detalle_producto.tpl');
   }

   function mostrarCompProd($productos,$titulo){
     $this->smarty->assign('titulo','Comparacion');
     $this->smarty->assign('productos',$productos);
     $this->smarty->assign('tituloTabla',$titulo);
     $this->smarty->assign('baseDir',$this->baseDir);
     $this->smarty->display('comparacionProd.tpl');
   }

   function getFormModifyProd($titulo,$errores,$id,$producto,$action){
     $this->smarty->assign('titulo',$titulo);
     $this->smarty->assign('errores',$errores);
     $this->smarty->assign('id',$id);
     $this->smarty->assign('action',$action);
     $this->smarty->assign('baseDir',$this->baseDir);
     $this->smarty->assign('producto',$producto);
     $this->smarty->display('modifyProd.tpl');
   }

 }

 ?>
