<div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
		  <hr>
		  		<h3>Notícias publicadas (mais recentes):</h3>
          <div class="row">
			{foreach $noticias_autor as $noticia}
			  <div class="col-xs-6 col-lg-4">
              <h3>{$noticia.titulo}</h3>
			  <img src="{$BASE_URL}{$noticia.imagem}">
              <p><a class="btn btn-default" href="../noticias/ver.php?noticia_actual={$noticia.noticia_id}" role="button">Ver detalhes &raquo;</a></p>
              </div><!--/.col-xs-6.col-lg-4-->
			{/foreach}
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

      </div><!--/row-->
	  <br>
      <hr>
