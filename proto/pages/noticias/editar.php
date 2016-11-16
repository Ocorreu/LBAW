<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/noticias.php');
  
  if (!$_GET['noticia_actual']) {
    $_SESSION['error_messages'][] = 'Erro a abrir página de edição de notícia. Por favor tente novamente.';
	error_log('Ao abrir página de edição de notícia não foi passado o id da notícia.');
    header("Location: $BASE_URL");
    exit;
  }
  $noticia_id = $_GET['noticia_actual'];
  
  try {
	  $noticia_a = obter_noticia($noticia_id);
  } catch (PDOException $e) {
	$_SESSION['error_messages'][] = 'Erro a abrir página de edição de notícia. Por favor tente novamente.';
    error_log('Erro a abrir página de edição de notícia: ' . $e->getMessage());
	header("Location: $BASE_URL");
    exit;
  }
  
  $edit = true;
  
  $smarty->assign('edit', $edit);
  $smarty->assign('noticia', $noticia_a);
  $smarty->display('noticias/formulario.tpl');
?>