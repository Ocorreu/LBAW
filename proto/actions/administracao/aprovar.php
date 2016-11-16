<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/noticias.php');
  
  if (!$_GET['aprovar']) {
    $_SESSION['error_messages'][] = 'Erro a aprovar notícia. Por favor tente novamente.';
	error_log('Ao aprovar notícia não foi passado o id da notícia.');
	header('Location: ' . $BASE_URL . 'pages/perfis/perfil.php?perfil=' . $_SESSION['utilizador']);
	exit;
  }
  $noticia_id = $_GET['aprovar'];
  
  try {
	  aprovar_noticia($noticia_id);
  } catch (PDOException $e) {
	  $_SESSION['error_messages'][] = 'Erro a aprovar notícia. Por favor tente novamente.';
	  error_log('Erro a aprovar notícia: ' . $e->getMessage());
	  header('Location: ' . $BASE_URL . "pages/noticias/ver.php?noticia_actual=$noticia_id");
	  exit;
  }
  
  $_SESSION['success_messages'][] = 'Notícia aprovada.';
  header('Location: ' . $BASE_URL . 'pages/perfis/perfil.php?perfil=' . $_SESSION['utilizador']);
?>
