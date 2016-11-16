<?php
  include_once('../../config/init.php');
  include_once($BASE_DIR . 'database/perfis.php');
  
  if (!$_GET['perfil']) {
    $_SESSION['error_messages'][] = 'Erro a abrir página de utilizador. Por favor tente novamente.';
    error_log('Ao abrir página de perfil não foi passado o id do utilizador.');
    header("Location: $BASE_URL");
    exit;
  }
  $utilizador_id = $_GET['perfil'];
  
  try {
    $utilizador_actual = obter_utilizador($utilizador_id);
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Erro a abrir página de perfil. Por favor tente novamente.';
	error_log('Erro a abrir página de perfil: ' . $e->getMessage());
    header("Location: $BASE_URL");
    exit;
  }
  
  try {
	$editor = verifica_editor($utilizador_id);
	if (!$editor){
	  $jornalista = verifica_jornalista($utilizador_id);
	  if (!$jornalista)
		$administrador = verifica_admin($utilizador_id);
	}
	  
	if ($editor || $jornalista) {
		$autor = true;
		$autor_actual = obter_autor($utilizador_id);
		if ($utilizador_id != $_SESSION['utilizador']){
			$noticias_autor = noticias_autor($utilizador_id);
			foreach ($noticias_autor as $key => $noticia) {
				unset($imagem);
				if (file_exists($BASE_DIR.'images/noticias/'.$noticia['noticia_id'].'.png'))
					$imagem = 'images/noticias/'.$noticia['noticia_id'].'.png';
				if (file_exists($BASE_DIR.'images/noticias/'.$noticia['noticia_id'].'.jpg'))
					$imagem = 'images/noticias/'.$noticia['noticia_id'].'.jpg';
				if (!$imagem) $imagem = 'images/noticias/default.jpg';
					$noticias_autor[$key]['imagem'] = $imagem;
			}
		}
	}
  } catch (PDOException $e) {
    $_SESSION['error_messages'][] = 'Erro a verificar tipo de utilizador. Por favor tente novamente.';
	error_log('Erro a verificar tipo de utilizador: ' . $e->getMessage());
    header("Location: $BASE_URL");
    exit;
  }
  
  unset($imagem);
  if (file_exists($BASE_DIR.'images/utilizadores/'.$utilizador_actual['utilizador_id'].'.png'))
	$imagem = 'images/utilizadores/'.$utilizador_actual['utilizador_id'].'.png';
  if (file_exists($BASE_DIR.'images/utilizadores/'.$utilizador_actual['utilizador_id'].'.jpg'))
	$imagem = 'images/utilizadores/'.$utilizador_actual['utilizador_id'].'.jpg';
  if (!$imagem) $imagem = 'images/utilizadores/default.jpg';
  $utilizador_actual['imagem'] = $imagem;
  
  if ($editor) {
	  try {
		$noticias_aprovacao = verparaaprovacao();
		} catch (PDOException $e) {
		$_SESSION['error_messages'][] = 'Erro a obter notícias por aprovar. Por favor tente novamente.';
		error_log('Erro a obter notícias por aprovar: ' . $e->getMessage());
		header("Location: $BASE_URL");
		exit;
	  }
  }
  
  try {
		$nao_activos = vernaoactivos();
	  } catch (PDOException $e) {
		$_SESSION['error_messages'][] = 'Erro a obter utilizadores por activar. Por favor tente novamente.';
		error_log('Erro a obter utilizadores por activar: ' . $e->getMessage());
		header("Location: $BASE_URL");
		exit;
	  }
    
  $smarty->assign('noticias', $noticias_aprovacao);
  $smarty->assign('nao_activos',$nao_activos);
  $smarty->assign('noticias_autor', $noticias_autor);
  $smarty->assign('autor', $autor);
  $smarty->assign('editor', $editor);
  $smarty->assign('jornalista', $jornalista);
  $smarty->assign('admin', $administrador);
  $smarty->assign('utilizador', $utilizador_actual);
  $smarty->assign('autor_actual', $autor_actual);
  
  $smarty->display('perfis/perfil.tpl');
?>
