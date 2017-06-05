{include file="header.tpl"}
{include file="nav.tpl"}
      <div class="col-lg-12">
      <div class="row encabezado">
       <div class="col-lg-12">
           <h3>{$titulo}</h3>
       </div>
      </div>
      <form class="col-sm-6 col-xs-12" action="producto/insertarProducto" method="post">
    <div class="form-group row">
      <label for="producto" class="col-sm-2 col-xs-6 form-control-label">Producto</label>
      <div class="col-sm-10">
        <input type="text" name="producto" class="form-control" placeholder="Producto">
        {if $errores}
          {if isset($errores['nombre'])}
           <span class="label label-danger">{$errores['nombre']|upper}</span>
           {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="precio" class="col-sm-2 col-xs-6 form-control-label">Precio</label>
      <div class="col-sm-10">
        <input type="text" name="precio" class="form-control" placeholder="Precio">
        {if $errores}
          {if isset($errores['precio'])}
            <span class="label label-danger">{$errores['precio']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="marca" class="col-sm-2 col-xs-6 form-control-label">Marca</label>
      <div class="col-sm-10">
        <input type="text" name="marca" class="form-control" placeholder="Marca">
        {if $errores}
          {if isset($errores['marca'])}
            <span class="label label-danger">{$errores['marca']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="color" class="col-sm-2 col-xs-6 form-control-label">Color</label>
      <div class="col-sm-10">
        <input type="text" name="color" class="form-control" placeholder="Color">
        {if $errores}
         {if isset($errores['color'])}
            <span class="label label-danger">{$errores['color']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="display" class="col-sm-2 col-xs-6 form-control-label">Display</label>
      <div class="col-sm-10">
        <input type="text" name="display" class="form-control" placeholder="Display"></input>
        {if $errores}
          {if isset($errores['display'])}
            <span class="label label-danger">{$errores['display']|upper}</span>
           {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="procesador" class="col-sm-2 col-xs-6 form-control-label">Procesador</label>
      <div class="col-sm-10">
        <input type="text" name="procesador" class="form-control" placeholder="Procesador"></input>
        {if $errores}
          {if isset($errores['procesador'])}
        <span class="label label-danger">{$errores['procesador']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="camPrin" class="col-sm-2 col-xs-6 form-control-label">Camara Principal</label>
      <div class="col-sm-10">
        <input type="text" name="camPrin" class="form-control" placeholder="Camara Principal"></input>
        {if $errores}
          {if isset($errores['camPrin'])}
        <span class="label label-danger">{$errores['camPrin']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="camSec" class="col-sm-2 col-xs-6 form-control-label">Camara Secundaria</label>
      <div class="col-sm-10">
        <input type="text" name="camSec" class="form-control" placeholder="Camara Secundaria"></input>
        {if $errores}
          {if isset($errores['camSec'])}
        <span class="label label-danger">{$errores['camSec']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="so" class="col-sm-2 col-xs-6 form-control-label">Sistema Operativo</label>
      <div class="col-sm-10">
        <input type="text" name="so" class="form-control" placeholder="Sistema Operativo"></input>
        {if $errores}
          {if isset($errores['so'])}
        <span class="label label-danger">{$errores['so']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="red" class="col-sm-2 col-xs-6 form-control-label">Red</label>
      <div class="col-sm-10">
        <input type="text" name="red" class="form-control" placeholder="Red"></input>
        {if $errores}
          {if isset($errores['red'])}
        <span class="label label-danger">{$errores['red']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="fBanda" class="col-sm-2 col-xs-6 form-control-label">Frecuencia de Banda</label>
      <div class="col-sm-10">
        <input type="text" name="fBanda" class="form-control" placeholder="Frecuencia de Banda"></input>
        {if $errores}
          {if isset($errores['fbanda'])}
        <span class="label label-danger">{$errores['fbanda']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="bateria" class="col-sm-2 col-xs-6 form-control-label">Bateria en modo Stand By</label>
      <div class="col-sm-10">
        <input type="text" name="bateria" class="form-control" placeholder="Bateria en modo Stand By"></input>
        {if $errores}
          {if isset($errores['bateria'])}
        <span class="label label-danger">{$errores['bateria']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="tiempo" class="col-sm-2 col-xs-6 form-control-label">Tiempo de Conversacion</label>
      <div class="col-sm-10">
        <input type="text" name="tiempo" class="form-control" placeholder="Tiempo de Conversacion"></input>
        {if $errores}
          {if isset($errores['tiempo'])}
        <span class="label label-danger">{$errores['tiempo']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="memoriaI" class="col-sm-2 col-xs-6 form-control-label">Memoria Interna</label>
      <div class="col-sm-10">
        <input type="text" name="memoriaI" class="form-control" placeholder="Memoria Interna"></input>
        {if $errores}
          {if isset($errores['memoriaI'])}
        <span class="label label-danger">{$errores['memoriaI']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="peso" class="col-sm-2 col-xs-6 form-control-label">Peso</label>
      <div class="col-sm-10">
        <input type="text" name="peso" class="form-control" placeholder="Peso"></input>
        {if $errores}
          {if isset($errores['peso'])}
        <span class="label label-danger">{$errores['peso']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="dimension" class="col-sm-2 col-xs-6 form-control-label">Dimension</label>
      <div class="col-sm-10">
        <input type="text" name="dimension" class="form-control" placeholder="Dimension"></input>
        {if $errores}
          {if isset($errores['dimension'])}
        <span class="label label-danger">{$errores['dimension']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="pantalla" class="col-sm-2 col-xs-6 form-control-label">Pantalla</label>
      <div class="col-sm-10">
        <input type="text" name="pantalla" class="form-control" placeholder="Pantalla"></input>
        {if $errores}
          {if isset($errores['pantalla'])}
        <span class="label label-danger">{$errores['pantalla']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="bluetooth" class="col-sm-2 col-xs-6 form-control-label">Bluetooth</label>
      <div class="col-sm-10">
        <input type="text" name="bluetooth" class="form-control" placeholder="Bluetooth"></input>
        {if $errores}
          {if isset($errores['bluetooth'])}
        <span class="label label-danger">{$errores['bluetooth']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="marcaPorVoz" class="col-sm-2 col-xs-6 form-control-label">Marcacion por Voz</label>
      <div class="col-sm-10">
        <input type="text" name="marcaPorVoz" class="form-control" placeholder="Marcacion por Voz"></input>
        {if $errores}
          {if isset($errores['marcaPorVoz'])}
        <span class="label label-danger">{$errores['marcaPorVoz']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="form-group row">
      <label for="categoria" class="col-sm-2 col-xs-6 form-control-label">Categoria</label>
      <div class="col-sm-10">
        <input type="text" name="categoria" class="form-control" placeholder="Categoria"></input>
        {if $errores}
          {if isset($errores['categoria'])}
        <span class="label label-danger">{$errores['categoria']|upper}</span>
          {/if}
        {/if}
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
      <input class="btn" type="submit" name="name" value="Enviar">
    </div>
  </form>
  {if $action==='insertarProducto'}<span class="label label-success">Se inserto con exito</span>{/if}
    </div> <!--/..col-lg-12-->
{include file="footer.tpl"}
