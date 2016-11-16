<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/autenticacao.php');
  
  if (!$_POST['nome'] || !$_POST['apelido'] || !$_POST['password'] || !$_POST['passwordtwo'] || !$_POST['email'] || !$_POST['tipo']) {
    $_SESSION['error_messages'][] = 'Todos os campos são obrigatórios (excepto imagem). Por favor tente novamente.';
	error_log('Ao fazer registo não foi passado um dos parâmetros.');
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $BASE_URL . 'pages/autenticacao/registar.php');
    exit;
  }
  
  if ($_POST['password'] != $_POST['passwordtwo']) {
    $_SESSION['error_messages'][] = 'As duas passwords devem ser iguais. Por favor tente novamente.';
	error_log('Ao fazer login a password não foi igual à confirmação.');
	$_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/autenticacao/registar.php');
    exit;
  }
  $nome = strip_tags($_POST['nome']);
  $apelido = strip_tags($_POST['apelido']);
  $password = $_POST['password'];
  $email = strip_tags($_POST['email']);
  if (strlen($password) < 7) {
	$_SESSION['error_messages'][] = 'A password deve ter pelo menos 7 caracteres.';
	error_log('Ao fazer login a password teve menos de 7 caracteres.');
	$_SESSION['form_values'] = $_POST;
	header("Location: $BASE_URL" . 'pages/autenticacao/registar.php');
	exit;
  }
  if (strlen($password) > 15) {
	$_SESSION['error_messages'][] = 'A password deve ter no máximo 15 caracteres.';
	error_log('Ao fazer login a password teve mais de 15 caracteres.');
	$_SESSION['form_values'] = $_POST;
	header("Location: $BASE_URL" . 'pages/autenticacao/registar.php');
	exit;
  }
  
  
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	$_SESSION['error_messages'][] = 'Formato de email inválido. Por favor tente novamente.';
	error_log('Ao fazer login o formato do email não foi o correcto.');
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/autenticacao/registar.php');
	exit;
  }
  $imagem = $_FILES['imagem'];
  $tipo = $_POST['tipo'];
  $extension = end(explode(".", $imagem["name"]));
  if($extension != 'png' && $extension != 'jpg' && $extension) {
	$_SESSION['error_messages'][] = 'Formato de imagem inválido. Por favor tente novamente.';
	error_log('Ao fazer login a extensão da imagem não foi a correcta.');
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/autenticacao/registar.php');
	exit;
  }
  
  try {
	 if($tipo == "leitor")
		$id = criar_leitor($nome, $apelido, $password, $email);
	 else if($tipo == "jornalista")
		$id = criar_jornalista($nome, $apelido, $password, $email);
	 else if($tipo == "editor")
		$id = criar_editor($nome, $apelido, $password, $email);
	if($_FILES["imagem"]["error"] == 0) { // no errors happened during the uploading
		move_uploaded_file($imagem["tmp_name"], $BASE_DIR . "images/utilizadores/" . $id . '.' . $extension); // this is dangerous
		chmod($BASE_DIR . "images/utilizadores/" . $email . '.' . $extension, 0755);
	}
  } catch (PDOException $e) {
	  $_SESSION['error_messages'][] = 'Erro a registar utilizador. Por favor tente novamente.';
	  error_log('Erro a registar utilizador: ' . $e->getMessage());
	  $_SESSION['form_values'] = $_POST;
	  header("Location: $BASE_URL" . 'pages/autenticacao/registar.php');
	  exit;
  }
  
  $_SESSION['success_messages'][] = 'Utilizador registado. Por favor faça login.';
  header("Location: $BASE_URL" . 'pages/autenticacao/login.php');
?>
