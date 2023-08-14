<?php
require_once('../config.php');
require_once(DBAPI);
$eventos = null;
$evento = null;
/**
 * Listagem de Usuarios
 */
function index() {
    global $eventos;
    $eventos = find_all('evento');
}
/**
 * Cadastro de Usuarios
 */
function add() {
    if (!empty($_POST['evento'])) {
$today =
    date_create('now', new DateTimeZone('America/Sao_Paulo'));
$evento = $_POST['evento'];
$evento['modificacao'] = $evento['criacao'] = $today->format("Y-m-d H:i:s");
//include "davel.php";
save('evento', $evento);
header('location: index.php');
}
}

function clear_messages() {
	unset($_SESSION['message']);
	unset($_SESSION['type']);
}
/**
 * Atualizacao/Edicao de Usuarios
 */
function edit() {
$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['evento'])) {
        $evento = $_POST['evento'];
        $evento['modificacao'] = $now->format("Y-m-d H:i:s");
		//include "daveledit.php";
        update('evento', $id, $evento);
        header('location: index.php');
    } else {
        global $evento;
        $evento = find('evento', $id);
    }
} else {
    header('location: index.php');
}
}

/**
 * Visualização de um Cliente
 */

function view($id = null) {
    global $evento;
    $evento = find('evento', $id);
}

/**
 * Exclusão de um Cliente
 */
function delete($id = null) {
    global $evento;
    $evento = remove('evento', $id);
    header('location: index.php');
}

function select($evento,$campo,$where=NULL,$order=NULL, $id=null){
	$sql = "SELECT * FROM {$evento} {$where} {$nome_evento}";
	$query = mysql_query($sql);
	echo $sql_rows = "SELECT * FROM {$evento} {$where}";
	$query_rows = mysql_query($sql_rows);
	$num = mysql_num_fields($query_rows);
	for($y = 0; $y < $num; $y++){ 
		$names[$y] = mysql_field_name($query_rows,$y);
	}
	for($k=0;$resultado = mysql_fetch_array($query);$k++){
		for($i = 0; $i < $num; $i++){ 
			$resultados[$k][$names[$i]] = $resultado[$names[$i]];
		}
	}
	mysql_close($conn);
	return $resultados; // retorna um array com os resultados da consulta
	   $result = select("evento","*",NULL,"ORDER BY id ASC"); // se quiser uma consulta apenas com o nome da tabela e os campos e ordenar os resultados
	
	//$result = select("evento","*","WHERE id = '1'",NULL); // se quiser utilizar uma condição na consulta e não ordernar o resultado

	//$result = select("evento","nome, id"); // se quiser uma consulta apenas com o nome da tabela e os campos

	for($i=0;$i<count($result);$i++){

		echo $result[$i]['id']."<br>";
	
		echo $result[$i]['nome_evento']."<br>";
	
		echo $result[$i]['descricao']."<br>";

	}
}