<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/noticias.php');
  
  try {
	$noticias_homepage = homepage();
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Erro a obter notícias da página principal. Por favor tente novamente.';
	error_log('Erro a obter notícias da página principal: ' . $e->getMessage());
    header("Location: $BASE_URL");
    exit;
  }
  
  foreach ($noticias_homepage as $key => $noticia) {
    unset($imagem);
    if (file_exists($BASE_DIR.'images/noticias/'.$noticia['noticia_id'].'.png'))
      $imagem = 'images/noticias/'.$noticia['noticia_id'].'.png';
    if (file_exists($BASE_DIR.'images/noticias/'.$noticia['noticia_id'].'.jpg'))
      $imagem = 'images/noticias/'.$noticia['noticia_id'].'.jpg';
    if (!$imagem) $imagem = 'images/noticias/default.jpg';
    $noticias_homepage[$key]['imagem'] = $imagem;
  }
  
  $jumbotron = true;
  
  $smarty->assign('jumbotron', $jumbotron);
  $smarty->assign('noticias', $noticias_homepage);
  $smarty->display('noticias/listar.tpl');
?>
