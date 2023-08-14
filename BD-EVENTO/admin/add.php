<?php
include "../login/area_restrita.php";
require_once('functions.php');

add();
?>
<?php include(HEADER_TEMPLATE);?>
    <h2>Novo Administrador</h2>
    <form action="add.php" method="post">
        <!-- area de campos do form -->
        <hr />
        <div class="row">
            <div class="form-group col-md-7">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="admin['nome']">
            </div>
			<div class="form-group col-md-4">
                <label for="name">CPF-CNPJ</label>
                <input type="text" id="cpfcnpj" class="form-control cpfcnpj" name="admin['cpf_cnpj']">
            </div>
            
        </div>
        <div class="row">
            <div class="form-group col-md-5">
                <label for="campo1">Email</label>
                <input type="email" class="form-control" name="admin['email']">
            </div>
            <div class="form-group col-md-3">
                <label for="campo2">Senha</label>
                <input type="password" class="form-control" name="admin['senha']">
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