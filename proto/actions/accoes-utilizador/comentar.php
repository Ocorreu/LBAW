<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'database/accoes-utilizador.php');
	
	if (!$_POST['noticia_id']) {
		$_SESSION['error_messages'][] = 'Erro a comentar notícia. Por favor tente novamente.';
		error_log('Ao comentar notícia não foi passado o id da notícia.');
		header('Location: ' . $BASE_URL);
		exit;
	}
	$noticia_id = strip_tags($_POST['noticia_id']);
	
	if (!$_POST['texto']) {
		$_SESSION['error_messages'][] = 'Comentário inválido. Por favor insira algum texto.';
		header('Location: ' . $BASE_URL . "pages/noticias/ver.php?noticia_actual=$noticia_id");
		exit;
	}
	$texto = $_POST['texto'];
	
	$utilizador_id = $_SESSION['utilizador'];
	
	try {
		criar_comentario($noticia_id, $texto, $utilizador_id);
	} catch (PDOException $e) {
		$_SESSION['error_messages'][] = 'Erro a comentar notícia. Por favor tente novamente.';
		error_log('Erro a comentar notícia: ' . $e->getMessage());
		header('Location: ' . $BASE_URL . "pages/noticias/ver.php?noticia_actual=$noticia_id");
		exit;
	}
	
	$_SESSION['success_messages'][] = 'Comentário adicionado.';
	header('Location: ' . $BASE_URL . "pages/noticias/ver.php?noticia_actual=$noticia_id");
?>