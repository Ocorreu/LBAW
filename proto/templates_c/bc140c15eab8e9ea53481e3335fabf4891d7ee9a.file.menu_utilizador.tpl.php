<?php /* Smarty version Smarty-3.1.15, created on 2015-06-05 18:39:49
         compiled from "/usr/users2/mieec2011/ee11239/public_html/proto/templates/common/menu_utilizador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1023624085556c8e097cf2a8-75494188%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc140c15eab8e9ea53481e3335fabf4891d7ee9a' => 
    array (
      0 => '/usr/users2/mieec2011/ee11239/public_html/proto/templates/common/menu_utilizador.tpl',
      1 => 1433522351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1023624085556c8e097cf2a8-75494188',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556c8e09864764_12749142',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'EMAIL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c8e09864764_12749142')) {function content_556c8e09864764_12749142($_smarty_tpl) {?><div id="navbar" class="collapse navbar-collapse">
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
