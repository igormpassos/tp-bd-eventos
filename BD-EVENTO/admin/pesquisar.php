<?php 
include "../login/area_restrita.php";
require_once('../config.php');
require_once(DBAPI);
include(HEADER_TEMPLATE); ?>
   <header>
        <div class="row">
            <div class="col-sm-6">
                <h2>Consultar Administradores</h2>
            </div>
            <div class="col-sm-6 text-right h2">
                <a class="btn btn-default" href="index.php"><i class="fa fa-refresh"></i> Atualizar</a>
				<a class="btn btn-success" href="consulta.php"><i class="fa fa-search"></i> Consultar outro administrador</a>
            </div>
        </div>
    </header>
	<hr>
	<table class="table table-hover">
        <thead>
        <tr>
            <th>Nome Administrador</th>
            <th>CPF/CNPJ</th>
            <th>Email</th>
        </tr>
        </thead>
        <body>
				<?php $conn = open_database();
				$pesquisar = $_POST['nome'];
				$result_cursos = "SELECT * FROM admin WHERE nome LIKE '%$pesquisar%'";
				$resultado_cursos = mysqli_query($conn, $result_cursos);
				while($rows_cursos = mysqli_fetch_array($resultado_cursos)){ ?>
				<tr>
                    <td><?php echo $rows_cursos['nome'] ?></td>
                    <td><?php echo $rows_cursos['cpf_cnpj'] ?></td>
                    <td><?php echo $rows_cursos['email'] ?></td> 
					<td class="actions text-right">
                        <a href="viewc.php?id=<?php echo $rows_cursos['id']; ?>" class="btn btn-sm btn-success">
                            <i class="fa fa-eye"></i> Visualizar</a>
					</td>
                 </tr>

				 <?php }?>
           
       </body>
    </table>


 