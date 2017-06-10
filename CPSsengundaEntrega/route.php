<?php
require_once('controllers/controller_home.php');
require_once('controllers/controller_producto.php');
require_once('controllers/controller_contacto.php');
require_once('controllers/controller_categoria.php');
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

function menuActionProducto($action,$value,$error,$id){
  $controller_prod = new controllerProducto();
    switch ($action){
        case configApp::$ACTION_ADD:
            $controller_prod->mostrarFormProducto(array(),$value);
            break;
        case configApp::$ACTION_ADD_PROD:
            $value=configApp::$ACTION_ADD_PROD;
            $controller_prod->insertarProducto($value);
            break;
        case configApp::$ACTION_VIEW_PROD:
            $controller_prod->mostrarTodosProductos(array(),$id);
            break;
        case configApp::$ACTION_DELETE_PROD:
            $controller_prod->borrarProducto($id);
            break;
        case configApp::$ACTION_VIEW_DETAILS_PROD:
            $controller_prod->mostrarDetProducto($id);
            break;
        case configApp::$ACTION_COMPARE:
            $controller_prod->mostrarProdComp();
            break;
        case '':
            $controller_prod->mostrarFormProducto(array(),$value);
            break;
        default:
            echo $error;
            break;
      }
}

function menuActionContacto($action,$value,$error){
  $controller_contact = new controllerContacto();
  switch ($action){
    case configApp::$ACTION_ADD:
        $controller_contact->mostrarFormContacto(array(),$value);
        break;
     case '':
        $controller_contact->mostrarFormContacto(array(),$value);
        break;
     default:
        echo $error;;
        break;
    }
}

function menuActionCategoria($action,$value,$error){
  $controller_categoria = new controllerCategoria();
  switch ($action){
  case configApp::$ACTION_ADD:
    $controller_categoria->mostrarFormCategoria(array(),$value);
    break;
  case configApp::$ACTION_ADD_CAT:
    $value = configApp::$ACTION_ADD_CAT;
    $controller_categoria->insertarCategoria($value);
    break;
  case '':
    $controller_categoria->mostrarFormCategoria(array(),$value);
    break;
  default:
    echo $error;
    break;
  }
}

if ($_REQUEST[configApp::$ACTION]==''){
  $controller_Home = new controllerHome();
  $controller_Home->mostrarHome();
}
else{
  $value = configApp::$ACTION_ADD;
  $datos = parseUrl($_REQUEST[configApp::$ACTION]);
  if ($datos[configApp::$RESOURCE]=='listaCat'){
    $controller_categoria = new controllerCategoria();
    $controller_categoria->mostrarListaCat();
  }
  $errorRecurso = 'Recurso Invalido';
  $errorAction = 'Accion Invalida';
  switch ($datos[configApp::$RESOURCE]){
    case configApp::$RESOURCE_PROD:
        if (isset($datos[configApp::$ACTION])){
          if (isset($datos[configApp::$PARAMETERS])){
            $p = $datos[configApp::$PARAMETERS];
          }
          else{
            $p='';
          }
          menuActionProducto($datos[configApp::$ACTION],$value,$errorAction,$p);
        }
        else {
          $controller_prod = new controllerProducto();
          $controller_prod->mostrarFormProducto(array(),'');
        }
        break;
    case configApp::$RESOURCE_CONTACT:
       if (isset($datos[configApp::$ACTION])){
          menuActionContacto($datos[configApp::$ACTION],$value,$errorAction);
        }
      else{
        $controller_contact = new controllerContacto();
        $controller_contact->mostrarFormContacto(array(),$value);
        }
       break;
      case configApp::$RESOURCE_CATEGORY:
         if (isset($datos[configApp::$ACTION])){
          menuActionCategoria($datos[configApp::$ACTION],$value,$errorAction);
         }
       else{
         $controller_categoria = new controllerCategoria();
         $controller_categoria->mostrarFormCategoria(array(),$value);
         break;
         }
        break;
      default:
         echo $errorRecurso;
         break;
  }
}

?>
