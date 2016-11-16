{include file='common/header.tpl'}

<div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
			<div class="painellogin" id="login">
				<form action="{$BASE_URL}actions/autenticacao/login.php" method="post">
					<fieldset>
						<legend>Login</legend>
						<p>Email do Utilizador: <input type="text" name="email" value="{$FORM_VALUES.email}"></p>
						<p>Palavra-Passe: <input type="password" name="password"></p>
						<input type="submit" value="Login">
					</fieldset>
				</form>
			</div>
		 </div>
          
        </div><!--/.col-xs-12.col-sm-9-->

        {include file='common/sidebar.tpl'}
		
      </div><!--/row-->
	  <br><br><br><br><br><br><br><br><br><br>
	  
      <hr>
	  
	    {include file='common/footer.tpl'}