<?php /* Smarty version Smarty-3.1.15, created on 2015-06-01 18:53:23
         compiled from "/usr/users2/mieec2011/ee11239/public_html/proto/templates/autenticacao/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:746757794556c8e03858f59-10446429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32ba50dfbdb66427992c71491981cc8ac0f4031d' => 
    array (
      0 => '/usr/users2/mieec2011/ee11239/public_html/proto/templates/autenticacao/login.tpl',
      1 => 1433161550,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '746757794556c8e03858f59-10446429',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556c8e039b7f48_45534865',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c8e039b7f48_45534865')) {function content_556c8e039b7f48_45534865($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


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
