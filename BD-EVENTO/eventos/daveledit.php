<?php
//include_once("conexao.php");
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$dbname = "bdne";
	
	//Criar a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
	
	$consulta= "SELECT * FROM usuario";
	$resultado_consulta = mysqli_query($conn, $consulta);
	while($row_consulta = mysqli_fetch_assoc($resultado_consulta)) {
		
	
	
		$para = $row_consulta['email'];/*email q irá receber as infos*/

		mail( $para , "Evento Alterado: New Events", "Um de nossos evento foi alterado. entre em nosso app para visualizar!" );
 
	}