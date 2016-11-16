
{include file='common/header.tpl'}

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
			<div class="principal">
				<img src="{$BASE_URL}{$noticia.imagem}" align="middle">
				<h5><b>{$dia.date}</b> {if $hora.hora<10}0{/if}{$hora.hora}:{if $hora.minutos<10}0{/if}{$hora.minutos}</h5>
				<h1>{$noticia.titulo}</h1>
				
				<h6>Por <a href="{$BASE_URL}pages/perfis/perfil.php?perfil={$noticia.autor_id}"><b>{$autor.nome} {$autor.apelido}</b></a></h6>
				<hr>
				<p>{$noticia.texto}</p>
			</div>
		</div>
		{$noticia.nfavoritos} {if ($noticia.nfavoritos == 1)}utilizador já marcou{else}utilizadores já marcaram{/if} esta notícia como favorita.
		{if $EMAIL}
			{if !$favorita}
				<form action="{$BASE_URL}actions/accoes-utilizador/favorita.php" method="post">
					<input type="hidden" name="noticia_actual" value="{$noticia.noticia_id}">
					Marcar como favorita:<input type="image" src="{$BASE_URL}/images/site/starnotfav.png" >
			</form>
			{else}
			<form action="{$BASE_URL}actions/accoes-utilizador/nao-favorita.php" method="post">
					<input type="hidden" name="noticia_actual" value="{$noticia.noticia_id}">
					Desmarcar como favorita:<input type="image" src="{$BASE_URL}/images/site/starfav.png" >
			</form>
			{/if}
		{/if}
		{*<a href="{$BASE_URL}actions/accoes-utilizador/favorita.php" value="{$noticia.noticia_id}" id="fav" title="Add as favorite"></a>*}
		
		<div class="detailBox">
			<div class="titleBox">
			  <label>Comentários ({$noticia.ncomentarios})</label>
				
			</div>
			{if !$EMAIL}
			<div class="commentBox">
				
				<p class="taskDescription"><a href="{$BASE_URL}pages/autenticacao/registar.php">Registe-se</a> já para poder comentar e classificar notícias como favoritas!</p>
			</div>
			{/if}
			<div class="actionBox">
				<ul class="commentList">
					{foreach $comentarios as $comentario}
					<li>
						<div class="commentText">
							<p class="">{$comentario.texto}</p> <span class="date sub-text">por <a href="{$BASE_URL}pages/perfis/perfil.php?perfil={$comentario.utilizador_id}">{$comentario.nome} {$comentario.apelido}</a>{if ($comentario.utilizador_id == $smarty.session.utilizador)}<div class="closex"><a href="{$BASE_URL}actions/accoes-utilizador/apagar-comentario.php?comentario_actual={$comentario.comentario_id}&noticia_actual={$noticia.noticia_id}">X</a></div>{/if}</span>
						</div>
					</li>
					{/foreach}
				</ul>
			{if $EMAIL}
			<form class="form-inline" role="form" action="{$BASE_URL}actions/accoes-utilizador/comentar.php" method="post">
				<textarea placeholder="Insira aqui o seu comentário..." name="texto" id="comments" cols="100" rows="5"></textarea>
				<input type="hidden" name="noticia_id" value="{$noticia.noticia_id}"><br>
				<input type="submit" value="Comentar" />
			</form>
			{/if}
			</div>
		</div>
		<br>
		{if (($noticia.autor_id == $smarty.session.utilizador) || ($smarty.session.tipo == 'e'))} 
		<a href="{$BASE_URL}pages/noticias/editar.php?noticia_actual={$noticia.noticia_id}">Editar notícia</a>
		<br>
		<a href="{$BASE_URL}actions/noticias/apagar.php?noticia_actual={$noticia.noticia_id}">Apagar notícia</a>
		{/if}
		<br>
		{if (($smarty.session.tipo == 'e') && !($noticia.aprovada == 'false'))}
			<a href="{$BASE_URL}actions/administracao/aprovar.php?aprovar={$noticia.noticia_id}">Aprovar</a>
		{/if}
        </div><!--/.col-xs-12.col-sm-9-->

        {include file='common/sidebar.tpl'}
		
      </div><!--/row-->
	  <br>
      <hr>

    {include file='common/footer.tpl'}
