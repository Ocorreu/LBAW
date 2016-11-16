{include file='common/header.tpl'}

<div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
			<div class="painellogin" id="register">
			<form action="{$BASE_URL}actions/autenticacao/registar.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Registo</legend>
					<p>Nome: <input type="text" name="nome" value="{$FORM_VALUES.nome}"></p>
					<p>Apelido: <input type="text" name="apelido" value="{$FORM_VALUES.apelido}"></p>
					<p>E-mail: <input type="e-mail" name="email" value="{$FORM_VALUES.email}"></p>
					<p>Palavra-Passe: <input type="password" name="password"></p>
					<p>Repita Palavra-Passe: <input type="password" name="passwordtwo"></p>
					<p>Imagem: <input type="file" name="imagem">Formato PNG ou JPG</p>
					<p>Tipo de Utilizador: 
					<select name="tipo">
					  <option value="leitor">Leitor</option>
					  <option value="jornalista">Jornalista</option>
					  <option value="editor">Editor</option>
					</select></p>
					<p><input type="submit" value="Registar"></p>
				</fieldset>
			</form>
			</div>
		 </div>
          
        </div><!--/.col-xs-12.col-sm-9-->
		
		{include file='common/sidebar.tpl'}
		
</div><!--/row-->

{include file='common/footer.tpl'}
