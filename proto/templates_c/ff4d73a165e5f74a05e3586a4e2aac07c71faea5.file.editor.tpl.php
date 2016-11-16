<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 05:09:04
         compiled from "/usr/users2/mieec2011/ee11239/public_html/proto/templates/perfis/editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1534233291556f30bf1d7d20-90273348%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ff4d73a165e5f74a05e3586a4e2aac07c71faea5' => 
    array (
      0 => '/usr/users2/mieec2011/ee11239/public_html/proto/templates/perfis/editor.tpl',
      1 => 1433543514,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1534233291556f30bf1d7d20-90273348',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556f30bf1dc571_36798383',
  'variables' => 
  array (
    'noticias' => 0,
    'noticia' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556f30bf1dc571_36798383')) {function content_556f30bf1dc571_36798383($_smarty_tpl) {?><div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
		  <hr>
		  		<h3>Notícias à espera de aprovação:</h3>
          <div class="row">
            <table border="1" align="center" style="background-color:#F7F7F7;border-collapse:collapse;border:1px solid #D1D1D1;color:#000000;width:90%;margin-left:20px;text-align:center; 
    vertical-align:middle;" cellpadding="3" cellspacing="3">
				<tr text-align="center">
					<td>Notícia</td>
					<td>Autor</td>
				</tr>
				<?php  $_smarty_tpl->tpl_vars['noticia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['noticia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noticias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->key => $_smarty_tpl->tpl_vars['noticia']->value) {
$_smarty_tpl->tpl_vars['noticia']->_loop = true;
?>
				<tr>
					<td><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
 <a href="../noticias/ver.php?noticia_actual=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['noticia_id'];?>
">(Ver notícia)</a></td>
					<td><?php echo $_smarty_tpl->tpl_vars['noticia']->value['autor'];?>
</td>
				</tr>
			<?php } ?>
</table>

          </div><!--/row-->
		  
		  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/noticias/criar.php" >
		  <input type="submit" style="margin-top:20px;margin-left:350px" value="Criar notícia">
		  </form>
        </div><!--/.col-xs-12.col-sm-9-->

      </div><!--/row--><?php }} ?>
