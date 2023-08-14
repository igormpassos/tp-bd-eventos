<?php
include "../login/area_restrita.php";
?>
<?php include(HEADER_TEMPLATE); ?>
    <center><h2>Consultar Administrador</h2></center>
		
		
		<form method="POST" action="pesquisar.php">
		<div class="form-group col-md-2">
	    <label for="campo2">Nome do Administrador:</label>
		<input type="text" name="nome" class="form-control">
		<input type="submit" value="Consultar">
		</div>
	</form>
	
	<form method="POST" action="pesquisar2.php">
	 <label for="campo2">CNPJ ou CPF do Administrador</label>
		<input type="text" name="cpf_cnpj">
		<input type="submit" value="Consultar">
	</form>
   <!-- <form method="POST" action="pesquisar.php>
        
        <hr />
        <div class="row">
 
            <div class="form-group col-md-4">
                <label for="campo2">Nome do Administrador</label>
                <input type="text" class="form-control" name="evento['nome_evento']">
            </div>
			
		</div>
		
		
			</div>
        <div id="actions" class="row">
            <div class="col-md-12">
			    <a href="pesquisar.php" class="btn btn-default">Consultar</a>
			    <a href="consulta.php" class="btn btn-default">Limpar</a>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>
	
	<form method="POST" action="pesquisar2.php>
        
        <hr />
        <div class="row">
 
            <div class="form-group col-md-4">
                <label for="campo2">CNPJ ou CPF do Administrador</label>
                <input type="text" class="form-control" name="evento['nome_evento']">
            </div>
			
		</div>
		
		
			</div>
        <div id="actions" class="row">
            <div class="col-md-12">
			    <a href="pesquisar2.php" class="btn btn-default">Consultar</a>
			    <a href="consulta.php" class="btn btn-default">Limpar</a>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form> -->
<?php include(FOOTER_TEMPLATE); ?>