<?php
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "bdne";
	//Criar a conexao
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$pesquisar = $_POST['cpf_cnpj'];
	$result_cursos = "SELECT * FROM admin WHERE cpf_cnpj LIKE '%$pesquisar%'";
	$resultado_cursos = mysqli_query($conn, $result_cursos);
	
	while($rows_cursos = mysqli_fetch_array($resultado_cursos)){
		echo "Nome do Administrador: ".$rows_cursos['nome']."<br>";
		echo "CNPJ/CPF do Administrador: ".$rows_cursos['cpf_cnpj']."<br>";
		echo "Email: ".$rows_cursos['email']."<br>";
		
	}
?>