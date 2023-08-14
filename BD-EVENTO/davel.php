<?php

$msg =  $_POST['comments'];
		mail( "neweventtss@gmail.com", "Suporte", $msg );
		
		echo "<script> alert('Email enviado com sucesso!'); </script>";
        echo "<script> location.href = '/contact.php'; </script>";
