<?php
include_once "includes/headeradmin.php";
include_once "../controllers/site_contr.php";

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastros</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<h1>AAAAA</h1>
<h1>AAAAA</h1>
<div class="container">
	<h1 class="page-header text-center">Administrador</h1>
	<div class="row">
		<div class="col-sm-12 col-sm-offset-">
			<a href="#addnew" class="btn btn-primary" data-toggle="modal"><span class="glyphicon glyphicon-plus"></span> Adicionar</a>
			<a href="Admin.php" class="btn btn-primary">Voltar</a>
			<table class="table table-bordered table-striped" style="margin-top:20px;">
				<thead>
					<th>ID</th>
					<th>Nome</th>
                    <th>Usuario</th>
					<th>Palavra-passe</th>
					<th>Acão</th>
				</thead>
				<tbody>
					<?php foreach ($admins as $Site) {?>
						
					
						    	<tr>
						    		<td><?php echo $Site['id']?></td>
						    		<td><?php echo $Site['nome']?></td>
						    		<td><?php echo $Site['usuario']?></td>
									<td><?php echo $Site['palavra_passe']?></td>
						    		<td>
						    			<a href="#editar<?php echo $Site['id'];?>" class="btn btn-success btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-edit"></span> Editar</a>
						    			<a href="#deletar<?php echo $Site['id'];?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="glyphicon glyphicon-trash"></span> Deletar</a>
						    		</td>
						    		<?php  include('editar_deletar_modelo.php'); ?>
		
						    	</tr>
					<?php }; ?>	
				</tbody>
			</table>
		</div>
	</div>
</div>
<?php include('adi_admin.php'); ?>
<script src="jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

