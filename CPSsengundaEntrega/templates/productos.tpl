{include file="header.tpl"}
{include file="nav.tpl"}
  <div class="row">
    <div class="filterProducts col-xs-12  col-lg-2 ">
      <h3>Filtrar por</h3>
     <ul>
       <li class="flecha">MARCAS</li>
        <ul>
          <li><a href="#">Samsung</a></li>
          <li><a href="#">Iphone</a></li>
          <li><a href="#">Motorola</a></li>
          <li><a href="#">Sony</a></li>
          <li><a href="#">Otros</a></li>
        </ul>
        <li class="flecha">S.O</li>
        <ul>
          <li><a href="#">Android</a></li>
          <li><a href="#">Windows Phone</a></li>
        </ul>
        <li class="flecha">Precio</li>
        <ul>
          <li><a href="#">Menos de $4000</a></li>
          <li><a href="#">Entre $4000 y $8000</a></li>
          <li><a href="#">Más de $12000</a></li>
        </ul>
    </ul>
    </div>
    <div class="col-xs-12 col-lg-10">
      <div class="row encabezado">
        <h3>Equipos</h3>
      </div>
      <div class="nav-pagination row">
        <div class="col-xs-12 col-lg-3 ">
          <p class="center">Productos 12-24 de 52</p>
        </div>
        <div class="col-xs-6 col-lg-3">
          <p class="center">Ordenar por</p>
        </div>
        <div class="col-xs-6 col- col-lg-2">
          <p class="center">Mostrar</p>
        </div>
        <div class="col-xs-12 col-lg-4">
          <div class="w3-bar">
            <a href="#" class="w3-button">&laquo;</a>
            <a href="#" class="w3-button">1</a>
            <a href="#" class="w3-button">2</a>
            <a href="#" class="w3-button">3</a>
            <a href="#" class="w3-button">4</a>
            <a href="#" class="w3-button">&raquo;</a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
          <div class="thumbnail">
            <h3></h3>
            <img src="images/celulares/Iphone7plus.jpg" alt="...">
            <div class="caption">
              <p>Precio en un pag</p>
              <p></p>
              <p>Con Plan Control $420 x mes</p>
              <input id="{$producto['id_producto']}" type="checkbox" name="box1"
              value="1"> <label for="{$producto['id_producto']}">Comparar</label>
            </div>
          </div>
        </div>
      </div>
      <div class="nav-pagination row">
        <div class="col-xs-12 col-lg-4 ">
          <p class="center">Productos 1-12 de 61</p>
        </div>
        <div class="col-xs-12 col-lg-offset-4 col-lg-4">
          <div class="w3-bar">
            <a href="#" class="w3-button">&laquo;</a>
            <a href="#" class="w3-button">1</a>
            <a href="#" class="w3-button">2</a>
            <a href="#" class="w3-button">3</a>
            <a href="#" class="w3-button">4</a>
            <a href="#" class="w3-button">&raquo;</a>
          </div>
        </div>
      </div>
    </div>
    </div>

    <div class="container">
      <div id="listaCompara" class="row">

      </div>
    </div>

{include file="footer.tpl"}
