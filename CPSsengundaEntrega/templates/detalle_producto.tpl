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
</div>
{include file="footer.tpl"}
