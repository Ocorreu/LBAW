<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/perfis.php');
  
  if (!$_SESSION['utilizador']) {
	$_SESSION['error_messages'][] = 'Sem permissão. Por favor tente novamente.';
    error_log('Ao editar perfil o utilizador já não estava autenticado.');
    header('Location: ' . $BASE_URL);
    exit;
  }
  $utilizador_id = $_SESSION['utilizador'];

  if (!$_POST['email'] || !$_POST['password_a'] || !$_POST['tipo']) {
    $_SESSION['error_messages'][] = 'Por favor insira o e-mail a utilizar e a sua password actual.';
	error_log('Ao editar perfil não foi passado um dos parâmetros.');
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $BASE_URL . "pages/perfis/editar.php?utilizador_actual=$utilizador_id");
    exit;
  }
  
  if ($_POST['password'] && ($_POST['password'] != $_POST['passwordtwo'])) {
    $_SESSION['error_messages'][] = 'A confirmação deve ser igual à password.';
	error_log('Ao editar perfil a password não foi igual à confirmação.');
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $BASE_URL . "pages/perfis/editar.php?utilizador_actual=$utilizador_id");
    exit;
  }
  
  if ($_POST['password_a'] == $_POST['password']) {
    $_SESSION['error_messages'][] = 'Escolheu uma password nova igual à actual. Por favor tente novamente.';
	error_log('Ao editar perfil a password nova foi igual à actual.');
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $BASE_URL . "pages/perfis/editar.php?utilizador_actual=$utilizador_id");
    exit;
  }
  
  $password_a = $_POST['password_a'];
  $password = $_POST['password'];
  if (!$password)
	  $password = $password_a;
  if (strlen($password) < 7) {
	$_SESSION['error_messages'][] = 'A password deve ter pelo menos 7 caracteres.';
	error_log('Ao editar perfil a password teve menos de 7 caracteres.');
	$_SESSION['form_values'] = $_POST;
	header('Location: ' . $BASE_URL . "pages/perfis/editar.php?utilizador_actual=$utilizador_id");
	exit;
  }
  if (strlen($password) > 15) {
	$_SESSION['error_messages'][] = 'A password deve ter no máximo 15 caracteres.';
	error_log('Ao editar perfil a password teve mais de 15 caracteres.');
	$_SESSION['form_values'] = $_POST;
	header('Location: ' . $BASE_URL . "pages/perfis/editar.php?utilizador_actual=$utilizador_id");
	exit;
  }
  $email = strip_tags($_POST['email']);
  $imagem = $_FILES['imagem'];
  $tipo = $_POST['tipo'];
  $extension = end(explode(".", $imagem["name"]));
  if($extension != 'png' && $extension != 'jpg' && $extension){
	$_SESSION['error_messages'][] = 'Formato de imagem inválido. Por favor tente novamente.';
	error_log('Ao editar perfil a extensão da imagem não foi a correcta.');
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $BASE_URL . "pages/perfis/editar.php?utilizador_actual=$utilizador_id");
	exit;
  }
  
  global $conn;
  try {
	$conn->beginTransaction();
    editar_utilizador($conn, $utilizador_id, $password, $email);
	if($_SESSION['tipo'] != $tipo){
		if($tipo == 'j')
			leitor_jornalista($conn, $utilizador_id);
			else if($tipo == 'e' && ($_SESSION['tipo'] == 'l'))
				leitor_editor($conn, $utilizador_id);
				else
					jornalista_editor($conn, $utilizador_id);	
	}
	$conn->commit();
	if($_FILES["imagem"]["error"] == 0) { // no errors happened during the uploading
		if (file_exists($BASE_DIR . "images/utilizadores/" . $utilizador_id . '.png'))
			unlink($BASE_DIR . "images/utilizadores/" . $utilizador_id . '.png');
		if (file_exists($BASE_DIR . "images/utilizadores/" . $utilizador_id . '.jpg'))
			unlink($BASE_DIR . "images/utilizadores/" . $utilizador_id . '.jpg');
		move_uploaded_file($imagem["tmp_name"], $BASE_DIR . "images/utilizadores/" . $utilizador_id . '.' . $extension); // this is dangerous
		chmod($BASE_DIR . "images/utilizadores/" . $utilizador_id . '.' . $extension, 0755);
	}
  } catch (PDOException $e) {
	$conn->rollBack();
    $_SESSION['error_messages'][] = 'Erro a editar perfil. Por favor tente novamente.';
	error_log('Erro a editar perfil: ' . $e->getMessage());
	$_SESSION['form_values'] = $_POST;
	header('Location: ' . $BASE_URL . "pages/perfis/editar.php?utilizador_actual=$utilizador_id");
	exit;
  }
  
  $_SESSION['success_messages'][] = 'Perfil actualizado.';
  header("Location: $BASE_URL");
?>
