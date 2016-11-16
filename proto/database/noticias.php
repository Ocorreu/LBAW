<?php
	function homepage() {
		global $conn;
		$stmt = $conn->prepare('SELECT *
								FROM noticias
								WHERE aprovada = true
								ORDER BY data DESC
								LIMIT 15');
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	function obter_noticia($conn, $noticia_id) {
		$stmt = $conn->prepare('SELECT *
								FROM noticias
								WHERE noticia_id = ?');
		$stmt->execute(array($noticia_id));
		return $stmt->fetch();
	}
	
	function obter_dia($conn, $noticia_id) {
		$stmt = $conn->prepare('SELECT date(data)
								FROM noticias
								WHERE noticia_id = ?');
		$stmt->execute(array($noticia_id));
		return $stmt->fetch();
	}
	
	function obter_hora($conn, $noticia_id) {
		$stmt = $conn->prepare("SELECT extract(hour from data) AS hora, extract(minute from data) AS minutos
								FROM noticias
								WHERE noticia_id = ?");
		$stmt->execute(array($noticia_id));
		return $stmt->fetch();
	}
	
	function criar_noticia($titulo, $subtexto, $texto, $categoria, $autor) {
		global $conn;
		$stmt = $conn->prepare('INSERT INTO noticias
								VALUES (default, ?, ?, current_timestamp, ?, ?, ?, default)
								RETURNING noticia_id');
		$stmt->execute(array($autor, $categoria, $subtexto, $texto, $titulo));
		$noticia = $stmt->fetch();
		return $noticia['noticia_id'];
	}
	
	function editar_noticia($noticia_id, $titulo, $subtexto, $texto, $categoria, $autor) {
		global $conn;
		$stmt = $conn->prepare('UPDATE noticias
								SET autor_id = ?, categoria_id = ?, data = current_timestamp, subtexto = ?, texto = ?, titulo = ?, aprovada = default
								WHERE noticia_id = ?');
		$stmt->execute(array($autor, $categoria, $subtexto, $texto, $titulo, $noticia_id));
	}
	
	function apagar_noticia($noticia_id) {
		global $conn;
		$stmt = $conn->prepare('DELETE FROM noticias
								WHERE noticia_id = ?');
		$stmt->execute(array($noticia_id));
	}
	
	function inserir_tag($conn, $palavrachave,$noticia_id) {
		$stmt = $conn->prepare('SELECT palavrachave_id
								FROM palavraschave
								WHERE palavra = ?');
		$stmt->execute(array($palavrachave));
		if (!$stmt->fetch()) {
			$stmt = $conn->prepare('INSERT INTO palavraschave
									VALUES (default, ?)
									RETURNING palavrachave_id');
			$stmt->execute(array($palavrachave));
			$palavra_id = $stmt->fetch();
			$stmt = $conn->prepare('INSERT INTO tags
									VALUES (?, ?)');
			$stmt->execute(array($palavra_id['palavrachave_id'], $noticia_id));
		}
	}
	
	function aprovar_noticia($noticia_id) {
		global $conn;
		$stmt = $conn->prepare('UPDATE noticias
								SET aprovada = true
								WHERE noticia_id = ?');
		$stmt->execute(array($noticia_id));
	}
	
	function autor_noticia($conn, $utilizador_id) {
		$stmt = $conn->prepare('SELECT nome, apelido
								FROM utilizadores
								WHERE utilizador_id = ?');
		$stmt->execute(array($utilizador_id));
		return $stmt->fetch();
	}
?>