<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/autenticacao.php');
  include_once($BASE_DIR . 'database/perfis.php');
  
  if (!$_POST['email'] || !$_POST['password']) {
    $_SESSION['error_messages'][] = 'Login inválido. Por favor tente novamente.';
	error_log('Ao fazer login não foi passado o email ou a password.');
    header('Location: ' . $BASE_URL . "pages/autenticacao/login.php");
    exit;
  }
  $email = strip_tags($_POST['email']);
  $password = $_POST['password'];
  
  try {
	$utilizador = verificar_login($email, $password);
  } catch (PDOException $e) {
	$_SESSION['error_messages'][] = 'Erro a fazer login. Por favor tente novamente.';
	error_log('Erro ao verificar credenciais: ' . $e->getMessage());
	header('Location: ' . $BASE_URL . "pages/autenticacao/login.php");
	exit;
  }
  $_SESSION['email'] = $utilizador['email'];
  $_SESSION['utilizador'] = $utilizador['utilizador_id'];
  
  try {
	$editor = verifica_editor($utilizador['utilizador_id']);
    if ($editor)
      $_SESSION['tipo']= 'e';
	else {
	  $jornalista = verifica_jornalista($utilizador['utilizador_id']);
	  if ($jornalista)
		$_SESSION['tipo']= 'j';
	  else {
		$administrador = verifica_admin($utilizador['utilizador_id']);
		if ($administrador)
		  $_SESSION['tipo']= 'a';
		else
		  $_SESSION['tipo']= 'l';
	  }
	}
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Erro a fazer login. Por favor tente novamente.';
    error_log('Erro ao verificar tipo de utilizador: ' . $e->getMessage());
    header('Location: ' . $BASE_URL . "pages/autenticacao/login.php");
    exit;
  }
  
  $_SESSION['success_messages'][] = 'Login bem-sucedido.';
  header('Location: ' . $BASE_URL . 'pages/noticias/homepage.php');
?>
