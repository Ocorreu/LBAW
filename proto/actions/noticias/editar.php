<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/noticias.php');

  if (!$_POST['noticia_actual']) {
		$_SESSION['error_messages'][] = 'Erro a editar notícia. Por favor tente novamente.';
		error_log('Ao editar notícia não foi passado o id da notícia.');
		header('Location: ' . $BASE_URL);
		exit;
	}
	$noticia_id = strip_tags($_POST['noticia_actual']);
  
  if (!$_POST['titulo'] || !$_POST['subtexto'] || !$_POST['texto'] || !$_POST['categoria']) {
    $_SESSION['error_messages'][] = 'Todos os campos são obrigatórios (excepto imagem). Por favor tente novamente.';
	error_log('Ao editar notícia não foi passado um dos parâmetros.');
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $BASE_URL . "pages/noticias/editar.php?noticia_actual=$noticia_id");
    exit;
  }
  
  if (!$_SESSION['utilizador']) {
	$_SESSION['error_messages'][] = 'Sem permissão. Por favor tente novamente.';
	error_log('Ao editar notícia o utilizador já não estava autenticado.');
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $BASE_URL . "pages/noticias/editar.php?noticia_actual=$noticia_id");
    exit;
  }
  
  $titulo = strip_tags($_POST['titulo']);
  $subtexto = strip_tags($_POST['subtexto']);
  $texto = strip_tags($_POST['texto']);
  $categoria = strip_tags($_POST['categoria']);
  $autor = $_SESSION['utilizador'];
  $imagem = $_FILES['imagem'];
  $extension = end(explode(".", $imagem["name"]));
  if($extension != 'png' && $extension != 'jpg' && $extension){
	$_SESSION['error_messages'][] = 'Formato de imagem inválido. Por favor tente novamente.';
	error_log('Ao editar notícia a extensão da imagem não foi a correcta.');
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $BASE_URL . "pages/noticias/editar.php?noticia_actual=$noticia_id");
	exit;
  }
  
  try {
    editar_noticia($noticia_id, $titulo, $subtexto, $texto, $categoria, $autor);
	if($_FILES["imagem"]["error"] == 0) { // no errors happened during the uploading
		if (file_exists($BASE_DIR . "images/noticias/" . $noticia_id . '.png'))
			unlink($BASE_DIR . "images/noticias/" . $noticia_id . '.png');
		if (file_exists($BASE_DIR . "images/noticias/" . $noticia_id . '.jpg'))
			unlink($BASE_DIR . "images/noticias/" . $noticia_id . '.jpg');
		move_uploaded_file($imagem["tmp_name"], $BASE_DIR . "images/noticias/" . $noticia_id . '.' . $extension); // this is dangerous
		chmod($BASE_DIR . "images/noticias/" . $noticia_id . '.' . $extension, 0755);
	}

  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Erro a editar notícia. Por favor tente novamente.';
	error_log('Erro a editar notícia: ' . $e->getMessage());
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $BASE_URL . "pages/noticias/editar.php?noticia_actual=$noticia_id");
    exit;
  }
  
  $_SESSION['success_messages'][] = 'Notícia editada. Estará disponível após aprovação.';
  header("Location: $BASE_URL");
?>
