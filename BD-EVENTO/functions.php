<?php
require_once('config.php');
require_once(DBAPI);
$eventos = null;
$evento = null;
$admins = null;
$admin = null;
/**
 * Listagem de Usuarios
 */

function indexa() {
  global $admins;
  $admins = find_all('admin');
}

function indexordenada() {
  global $eventos;
  $database = open_database();
  $sql = "SELECT * FROM evento ORDER BY criacao DESC";
  $res = $database->query($sql);
  $eventos = $res->fetch_all(MYSQLI_ASSOC);
}

function indexuser() {
  global $eventos;
  $database = open_database();
  $sql = "SELECT E.nome_evento, E.id FROM evento as E JOIN admin as A ON E.admin_id = A.id WHERE E.admin_id = '" . $_SESSION['id'] . "' ";
  $res = $database->query($sql);
  $eventos = $res->fetch_all(MYSQLI_ASSOC);
}

function indexproximos() {
  global $eventos;
  $database = open_database();
  $sql = "SELECT * FROM evento WHERE data_hora_inicio > NOW()";
  $res = $database->query($sql);
  $eventos = $res->fetch_all(MYSQLI_ASSOC);
}
function indexacontecendo() {
  global $eventos;
  $database = open_database();
  $sql = "SELECT * FROM evento WHERE (NOW() BETWEEN data_hora_inicio AND data_hora_fim)";
  $res = $database->query($sql);
  $eventos = $res->fetch_all(MYSQLI_ASSOC);
}

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

  function time_ago($time) {
   $diff = time() - $time;
   $seconds = $diff;
   $minutes = round($diff / 60);
   $hours = round($diff / 3600);
   $days = round($diff / 86400);
   $weeks = round($diff / 604800);
   $months = round($diff / 2419200);
   $years = round($diff / 29030400);

   if ($seconds <= 60) echo"$seconds segundos atras";
   else if ($minutes <= 60) echo $minutes==1 ?'um minuto atras':$minutes.' minutos atras';
   else if ($hours <= 24) echo $hours==1 ?'uma hora atras':$hours.' horas atras';
   else if ($days <= 7) echo $days==1 ?'um dia atras':$days.' dias atras';
   else if ($weeks <= 4) echo $weeks==1 ?'uma semana atras':$weeks.' semanas atras';
   else if ($months <= 12) echo $months == 1 ?'um mes atras':$months.' meses atras';
   else echo $years == 1 ? 'um ano atras':$years.' anos atras';
 }