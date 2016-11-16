<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/pesquisa.php');
  
  if (!$_POST['palavraschave']) {
    $_SESSION['error_messages'][] = 'Palavras-chave indefinidas.';
    header("Location: $BASE_URL");
    exit;
  }
  $pchave = strip_tags($_POST['palavraschave']);
  $palavraschave = explode(' ', $pchave);
  try {
	$noticias_pesquisa = palavras($palavraschave);
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Erro a pesquisar por palavras.';
	$_SESSION['error_messages'][] = $e->getMessage();
    header("Location: $BASE_URL");
    exit;
  }
  
  // foreach ($noticias_cat as $key => $noticia) {
    // unset($imagem);
    // if (file_exists($BASE_DIR.'images/noticias/'.$noticia['noticia_id'].'.png'))
      // $imagem = 'images/noticias/'.$noticia['noticia_id'].'.png';
    // if (file_exists($BASE_DIR.'images/noticias/'.$noticia['noticia_id'].'.jpg'))
      // $imagem = 'images/noticias/'.$noticia['noticia_id'].'.jpg';
    // if (!$imagem) $imagem = 'images/noticias/default.jpg';
    // $noticias_cat[$key]['imagem'] = $imagem;
  // }
  
  // $smarty->assign('categoria', $categoria_id);
  // $smarty->assign('noticias', $noticias_cat);
  $jumbotron = false;
  
  $smarty->assign('jumbotron', $jumbotron);
  $smarty->display('noticias/listar.tpl');
?>