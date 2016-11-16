{include file='common/header.tpl'}

<div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
			<div class="painellogin" id="login">
				<form action="{$BASE_URL}actions/noticias/{if $edit}editar{else}criar{/if}.php" method="post" enctype="multipart/form-data">
					{if $edit}<input type="hidden" name="noticia_actual" value="{$noticia.noticia_id}">{/if}
					<fieldset>
						<legend>{if $edit}Editar notícia{else}Criar notícia{/if}</legend>
						<p>Título:<textarea placeholder="Escreva aqui o título da notícia (máximo de 100 caracteres)" rows="1" name="titulo" maxlength="100" cols="100">{if ($edit and !$FORM_VALUES.titulo)}{$noticia.titulo}{elseif $FORM_VALUES.titulo}{$FORM_VALUES.titulo}{/if}</textarea></p>
						<p>Sub-texto:<textarea placeholder="Escreva aqui um pequeno resumo (máximo de 500 caracteres)" rows="3" name="subtexto" maxlength="500" cols="100">{if ($edit and !$FORM_VALUES.subtexto)}{$noticia.subtexto}{elseif $FORM_VALUES.subtexto}{$FORM_VALUES.subtexto}{/if}</textarea></p>
                        <p>Texto:<textarea placeholder="Escreva aqui o corpo da notícia (máximo de caracteres definido pelo seu bom senso)" rows="5" name="texto" cols="100">{if ($edit and !$FORM_VALUES.texto)}{$noticia.texto}{elseif $FORM_VALUES.texto}{$FORM_VALUES.texto}{/if}</textarea></p>
						{if !$edit}<p>Palavras-chave:<textarea placeholder="Exemplo: 'futebol, Porto'" rows="1" name="palavraschave" maxlength="100" cols="100">{if $FORM_VALUES.palavraschave}{$FORM_VALUES.palavraschave}{/if}</textarea></p>{/if}
						<p>Imagem: <input type="file" name="imagem">Formato PNG ou JPG</p>
						<p>Categoria:
                        <select name="categoria">
                          <option {if $noticia.categoria_id==1}selected="selected"{/if} value="1">Política</option>
                          <option {if $noticia.categoria_id==2}selected="selected"{/if} value="2">Economia</option>
                          <option {if $noticia.categoria_id==3}selected="selected"{/if} value="3">Cultura</option>
                          <option {if $noticia.categoria_id==4}selected="selected"{/if} value="4">Mundo</option>
                          <option {if $noticia.categoria_id==5}selected="selected"{/if} value="5">Desporto</option>
                        </select></p>
						<input type="submit" value="Submeter para aprovação">
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