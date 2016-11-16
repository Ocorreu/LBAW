<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'database/accoes-utilizador.php');
	
	if (!$_POST['noticia_actual']) {
		$_SESSION['error_messages'][] = 'Erro a desmarcar notícia como favorita. Por favor tente novamente.';
		error_log('Ao desmarcar notícia como favorita não foi passado o id da notícia.');
		header('Location: ' . $BASE_URL);
		exit;
	  }
	$noticia_id = strip_tags($_POST['noticia_actual']);
	
	$utilizador_id = $_SESSION['utilizador']; 
	
	try {
		remover_favorita($utilizador_id, $noticia_id);
	} catch (PDOException $e) {
		$_SESSION['error_messages'][] = 'Erro a desmarcar notícia como favorita. Por favor tente novamente.';
		error_log('Erro a desmarcar notícia como favorita: ' . $e->getMessage());
		header('Location: ' . $BASE_URL . "pages/noticias/ver.php?noticia_actual=$noticia_id");
		exit;
	}
	
	$_SESSION['success_messages'][] = 'Notícia desmarcada como favorita.';
	header('Location: ' . $BASE_URL . "pages/noticias/ver.php?noticia_actual=$noticia_id");
?>