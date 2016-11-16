<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/noticias.php');
  
  if (!$_GET['noticia_actual']){
	$_SESSION['error_messages'][] = 'Erro a apagar notícia. Por favor tente novamente.';
	error_log('Ao apagar notícia não foi passado o id da notícia.');
	header('Location: ' . $BASE_URL);
	exit;
  }
  $noticia_id = $_GET['noticia_actual'];
  
  if (file_exists($BASE_DIR . "images/noticias/" . $noticia_id . '.png'))
	unlink($BASE_DIR . "images/noticias/" . $noticia_id . '.png');
  if (file_exists($BASE_DIR . "images/noticias/" . $noticia_id . '.jpg'))
	unlink($BASE_DIR . "images/noticias/" . $noticia_id . '.jpg');
  
  try {
    apagar_noticia($noticia_id);
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Erro a apagar notícia. Por favor tente novamente.';
	error_log('Erro a apagar notícia: ' . $e->getMessage());
    header('Location: ' . $BASE_URL . "pages/noticias/ver.php?noticia_actual=$noticia_id");
    exit;
  }
  
  $_SESSION['success_messages'][] = 'Notícia apagada.';
  header("Location: $BASE_URL" . 'pages/noticias/homepage.php');
?>
