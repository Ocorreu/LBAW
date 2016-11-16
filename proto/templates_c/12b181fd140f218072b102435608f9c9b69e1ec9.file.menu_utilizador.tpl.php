<?php /* Smarty version Smarty-3.1.15, created on 2015-06-05 18:35:12
         compiled from "/usr/users2/mieic2012/ei12137/public_html/proto/templates/common/menu_utilizador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:278530355559bd497f5a48-03711279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '12b181fd140f218072b102435608f9c9b69e1ec9' => 
    array (
      0 => '/usr/users2/mieic2012/ei12137/public_html/proto/templates/common/menu_utilizador.tpl',
      1 => 1433522107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '278530355559bd497f5a48-03711279',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5559bd498c46b2_27648103',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'EMAIL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5559bd498c46b2_27648103')) {function content_5559bd498c46b2_27648103($_smarty_tpl) {?><div id="navbar" class="collapse navbar-collapse">
  <ul class="nav navbar-nav navbar-right">
        	<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/perfis/perfil.php?perfil=<?php echo $_SESSION['utilizador'];?>
"><span class="glyphicon glyphicon-user"></span><span class="email"><?php echo $_smarty_tpl->tpl_vars['EMAIL']->value;?>
</span></a></li>
        	<li><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/autenticacao/logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">
<?php }} ?>
