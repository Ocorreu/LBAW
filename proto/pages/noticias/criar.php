<?php
  include_once('../../config/init.php');
  
  $edit = false;
  
  $smarty->assign('edit', $edit);
  $smarty->display('noticias/formulario.tpl');
?>