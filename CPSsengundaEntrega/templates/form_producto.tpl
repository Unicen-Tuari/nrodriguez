{include file="header.tpl"}
      <div class="col-lg-12">
      <div class="row encabezado">
       <div class="col-lg-12">
           <h3>{$titulo}</h3>
       </div>
      </div>
      <form class="col-sm-6 col-xs-12" action="insertar_producto.php" method="get">
    <div class="form-group row">
      <label for="producto" class="col-sm-2 col-xs-6 form-control-label">Producto</label>
      <div class="col-sm-10">
        <input type="text" name="producto" class="form-control" placeholder="Producto">
      </div>
    </div>
    <div class="form-group row">
      <label for="precio" class="col-sm-2 col-xs-6 form-control-label">Precio</label>
      <div class="col-sm-10">
        <input type="text" name="precio" class="form-control" placeholder="Precio">
      </div>
    </div>
    <div class="form-group row">
      <label for="marca" class="col-sm-2 col-xs-6 form-control-label">Marca</label>
      <div class="col-sm-10">
        <input type="text" name="marca" class="form-control" placeholder="Marca">
      </div>
    </div>
{include file="header.tpl"}
    <div class="form-group row">
      <label for="color" class="col-sm-2 col-xs-6 form-control-label">Color</label>
      <div class="col-sm-10">
        <input type="text" name="color" class="form-control" placeholder="Color">
      </div>
    </div>
    <div class="form-group row">
      <label for="display" class="col-sm-2 col-xs-6 form-control-label">Display</label>
      <div class="col-sm-10">
        <input type="text" name="display" class="form-control" placeholder="Display"></input>
      </div>
    </div>
    <div class="form-group row">
      <label for="procesador" class="col-sm-2 col-xs-6 form-control-label">Procesador</label>
      <div class="col-sm-10">
        <input type="text" name="procesador" class="form-control" placeholder="Procesador"></input>
      </div>
    </div>
    <div class="form-group row">
      <label for="camPrin" class="col-sm-2 col-xs-6 form-control-label">Camara Principal</label>
      <div class="col-sm-10">
        <input type="text" name="camPrin" class="form-control" placeholder="Camara Principal"></input>
      </div>
    </div>
    <div class="form-group row">
      <label for="camSec" class="col-sm-2 col-xs-6 form-control-label">Camara Secundaria</label>
      <div class="col-sm-10">
        <input type="text" name="camSec" class="form-control" placeholder="Camara Secundaria"></input>
      </div>
    </div>
    <div class="form-group row">
      <label for="so" class="col-sm-2 col-xs-6 form-control-label">Sistema Operativo</label>
      <div class="col-sm-10">
        <input type="text" name="so" class="form-control" placeholder="Sistema Operativo"></input>
      </div>
    </div>
    <div class="form-group row">
      <label for="red" class="col-sm-2 col-xs-6 form-control-label">Red</label>
      <div class="col-sm-10">
        <input type="text" name="red" class="form-control" placeholder="Red"></input>
      </div>
    </div>
    <div class="form-group row">
      <label for="fBanda" class="col-sm-2 col-xs-6 form-control-label">Frecuencia de Banda</label>
      <div class="col-sm-10">
        <input type="text" name="fBanda" class="form-control" placeholder="Frecuencia de Banda"></input>
      </div>
    </div>
    <div class="form-group row">
      <label for="bateria" class="col-sm-2 col-xs-6 form-control-label">Bateria en modo Stand By</label>
      <div class="col-sm-10">
        <input type="text" name="bateria" class="form-control" placeholder="Bateria en modo Stand By"></input>
      </div>
    </div>
    <div class="form-group row">
      <label for="tiempo" class="col-sm-2 col-xs-6 form-control-label">Tiempo de Conversacion</label>
      <div class="col-sm-10">
        <input type="text" name="tiempo" class="form-control" placeholder="Tiempo de Conversacion"></input>
      </div>
    </div>
    <div class="form-group row">
      <label for="memoriaI" class="col-sm-2 col-xs-6 form-control-label">Memoria Interna</label>
      <div class="col-sm-10">
        <input type="text" name="memoriaI" class="form-control" placeholder="Memoria Interna"></input>
      </div>
    </div>
    <div class="form-group row">
      <label for="peso" class="col-sm-2 col-xs-6 form-control-label">Peso</label>
      <div class="col-sm-10">
        <input type="text" name="peso" class="form-control" placeholder="Peso"></input>
      </div>
    </div>
    <div class="form-group row">
      <label for="dimension" class="col-sm-2 col-xs-6 form-control-label">Dimension</label>
      <div class="col-sm-10">
        <input type="text" name="dimension" class="form-control" placeholder="Dimension"></input>
      </div>
    </div>
    <div class="form-group row">
      <label for="pantalla" class="col-sm-2 col-xs-6 form-control-label">Pantalla</label>
      <div class="col-sm-10">
        <input type="text" name="pantalla" class="form-control" placeholder="Pantalla"></input>
      </div>
    </div>
    <div class="form-group row">
      <label for="bluetooth" class="col-sm-2 col-xs-6 form-control-label">Bluetooth</label>
      <div class="col-sm-10">
        <input type="text" name="bluetooth" class="form-control" placeholder="Bluetooth"></input>
      </div>
    </div>
    <div class="form-group row">
      <label for="marcaPorVoz" class="col-sm-2 col-xs-6 form-control-label">Marcacion por Voz</label>
      <div class="col-sm-10">
        <input type="text" name="marcaPorVoz" class="form-control" placeholder="Marcacion por Voz"></input>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
      <input class="btn" type="submit" name="name" value="Enviar">
    </div>
  </form>
    </div> <!--/..col-lg-12-->
{include file="footer.tpl"}
