<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 03:31:46
         compiled from "/usr/users2/mieec2011/ee11239/public_html/proto/templates/noticias/formulario.tpl" */ ?>
<?php /*%%SmartyHeaderCode:455712248556c88c0b6d9f7-10951176%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c38e49beaf23fccbe64ed6b861c4bcc4fd49964d' => 
    array (
      0 => '/usr/users2/mieec2011/ee11239/public_html/proto/templates/noticias/formulario.tpl',
      1 => 1433727104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '455712248556c88c0b6d9f7-10951176',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556c88c0cb9c12_13654652',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'edit' => 0,
    'noticia' => 0,
    'FORM_VALUES' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556c88c0cb9c12_13654652')) {function content_556c88c0cb9c12_13654652($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ('common/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
			<div class="painellogin" id="login">
				<form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/noticias/<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>editar<?php } else { ?>criar<?php }?>.php" method="post" enctype="multipart/form-data">
					<?php if ($_smarty_tpl->tpl_vars['edit']->value) {?><input type="hidden" name="noticia_id" value="<?php echo $_smarty_tpl->tpl_vars['noticia']->value['noticia_id'];?>
"><?php }?>
					<fieldset>
						<legend><?php if ($_smarty_tpl->tpl_vars['edit']->value) {?>Editar notícia<?php } else { ?>Criar notícia<?php }?></legend>
						<p>Título:<textarea placeholder="Escreva aqui o título da notícia (máximo de 100 caracteres)" rows="1" name="titulo" maxlength="100" cols="100"><?php if (($_smarty_tpl->tpl_vars['edit']->value&&!$_smarty_tpl->tpl_vars['FORM_VALUES']->value['titulo'])) {?><?php echo $_smarty_tpl->tpl_vars['noticia']->value['titulo'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['FORM_VALUES']->value['titulo']) {?><?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['titulo'];?>
<?php }?></textarea></p>
						<p>Sub-texto:<textarea placeholder="Escreva aqui um pequeno resumo (máximo de 500 caracteres)" rows="3" name="subtexto" maxlength="500" cols="100"><?php if (($_smarty_tpl->tpl_vars['edit']->value&&!$_smarty_tpl->tpl_vars['FORM_VALUES']->value['subtexto'])) {?><?php echo $_smarty_tpl->tpl_vars['noticia']->value['subtexto'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['FORM_VALUES']->value['subtexto']) {?><?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['subtexto'];?>
<?php }?></textarea></p>
                        <p>Texto:<textarea placeholder="Escreva aqui o corpo da notícia (máximo de caracteres definido pelo seu bom senso)" rows="5" name="texto" cols="100"><?php if (($_smarty_tpl->tpl_vars['edit']->value&&!$_smarty_tpl->tpl_vars['FORM_VALUES']->value['texto'])) {?><?php echo $_smarty_tpl->tpl_vars['noticia']->value['texto'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['FORM_VALUES']->value['texto']) {?><?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['texto'];?>
<?php }?></textarea></p>
						<p>Palavras-chave:<textarea placeholder="Exemplo: 'futebol, Porto'" rows="1" name="palavraschave" maxlength="100" cols="100"><?php if (($_smarty_tpl->tpl_vars['edit']->value&&!$_smarty_tpl->tpl_vars['FORM_VALUES']->value['palavraschave'])) {?><?php echo $_smarty_tpl->tpl_vars['noticia']->value['palavraschave'];?>
<?php } elseif ($_smarty_tpl->tpl_vars['FORM_VALUES']->value['palavraschave']) {?><?php echo $_smarty_tpl->tpl_vars['FORM_VALUES']->value['palavraschave'];?>
<?php }?></textarea></p>
						<p>Imagem: <input type="file" name="imagem">Formato PNG ou JPG</p>
						<p>Categoria:
                        <select name="categoria">
                          <option <?php if ($_smarty_tpl->tpl_vars['noticia']->value['categoria_id']==1) {?>selected="selected"<?php }?> value="1">Política</option>
                          <option <?php if ($_smarty_tpl->tpl_vars['noticia']->value['categoria_id']==2) {?>selected="selected"<?php }?> value="2">Economia</option>
                          <option <?php if ($_smarty_tpl->tpl_vars['noticia']->value['categoria_id']==3) {?>selected="selected"<?php }?> value="3">Cultura</option>
                          <option <?php if ($_smarty_tpl->tpl_vars['noticia']->value['categoria_id']==4) {?>selected="selected"<?php }?> value="4">Mundo</option>
                          <option <?php if ($_smarty_tpl->tpl_vars['noticia']->value['categoria_id']==5) {?>selected="selected"<?php }?> value="5">Desporto</option>
                        </select></p>
						<input type="submit" value="Submeter para aprovação">
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
