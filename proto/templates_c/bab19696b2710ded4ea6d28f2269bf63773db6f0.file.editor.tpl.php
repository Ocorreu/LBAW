<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 04:18:22
         compiled from "/usr/users2/mieic2012/ei12137/public_html/proto/templates/perfis/editor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12650991556f187d1877b7-53949782%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bab19696b2710ded4ea6d28f2269bf63773db6f0' => 
    array (
      0 => '/usr/users2/mieic2012/ei12137/public_html/proto/templates/perfis/editor.tpl',
      1 => 1433628559,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12650991556f187d1877b7-53949782',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556f187d18b994_83652806',
  'variables' => 
  array (
    'noticias' => 0,
    'noticia' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556f187d18b994_83652806')) {function content_556f187d18b994_83652806($_smarty_tpl) {?><div class="row row-offcanvas row-offcanvas-right">
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
