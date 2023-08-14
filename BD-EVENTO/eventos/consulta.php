<?php
include "../login/area_restrita.php";
?>
<?php include(HEADER_TEMPLATE); ?>
    <h2>Consultar Eventos</h2>
	
	<form method="POST" action="pesquisar.php">
	    <label for="campo2">Nome do Evento</label>
		<input type="text" name="nome_evento">
		<input type="submit" value="Consultar">
	</form>
	
	<form method="POST" action="pesquisar2.php">
	 <label for="campo2">Data do Evento</label>
		<input type="text" name="data_hora_inicio">
		<input type="submit" value="Consultar">
	</form>
		
    <!--<form method="post" action="pesquisar.php>
        
        <div class="row">
 
            <div class="form-group col-md-4">
                <label for="campo2">Nome do Evento</label>
                <input type="text" name="nome_evento">
            </div>
			
		</div>
		
		
			</div>
        <div id="actions" class="row">
            <div class="col-md-12">
				<input type="submit" class="btn btn-default" value="Consultar">
			    <a href="consulta.php" class="btn btn-default">Limpar</a>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form> -->
	
	<!-- <form method="POST" action="pesquisar2.php>
        
        <hr />
        <div class="row">
 
            <div class="form-group col-md-4">
                <label for="campo2">Data do Evento</label>
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