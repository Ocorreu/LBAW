{include file='common/header.tpl'}

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
          	<div class="detalhes">
			  <h1 style="padding-bottom:1em">Perfil de {$utilizador.nome} {$utilizador.apelido}</h1>
              <img src="{$BASE_URL}{$utilizador.imagem}">
			  <h4>E-mail: {$utilizador.email}</h4>
              <h4>Tipo de utilizador: {if $editor}Editor{elseif $jornalista}Jornalista{elseif $admin}Administrador{else}Leitor{/if}</h4>
              <h4>Comentários: {$utilizador.ncomentarios}</h4>
              <h4>Notícias favoritas: {$utilizador.nfavoritos}</h4>
			  {if ($utilizador.utilizador_id == $smarty.session.utilizador)}
			  <h4><a href="{$BASE_URL}pages/perfis/editar.php?utilizador_actual={$smarty.session.utilizador}">Editar perfil</a></h4>
			  {/if}
			  {if ($utilizador.utilizador_id == $smarty.session.utilizador)}
			  <h4><a href="{$BASE_URL}actions/perfis/apagar.php?utilizador_actual={$utilizador.utilizador_id}">Apagar utilizador</a></h4>
			  {elseif ($admin && (($smarty.session.tipo == 'a') && ($utilizador.utilizador_id != $smarty.session.utilizador)))}
			  {elseif (($smarty.session.tipo == 'a') && !$admin)}
				<h4><a href="{$BASE_URL}actions/perfis/apagar.php?utilizador_actual={$utilizador.utilizador_id}">Apagar utilizador</a></h4>
			  {/if}
			  {if (($smarty.session.tipo == 'a') and !$admin)}
				{include file='perfis/administrador.tpl'}
			  {/if}
          	</div>
        </div>
        </div><!--/.col-xs-12.col-sm-9-->

	
		
        {include file='common/sidebar.tpl'}
		
      </div><!--/row-->
	 
      

	{if $autor}
		{if $editor and ($utilizador.utilizador_id == $smarty.session.utilizador)}
			{include file='perfis/editor.tpl'}				
			{elseif $jornalista and ($utilizador.utilizador_id == $smarty.session.utilizador)}
			{include file='perfis/jornalista.tpl'}
		{else}
		{include file='perfis/autor.tpl'}
		{/if}
	{/if}
	{if $admin and ($utilizador.utilizador_id == $smarty.session.utilizador)}
		{include file='perfis/administradorproprio.tpl'}
	{/if}
	

	


  {include file='common/footer.tpl'}
