<?php
	include_once('../../config/init.php');
	include_once($BASE_DIR . 'database/accoes-utilizador.php');
	
	if (!$_GET['comentario_id'] || !$_GET['utilizador_id']){
		$_SESSION['error_messages'][] = 'Acчуo invсlida.';
		$_SESSION['form_values'] = $_POST;
		header('Location: ' . $BASE_URL);
		exit;
	}
	
	$comentario_id = $_GET['comentario_id'];
	$utilizador_id = $_GET['utilizador_id'];
	
	
	try {
		apagar_comentario($comentario_id, $utilizador_id);
	} catch (PDOException $e) {
    echo $e.getMessage();
    header("Location: " . $BASE_URL);
    exit;
?>