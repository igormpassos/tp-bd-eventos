<?php
require_once('../config.php');
require_once(DBAPI);
$admins = null;
$admin = null;
/**
 * Listagem de Clientes
 */
function index() {
    global $admins;
    $admins = find_all('admin');
}

function clear_messages() {
	unset($_SESSION['message']);
	unset($_SESSION['type']);
}

/**
 * Cadastro de Clientes
 */
function add() {
    if (!empty($_POST['admin'])) {
$today =
    date_create('now', new DateTimeZone('America/Sao_Paulo'));
$admin = $_POST['admin'];
//$admin['modified'] = $admin['created'] = $today->format("Y-m-d H:i:s");
save('admin', $admin);
header('location: index.php');
}
}


/**
 * Atualizacao/Edicao de admins
 */
function edit() {
$now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (isset($_POST['admin'])) {
        $admin = $_POST['admin'];
        //$admin['modified'] = $now->format("Y-m-d H:i:s");
        update('admin', $id, $admin);
        header('location: index.php');
    } else {
        global $admin;
        $admin = find('admin', $id);
    }
} else {
    header('location: index.php');
}
}

/**
 * Visualização de um Cliente
 */

function view($id = null) {
    global $admin;
    $admin = find('admin', $id);
}

/**
 * Exclusão de um Cliente
 */
function delete($id = null) {
    global $admin;
    $admin = remove('admin', $id);
    header('location: index.php');
}

