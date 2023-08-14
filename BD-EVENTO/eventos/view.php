<?php
include "../login/area_restrita.php";
require_once('functions.php');
view($_GET['id']);

?>
<?php include(HEADER_TEMPLATE); ?>
    <h2>Evento <?php echo $evento['id']; ?></h2>
    <hr>
<?php if (!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>
    <dl class="dl-horizontal">
        <dt>Nome:</dt>
        <dd><?php echo $evento['nome_evento']; ?></dd><br>
		<dt>Descrição:</dt>
        <dd><?php echo $evento['descricao']; ?></dd><br><br>
		<dt>Programação:</dt>
        <dd><?php echo $evento['programacao']; ?></dd><br>
		<dt>Palestrantes:</dt>
        <dd><?php echo $evento['palestrantes']; ?></dd><br><br>
		<dt>Parceiros:</dt>
        <dd><?php echo $evento['parceiros']; ?></dd><br>
		<dt>Link para incrição:</dt>
        <dd><?php echo $evento['link']; ?></dd><br>
        <dt>Data/Hora de Inicio:</dt>
        <dd><?php echo $evento['data_hora_inicio']; ?></dd>
        <dt>Data/Hora do Fim:</dt>
        <dd><?php echo $evento['data_hora_fim']; ?></dd>
    </dl>
	<dl class="dl-horizontal">
        <dt>Endereço:</dt>
        <dd><?php echo $evento['logradouro']; ?></dd>
        <dt>Bairro:</dt>
        <dd><?php echo $evento['bairro']; ?></dd>
        <dt>Numero:</dt>
        <dd><?php echo $evento['numero']; ?></dd>
    
        <dt>Cidade:</dt>
        <dd><?php echo $evento['cidade']; ?></dd>
		<dt>UF:</dt>
        <dd><?php echo $evento['UF']; ?></dd>
        <dt>Telefone:</dt>
        <dd><?php echo $evento['telefone']; ?></dd><br>
		<dt>Google Maps:</dt>
        <dd><?php echo $evento['maps']; ?></dd>
		<!--<dt>Mapa do Local:</dt>
        <dd><?php echo $evento['mapa_img']; ?></dd>
    </dl>-->
	<dl class="dl-horizontal">
        <dt>Data de Criação:</dt>
        <dd><?php echo $evento['criacao']; ?></dd>
		<dt>Data de Atualização:</dt>
        <dd><?php echo $evento['modificacao']; ?></dd>
    </dl>
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="edit.php?id=<?php echo $evento['id']; ?>" class="btn btn-primary">Editar</a>
            <a href="index.php" class="btn btn-default">Voltar</a>
        </div>
    </div>
<?php include(FOOTER_TEMPLATE); ?>