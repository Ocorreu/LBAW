<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 05:48:49
         compiled from "/usr/users2/mieec2011/ee11239/public_html/proto/templates/common/sidebar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:938205594556c88ac671c29-46542800%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b2b4bba3557067b429188c4e679fd92ebdf5b233' => 
    array (
      0 => '/usr/users2/mieec2011/ee11239/public_html/proto/templates/common/sidebar.tpl',
      1 => 1433562514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '938205594556c88ac671c29-46542800',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556c88ac6905f3_10008702',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'categoria' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c88ac6905f3_10008702')) {function content_556c88ac6905f3_10008702($_smarty_tpl) {?><div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
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
