<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/noticias.php');

  if (!$_POST['titulo'] || !$_POST['subtexto'] || !$_POST['texto'] || !$_POST['categoria']) {
    $_SESSION['error_messages'][] = 'Todos os campos são obrigatórios (excepto imagem e palavras-chave). Por favor tente novamente.';
	error_log('Ao criar notícia não foi passado um dos parâmetros.');
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $BASE_URL . 'pages/noticias/criar.php');
    exit;
  }
  
  
  if ($_POST['palavraschave']) {
	$flag = true;
	$pchave = strip_tags($_POST['palavraschave']);
	$palavraschave = explode(', ', $pchave);
	$count = count($palavraschave);
	for ($i=0; $i < $count; $i++) {
		
	    if (strstr($palavraschave[$i], ',')) {
		  $palavras_aux = explode(',', $palavraschave[$i]);
		  $palavraschave[$i] = $palavras_aux[0];
		  $palavraschave[count($palavraschave)] = $palavras_aux[1];
		}
    }
	$count = count($palavraschave);
	for ($i=0; $i < $count; $i++) {
	    if (strstr($palavraschave[$i], ' ')) {
		  $palavras_aux = explode(' ', $palavraschave[$i]);
		  $palavraschave[$i] = $palavras_aux[0];
		  $palavraschave[count($palavraschave)] = $palavras_aux[1];
		}
    }
	for ($i=0; $i < count($palavraschave); $i++) {
	    if (strstr($palavraschave[$i], ',') || strstr($palavraschave[$i], ' ')) {
		  $_SESSION['error_messages'][] = 'Formato de palavras-chave incorrecto. Por favor tente novamente.';
		  $_SESSION['form_values'] = $_POST;
		  header('Location: ' . $BASE_URL . 'pages/noticias/criar.php');
		  exit;
		}
    }
  } else
	  $flag = false;
  
  if (!$_SESSION['utilizador']) {
	$_SESSION['error_messages'][] = 'Sem permissão. Por favor tente novamente.';
	error_log('Ao criar notícia o utilizador já não estava autenticado.');
    $_SESSION['form_values'] = $_POST;
    header('Location: ' . $BASE_URL . 'pages/noticias/criar.php');
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
	error_log('Ao criar notícia a extensão da imagem não foi a correcta.');
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/noticias/criar.php');
	exit;
  }
  
  global $conn;
  try {
	$conn->beginTransaction();
    $noticia_id = criar_noticia($titulo, $subtexto, $texto, $categoria, $autor);
	if($_FILES["imagem"]["error"] == 0) { // no errors happened during the uploading
		move_uploaded_file($imagem["tmp_name"], $BASE_DIR . "images/noticias/" . $noticia_id . '.' . $extension); // this is dangerous
		chmod($BASE_DIR . "images/noticias/" . $noticia_id . '.' . $extension, 0755);
	}
	if ($flag) {
		foreach ($palavraschave as $palavrachave) {
			inserir_tag($conn, $palavrachave, $noticia_id);
		}
	}
	$conn->commit();
  } catch (PDOException $e) {
	$conn->rollBack();
    $_SESSION['error_messages'][] = 'Erro a criar notícia. Por favor tente novamente.';
	error_log('Erro a criar notícia: ' . $e->getMessage());
    $_SESSION['form_values'] = $_POST;
    header("Location: $BASE_URL" . 'pages/noticias/criar.php');
    exit;
  }
  
  $_SESSION['success_messages'][] = 'Notícia criada. Estará disponível após aprovação.';
  header("Location: $BASE_URL" . 'pages/noticias/homepage.php');
?>
