<?php /* Smarty version Smarty-3.1.15, created on 2015-06-07 18:03:15
         compiled from "/usr/users2/mieic2012/ei12137/public_html/proto/templates/perfis/administrador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1600679258556f187d1a85a3-52781564%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7754a3826a7925b3d473fcd175e849a04fccc0a' => 
    array (
      0 => '/usr/users2/mieic2012/ei12137/public_html/proto/templates/perfis/administrador.tpl',
      1 => 1433692939,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1600679258556f187d1a85a3-52781564',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556f187d1aec10_39595089',
  'variables' => 
  array (
    'autor' => 0,
    'BASE_URL' => 0,
    'utilizador' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556f187d1aec10_39595089')) {function content_556f187d1aec10_39595089($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['autor']->value['activo']=='false') {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administracao/activar.php?activar=<?php echo $_smarty_tpl->tpl_vars['utilizador']->value['utilizador_id'];?>
">Activar</a>
<?php }?><?php }} ?>
