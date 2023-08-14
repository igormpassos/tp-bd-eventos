<?php
require_once('../config.php');
require_once(DBAPI);
$admins = null;
$admin = null;
/**
* Listagem de Usuarios
*/
function index() {
	global $admins;
	$admins = find_all('admins');
}

/**
* Pesquisa Todos os Registros de uma Tabela

function find_all( $table ) {
return find($table);
}

/**
* Cadastro de Usuarios
*/
function add() {
	if (!empty($_POST['admin'])) {
		$today = date_create('now', new DateTimeZone('America/Sao_Paulo'));
		$admin = $_POST['admin'];
        $admin["'senha'"]= $admin["'senha'"];
		save('admins', $admin);
        echo "<script> alert('Usuário cadastrado com sucesso!'); </script>";
        echo "<script> location.href = 'index_login.php'; </script>";
	}
}

/**
* Atualizacao/Edicao de Usuarios
*/
function edit() {
	$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
	if (isset($_POST['admin'])) {
		$admin = $_POST['admin'];
        update('admins', $id, $admin);
        echo "<script> alert('Usuário alterado com seucesso!'); </script>";
        echo "<script> location.href = 'logout.php'; </script>";
        echo "<script> location.href = 'index_login.php'; </script>";
		} else {
		global $admin;
		$admin = find('admins', $id);
	}
	} 
	else {
		header('location: index.php');
	}
}

/**
 * Atualizacao/Edicao das Senhas dos Usuarios
 */
function editSenha() {
    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['admin'])) {
            $admin = $_POST['admin'];
            $admin["'senha'"]= md5($admin["'senha'"]);
            update('admins', $id, $admin);
			echo "<script> location.href = 'logout.php'; </script>";
            echo "<script> alert('Senha alterada com seucesso!'); </script>";
            echo "<script> location.href = 'index_login.php'; </script>";
        } else {
            global $admin;
            $admin = find('admins', $id);
        }
    }
    else {
        header('location: index.php');
    }
}

/**
* Visualização de um Usuarios
*/
function view($id = null) {
	global $admin;
	$admin = find('admins', $id);
}

/**
* Exclusão de um Usuarios
*/
function delete($id = null) {
	global $admin;
	$admin = remove('admins', $id);
    echo "<script> location.href = 'index.php'; </script>";
}

function clear_messages() {
	unset($_SESSION['message']);
	unset($_SESSION['type']);
}


?>