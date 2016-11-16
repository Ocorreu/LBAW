<?php /* Smarty version Smarty-3.1.15, created on 2015-06-08 02:17:25
         compiled from "/usr/users2/mieec2011/ee11239/public_html/proto/templates/perfis/administrador.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1297195226556f30bf1f1e32-46278785%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a238219a8c1a687224e10c458ffda47824a21953' => 
    array (
      0 => '/usr/users2/mieec2011/ee11239/public_html/proto/templates/perfis/administrador.tpl',
      1 => 1433721309,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1297195226556f30bf1f1e32-46278785',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.15',
  'unifunc' => 'content_556f30bf1f6170_02894657',
  'variables' => 
  array (
    'autor' => 0,
    'BASE_URL' => 0,
    'utilizador' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_556f30bf1f6170_02894657')) {function content_556f30bf1f6170_02894657($_smarty_tpl) {?><?php if ($_smarty_tpl->tpl_vars['autor']->value['activo']=='false') {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['BASE_URL']->value;?>
actions/administracao/activar.php?activar=<?php echo $_smarty_tpl->tpl_vars['utilizador']->value['utilizador_id'];?>
">Activar</a>
<?php }?><?php }} ?>
