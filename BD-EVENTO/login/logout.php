<?php session_start();

session_destroy();
header("Location: ../login/loginrestrita1.php");
exit;


?>