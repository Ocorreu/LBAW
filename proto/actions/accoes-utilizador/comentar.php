<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'database/accoes-utilizador.php');
	
	if (!$_POST['noticia_id']) {
		$_SESSION['error_messages'][] = 'Erro a comentar not�cia. Por favor tente novamente.';
		error_log('Ao comentar not�cia n�o foi passado o id da not�cia.');
		header('Location: ' . $BASE_URL);
		exit;
	}
	$noticia_id = strip_tags($_POST['noticia_id']);
	
	if (!$_POST['texto']) {
		$_SESSION['error_messages'][] = 'Coment�rio inv�lido. Por favor insira algum texto.';
		header('Location: ' . $BASE_URL . "pages/noticias/ver.php?noticia_actual=$noticia_id");
		exit;
	}
	$texto = $_POST['texto'];
	
	$utilizador_id = $_SESSION['utilizador'];
	
	try {
		criar_comentario($noticia_id, $texto, $utilizador_id);
	} catch (PDOException $e) {
		$_SESSION['error_messages'][] = 'Erro a comentar not�cia. Por favor tente novamente.';
		error_log('Erro a comentar not�cia: ' . $e->getMessage());
		header('Location: ' . $BASE_URL . "pages/noticias/ver.php?noticia_actual=$noticia_id");
		exit;
	}
	
	$_SESSION['success_messages'][] = 'Coment�rio adicionado.';
	header('Location: ' . $BASE_URL . "pages/noticias/ver.php?noticia_actual=$noticia_id");
?>