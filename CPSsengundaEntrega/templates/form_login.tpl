{include file="header.tpl"}
<link rel="stylesheet" href="css/login.css">
<div class="container fondo-negro">
	<div class="row">
        <img src="css/images/banner.png" alt="">
        <h1 class="text-center titulo-login">Modal Login</h1>
        <p class="text-center"><a href="#" class="btn btn-primary btn-lg" role="button" data-toggle="modal" data-target="#login-modal">Open Login</a></p>
	</div>
</div>
<!-- END # BOOTSNIP INFO -->

<!-- BEGIN # MODAL LOGIN -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    	<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header" align="center">
					<img class="img img-responsive" id="img_logo" src="css/images/banner.png">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</button>
				</div>
                <!-- Begin # DIV Form -->
                <div id="div-forms">
                    <!-- Begin # Login Form -->
                    <form action="login/loguearse" method="POST" id="login-form">
		                <div class="modal-body">
				    		<input id="login_username" class="form-control" name="email" type="email" placeholder="Email" required>
				    		<input id="login_password" class="form-control" name="password" type="password" placeholder="Password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox"> Remember me
                                </label>
                            </div>
        		    	</div>
				        <div class="modal-footer">
                            <div>
                                <button data-toggle="modal" data-target="#login-error" type="submit" class="btn btn-primary btn-lg btn-block">Login</button>
                            </div>
				    	    <div>
                                <button id="login_lost_btn" type="button" class="btn btn-link"
                                data-toggle="modal" data-target="#form">Lost Password?</button>
                                <button id="login_register_btn" type="button" class="btn btn-link"
                                        data-toggle="modal" data-target="#login"  >Register</button>
                            </div>
				        </div>
                    </form>
                    <form id="form" style="display:none;">
                       <div class="modal-body">
                       <input id="login_username" class="form-control" name="email" type="email" placeholder="Email" required>
                        </div>
                       <div class="modal-footer">
                       <div>
                           <button type="submit" class="btn btn-primary btn-lg btn-block">Send</button>
                       </div>
                       </div>
                    </form>
                    <form action="login/registrarse" method="POST" id="login" style="display:none;">
                      <div class="modal-body">
                        <input id="login_username" class="form-control" name="email"    type="email"    placeholder="Email" required>
                        <input id="login_password" class="form-control" name="password" type="password" placeholder="Password" required>
                       </div>
                        <div class="modal-footer">
                        <div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                        </div>
                        </div>
                    </form>
                </div>
			</div>
		</div>
	</div>
    <!-- END # MODAL LOGIN -->
{if !$errores && $action=='registrarse'}
<div class="row">
	<div class="col-md-offset-4 col-md-4 ">
		<div class="panel panel-success">
			<div class="panel-heading">
				<h3 class="panel-title">Congratulations</h3>
			</div>
			<div class="panel-body">
				Se registro con exito
			</div>
		</div>
	</div>
	</div>
{/if}
{if $errores}
<div class="row">
	<div class="col-md-offset-4 col-md-4">
		<div class="panel panel-danger">
			<div class="panel-heading">
				<h3 class="panel-title">Error</h3>
			</div>
			<div class="panel-body">
				{$errores}
			</div>
		</div>
	</div>
</div>
{/if}

{include file="footer.tpl"}
