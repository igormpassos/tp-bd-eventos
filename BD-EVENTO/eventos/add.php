<?php
include "../login/area_restrita.php";
require_once('functions.php');

add();
?>
<?php include(HEADER_TEMPLATE); ?>
    <h2>Novos Eventos</h2>
	<h2>* Campos Obrigatórios</h2>
    <form action="add.php" method="post">
        
        <hr />
        <div class="row">
 
            <div class="form-group col-md-4">
                <label for="campo2">Nome do Evento*</label>
                <input type="text" class="form-control" name="evento['nome_evento']" required>
            </div>
			
			<div class="form-group col-md-3">
                <label for="campo3">Data/Hora Inicio</label>
                <input type="datetime-local" class="form-control" name="evento['data_hora_inicio']" required>
            </div>
			
			<div class="form-group col-md-3">
                <label for="campo3">Data/Hora Fim</label>
                <input type="datetime-local" class="form-control" name="evento['data_hora_fim']" required>
            </div>
			
		</div>
		
		<div class="row">
			<div class="form-group col-md-8">
                <label for="campo2">Descrição*</label>
                <input type="text" class="form-control" name="evento['descricao']" required>
				
            </div>
		</div>
			
		<div class="row">
			<div class="form-group col-md-8">
                <label for="campo2">Programação*</label>
                <!--<input type="text" class="form-control" id="area" name="evento['programacao']">-->
				<textarea class="textarea" id="programacao" name="evento['programacao']" required> </textarea>
			</div>
			<div class="form-group col-md-8">
                <label for="campo2">Palestrantes*</label>
                <input type="text" class="form-control" name="evento['palestrantes']" required>
            </div>
			<div class="form-group col-md-8">
                <label for="campo2">Parceiros*</label>
                <!--<input type="text" class="form-control" name="evento['parceiros']">-->
				<textarea class="textarea" id="parceiros" name="evento['parceiros']" required> </textarea>
            </div>
		</div>
   	
		
		<div class="row">
			<div class="form-group col-md-5">
                <label for="campo4">Link para Inscrição do evento*</label>
                <input type="text" class="form-control" id="link" name="evento['link']" required>
            </div>
		</div>
			
		<div class="row">
			<div class="form-group col-md-2">
                <label for="campo4">CEP*</label>
                <input type="text" class="form-control" id="cep" name="evento['cep']" maxlength="8" required>
            </div>
            <div class="form-group col-md-5">
                <label for="campo4">Endereço*</label>
                <input type="text" class="form-control" id="rua" name="evento['logradouro']" required>
            </div>
			 <div class="form-group col-md-5">
                <label for="campo5">Bairro*</label>
                <input type="text" class="form-control" id="bairro" name="evento['bairro']" required>
            </div>
			 <div class="form-group col-md-1">
                <label for="campo6">Número*</label>
                <input type="text" class="form-control" name="evento['numero']" required>
            </div>
			 <div class="form-group col-md-3">
                <label for="campo7">Cidade*</label>
                <input type="text" class="form-control" id="cidade" name="evento['cidade']"required>
            </div>
			 <div class="form-group col-md-1">
                <label for="campo8">UF*</label>
                <input type="text" class="form-control" id="estado" name="evento['UF']" maxlength="2" required>
            </div>
		</div>
			
		<div class="row">
			<div class="form-group col-md-4">
                <label for="campo8">Link Google Maps*</label>
                <input type="text" class="form-control" name="evento['maps']" required>
            </div>
		
			 <div class="form-group col-md-2">
                <label for="campo9">Telefone</label>
                <input type="text" class="form-control" name="evento['telefone']" maxlength="13">
            </div>
		</div>
			
		<div class="row">
			<div class="form-group col-md-2">
                <label for="campo9">Administrador*</label>
				<input type="text" readonly="true" class="form-control" value="<?php echo $_SESSION['id'] ?>"  name="evento['admin_id']" required>
                   

            </div>
			
		</div>
        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>
<?php include(FOOTER_TEMPLATE); ?>