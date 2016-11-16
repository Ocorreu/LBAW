<?php
	
	function obter_utilizador($utilizador_id) {
		global $conn;
		$stmt = $conn->prepare('SELECT *
								FROM utilizadores
								WHERE utilizador_id = ?');
		$stmt->execute(array($utilizador_id));
		return $stmt->fetch();
	}
	
	function obter_autor($utilizador_id) {
		global $conn;
		$stmt = $conn->prepare('SELECT *
								FROM autores
								WHERE autor_id = ?');
		$stmt->execute(array($utilizador_id));
		return $stmt->fetch();
	}
	
	function verifica_editor($utilizador_id) {
		global $conn;
		$stmt = $conn->prepare('SELECT *
								FROM editores
								WHERE editor_id = ?');
		$stmt->execute(array($utilizador_id));
		if($stmt->fetch())
			return true;
		return false;
	}
	
	function verifica_jornalista($utilizador_id) {
		global $conn;
		$stmt = $conn->prepare('SELECT *
								FROM jornalistas
								WHERE jornalista_id = ?');
		$stmt->execute(array($utilizador_id));
		if($stmt->fetch())
			return true;
		return false;
	}
	
	function verifica_admin($utilizador_id) {
		global $conn;
		$stmt = $conn->prepare('SELECT *
								FROM administradores
								WHERE administrador_id = ?');
		$stmt->execute(array($utilizador_id));
		if($stmt->fetch())
			return true;	
		return false;
	}
	
	function verparaaprovacao() {
		global $conn;
		$stmt = $conn->prepare('SELECT *
								FROM noticias
								JOIN utilizadores
								ON utilizadores.utilizador_id = noticias.autor_id
								WHERE aprovada = false
								ORDER BY data ASC');
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	function noticias_autor($utilizador_id) {
		global $conn;
		$stmt = $conn->prepare('SELECT *
								FROM noticias
								WHERE aprovada = true AND autor_id = ?
								ORDER BY data DESC
								LIMIT 4');
								
		$stmt->execute(array($utilizador_id));
		return $stmt->fetchAll();
	}
	
	function editar_utilizador($conn, $utilizador_id, $password, $email) {
		$stmt = $conn->prepare('UPDATE utilizadores
								SET password = ?, email = ?
								WHERE utilizador_id = ?');
		$stmt->execute(array(sha1($password), $email, $utilizador_id));
	}
	
	function apagar_utilizador($utilizador_id) {
		global $conn;
		$stmt = $conn->prepare('DELETE FROM utilizadores
								WHERE utilizador_id = ?');
		$stmt->execute(array($utilizador_id));
	}
	
	function vernaoactivos() {
		global $conn;
		$stmt = $conn->prepare('SELECT *
								FROM autores
								JOIN utilizadores
								ON utilizadores.utilizador_id = autores.autor_id
								WHERE activo = false');
		$stmt->execute();
		return $stmt->fetchAll();
	}
	
	function activar_utilizador($utilizador_id) {
		global $conn;
		$stmt = $conn->prepare('UPDATE autores
								SET activo = ?
								WHERE autor_id = ?');
		$stmt->execute(array(true, $utilizador_id));
	}
	
	function promover_autor($utilizador_id) {
		global $conn;
		try {
		$conn->beginTransaction();
		$stmt = $conn->prepare('DELETE FROM autores
								WHERE autor_id = ?');
		$stmt->execute(array($utilizador_id));
		$stmt = $conn->prepare('INSERT INTO administradores
								VALUES (?)');
		$stmt->execute(array($utilizador_id));
		$conn->commit();
		} catch (Exception $e) {
			$conn->rollBack();
		}
	}
	
	function leitor_jornalista($conn, $utilizador_id) {
		
		$stmt = $conn->prepare('DELETE FROM leitoresautenticados
								WHERE leitorautenticado_id = ?');
		$stmt->execute(array($utilizador_id));
		$stmt = $conn->prepare('INSERT INTO autores
								VALUES (?)');
		$stmt->execute(array($utilizador_id));
		$stmt = $conn->prepare('INSERT INTO jornalistas
								VALUES (?)');
		$stmt->execute(array($utilizador_id));
		
	}
	
	function leitor_editor($conn, $utilizador_id) {
		
		$stmt = $conn->prepare('DELETE FROM leitoresautenticados
								WHERE leitorautenticado_id = ?');
		$stmt->execute(array($utilizador_id));
		$stmt = $conn->prepare('INSERT INTO autores
								VALUES (?)');
		$stmt->execute(array($utilizador_id));
		$stmt = $conn->prepare('INSERT INTO editores
								VALUES (?)');
		$stmt->execute(array($utilizador_id));
		
	}
	
	function jornalista_editor($conn, $utilizador_id) {
		
		$stmt = $conn->prepare('DELETE FROM jornalistas
								WHERE jornalista_id = ?');
		$stmt->execute(array($utilizador_id));
		$stmt = $conn->prepare('INSERT INTO editores
								VALUES (?)');
		$stmt->execute(array($utilizador_id));
		$stmt = $conn->prepare('UPDATE autores
								SET activo = default
								WHERE autor_id = ?');
		$stmt->execute(array($utilizador_id));
		
	}
		
	
?>
