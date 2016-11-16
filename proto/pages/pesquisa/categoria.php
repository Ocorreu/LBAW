<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/pesquisa.php');
  
  if (!$_GET['categoria']) {
    $_SESSION['error_messages'][] = 'Erro a abrir página de categoria. Por favor tente novamente.';
    error_log('Ao abrir página de categoria não foi passada a categoria.');
    header("Location: $BASE_URL");
    exit;
  }
  $categoria_id = $_GET['categoria'];
  
  try {
	$noticias_cat = categoria($categoria_id);
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Erro a abrir página de categoria. Por favor tente novamente.';
	error_log('Erro a abrir página de categoria: ' . $e->getMessage());
    header("Location: $BASE_URL");
    exit;
  }
  
  foreach ($noticias_cat as $key => $noticia) {
    unset($imagem);
    if (file_exists($BASE_DIR.'images/noticias/'.$noticia['noticia_id'].'.png'))
      $imagem = 'images/noticias/'.$noticia['noticia_id'].'.png';
    if (file_exists($BASE_DIR.'images/noticias/'.$noticia['noticia_id'].'.jpg'))
      $imagem = 'images/noticias/'.$noticia['noticia_id'].'.jpg';
    if (!$imagem) $imagem = 'images/noticias/default.jpg';
    $noticias_cat[$key]['imagem'] = $imagem;
  }
  
  $jumbotron = true;
  
  $smarty->assign('jumbotron', $jumbotron);
  $smarty->assign('categoria', $categoria_id);
  $smarty->assign('noticias', $noticias_cat);
  $smarty->display('noticias/listar.tpl');
?>