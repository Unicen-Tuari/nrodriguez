<?php

class modelCatDisp{
  private $arrCat;

  public function __construct(){
    $this->arrCat = array('Apple', 'Samsung', 'Huawei', 'Motorola', 'LG', 'Samsung',
                    'Lenovo', 'Sony', 'Xiami', 'Nokia', 'HTC', 'BlackBerry',
                    'Asus', 'ZTE', 'Meizu', 'Lanix', 'Oppo', 'otros');
  }
  public function getCategorias(){
    $categorias = $this->arrCat;
    return $categorias;
  }
}
?>
