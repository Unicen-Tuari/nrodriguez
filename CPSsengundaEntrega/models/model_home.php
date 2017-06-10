<?php

class modelHome{
  private $db;

  function __construct(){
    $this->db = new PDO('mysql:host=localhost;'. 'dbname=cps; charset=utf8',
                        'root','');
  }

  public function setNoticia(){
    $setNoticia = $this->db->prepare("INSERT INTO noticia(titulo,subtitulo)".
                                    "VALUES(?,?)");
    $setNoticia->execute(array($noticia['titulo'],$noticia['subTitulo']));
  }
}
?>
