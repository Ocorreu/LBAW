<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 04:10:42
         compiled from "/usr/users2/mieic2012/ei12137/public_html/proto/templates/autenticacao/registar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17834891995559bbbf8d3926-39114876%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0ea64dba0534ce0b812f152702481fe5a84d3687' => 
    array (
      0 => '/usr/users2/mieic2012/ei12137/public_html/proto/templates/autenticacao/registar.tpl',
      1 => 1433628559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17834891995559bbbf8d3926-39114876',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5559bbbf975215_15996300',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'FORM_VALUES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5559bbbf975215_15996300')) {function content_5559bbbf975215_15996300($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
			<div class="painellogin" id="register">
			<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/autenticacao/registar.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Registo</legend>
					<p>Nome: <input type="text" name="nome" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['nome'];?>
"></p>
					<p>Apelido: <input type="text" name="apelido" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['apelido'];?>
"></p>
					<p>E-mail: <input type="e-mail" name="email" value="<?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['email'];?>
"></p>
					<p>Palavra-Passe: <input type="password" name="password"></p>
					<p>Repita Palavra-Passe: <input type="password" name="passwordtwo"></p>
					<p>Imagem: <input type="file" name="imagem">Formato PNG ou JPG</p>
					<p>Tipo de Utilizador: 
					<select name="tipo">
					  <option value="leitor">Leitor</option>
					  <option value="jornalista">Jornalista</option>
					  <option value="editor">Editor</option>
					</select></p>
					<p><input type="submit" value="Registar"></p>
				</fieldset>
			</form>
			</div>
		 </div>
          
        </div><!--/.col-xs-12.col-sm-9-->
		
		<?php echo $_smarty_tpl->getSubTemplate ('common/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
</div><!--/row-->

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
