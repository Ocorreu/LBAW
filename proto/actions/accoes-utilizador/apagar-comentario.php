<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'database/accoes-utilizador.php');
	
	if (!$_GET['noticia_actual']){
		$_SESSION['error_messages'][] = 'Erro a apagar coment�rio. Por favor tente novamente.';
		error_log('Ao apagar coment�rio n�o foi passado o id da not�cia.');
		header('Location: ' . $BASE_URL);
		exit;
	}
	$noticia_id = $_GET['noticia_actual'];
	
	if (!$_GET['comentario_actual']){
		$_SESSION['error_messages'][] = 'Erro a apagar coment�rio. Por favor tente novamente.';
		error_log('Ao apagar coment�rio n�o foi passado o id do coment�rio.');
		header('Location: ' . $BASE_URL . "pages/noticias/ver.php?noticia_actual=$noticia_id");
		exit;
	}
	$comentario_id = $_GET['comentario_actual'];
	
	try {
		apagar_comentario($comentario_id);
	} catch (PDOException $e) {
		$_SESSION['error_messages'][] = 'Erro a apagar coment�rio. Por favor tente novamente.';
		error_log('Erro a apagar coment�rio: ' . $e->getMessage());
		header('Location: ' . $BASE_URL . "pages/noticias/ver.php?noticia_actual=$noticia_id");
		exit;
	}
	
	$_SESSION['success_messages'][] = 'Coment�rio removido.';
	header('Location: ' . $BASE_URL . "pages/noticias/ver.php?noticia_actual=$noticia_id");
?>