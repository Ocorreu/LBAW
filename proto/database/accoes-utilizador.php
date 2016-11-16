<?php
	
	function criar_comentario($noticia_id, $texto, $utilizador_id){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO comentarios
								VALUES (default, ?, ?, ?, current_timestamp)");
		$stmt->execute(array($noticia_id, $utilizador_id, $texto));
	}
	
	function obter_comentarios($noticia_id){
		global $conn;
		$stmt = $conn->prepare("SELECT comentario_id, noticia_id, comentarios.utilizador_id, texto, data, nome, apelido
								FROM comentarios
								JOIN utilizadores
								ON comentarios.utilizador_id = utilizadores.utilizador_id
								WHERE noticia_id = ?
								ORDER BY data DESC");
		$stmt->execute(array($noticia_id));
		return $stmt->fetchAll();
	}

	function apagar_comentario($comentario_id){
		global $conn;
		$stmt = $conn->prepare("DELETE FROM comentarios
								WHERE comentario_id = ?");
		$stmt->execute(array($comentario_id));
	}
	
	function verificar_favorita($utilizador_id, $noticia_id){
		global $conn;
		$stmt = $conn->prepare("SELECT * FROM favoritas
								WHERE utilizador_id = ? AND noticia_id = ?");
		$stmt->execute(array($utilizador_id, $noticia_id));
		if($stmt->fetch())
			return true;
		return false;
	}
	
	function classificar_favorita($utilizador_id, $noticia_id){
		global $conn;
		$stmt = $conn->prepare("INSERT INTO favoritas
								VALUES (?, ?)");
		$stmt->execute(array($utilizador_id, $noticia_id));
	}
	
	function remover_favorita($utilizador_id, $noticia_id){
		global $conn;
		$stmt = $conn->prepare("DELETE FROM favoritas
								WHERE utilizador_id = ? AND noticia_id = ?");
		$stmt->execute(array($utilizador_id, $noticia_id));
	}
?>