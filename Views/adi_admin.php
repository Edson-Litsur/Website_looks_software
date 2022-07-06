<?php require_once '../Controllers/Site_contr.php';?>

<!-- Add New -->
<div class="modal fade" id="addnew" <?php echo $Site['id']; ?> tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Adicionar Novo Administrador</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST" >
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Nome:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="nome">
					</div>

				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Usuario:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="usuario">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label" style="position:relative; top:7px;">Palavra-passe:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="palavra_passe">
					</div>
				</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancelar</button>
                <button type="submit" name="salvar" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Salvar</button>
			</form>
            </div>

        </div>
    </div>
</div>