<?php
	function categoria($tipo) {
		global $conn;
		$stmt = $conn->prepare('SELECT *
								FROM noticias
								WHERE categoria_id = ? AND aprovada = true
								ORDER BY data DESC
								LIMIT 15'
								);
		$stmt->execute(array($tipo));
		return $stmt->fetchAll();
	}
	function pesquisar($palavraschave) {
		global $conn;
		$stmt = $conn->prepare("SELECT *
								FROM pesquisa n_pesquisa
								WHERE documento @@ to_tsquery('portuguese', ?)
								ORDER BY ts_rank(n_pesquisa.documento, to_tsquery('portuguese', ?)) DESC
								LIMIT 15"
								);
		$stmt->execute(array($palavraschave, $palavraschave));
		return $stmt->fetchAll();
	}
?>