<?php 
require_once '../Controllers/Site_contr.php';
//require_once '../models/Site_model.php';
//require_once '../config/Aluno_config.php';
?>
<!-- Editar -->
<div class="modal fade" id="editar<?php echo $Site['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Editar Aluno</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="cadastro.php?editar_id=<?php echo $Site['id'];
			            echo htmlspecialchars($_SERVER['PHP_SELF'])?>">
			<div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nome:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nome" value="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Usuario</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="idade" value="">
					</div>
                </div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="classe" value="">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Palavra-passe</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="turma" value="">
					</div>
				</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="actualizar" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Actualizar</button>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Deletar -->
<div class="modal fade" id="deletar<?php echo $Site['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Deletar Aluno</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Você tem certeza que  quer deletar o aluno</p>
				<h2 class="text-center"><?php echo $Site['nome']. '?'; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <a href="cadastro.php?deletar_id=<?php echo $Site['id'];?>" name="apagar" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Sim</a>
            </div>

        </div>
    </div>
</div>