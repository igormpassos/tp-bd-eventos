<?php
include "../login/area_restrita.php";
require_once('functions.php');
edit();
?>
<?php include(HEADER_TEMPLATE); ?>

<h2>Atualizar Cliente</h2>
<form action="edit.php?id=<?php echo $admin['id']; ?>" method="post">
<hr />
    <!-- area de campos do form -->
    <hr />
    <div class="row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="text" class="form-control" name="admin['email']" value = "<?php echo $admin['email']; ?>" maxlength="100" required = "true">
        </div>
        <div class="form-group col-md-6">
            <label for="nome">Nome</label>
            <input type="text" class="form-control" name="admin['nome']" value = "<?php echo $admin['nome']; ?>" maxlength="200" required = "true">
        </div>
    </div>
    <div id="actions" class="row">
        <div class="col-md-12">
            <button type="submit" class="btn btn-success">Salvar</button>
            <a href="index.php" class="btn btn-danger">Cancelar</a>
            <a href="novaSenha.php?id=<?php echo $admin['id']; ?>" class="btn btn-warning">Esqueci Minha Senha</a>
        </div>
    </div>
</form>

<?php include(FOOTER_TEMPLATE); ?>