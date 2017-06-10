{include file="header.tpl"}
{include file="nav.tpl"}
<div class="row">
      <div class="col-lg-12">
      <div class="row encabezado">
       <div class="col-lg-12">
           <h3>{$titulo}</h3>
       </div>
      </div>
      <form class="col-sm-6 col-xs-12" action="categoria/insertarCategoria" method="post">
    <div class="form-group row">
      <label for="nombre" class="col-sm-2 col-xs-6 form-control-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" name="nombre" class="form-control" placeholder="Nombre">
        {if isset($errores)}
           {if $errores}<span class="label label-danger">{$errores|upper}</span>{/if}
        {/if}
      </div>
         {if $action==='insertarCategoria'}<span class="label label-success">Se inserto con exito</span>{/if}
    </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
      <input class="btn" type="submit" name="name" value="Enviar">
    </div>
  </form>
    </div> <!--/..col-lg-12-->
  </div>
  {include file="listaCat.tpl"}
  {include file="footer.tpl"}
