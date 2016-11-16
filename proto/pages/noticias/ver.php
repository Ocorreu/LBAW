<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/noticias.php');
  include_once($BASE_DIR . 'database/accoes-utilizador.php');

  if (!$_GET['noticia_actual']) {
    $_SESSION['error_messages'][] = 'Erro a abrir página de notícia. Por favor tente novamente.';
    error_log('Ao abrir página de notícia não foi passado o id da notícia.');
    header("Location: $BASE_URL");
    exit;
  }
  $noticia_id = $_GET['noticia_actual'];
  
  global $conn;
  try {
	$conn->beginTransaction();
    $noticia_actual = obter_noticia($conn, $noticia_id);
	$dia = obter_dia($conn, $noticia_id);
	$hora = obter_hora($conn, $noticia_id);
	$autor_actual = autor_noticia($conn, $noticia_actual['autor_id']);
	$conn->commit();
  } catch (PDOException $e) {
	$conn->rollBack();
    $_SESSION['error_messages'][] = 'Erro a abrir página de notícia. Por favor tente novamente.';
	error_log('Erro a abrir página de edição de notícia: ' . $e->getMessage());
    header("Location: $BASE_URL");
    exit;
  }
  
  try {
    $comentarios = obter_comentarios($noticia_id);
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Erro a obter comentários de notícia. Por favor tente novamente.';
	error_log('Erro a obter comentários de notícia: ' . $e->getMessage());
    header("Location: $BASE_URL");
    exit;
  }
  
  $utilizador_id = $_SESSION['utilizador'];
  try {
    $favorita = verificar_favorita($utilizador_id, $noticia_id);
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Erro a verificar favorita. Por favor tente novamente.';
	error_log('Erro a verificar favorita: ' . $e->getMessage());
    header("Location: $BASE_URL");
    exit;
  }
  
  unset($imagem);
  if (file_exists($BASE_DIR.'images/noticias/'.$noticia_actual['noticia_id'].'.png'))
	$imagem = 'images/noticias/'.$noticia_actual['noticia_id'].'.png';
  if (file_exists($BASE_DIR.'images/noticias/'.$noticia_actual['noticia_id'].'.jpg'))
	$imagem = 'images/noticias/'.$noticia_actual['noticia_id'].'.jpg';
  if (!$imagem) $imagem = 'images/noticias/default.jpg';
  $noticia_actual['imagem'] = $imagem;
  
  $smarty->assign('noticia', $noticia_actual);
  $smarty->assign('autor', $autor_actual);
  $smarty->assign('dia', $dia);
  $smarty->assign('hora', $hora);
  $smarty->assign('comentarios', $comentarios);
  $smarty->assign('favorita', $favorita);
  $smarty->display('noticias/ver.tpl');
?>
