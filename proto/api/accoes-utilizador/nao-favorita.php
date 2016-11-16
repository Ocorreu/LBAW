<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'database/accoes-utilizador.php');
	
	if (!$_GET['utilizador_id'] || !$_GET['noticia_id']){
		$_SESSION['error_messages'][] = 'Acчуo invсlida.';
		$_SESSION['form_values'] = $_POST;
		header('Location: ' . $BASE_URL);
		exit;
	}
	
	$utilizador_id = $_GET['utilizador_id'];
	$noticia_id = $_GET['noticia_id'];
	

	try {
		remover_favorita($utilizador_id, $noticia_id);
	} catch (PDOException $e) {
    echo $e.getMessage();
    header("Location: " . $BASE_URL);
    exit;
?>