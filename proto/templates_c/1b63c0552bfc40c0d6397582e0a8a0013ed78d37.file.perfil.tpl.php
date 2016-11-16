<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 15:38:29
         compiled from "/usr/users2/mieic2012/ei12137/public_html/proto/templates/perfis/perfil.tpl" */ ?>
<?php /*%%SmartyHeaderCode:232581820556f053bb866b0-17976771%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1b63c0552bfc40c0d6397582e0a8a0013ed78d37' => 
    array (
      0 => '/usr/users2/mieic2012/ei12137/public_html/proto/templates/perfis/perfil.tpl',
      1 => 1433766035,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '232581820556f053bb866b0-17976771',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556f053bc321a8_95298617',
  'variables' => 
  array (
    'utilizador' => 0,
    'BASE_URL' => 0,
    'editor' => 0,
    'jornalista' => 0,
    'admin' => 0,
    'autor' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556f053bc321a8_95298617')) {function content_556f053bc321a8_95298617($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
          	<div class="detalhes">
			  <h1 style="padding-bottom:1em">Perfil de <?php echo $_smarty_tpl->tpl_vars['utilizador']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['utilizador']->value['apelido'];?>
</h1>
              <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['utilizador']->value['imagem'];?>
">
			  <h4>E-mail: <?php echo $_smarty_tpl->tpl_vars['utilizador']->value['email'];?>
</h4>
              <h4>Tipo de utilizador: <?php if ($_smarty_tpl->tpl_vars['editor']->value) {?>Editor<?php } elseif ($_smarty_tpl->tpl_vars['jornalista']->value) {?>Jornalista<?php } elseif ($_smarty_tpl->tpl_vars['admin']->value) {?>Administrador<?php } else { ?>Leitor<?php }?></h4>
              <h4>Comentários: <?php echo $_smarty_tpl->tpl_vars['utilizador']->value['ncomentarios'];?>
</h4>
              <h4>Notícias favoritas: <?php echo $_smarty_tpl->tpl_vars['utilizador']->value['nfavoritos'];?>
</h4>
			  <?php if ($_smarty_tpl->tpl_vars['autor']->value) {?> <h4>Notícias publicadas: <?php echo $_smarty_tpl->tpl_vars['autor']->value['nnoticias'];?>
</h4> <?php }?>
			  <h4><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/perfis/editar.php?utilizador_actual=<?php echo $_SESSION['utilizador'];?>
">Editar perfil</a></h4>
			  <h4><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/perfis/apagar.php?utilizador_actual=<?php echo $_smarty_tpl->tpl_vars['utilizador']->value['utilizador_id'];?>
">Apagar utilizador</a></h4>
          	</div>
        </div>
        </div><!--/.col-xs-12.col-sm-9-->

	
		
        <?php echo $_smarty_tpl->getSubTemplate ('common/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
      </div><!--/row-->
	 
      

	<?php if ($_smarty_tpl->tpl_vars['autor']->value) {?>
		<?php if ($_smarty_tpl->tpl_vars['editor']->value&&($_smarty_tpl->tpl_vars['utilizador']->value['utilizador_id']==$_SESSION['utilizador'])) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('perfis/editor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
				
			<?php } elseif ($_smarty_tpl->tpl_vars['jornalista']->value&&($_smarty_tpl->tpl_vars['utilizador']->value['utilizador_id']==$_SESSION['utilizador'])) {?>
			<?php echo $_smarty_tpl->getSubTemplate ('perfis/jornalista.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php } else { ?>
		<?php echo $_smarty_tpl->getSubTemplate ('perfis/autor.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		<?php }?>
	<?php }?>
	<?php if ((($_SESSION['tipo']=='a')&&!$_smarty_tpl->tpl_vars['admin']->value)) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('perfis/administrador.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['admin']->value&&($_smarty_tpl->tpl_vars['utilizador']->value['utilizador_id']==$_SESSION['utilizador'])) {?>
		<?php echo $_smarty_tpl->getSubTemplate ('perfis/administradorproprio.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<?php }?>
	

	


  <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
