<?php
//require_once('config.php');
$servidor = "108.167.132.37";
$tex = $_GET['text'];

function custom_echo($x, $length)
{
  if(strlen($x)<=$length)
  {
    echo $x;
  }
  else
  {
    $y=substr($x,0,$length) . '...';
    echo $y;
  }
}

$usuario = "pers7054_tp";
	$senha = "@dmin123456";
	$dbname = "pers7054_tpbd";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

	$result_cursos = "SELECT * FROM evento WHERE nome_evento LIKE '%$tex%' OR data_hora_inicio LIKE '%$tex%' ";
	//echo $result_cursos;
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	
	?>
	<table class="table table-stripped table-hover">
		<thead>
			<tr>
				<th>Nome</th> 
				<th>Descrição</th>
				<th>Data inicio</th>
				<th>Data fim</th>
				<th> </th>
			 </tr>
		</thead>
		<tbody>
		<?php 
			while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
		?>
			<tr>
				<td><?php echo custom_echo($rows_cursos['nome_evento'],50); ?></td>
				<td><?php echo custom_echo($rows_cursos['descricao'],50); ?></td>
				<td><?php echo $rows_cursos['data_hora_inicio']; ?></td>
				<td><?php echo $rows_cursos['data_hora_fim']; ?></td>
				<td><button class="btn btn-md btn-success" onclick="window.location = 'eventos/view.php?id=<?php echo $rows_cursos['id'] ?>'"> <i class="fa fa-eye"></i> </button></td>
			
			</tr>
	
		<?php 
			}
		
		?>
	
	
		</tbody>
	
</table>
	
	<?php
	

	
	
	

?>

