{include file="header.tpl"}
{include file="nav.tpl"}
<div class="row">
      <div class="col-lg-12">
      <div class="row encabezado">
       <div class="col-lg-12">
           <h3>Contacto</h3>
       </div>
      </div>
      <form class="col-sm-6 col-xs-12" action="insertar_sugerencia.php" method="post" onsubmit="return false">
    <div class="form-group row">
      <label for="nombre" class="col-sm-2 col-xs-6 form-control-label">Nombre</label>
      <div class="col-sm-10">
        <input type="text" name="nombre" class="form-control" placeholder="Nombre">
      </div>
    </div>
    <div class="form-group row">
      <label for="apellido" class="col-sm-2 col-xs-6 form-control-label">Apellido</label>
      <div class="col-sm-10">
        <input type="text" name="apellido" class="form-control" placeholder="Apellido">
      </div>
    </div>
    <div class="form-group row">
      <label for="telefono" class="col-sm-2 col-xs-6 form-control-label">Telefono</label>
      <div class="col-sm-10">
        <input type="number" name="telefono" class="form-control" placeholder="Telefono">
      </div>
    </div>
    <div class="form-group row">
      <label for="email" class="col-sm-2 col-xs-6 form-control-label">email</label>
      <div class="col-sm-10">
        <input type="email" name="email" class="form-control" placeholder="E-Mail">
      </div>
    </div>
    <div class="form-group row">
      <label for="consulta" class="col-sm-2 col-xs-6 form-control-label">Consulta</label>
      <div class="col-sm-10">
        <textarea class="form-control" name="consulta" rows="8" cols="40"></textarea>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-sm-offset-3">
      <input class="btn" type="submit" name="name" value="Enviar">
    </div>
  </form>
    </div> <!--/..col-lg-12-->
  </div>
  {include file="footer.tpl"}
