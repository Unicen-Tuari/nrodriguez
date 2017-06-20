{include file="header.tpl"}
{include file="nav.tpl"}

<div class="row">
  <div class="col-lg-2">
    <img src="./images/celulares/Iphone7.jpg" class="img-rounded" alt="">
  </div>
 <div class="col-lg-8">
   <div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Detalle Producto</div>

  <!-- Table -->
  <table class="table">
    <tr>
       <th>Nombre</th>
       <td>{$producto['nombre']}</td>
    </tr>
    <tr>
       <th>Precio</th>
       <td>{$producto['precio']}</td>
    </tr>
    <tr>
        <th>Marca</th>
        <td>{$producto['marca']}</td>
    </tr>
    <tr>
        <th>Color</th>
        <td>{$producto['color']}</td>
    </tr>
    <tr>
        <th>Display</th>
        <td>{$producto['display']}</td>
    </tr>
    <tr>
        <th>Procesador</th>
        <td>{$producto['procesador']}</td>
    </tr>
    <tr>
        <th>Camara Principal</th>
        <td>{$producto['camaraPrincipal']}</td>
    </tr>
    <tr>
        <th>Camara Secundaria</th>
        <td>{$producto['camaraSecundaria']}</td>
    </tr>
    <tr>
        <th>Sistema Operativo</th>
        <td>{$producto['sistemaOp']}</td>
    </tr>
    <tr>
        <th>Red</th>
        <td>{$producto['red']}</td>
    </tr>
    <tr>
        <th>Frecuencia de Banda</th>
        <td>{$producto['frecuencia']}</td>
    </tr>
    <tr>
        <th>Bateria en Modo Stand By</th>
        <td>{$producto['bateria']}</td>
    </tr>
    <tr>
        <th>Tiempo de Conversacion</th>
        <td>{$producto['tiempo']}</td>
    </tr>
    <tr>
        <th>Memoria Interna</th>
        <td>{$producto['memoriaI']}</td>
    </tr>
    <tr>
        <th>Peso</th>
        <td>{$producto['peso']}</td>
    </tr>
    <tr>
        <th>Dimension</th>
        <td>{$producto['dimension']}</td>
    </tr>
    <tr>
        <th>Pantalla</th>
        <td>{$producto['pantalla']}</td>
    </tr>
    <tr>
        <th>Bluetooth</th>
        {if $producto['bluetooth']==1}
        <td>Si</td>
        {/if}
        {if $producto['bluetooth']==0}
        <td>No</td>
        {/if}
    </tr>
    <tr>
        <th>Marcacion por Voz</th>
        {if $producto['marcaporVoz']==1}
        <td>Si</td>
        {/if}
        {if $producto['marcaporVoz']==0}
        <td>No</td>
        {/if}
    </tr>
  </table>
</div>
 </div>
 <div class="col-lg-2">

   <div class="panel panel-default">
     <div class="panel-heading">
       <h3 class="panel-title">Modificar</h3>
     </div>
     <div class="panel-body">
       {if $errores}
       {foreach $errores as $caract => $value}
         <span class="label label-danger">{$errores[$caract]|upper}</span>
         {/foreach}
        {/if}
        {if !$errores}
          {if $action == 'modificarProducto'}<span class="label label-success">Modificado</span>{/if}
         {/if}
       <form action="producto/modificarProducto/{$id}" method="post">
         <input type="text" name="nombre" class="form-control" placeholder="Nombre">
        <input class="btn btn-primary" type="submit"  value="Modificar">
      </form>
      <form action="producto/modificarProducto/{$id}" method="post">
        <input type="text" name="precio" class="form-control" placeholder="Precio">
       <input class="btn btn-primary" type="submit"  value="Modificar">
     </form>
     <form action="producto/modificarProducto/{$id}" method="post">
       <input type="text" name="marca" class="form-control" placeholder="Marca">
      <input class="btn btn-primary" type="submit"  value="Modificar">
    </form>
    <form action="producto/modificarProducto/{$id}" method="post">
      <input type="text" name="color" class="form-control" placeholder="Color">
     <input class="btn btn-primary" type="submit"  value="Modificar">
   </form>
   <form action="producto/modificarProducto/{$id}" method="post">
     <input type="text" name="display" class="form-control" placeholder="Display">
    <input class="btn btn-primary" type="submit"  value="Modificar">
  </form>
  <form "action/producto/modificarProducto/{$id}" method="post">
    <input type="text" name="procesador" class="form-control" placeholder="Procesador">
   <input class="btn btn-primary" type="submit"  value="Modificar">
 </form>
 <form action="producto/modificarProducto/{$id}" method="post">
   <input type="text" name="camPrin" class="form-control" placeholder="Cam Prin">
  <input class="btn btn-primary" type="submit"  value="Modificar">
</form>
<form action="producto/modificarProducto/{$id}" method="post">
  <input type="text" name="camSec" class="form-control" placeholder="Cam Sec">
 <input class="btn btn-primary" type="submit"  value="Modificar">
</form>
<form action="producto/modificarProducto/{$id}" method="post">
  <input type="text" name="so" class="form-control" placeholder="SO">
 <input class="btn btn-primary" type="submit"  value="Modificar">
</form>
<form action="producto/modificarProducto/{$id}" method="post">
  <input type="text" name="red" class="form-control" placeholder="Red">
 <input class="btn btn-primary" type="submit"  value="Modificar">
</form>
<form action="producto/modificarProducto/{$id}" method="post">
  <input type="text" name="frecuencia" class="form-control" placeholder="Frecuencia">
 <input class="btn btn-primary" type="submit"  value="Modificar">
</form>
<form action="producto/modificarProducto/{$id}" method="post">
  <input type="text" name="bateria" class="form-control" placeholder="Bateria">
 <input class="btn btn-primary" type="submit"  value="Modificar">
</form>
<form action="producto/modificarProducto/{$id}" method="post">
  <input type="text" name="tiempo" class="form-control" placeholder="Tiempo">
 <input class="btn btn-primary" type="submit"  value="Modificar">
</form>
<form action="producto/modificarProducto/{$id}" method="post">
  <input type="text" name="memoriaI" class="form-control" placeholder="memoriaI">
 <input class="btn btn-primary" type="submit"  value="Modificar">
</form>
<form action="producto/modificarProducto/{$id}" method="post">
  <input type="text" name="peso" class="form-control" placeholder="Peso">
 <input class="btn btn-primary" type="submit"  value="Modificar">
</form>
<form action="producto/modificarProducto/{$id}" method="post">
  <input type="text" name="dimension" class="form-control" placeholder="Dimension">
 <input class="btn btn-primary" type="submit"  value="Modificar">
</form>
<form action="producto/modificarProducto/{$id}" method="post">
  <input type="text" name="pantalla" class="form-control" placeholder="Pantalla">
 <input class="btn btn-primary" type="submit"  value="Modificar">
</form>
<form action="producto/modificarProducto/{$id}" method="post">
  <input type="text" name="bluetooth" class="form-control" placeholder="Bluetooth">
 <input class="btn btn-primary" type="submit"  value="Modificar">
</form>
<form action="producto/modificarProducto/{$id}" method="post">
  <input type="text" name="marcaXVoz" class="form-control" placeholder="marcaXVoz">
 <input class="btn btn-primary" type="submit"  value="Modificar">
</form>
     </div>
     </div>
   </div>
</div>
{include file="footer.tpl"}
