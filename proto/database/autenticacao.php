<?php
  
  function criar_leitor($nome, $apelido, $password, $email){
	global $conn;
    try {
		$conn->beginTransaction();
		$stmt = $conn->prepare('INSERT INTO utilizadores(nome, apelido, password, email)
								VALUES (?, ?, ?, ?)
								RETURNING utilizador_id');
		$stmt->execute(array($nome, $apelido, sha1($password), $email));
		$utilizador = $stmt->fetch();
		$stmt = $conn->prepare('INSERT INTO leitoresautenticados(leitorautenticado_id)
								VALUES (?)');
		$stmt->execute(array($utilizador['utilizador_id']));
		$conn->commit();
	} catch (Exception $e) {
		$conn->rollBack();
		return null;
	}
	return $utilizador['utilizador_id'];
  }
  
  function criar_jornalista($nome, $apelido, $password, $email){
	global $conn;
	try {
		$conn->beginTransaction();
		$stmt = $conn->prepare('INSERT INTO utilizadores(nome, apelido, password, email)
								VALUES (?, ?, ?, ?)
								RETURNING utilizador_id');
		$stmt->execute(array($nome, $apelido, sha1($password), $email));
		$utilizador = $stmt->fetch();
		$stmt = $conn->prepare('INSERT INTO autores(autor_id, activo)
								VALUES (?, default)');
		$stmt->execute(array($utilizador['utilizador_id']));
		$stmt = $conn->prepare('INSERT INTO jornalistas(jornalista_id)
								VALUES (?)');
		$stmt->execute(array($utilizador['utilizador_id']));
		$conn->commit();
	} catch (Exception $e) {
		$conn->rollBack();
		return null;
	}
	return $utilizador['utilizador_id'];
  }
  
  function criar_editor($nome, $apelido, $password, $email){
	global $conn;
	try {
		$conn->beginTransaction();
		$stmt = $conn->prepare('INSERT INTO utilizadores(nome, apelido, password, email)
								VALUES (?, ?, ?, ?)
								RETURNING utilizador_id');
		$stmt->execute(array($nome, $apelido, sha1($password), $email));
		$utilizador = $stmt->fetch();
		$stmt = $conn->prepare('INSERT INTO autores(autor_id, activo)
								VALUES (?, default)');
		$stmt->execute(array($utilizador['utilizador_id']));
		$stmt = $conn->prepare('INSERT INTO editores(editor_id)
								VALUES (?)');
		$stmt->execute(array($utilizador['utilizador_id']));
		$conn->commit();
	} catch (Exception $e) {
		$conn->rollBack();
		return null;
	}
	return $utilizador['utilizador_id'];
  }	
  
  function verificar_login($email, $password) {
    global $conn;
    $stmt = $conn->prepare('SELECT utilizador_id, email
                            FROM utilizadores
                            WHERE email = ? AND password = ?');
    $stmt->execute(array($email, sha1($password)));
    return $stmt->fetch();
  }
?>
