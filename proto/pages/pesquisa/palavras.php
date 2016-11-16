<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/pesquisa.php');
  
  if (!$_POST['palavraschave']) {
    $_SESSION['error_messages'][] = 'Erro a pesquisar por palavras. Por favor escreva apenas palavras separadas por espaços.';
    error_log('Ao mostrar resultados da pesquisa não foram passadas as palavras-chave.');
    exit;
  }
  $pchave = strip_tags($_POST['palavraschave']);
  $palavras = explode(' ', $pchave);
  $palavraschave = "'" . $palavras[0] . "'";
  for ($i=1; $i < count($palavras); $i++) {
	  if ($palavras[$i])
		$palavraschave = $palavraschave . " | '" . $palavras[$i] . "'";
  }
  try {
	$noticias_pesquisa = pesquisar($palavraschave);
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Erro a pesquisar por palavras. Por favor escreva apenas palavras separadas por espaços.';
	error_log('Erro a pesquisar por palavras: ' . $e->getMessage());
    header("Location: $BASE_URL");
    exit;
  }
  if (!$noticias_pesquisa) {
	$_SESSION['error_messages'][] = 'Nenhuma notícia corresponde à procura. Certifique-se que escreveu apenas palavras separadas por espaços e tente novamente.';
	header("Location: $BASE_URL");
	exit;
  }
  
  foreach ($noticias_pesquisa as $key => $noticia) {
    unset($imagem);
    if (file_exists($BASE_DIR.'images/noticias/'.$noticia['noticia_id'].'.png'))
      $imagem = 'images/noticias/'.$noticia['noticia_id'].'.png';
    if (file_exists($BASE_DIR.'images/noticias/'.$noticia['noticia_id'].'.jpg'))
      $imagem = 'images/noticias/'.$noticia['noticia_id'].'.jpg';
    if (!$imagem) $imagem = 'images/noticias/default.jpg';
    $noticias_pesquisa[$key]['imagem'] = $imagem;
  }
  
  $jumbotron = false;
  
  $smarty->assign('jumbotron', $jumbotron);
  $smarty->assign('noticias', $noticias_pesquisa);
  $smarty->display('noticias/listar.tpl');
?>