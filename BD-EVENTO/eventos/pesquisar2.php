<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "bdne";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$pesquisar = $_POST['data_hora_inicio'];
	$result_cursos = "SELECT * FROM evento WHERE data_hora_inicio LIKE '%$pesquisar%'";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	
	while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
		echo "Nome do evento: ".$rows_cursos['nome_evento']."<br>";
		echo "Descrição do evento: ".$rows_cursos['descricao']."<br>";
		echo "Iníco do evento: ".$rows_cursos['data_hora_inicio']."<br>";
		echo "Fim do evento: ".$rows_cursos['data_hora_fim']."<br>";
	}
?>