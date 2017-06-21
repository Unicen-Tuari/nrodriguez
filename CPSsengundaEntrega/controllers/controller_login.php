<?php
require_once('views/view_login.php');
require_once('models/model_login.php');

class controllerLogin{
  private $vistaLogin;
  private $modelLogin;

public function __construct(){
  $this->vistaLogin = new viewLogin();
  $this->modelLogin = new modelLogin();
}

public function mostrarLogin($errores,$action=''){
  $this->vistaLogin->mostrarLogin('Login',$errores,$action);
}

private function validarEmail($email){
 $email = strtolower($email);
 $repete = $this->modelLogin->getEmail($email);
 if ($repete){
   return true;
 }
 else{
   return false;
 }
}

function registrarse($action=''){
  $errores='';
  if (isset($_POST['email']) && strlen(trim($_POST['email']))>0){
    $email = $_POST['email'];
    $is_repete = $this->validarEmail($email);
  }
  else{
    $errores = 'El campo esta vacio';
  }
  if (isset($_POST['password']) && strlen(trim($_POST['password'])>0)){
    $password = $_POST['password'];
  }
  else{
    $errores = 'El campo esta vacio';
  }

  if ($errores==''){
    if (!$is_repete){
      $passCifrada = password_hash($password,PASSWORD_BCRYPT);
      $this->modelLogin->registrar($email,$passCifrada);
      $this->vistaLogin->mostrarLogin('Login',$errores,$action);
    }
    else{
      $errores = 'Ya se registro ese mail';
      $this->mostrarLogin($errores,$action);
    }
  }
  else{
    $this->mostrarLogin($errores,$action);
  }
}

public function loguearse(){
  $errores = '';
  if (isset($_POST['email']) && strlen(trim($_POST['email']))>0){
    $email = $_POST['email'];
  }
  else{
    $errores = 'El campo esta vacio';
  }
  if (isset($_POST['password']) && strlen(trim($_POST['password'])>0)){
    $password = $_POST['password'];
  }
  else{
    $errores = 'El campo esta vacio';
  }

  if ($errores==''){
    $usuario = $this->modelLogin->getDatEmail($email);
    if (password_verify($password,$usuario['password'])){
      session_start();
      $_SESSION['logueado'] = true;
      header('Location: ..');
    }
    else{
      $errores = 'Email or Password incorrect';
      $this->mostrarLogin($errores);
    }
  }
  else{
    $this->mostrarLogin($errores);
  }
}

public function getDatosUsuario($email){
  $usuario = $this->modelLogin->getDatEmail($email);
  return $usuario;
}

}



?>
