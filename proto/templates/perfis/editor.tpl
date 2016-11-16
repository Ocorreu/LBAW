<div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
		  <hr>
		  		<h3>Notícias à espera de aprovação:</h3>
          <div class="row">
            <table border="1" align="center" style="background-color:#F7F7F7;border-collapse:collapse;border:1px solid #D1D1D1;color:#000000;width:90%;margin-left:20px;text-align:center; 
    vertical-align:middle;" cellpadding="3" cellspacing="3">
				<tr text-align="center">
					<td>Notícia</td>
					<td>Autor</td>
				</tr>
				{foreach $noticias as $noticia}
				<tr>
					<td>{$noticia.titulo} <a href="../noticias/ver.php?noticia_actual={$noticia.noticia_id}">(Ver notícia)</a></td>
					<td>{$noticia.nome} {$noticia.apelido}</td>
				</tr>
			{/foreach}
</table>

          </div><!--/row-->
		  {if $autor_actual.activo}
		  <form action="{$BASE_URL}pages/noticias/criar.php" >
		  <input type="submit" style="margin-top:20px;margin-left:350px" value="Criar notícia">
		  </form>
		  {/if}
        </div><!--/.col-xs-12.col-sm-9-->

      </div><!--/row-->