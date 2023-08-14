<?php
include "../login/area_restrita.php";
require_once('functions.php');
index();
header("Content-Type: text/html; charset=utf8");
?>
<?php include(HEADER_TEMPLATE); ?>
    <header>
        <div class="row">
            <div class="col-sm-6">
                <h2>Administradores</h2>
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-primary" href="add.php"><i class="fa fa-plus"></i> Novo Administrador</a>
                <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
            </div>
        </div>
    </header>
<?php if (!empty($_SESSION['message'])) : ?>
    <div class="alert alert-<?php echo $_SESSION['type']; ?> alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <?php echo $_SESSION['message']; ?>
    </div>
	    <?php clear_messages(); ?>
<?php endif; ?>
    <hr>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th width="30%">Nome</th>
            <th>Email</th>
        </tr>
        </thead>
        <body>
        <?php if ($admins) : ?>
            <?php foreach ($admins as $admin) : ?>
                <tr>
                    <td><?php echo $admin['id']; ?></td>
                    <td><?php echo $admin['nome']; ?></td>
                    <td><?php echo $admin['email']; ?></td>
                    <td class="actions text-right">
                        <a href="view.php?id=<?php echo $admin['id']; ?>" class="btn btn-sm btn-success">
                            <i class="fa fa-eye"></i> Visualizar</a>
                        <a href="edit.php?id=<?php echo $admin['id']; ?>" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil"></i> Editar</a>
                        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
                           data-target="#delete-modal" data-customer="<?php echo $admin['id']; ?>">
                            <i class="fa fa-trash"></i> Excluir
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="6">Nenhum registro encontrado.</td>
            </tr>
        <?php endif; ?>
        </body>
    </table>

<?php include('modal.php'); ?>
<?php include(FOOTER_TEMPLATE); ?>