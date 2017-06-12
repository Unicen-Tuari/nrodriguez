<?php

class modelLogin{
  private $model;

  public function __construct(){
    $this->model = new PDO('mysql:host=localhost;'. 'dbname=cps; charset=utf8',
                           'root','');
  }

  public function registrar($email,$password){
    $register = $this->model->prepare("INSERT INTO usuario(email,password)
                                       VALUES (?,?)");
    $register->execute(array($email,$password));
  }

  public function getEmail($email){
    $consulta = $this->model->prepare("SELECT email FROM usuario WHERE email = ?");
    $result = $consulta->execute(array($email));
    return $consulta->fetch();
  }

  public function getDatEmail($email){
    $consulta = $this->model->prepare("SELECT * FROM usuario WHERE email = ?");
    $result = $consulta->execute(array($email));
    return $consulta->fetch();
  }
}

?>
