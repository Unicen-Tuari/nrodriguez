<?php
require_once('controllers/controllerProducto.php');
require_once('config/config_app.php');

function parseUrl($url){
  $arrData = explode("/",$url);
  $arrInfo[configApp::$action] =$arrData[1];
  return $arrInfo;
}

$controller = new controllerProducto();
if($_GET[configApp::$ACTION] == ''){
  $controller->getFormProducto();
}
elseif($_GET[configApp::$ACTION] == ConfigApp::$ACTION_ADD){
  $controller->insertarProducto();
}

?>
