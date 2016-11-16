{if (($autor) && ($autor_actual.activo==false))}
	<h4><a href="{$BASE_URL}actions/administracao/activar.php?utilizador_actual={$utilizador.utilizador_id}">Activar</a></h4>
{/if}
{if $autor}
	<h4><a href="{$BASE_URL}actions/administracao/promover.php?utilizador_actual={$utilizador.utilizador_id}">Promover</a></h4>
	<br>
{/if}