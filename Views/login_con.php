<?php
//	session_start();
	
	//require_once 'conn.php';

	//require_once "../Config/config.php";
	require_once "../controllers/Site_contr.php";

	if(isset($_POST['entrar'])){
		if($_POST['usuario'] != "" || $_POST['palavra_passe'] != ""){
			$usuario = $_POST['usuario'];
			$palavra_passe = $_POST['palavra_passe'];
			$sql = "SELECT * FROM `tblogin` WHERE `usuario`=? AND `palavra_passe`=? ";
			$query = $ConexaoBD->prepare($sql);
			$query->execute(array($usuario,$palavra_passe));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['usuario'] = $fetch['id'];
				header("location:shop.php");
			} else{
				echo "
				<script>alert('Usuario ou palavra_passe invalido')</script>
				<script>window.location = 'login.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Porfavor Complete os espacos em falta!')</script>
				<script>window.location = 'login.php'</script>
			";
		}
	}


	if(isset($_POST['entra'])){
		if($_POST['usuario'] != "" || $_POST['palavra_passe'] != ""){
			$usuario = $_POST['usuario'];
			$palavra_passe = $_POST['palavra_passe'];
			$sql = "SELECT * FROM `tbladmin` WHERE `usuario`=? AND `palavra_passe`=? ";
			$query = $ConexaoBD->prepare($sql);
			$query->execute(array($usuario,$palavra_passe));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['usuario'] = $fetch['id'];
				header("location:admin.php");
			} else{
				echo "
				<script>alert('Usuario ou palavra_passe invalido')</script>
				<script>window.location = 'login.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Porfavor Complete os espacos em falta!')</script>
				<script>window.location = 'login.php'</script>
			";
		}
	}
?>