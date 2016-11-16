<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/perfis.php');
  
  if (!$_GET['utilizador_actual']) {
    $_SESSION['error_messages'][] = 'Erro a activar utilizador. Por favor tente novamente.';
	error_log('Ao activar utilizador não foi passado o id do utilizador.');
	header('Location: ' . $BASE_URL . 'pages/perfis/perfil.php?perfil=' . $_SESSION['utilizador']);
	exit;
  }
  $utilizador_id = $_GET['utilizador_actual'];
  
  try {
	  activar_utilizador($utilizador_id);
  } catch (PDOException $e) {
	  $_SESSION['error_messages'][] = 'Erro a activar utilizador. Por favor tente novamente.';
	  error_log('Erro a activar utilizador: ' . $e->getMessage());
	  header('Location: ' . $BASE_URL . "pages/perfis/perfil.php?perfil=$utilizador_id");
	  exit;
  }
  
  $_SESSION['success_messages'][] = 'Utilizador activado.';
  header('Location: ' . $BASE_URL . 'pages/perfis/perfil.php?perfil=' . $_SESSION['utilizador']);
?>
