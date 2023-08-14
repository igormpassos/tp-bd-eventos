<?php
require_once '../config.php';
require_once DBAPI;
require_once('functions.php');
$email = $_POST['email'];
$senha = $_POST['pwd'];
$database = open_database();
$found = null;

//"SELECT nome FROM admin WHERE email= '$email'";

try {
    $sql = "SELECT * FROM admin WHERE email = '" . $email . "' AND BINARY senha = '" .$senha . "'";
    $result = $database->query($sql);
    if ($result->num_rows > 0) {
        $resultado = $result->fetch_assoc();
        $_SESSION['email'] = $resultado["email"];
        $_SESSION['nome']  = $resultado["nome"];
        $_SESSION['cpf']  = $resultado["cpf_cnpj"];
        $_SESSION['id']  = $resultado["id"];

        //$_SESSION['email'] = $email;
        //$_SESSION['pwd']   = $senha;
        //$_SESSION['nome'] = $result["nome"];
	

        echo "<script> alert('Seja bem vindo(a) " . $_SESSION['nome'] . "!'); </script>";
        echo "<script> location.href = '../entrada.php'; </script>";
    }
    else
    {
        echo "<script> alert('Login ou senha incorretos, tente novamente!!!'); </script>";
        echo "<script> location.href = '../login/loginrestrita1.php'; </script>";
    }

}
catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
}

include "footer.php";
?>