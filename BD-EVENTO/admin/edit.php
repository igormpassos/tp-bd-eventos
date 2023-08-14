<?php
include "../login/area_restrita.php";
require_once('functions.php');
edit();
?>
<?php include(HEADER_TEMPLATE); ?>


    <h2>Atualizar Administrador</h2>
	<form action="edit.php?id=<?php echo $admin['id']; ?>" method="post">
    <hr />
    <div class="row">
        <div class="form-group col-md-7">
            <label for="name">Nome</label>
            <input type="text" class="form-control" name="admin['nome']" value="<?php echo $admin['nome']; ?>">
        </div>
		<div class="form-group col-md-4">
                <label for="name">CPF-CNPJ</label>
                <input type="text" class="form-control" name="admin['cpf_cnpj']" value="<?php echo $admin['cpf_cnpj']; ?>">
            </div>
        
		
		<div class="form-group col-md-2">
            <label for="senha">Senha</label>
            <input type="password" id="password" class="form-control" name="admin['senha']" value="<?php echo $admin['senha']; ?>">
			
        </div>
	
		
		
		<div class="form-group col-md-2">
            <label for="campo3">E-mail</label>
            <input type="email" class="form-control" name="admin['email']" value="<?php echo $admin['email']; ?>">
        </div>
		
		
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