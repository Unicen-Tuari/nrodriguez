<?php
require_once('controllers/controller_home.php');
require_once('controllers/controller_producto.php');
require_once('controllers/controller_contacto.php');
require_once('config/config_app.php');

function parseUrl($url){
  $arrData = explode("/",$url);
  if (isset($arrData[0])){
  $arrInfo[configApp::$RESOURCE] = $arrData[0];
  }
  if (isset($arrData[1])){
    $arrInfo[configApp::$ACTION] = $arrData[1];
  }
  if (isset($arrData[2])){
    $arrInfo[configApp::$PARAMETERS] = $arrData[2];
  }
  return $arrInfo;
}


if ($_REQUEST[configApp::$ACTION]==''){
  $controller_Home = new controllerHome();
  $controller_Home->mostrarHome();
}
else{
  $value=configApp::$ACTION_ADD;
  $controller_prod = new controllerProducto();
  $controller_contact = new controllerContacto();
  $datos = parseUrl($_REQUEST[configApp::$ACTION]);
  switch ($datos[configApp::$RESOURCE]){
    case configApp::$RESOURCE_PROD:
      if (isset($datos[configApp::$ACTION])){
        switch ($datos[configApp::$ACTION]){
          case configApp::$ACTION_ADD:
              $controller_prod->mostrarFormProducto(array(),$value);
              break;
          case configApp::$ACTION_ADD_PROD:
              $value=configApp::$ACTION_ADD_PROD;
              $controller_prod->insertarProducto($value);
              break;
          case configApp::$ACTION_VIEW_PROD:
              $controller_prod->mostrarTodosProductos();
              break;
          case configApp::$ACTION_DELETE_PROD:
              $controller_prod->borrarProducto($datos[configApp::$PARAMETERS]);
              break;
          case configApp::$ACTION_VIEW_DETAILS_PROD:
              $controller_prod->mostrarDetProducto($datos[configApp::$PARAMETERS]);
              break;
          case '':
              $controller_prod->mostrarFormProducto(array(),$value);
              break;
          default:
              echo 'ERROR: ACCION INVALIDA';
              break;
        }
      }
      else {
        $controller_prod->mostrarFormProducto(array(),'');
      }
        break;
    case configApp::$RESOURCE_CONTACT:
       if (isset($datos[configApp::$ACTION])){
        switch ($datos[configApp::$ACTION]){
          case configApp::$ACTION_ADD:
              $controller_contact->mostrarFormContacto(array(),$value);
              break;
           case '':
              $controller_contact->mostrarFormContacto(array(),$value);
              break;
           default:
              echo 'ERROR: ACCION INVALIDA';
              break;
          }
        }
      else{
        $controller_contact->mostrarFormContacto(array(),$value);
        break;
        }
       break;
       case configApp::$RESOURCE_CATEGORY:
         if (isset($datos[configApp::$ACTION])){
           switch ($datos[configApp::$ACTION]){
             case configApp::$ACTION_ADD:
               $controller_categoria->mostrarFormCategoria(array(),$value);
               break;
             case '':
               $controller_categoria->mostrarFormCategoria(array(),$value);
               break;
             default:
               echo 'ERROR: ACCION INVALIDA';
               break;
           }
         }
       else{
         $controller_categoria->mostrarFormCategoria(array(),$value);
         break;
         }
        break;
      default:
         echo 'ERROR: ACCION INVALIDA';
         break;
  }

}

?>
