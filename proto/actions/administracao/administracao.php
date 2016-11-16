<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/perfis.php');

  if (!$_GET['activar']) {
    $_SESSION['error_messages'][] = 'Perfil não existente.';
    header("Location: $BASE_URL");
    exit;
  }
  $utilizador_id = $_GET['activar'];
  
  activar_utilizador($utilizador_id);
  
  header('Location: ' . $BASE_URL . 'pages/perfis/perfil.php?perfil=' . $_SESSION['utilizador']);
?>
