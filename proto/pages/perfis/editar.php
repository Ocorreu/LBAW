<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/perfis.php');
  
  if (!$_GET['utilizador_actual']) {
    $_SESSION['error_messages'][] = 'Erro a abrir página de edição de perfil. Por favor tente novamente.';
	error_log('Ao abrir página de edição de perfil não foi passado o id do utilizador.');
    header("Location: $BASE_URL");
    exit;
  }
  $utilizador_id = $_GET['utilizador_actual'];
  
  try {
	  $utilizador_a = obter_utilizador($utilizador_id);
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Erro a abrir página de edição de perfil. Por favor tente novamente.';
    error_log('Erro a abrir página de edição de perfil: ' . $e->getMessage());
	header("Location: $BASE_URL");
    exit;
  }
  
  $smarty->assign('utilizador', $utilizador_a);
  $smarty->display('perfis/editar.tpl');
?>
