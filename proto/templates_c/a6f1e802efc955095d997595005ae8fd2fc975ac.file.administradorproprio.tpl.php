<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 02:20:17
         compiled from "/usr/users2/mieec2011/ee11239/public_html/proto/templates/perfis/administradorproprio.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16668538295574dfc1a19d63-24824935%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a6f1e802efc955095d997595005ae8fd2fc975ac' => 
    array (
      0 => '/usr/users2/mieec2011/ee11239/public_html/proto/templates/perfis/administradorproprio.tpl',
      1 => 1433642866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16668538295574dfc1a19d63-24824935',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'nao_activos' => 0,
    'BASE_URL' => 0,
    'autores_novos' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5574dfc1ae3569_02492046',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5574dfc1ae3569_02492046')) {function content_5574dfc1ae3569_02492046($_smarty_tpl) {?><div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
		  <hr>
		  		<h3>Autores à espera de activação:</h3>
          <div class="row">
            <table border="1" align="center" style="background-color:#F7F7F7;border-collapse:collapse;border:1px solid #D1D1D1;color:#000000;width:90%;margin-left:20px;text-align:center; 
    vertical-align:middle;" cellpadding="3" cellspacing="3">
				<tr text-align="center">
					<td>Nome</td>
					<td>E-mail</td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['autores_novos'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['autores_novos']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nao_activos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['autores_novos']->key => $_smarty_tpl->tpl_vars['autores_novos']->value) {
$_smarty_tpl->tpl_vars['autores_novos']->_loop = true;
?>
				<tr>
					<td><a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/perfis/perfil.php?perfil=<?php echo $_smarty_tpl->tpl_vars['autores_novos']->value['autor_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['autores_novos']->value['nome'];?>
 <?php echo $_smarty_tpl->tpl_vars['autores_novos']->value['apelido'];?>
</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['autores_novos']->value['email'];?>
</td>
				</tr>
			<?php } ?>
</table>

          </div><!--/row-->
		  
        </div><!--/.col-xs-12.col-sm-9-->

      </div><!--/row--><?php }} ?>
