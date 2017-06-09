<li class="flecha">MARCAS</li>
 <ul>
   {foreach from=$categorias item=categoria}
   <li><a href="producto/mostrarProductos/{$categoria['nombre']}">{$categoria['nombre']}</a></li>
   {/foreach}
   <li><a href="producto/mostrarProductos">Mostrar Todos</a></li>
 </ul>
