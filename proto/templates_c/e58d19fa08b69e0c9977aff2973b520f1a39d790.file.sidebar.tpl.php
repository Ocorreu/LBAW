<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 00:11:00
         compiled from "/usr/users2/mieic2012/ei12137/public_html/proto/templates/common/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9495494905559bb812be838-68963578%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e58d19fa08b69e0c9977aff2973b520f1a39d790' => 
    array (
      0 => '/usr/users2/mieic2012/ei12137/public_html/proto/templates/common/sidebar.tpl',
      1 => 1433628559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9495494905559bb812be838-68963578',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5559bb812e0925_36505495',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5559bb812e0925_36505495')) {function content_5559bb812e0925_36505495($_smarty_tpl) {?><div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
	<div class="list-group">
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/noticias/homepage.php" class="list-group-item <?php if (!$_smarty_tpl->tpl_vars['categoria']->value) {?>active<?php }?>">Início</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/pesquisa/categoria.php?categoria=1" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['categoria']->value==1) {?>active<?php }?>">Política</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/pesquisa/categoria.php?categoria=2" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['categoria']->value==2) {?>active<?php }?>">Economia</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/pesquisa/categoria.php?categoria=3" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['categoria']->value==3) {?>active<?php }?>">Cultura</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/pesquisa/categoria.php?categoria=4" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['categoria']->value==4) {?>active<?php }?>">Mundo</a>
		<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/pesquisa/categoria.php?categoria=5" class="list-group-item <?php if ($_smarty_tpl->tpl_vars['categoria']->value==5) {?>active<?php }?>">Desporto</a>
	</div>
	</div><!--/.sidebar-offcanvas--><?php }} ?>
