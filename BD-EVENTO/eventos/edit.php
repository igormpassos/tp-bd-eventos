<?php
include "../login/area_restrita.php";
require_once('functions.php');
edit();
?>
<?php include(HEADER_TEMPLATE); ?>
    <h2>Atualizar eventos</h2>
	<h2>* Campos Obrigatórios</h2>
<form action="edit.php?id=<?php echo $evento['id']; ?>" method="post">
    <hr />
    <div class="row">
        <div class="form-group col-md-4">
            <label for="name">Nome do Evento*</label>
            <input type="text" class="form-control" name="evento['nome_evento']" value="<?php echo $evento['nome_evento']; ?>" required>
        </div>
		<div class="form-group col-md-8">
                <label for="campo2">Descrição*</label>
                <input type="text" class="form-control" name="evento['descricao']" value="<?php echo $evento['descricao']; ?>" required>
            </div>
			<div class="form-group col-md-8">
                <label for="campo2">Programação*</label>
                <textarea class="textarea" id="programacao" name="evento['programacao']" required><?php echo $evento['programacao']; ?></textarea>
            </div>
			<div class="form-group col-md-8">
                <label for="campo2">Palestrantes*</label>
                <input type="text" class="form-control" name="evento['palestrantes']" value="<?php echo $evento['palestrantes']; ?>" required>
            </div>
			<div class="form-group col-md-8">
                <label for="campo2">Parceiros*</label>
               
				<textarea class="textarea" id="parceiros" name="evento['parceiros']" required><?php echo $evento['parceiros']; ?></textarea>
            </div>
			</div>
			
			<div class="row">
			<div class="form-group col-md-5">
                <label for="campo4">Link para Inscrição do evento*</label>
                <input type="text" class="form-control" id="link" name="evento['link']" value="<?php echo $evento['link']; ?>" required>
            </div>
		</div>
		
			<div class="row">
        <div class="form-group col-md-3">
            <label for="campo2">Data/Hora do inicio*</label>
            <input type="text" class="form-control" name="evento['data_hora_inicio']" value="<?php echo $evento['data_hora_inicio']; ?>" required>
        </div>
        <div class="form-group col-md-3">
            <label for="campo3">Data/Hora do fim*</label>
            <input type="text" class="form-control" name="evento['data_hora_fim']" value="<?php echo $evento['data_hora_fim']; ?>" required>
        </div>
    </div>
	
    <div class="row">
    <div class="form-group col-md-2">
                <label for="campo4">CEP*</label>
                <input type="text" class="form-control" id="cep" name="evento['cep']" value="<?php echo $evento['cep']; ?>" required>
            </div>
            <div class="form-group col-md-5">
                <label for="campo4">Endereço*</label>
                <input type="text" class="form-control" id="rua" name="evento['logradouro']" value="<?php echo $evento['logradouro']; ?>" required>
            </div>
			 <div class="form-group col-md-5">
                <label for="campo5">Bairro*</label>
                <input type="text" class="form-control" id="bairro" name="evento['bairro']" value="<?php echo $evento['bairro']; ?>" required>
            </div>
			 <div class="form-group col-md-2">
                <label for="campo6">Número*</label>
                <input type="text" class="form-control" name="evento['numero']" value="<?php echo $evento['numero']; ?>" required>
            </div>
			 <div class="form-group col-md-3">
                <label for="campo7">Cidade*</label>
                <input type="text" class="form-control" id="cidade" name="evento['cidade']" value="<?php echo $evento['cidade']; ?>" required>
            </div>
			 <div class="form-group col-md-2">
                <label for="campo8">UF*</label>
                <input type="text" class="form-control" id="estado" name="evento['UF']" value="<?php echo $evento['UF']; ?>" required>
            </div>
			<div class="form-group col-md-5">
                <label for="campo8">Link Google Maps*</label>
                <!--<input type="text" class="form-control" name="evento['maps']" value="<?php echo $evento['maps']; ?>">-->
                <input type="text" class="form-control"id="maps" name="evento['maps']" values="<?php echo $evento['maps']; ?>" required>
            </div>
			<!--<div class="form-group col-md-2">
                <label for="campo8">Imagem do Mapa do Local</label>
                <input type="file" class="form-control" name="evento['mapa_img']" value="<?php echo $evento['mapa_img']; ?>" required>
            </div>-->
	</div>
	
	<div class="row">
	<div class="form-group col-md-2">
		<label for="campo2">Telefone</label>
		<input type="text" class="form-control" name="evento['telefone']" value="<?php echo $evento['telefone']; ?>">
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