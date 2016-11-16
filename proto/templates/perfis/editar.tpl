{include file='common/header.tpl'}

<div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
			<div class="painellogin" id="register">
			<form action="{$BASE_URL}actions/perfis/editar.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Editar perfil</legend>
					<p>E-mail: <input type="e-mail" name="email" value="{$utilizador.email}"></p>
					<p>Palavra-Passe Actual: <input type="password" name="password_a"></p>
					<p>Palavra-Passe Nova: <input type="password" name="password"></p>
					<p>Repita Palavra-Passe Nova: <input type="password" name="passwordtwo"></p>
					<p>Imagem: <input type="file" name="imagem">Formato PNG ou JPG</p>
					{if (($smarty.session.tipo != 'a') || ($smarty.session.tipo != 'e'))}
					<p>Tipo de Utilizador:
					
					<select name="tipo">
					 {if $smarty.session.tipo=='l'}
					  <option selected="selected" value="l">Leitor</option>
					  <option value="j">Jornalista</option>
					  <option value="e">Editor</option>
					  {else if $smarty.session.tipo=='j'}
					  <option selected="selected" value="j">Jornalista</option>
					  <option value="e">Editor</option>
					  {/if}
					</select></p>
					{/if}
					<p><input type="submit" value="Submeter"></p>
				</fieldset>
			</form>
			</div>
		 </div>
          
        </div><!--/.col-xs-12.col-sm-9-->
		
		{include file='common/sidebar.tpl'}
		
</div><!--/row-->

{include file='common/footer.tpl'}
