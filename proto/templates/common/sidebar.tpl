<div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
	<div class="list-group">
		<a href="{$BASE_URL}pages/noticias/homepage.php" class="list-group-item {if !$categoria}active{/if}">Início</a>
		<a href="{$BASE_URL}pages/pesquisa/categoria.php?categoria=1" class="list-group-item {if $categoria==1}active{/if}">Política</a>
		<a href="{$BASE_URL}pages/pesquisa/categoria.php?categoria=2" class="list-group-item {if $categoria==2}active{/if}">Economia</a>
		<a href="{$BASE_URL}pages/pesquisa/categoria.php?categoria=3" class="list-group-item {if $categoria==3}active{/if}">Cultura</a>
		<a href="{$BASE_URL}pages/pesquisa/categoria.php?categoria=4" class="list-group-item {if $categoria==4}active{/if}">Mundo</a>
		<a href="{$BASE_URL}pages/pesquisa/categoria.php?categoria=5" class="list-group-item {if $categoria==5}active{/if}">Desporto</a>
	</div>
	</div><!--/.sidebar-offcanvas-->