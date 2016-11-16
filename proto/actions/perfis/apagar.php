<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/perfis.php');

  if (!$_GET['utilizador_actual']){
	  $_SESSION['error_messages'][] = 'Erro a apagar utilizador. Por favor tente novamente.';
	  error_log('Ao apagar utilizador não foi passado o id do utilizador.');
	  header('Location: ' . $BASE_URL);
	  exit;
  }
  $utilizador_id = $_GET['utilizador_actual'];
  
  if (file_exists($BASE_DIR . "images/utilizadores/" . $utilizador_id . '.png'))
	unlink($BASE_DIR . "images/utilizadores/" . $utilizador_id . '.png');
  if (file_exists($BASE_DIR . "images/utilizadores/" . $utilizador_id . '.jpg'))
	unlink($BASE_DIR . "images/utilizadores/" . $utilizador_id . '.jpg');
  
  try {
    apagar_utilizador($utilizador_id);
	if (file_exists($BASE_DIR . "images/utilizadores/" . $utilizador_id . '.png'))
		unlink($BASE_DIR . "images/utilizadores/" . $utilizador_id . '.png');
	if (file_exists($BASE_DIR . "images/utilizadores/" . $utilizador_id . '.jpg'))
		unlink($BASE_DIR . "images/utilizadores/" . $utilizador_id . '.jpg');
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Erro a apagar utilizador. Por favor tente novamente.';
	error_log('Erro a apagar utilizador: ' . $e->getMessage());
	header('Location: ' . $BASE_URL . "pages/perfis/perfil.php?perfil=$utilizador_id");
    exit;
  }
  
  $_SESSION['success_messages'][] = 'Utilizador apagado.';
  header("Location: $BASE_URL" . 'pages/noticias/homepage.php');
?>
