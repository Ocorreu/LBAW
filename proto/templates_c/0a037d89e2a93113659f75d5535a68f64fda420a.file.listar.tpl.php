<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 04:08:17
         compiled from "/usr/users2/mieec2011/ee11239/public_html/proto/templates/noticias/listar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2140166764556c88b07342f8-19948374%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a037d89e2a93113659f75d5535a68f64fda420a' => 
    array (
      0 => '/usr/users2/mieec2011/ee11239/public_html/proto/templates/noticias/listar.tpl',
      1 => 1433642866,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2140166764556c88b07342f8-19948374',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556c88b07e6c83_55706552',
  'variables' => 
  array (
    'jumbotron' => 0,
    'noticias' => 0,
    'BASE_URL' => 0,
    'noticia' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c88b07e6c83_55706552')) {function content_556c88b07e6c83_55706552($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
		  <?php if ($_smarty_tpl->tpl_vars['jumbotron']->value) {?>
          <div class="jumbotron">
			<div class="naonoticia">
            <h1><a href="../noticias/ver.php?noticia_actual=<?php echo $_smarty_tpl->tpl_vars['noticias']->value[0]['noticia_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['noticias']->value[0]['titulo'];?>
</a></h1>
			<img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['noticias']->value[0]['imagem'];?>
"><p><?php echo $_smarty_tpl->tpl_vars['noticias']->value[0]['subtexto'];?>
</p>
			</div>
		 </div>
		 <?php }?>
          <div class="row">
			<?php  $_smarty_tpl->tpl_vars['noticia'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['noticia']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['noticias']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['noticia']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['noticia']->key => $_smarty_tpl->tpl_vars['noticia']->value) {
$_smarty_tpl->tpl_vars['noticia']->_loop = true;
 $_smarty_tpl->tpl_vars['noticia']->index++;
 $_smarty_tpl->tpl_vars['noticia']->first = $_smarty_tpl->tpl_vars['noticia']->index === 0;
?>
				<?php if ($_smarty_tpl->tpl_vars['jumbotron']->value) {?>
					<?php if ($_smarty_tpl->tpl_vars['noticia']->first) {?>
						<?php continue 1?>
					<?php }?>
				<?php }?>
            <div class="col-xs-6 col-lg-4">
              <h2><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
</h2>
			  <img src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['noticia']->value['imagem'];?>
">
              <p><a class="btn btn-default" href="../noticias/ver.php?noticia_actual=<?php echo $_smarty_tpl->tpl_vars['noticia']->value['noticia_id'];?>
" role="button">Ver detalhes &raquo;</a></p>
            </div><!--/.col-xs-6.col-lg-4-->
			<?php } ?>
          </div><!--/row-->
        </div><!--/.col-xs-12.col-sm-9-->

        <?php echo $_smarty_tpl->getSubTemplate ('common/sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

		
      </div><!--/row-->
	  <br>
	  <hr>

  <?php echo $_smarty_tpl->getSubTemplate ('common/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }} ?>
