{include file='common/header.tpl'}

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
		  {if $jumbotron}
          <div class="jumbotron">
			<div class="naonoticia">
            <h1><a href="../noticias/ver.php?noticia_actual={$noticias[0].noticia_id}">{$noticias[0].titulo}</a></h1>
			<img src="{$BASE_URL}{$noticias[0].imagem}"><p>{$noticias[0].subtexto}</p>
			</div>
		 </div>
		 {/if}
          <div class="row">
			{foreach $noticias as $noticia}
				{if $jumbotron}
					{if $noticia@first}
						{continue}
					{/if}
				{/if}
            <div class="col-xs-6 col-lg-4">
              <h2>{$noticia.titulo}</h2>
			  <img src="{$BASE_URL}{$noticia.imagem}">
              <p><a class="btn btn-default" href="../noticias/ver.php?noticia_actual={$noticia.noticia_id}" role="button">Ver detalhes &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
			{/foreach}
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        {include file='common/sidebar.tpl'}
		
      </div><!--/row-->
	  <br>
	  <hr>

  {include file='common/footer.tpl'}
