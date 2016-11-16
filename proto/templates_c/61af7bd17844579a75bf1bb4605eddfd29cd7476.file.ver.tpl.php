<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 16:41:48
         compiled from "/usr/users2/mieic2012/ei12137/public_html/proto/templates/noticias/ver.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13988895955559bc958baaf4-16243187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '61af7bd17844579a75bf1bb4605eddfd29cd7476' => 
    array (
      0 => '/usr/users2/mieic2012/ei12137/public_html/proto/templates/noticias/ver.tpl',
      1 => 1433774506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13988895955559bc958baaf4-16243187',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5559bc9596db29_74807312',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'noticia' => 0,
    'dia' => 0,
    'hora' => 0,
    'autor' => 0,
    'EMAIL' => 0,
    'comentarios' => 0,
    'comentario' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5559bc9596db29_74807312')) {function content_5559bc9596db29_74807312($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
			<div class="principal">
				<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['noticia']->value['imagem'];?>
" align="middle">
				<h5><b><?php echo $_smarty_tpl->tpl_vars['dia']->value['date'];?>
</b> <?php if ($_smarty_tpl->tpl_vars['hora']->value['hora']<10) {?>0<?php }?><?php echo $_smarty_tpl->tpl_vars['hora']->value['hora'];?>
:<?php if ($_smarty_tpl->tpl_vars['hora']->value['minutos']<10) {?>0<?php }?><?php echo $_smarty_tpl->tpl_vars['hora']->value['minutos'];?>
</h5>
				<h1><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
</h1>
				
				<h6>Por <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/perfis/perfil.php?perfil=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['autor_id'];?>
"><b><?php echo $_smarty_tpl->tpl_vars['autor']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['autor']->value['apelido'];?>
</b></a></h6>
				<hr>
				<p><?php echo $_smarty_tpl->tpl_vars['noticia']->value['texto'];?>
</p>
			</div>
		</div>
		<?php echo $_smarty_tpl->tpl_vars['noticia']->value['nfavoritos'];?>
 <?php if (($_smarty_tpl->tpl_vars['noticia']->value['nfavoritos']==1)) {?>utilizador já marcou<?php } else { ?>utilizadores já marcaram<?php }?> esta notícia como favorita.
			<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/accoes-utilizador/favorita.php" method="post">
				<input type="hidden" name="noticia_actual" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['noticia_id'];?>
">
				Marcar como favorita:<input type="image" src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
/images/utilizadores/72.jpg" >
			</form>
		<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/accoes-utilizador/nao-favorita.php" method="post">
				<input type="hidden" name="noticia_actual" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['noticia_id'];?>
">
				<input type="submit" value="Desmarcar notícia como favorita.">
			</form>
		<div class="detailBox">
			<div class="titleBox">
			  <label>Comentários (<?php echo $_smarty_tpl->tpl_vars['noticia']->value['ncomentarios'];?>
)</label>
				
			</div>
			<div class="commentBox">
				
				<p class="taskDescription"><?php if (!$_smarty_tpl->tpl_vars['EMAIL']->value) {?><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/autenticacao/registar.php">Registe-se</a> já para poder comentar e classificar notícias como favoritas!<?php }?></p>
			</div>
			<div class="actionBox">
				<ul class="commentList">
					<?php  $_smarty_tpl->tpl_vars['comentario'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['comentario']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['comentarios']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['comentario']->key => $_smarty_tpl->tpl_vars['comentario']->value) {
$_smarty_tpl->tpl_vars['comentario']->_loop = true;
?>
					<li>
						<div class="commentText">
							<p class=""><?php echo $_smarty_tpl->tpl_vars['comentario']->value['texto'];?>
</p> <span class="date sub-text">por <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/perfis/perfil.php?perfil=<?php echo $_smarty_tpl->tpl_vars['comentario']->value['utilizador_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['comentario']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['comentario']->value['apelido'];?>
</a><?php if (($_smarty_tpl->tpl_vars['comentario']->value['utilizador_id']==$_SESSION['utilizador'])) {?><div class="closex"><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/accoes-utilizador/apagar-comentario.php?comentario_actual=<?php echo $_smarty_tpl->tpl_vars['comentario']->value['comentario_id'];?>
&noticia_actual=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['noticia_id'];?>
">X</a></div><?php }?></span>
						</div>
					</li>
					<?php } ?>
					</ul>
			<?php if ($_smarty_tpl->tpl_vars['EMAIL']->value) {?>
			<form class="form-inline" role="form" action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/accoes-utilizador/comentar.php" method="post">
			
				<textarea placeholder="Insira aqui o seu comentário..." name="texto" id="comments" cols="100" rows="5"></textarea>
				<input type="hidden" name="noticia_id" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['noticia_id'];?>
"><br>
				<input type="submit" value="Comentar" />
			</form>
			
			<?php }?>
			</div>
		</div>
		<br>
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/noticias/editar.php?noticia_actual=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['noticia_id'];?>
">Editar notícia</a>
		<br />
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/noticias/apagar.php?noticia_actual=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['noticia_id'];?>
">Apagar notícia</a>
		<?php if (($_SESSION['tipo']=='e'&&$_smarty_tpl->tpl_vars['noticia']->value['aprovada']=='false')) {?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administracao/aprovar.php?aprovar=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['noticia_id'];?>
">Aprovar</a>
		<?php }?>
        </div><!--/.col-xs-12.col-sm-9-->

        <?php echo $_smarty_tpl->getSubTemplate ('common/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
      </div><!--/row-->
	  <br>
      <hr>

    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
