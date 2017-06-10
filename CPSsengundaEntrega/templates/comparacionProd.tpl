{include file="header.tpl"}
{include file="nav.tpl"}
    <div class="row encabezado">
        <h3>{$tituloTabla}</h3>
      </div>
        <div class="row">
     <div class="col-lg-12">
       <table class="table table-striped">
      <tr>
        <td>Imagen Producto</td>
        {foreach from=$productos item=producto}
        <td><img class="img-responsive" src="images/celulares/Iphone7.jpg" alt=""></td>
        {/foreach}
      </tr>
      <tr>
        <td>Nombre</td>
          {foreach from=$productos item=producto}
          <td>{$producto['nombre']}</td>
          {/foreach}
      </tr>
     <tr>
          <td>Precio en un pago</td>
          {foreach from=$productos item=producto}
          <td>{$producto['precio']}</td>
          {/foreach}
     </tr>
     <tr>
         <td>Marca</td>
         {foreach from=$productos item=producto}
         <td>{$producto['marca']}</td>
         {/foreach}
     </tr>
     <tr>
         <td>Color</td>
         {foreach from=$productos item=producto}
         <td>{$producto['color']}</td>
         {/foreach}
     </tr>
     <tr>
        <td>Display</td>
        {foreach from=$productos item=producto}
        <td>{$producto['display']}</td>
        {/foreach}
     </tr>
     <tr>
       <td>Procesador</td>
       {foreach from=$productos item=producto}
       <td>{$producto['procesador']}</td>
       {/foreach}
     </tr>
     <tr>
       <td>Camara Principal</td>
       {foreach from=$productos item=producto}
       <td>{$producto['camaraPrincipal']}</td>
       {/foreach}
     </tr>
     <tr>
       <td>Camara Secundaria</td>
       {foreach from=$productos item=producto}
       <td>{$producto['camaraSecundaria']}</td>
       {/foreach}
     </tr>
     <tr>
       <td>Sistema Operativo</td>
       {foreach from=$productos item=producto}
       <td>{$producto['sistemaOp']}</td>
       {/foreach}
     </tr>
     <tr>
       <td>Red</td>
       {foreach from=$productos item=producto}
       <td>{$producto['red']}</td>
       {/foreach}
     </tr>
     <tr>
       <td>Frecuencia de Banda</td>
       {foreach from=$productos item=producto}
       <td>{$producto['frecuencia']}</td>
       {/foreach}
     </tr>
     <tr>
       <td>Bateria en modo Stand By</td>
       {foreach from=$productos item=producto}
       <td>{$producto['bateria']}</td>
       {/foreach}
     </tr>
     <tr>
       <td>Tiempo de conversación</td>
       {foreach from=$productos item=producto}
       <td>{$producto['tiempo']}</td>
       {/foreach}
     </tr>
     <tr>
       <td>Memoria Interna</td>
       {foreach from=$productos item=producto}
       <td>{$producto['memoriaI']}</td>
       {/foreach}
     </tr>
     <tr>
       <td>Peso</td>
       {foreach from=$productos item=producto}
       <td>{$producto['peso']}</td>
       {/foreach}
     </tr>
     <tr>
       <td>Dimensión del equipo</td>
       {foreach from=$productos item=producto}
       <td>{$producto['dimension']}</td>
       {/foreach}
     </tr>
     <tr>
       <td>Pantalla</td>
       {foreach from=$productos item=producto}
       <td>{$producto['pantalla']}</td>
       {/foreach}
     </tr>
     <tr>
       <td>Bluetooth</td>
       {foreach from=$productos item=producto}
       {if $producto['bluetooth']}
         <td>Si</td>
       {/if}
       {if !$producto['bluetooth']}
         <td>No</td>
       {/if}
       {/foreach}
     </tr>
     <tr>
       <td>Marcación por voz</td>
       {foreach from=$productos item=producto}
       {if $producto['bluetooth']}
         <td>Si</td>
       {/if}
       {if !$producto['bluetooth']}
         <td>No</td>
       {/if}
       {/foreach}
     </tr>
        </table>
     </div>
     </div>

    </div> <!--/..col-lg-10-->
{include file="footer.tpl"}
