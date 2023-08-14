<?php

 $msg = $_POST['nome'] . $_POST['email'];

 mail( "11500751@aluno.cotemig.com.br", "Splish Splach", $msg );

 echo "Email enviado com sucesso!";
