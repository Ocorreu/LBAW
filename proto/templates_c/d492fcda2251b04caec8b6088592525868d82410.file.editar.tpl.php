<?php /* Smarty version Smarty-3.1.15, created on 2015-06-06 02:27:39
         compiled from "/usr/users2/mieec2011/ee11239/public_html/proto/templates/perfis/editar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6007477725571bdfe00f2d4-72362093%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd492fcda2251b04caec8b6088592525868d82410' => 
    array (
      0 => '/usr/users2/mieec2011/ee11239/public_html/proto/templates/perfis/editar.tpl',
      1 => 1433550261,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6007477725571bdfe00f2d4-72362093',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5571bdfe13a614_47662078',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'utilizador' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5571bdfe13a614_47662078')) {function content_5571bdfe13a614_47662078($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
			<div class="painellogin" id="register">
			<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/perfis/editar.php" method="post" enctype="multipart/form-data">
				<fieldset>
					<legend>Editar perfil</legend>
					<p>E-mail: <input type="e-mail" name="email" value="<?php echo $_smarty_tpl->tpl_vars['utilizador']->value['email'];?>
"></p>
					<p>Palavra-Passe Actual: <input type="password" name="password_a"></p>
					<p>Palavra-Passe Nova: <input type="password" name="password"></p>
					<p>Repita Palavra-Passe Nova: <input type="password" name="passwordtwo"></p>
					<p>Imagem: <input type="file" name="imagem">Formato PNG ou JPG</p>
					<p>Tipo de Utilizador: 
					<select name="tipo">
					  <option <?php if ($_SESSION['tipo']=='l') {?>selected="selected"<?php }?> value="leitor">Leitor</option>
					  <option <?php if ($_SESSION['tipo']=='j') {?>selected="selected"<?php }?> value="jornalista">Jornalista</option>
					  <option <?php if ($_SESSION['tipo']=='e') {?>selected="selected"<?php }?> value="editor">Editor</option>
					</select></p>
					<p><input type="submit" value="Submeter"></p>
				</fieldset>
			</form>
			</div>
		 </div>
          
        </div><!--/.col-xs-12.col-sm-9-->
		
		<?php echo $_smarty_tpl->getSubTemplate ('common/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
</div><!--/row-->

<?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
