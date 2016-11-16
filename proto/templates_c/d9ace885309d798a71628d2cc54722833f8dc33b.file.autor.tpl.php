<?php /* Smarty version Smarty-3.1.15, created on 2015-06-05 18:39:36
         compiled from "/usr/users2/mieec2011/ee11239/public_html/proto/templates/perfis/autor.tpl" */ ?>
<?php /*%%SmartyHeaderCode:456513341556f30bf1a58b7-24019261%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9ace885309d798a71628d2cc54722833f8dc33b' => 
    array (
      0 => '/usr/users2/mieec2011/ee11239/public_html/proto/templates/perfis/autor.tpl',
      1 => 1433522351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '456513341556f30bf1a58b7-24019261',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556f30bf1c37c7_72243667',
  'variables' => 
  array (
    'noticias_autor' => 0,
    'noticia' => 0,
    'BASE_URL' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556f30bf1c37c7_72243667')) {function content_556f30bf1c37c7_72243667($_smarty_tpl) {?><div class="row row-offcanvas row-offcanvas-right">
        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
		  <hr>
		  		<h3>Notícias publicadas (mais recentes):</h3>
          <div class="row">
			<?php  $_smarty_tpl->tpl_vars['noticia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['noticia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noticias_autor']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->key => $_smarty_tpl->tpl_vars['noticia']->value) {
$_smarty_tpl->tpl_vars['noticia']->_loop = true;
?>
			  <div class="col-xs-6 col-lg-4">
              <h3><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
</h3>
			  <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['noticia']->value['imagem'];?>
">
              <p><a class="btn btn-default" href="../noticias/ver.php?noticia_actual=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['noticia_id'];?>
" role="button">Ver detalhes &raquo;</a></p>
              </div><!--/.col-xs-6.col-lg-4-->
			<?php } ?>
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

      </div><!--/row-->
	  <br>
      <hr>
<?php }} ?>
