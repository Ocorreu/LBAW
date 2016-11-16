<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/perfis.php');

  if (!$_GET['utilizador_actual']) {
    $_SESSION['error_messages'][] = 'Perfil não existente.';
    header("Location: $BASE_URL");
    exit;
  }
  $utilizador_id = $_GET['utilizador_actual'];
  
  try {
	  
		 promover_autor($utilizador_id);
		
		
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Erro a promover utilizador.';
	$_SESSION['error_messages'][] = $e->getMessage();
    header("Location: $BASE_URL");
    exit;
  }
  
  header('Location: ' . $BASE_URL . 'pages/perfis/perfil.php?perfil=' . $_SESSION['utilizador']);
?>
