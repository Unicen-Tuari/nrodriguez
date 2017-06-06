{if $errores=='No es una categoria valida'}
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">{$tituloLista}</h3>
  </div>
  {foreach from=$lista item=categoria}
  <div class="panel-body">
    {$categoria}
  </div>
  {/foreach}
</div>
{/if}
