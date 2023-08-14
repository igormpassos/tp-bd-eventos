<?php
include "../login/area_restrita.php";
require_once('functions.php');
view($_GET['id']);
?>
<?php include(HEADER_TEMPLATE); ?>
    <h2>Administrador<?php echo $admins['id']; ?></h2>
    <hr>
<?php if (!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?>"><?php echo $_SESSION['message']; ?></div>
<?php endif; ?>
    <dl class="dl-horizontal">
        <dt>Nome:</dt>
        <dd><?php echo $admin['nome']; ?></dd>
		<dt>CPF/CNPJ:</dt>
        <dd><?php echo $admin['cpf_cnpj']; ?></dd>
    </dl>
	<dl class="dl-horizontal">
        <dt>Email:</dt>
        <dd><?php echo $admin['email']; ?></dd>
        <dt>Senha:</dt>
        <dd><?php echo $admin['senha']; ?></dd>
    </dl>
    
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="consulta.php" class="btn btn-default">Voltar</a>
        </div>
    </div>
<?php include(FOOTER_TEMPLATE); ?>