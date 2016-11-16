<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 14:23:48
         compiled from "/usr/users2/mieic2012/ei12137/public_html/proto/templates/common/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4946288885559bb8123d950-02924580%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c04b779189ee9f64cd3e5caa5e7db184338288ee' => 
    array (
      0 => '/usr/users2/mieic2012/ei12137/public_html/proto/templates/common/header.tpl',
      1 => 1433759447,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4946288885559bb8123d950-02924580',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_5559bb81281a23_64941685',
  'variables' => 
  array (
    'BASE_URL' => 0,
    'EMAIL' => 0,
    'ERROR_MESSAGES' => 0,
    'error' => 0,
    'SUCCESS_MESSAGES' => 0,
    'success' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5559bb81281a23_64941685')) {function content_5559bb81281a23_64941685($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../images/site/4.jpg">

    <title>News4You</title>

    <!-- Bootstrap core CSS -->
    <link href="../../css/bootstrap-3.3.2/dist/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../css/offcanvas.css" rel="stylesheet">
	
	<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
javascript/main.js"></script>

  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/noticias/homepage.php"><img src="../../images/site/news4you.jpg" alt="logo" width="150px" height="150px" class="navbar-brand"></a>
        </div>
        <div class="navbar-text">
          <label id="search"><span id="search">Procurar por:</span>
		  <form action="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
pages/pesquisa/palavras.php" method="post">
			<input placeholder="palavras separadas por espaços" type="text" name="palavraschave" onkeydown="if (event.keyCode == 13) { this.form.submit(); return false; } "></label>
		  </form>
  </div>
  
  <?php if ($_smarty_tpl->tpl_vars['EMAIL']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate ('common/menu_utilizador.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php } else { ?>
	<?php echo $_smarty_tpl->getSubTemplate ('common/menu_visitante.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  <?php }?>
  
    <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ERROR_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
       <div class="jumbotron"><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
<a class="close">X</a></div>
    <?php } ?>
   
    <?php  $_smarty_tpl->tpl_vars['success'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['success']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUCCESS_MESSAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['success']->key => $_smarty_tpl->tpl_vars['success']->value) {
$_smarty_tpl->tpl_vars['success']->_loop = true;
?>
		<div class="jumbotron"><?php echo $_smarty_tpl->tpl_vars['success']->value;?>
<a class="close">X</a></div>
    <?php } ?>
    <?php }} ?>
