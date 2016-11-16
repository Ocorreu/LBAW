<div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
		  <hr>
		  		<h3>Autores à espera de activação:</h3>
          <div class="row">
            <table border="1" align="center" style="background-color:#F7F7F7;border-collapse:collapse;border:1px solid #D1D1D1;color:#000000;width:90%;margin-left:20px;text-align:center; 
    vertical-align:middle;" cellpadding="3" cellspacing="3">
				<tr text-align="center">
					<td>Nome</td>
					<td>E-mail</td>
				</tr>
				{foreach $nao_activos as $autores_novos}
				<tr>
					<td><a href="{$BASE_URL}pages/perfis/perfil.php?perfil={$autores_novos.autor_id}">{$autores_novos.nome} {$autores_novos.apelido}</a></td>
					<td>{$autores_novos.email}</td>
				</tr>
			{/foreach}
</table>

          </div><!--/row-->
		  
        </div><!--/.col-xs-12.col-sm-9-->

      </div><!--/row-->