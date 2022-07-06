<?php
	$db_username = 'root';
	$db_password = '';
	$conn = new PDO( 'mysql:host=localhost;dbname=site_db', $db_username, $db_password );
	if(!$conn){
		die("ERRO: Falha na Conexao");
	}
?>