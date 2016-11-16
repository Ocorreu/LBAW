<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 00:14:18
         compiled from "/usr/users2/mieic2012/ei12137/public_html/proto/templates/autenticacao/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16151670795559bbbe7879f2-50991819%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd08e7ec79230ebf8c3f5e38b06f875b552412186' => 
    array (
      0 => '/usr/users2/mieic2012/ei12137/public_html/proto/templates/autenticacao/login.tpl',
      1 => 1433522107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16151670795559bbbe7879f2-50991819',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5559bbbe80a621_02698910',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5559bbbe80a621_02698910')) {function content_5559bbbe80a621_02698910($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
			<div class="painellogin" id="login">
				<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/autenticacao/login.php" method="post">
					<fieldset>
						<legend>Login</legend>
						<p>Email do Utilizador: <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['email'];?>
"></p>
						<p>Palavra-Passe: <input type="password" name="password"></p>
						<input type="submit" value="Login">
					</fieldset>
				</form>
			</div>
		 </div>
          
        </div><!--/.col-xs-12.col-sm-9-->

        <?php echo $_smarty_tpl->getSubTemplate ('common/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
      </div><!--/row-->
	  <br><br><br><br><br><br><br><br><br><br>
	  
      <hr>
	  
	    <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>
<?php }} ?>
