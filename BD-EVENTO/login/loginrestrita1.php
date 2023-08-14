<?php require_once '../config.php'; ?>
<?php require_once DBAPI; ?>
<?php $db = open_database();
 include "../header.php";
require_once('functions.php');
add();
?>
<?php if ($db) : ?>

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Formulario de Login</title>

  
</head>

<body>
  <style>
		body{
			background-image: url("../images/galaxyfundo.jpg");
		}
		.veen{
			width: 100%;
			margin: 100px auto;
			background: #f6f6f6;
			min-height: 400px;
			position: relative;
			box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
		}
		.veen > div {
			display: table-cell;
			vertical-align: middle;
			text-align: center;
			color: #fff;
		}
		.veen button{
			background: transparent;
			//background-image: linear-gradient(90deg, #e0b722, #ff4931);
			display: inline-block;
			padding: 10px 30px;
			border: 3px solid #fff;
			border-radius: 50px;
			background-clip: padding-box;
			position: relative;
			color: #FFF;
			//box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
			transition: all .25s;
		}
		.veen button.dark{
            background-image: url("../images/blue.png");
			background-image: url("../images/blue.png");
		}
		.veen > .wrapper {
			position: absolute;
			width: 50%;
			height: 120%;
			top: -10%;
			left: 25%;
			background: #fff;
			box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
			color: #303030;

		}
		.veen .wrapper > div{
			padding: 15px 50px 50px;
			width: 100%;
			transition: all .5s;
			background: #fff;
			width: 100%;
		}
		.veen .wrapper #login{
			padding-top: 20%;
		}

		.veen .wrapper.move #login{
			transform: translateX(-100%);
		}
		.veen .wrapper > div> div {
			position: relative;
			margin-bottom: 15px;
		}
		.veen .wrapper label{
			position: absolute;
			top: -7px;
			font-size: 12px;
			white-space: nowrap;
			background: #fff;
			text-align: left;
			left: 15px;
			padding: 0 5px;
			color: #999;
			pointer-events: none;
		}
		.veen .wrapper h3{
			margin-bottom: 25px;
		}
		.veen .wrapper input{
			height: 40px;
			padding: 5px 15px;
			width: 100%;
			border: solid 1px #999;
		}
</style>
<form class="form-horizontal" method="post" action = "<?php echo BASEURL; ?>login/login.php">
		<div class="veen">


			<div class="wrapper">
				<div id="login">
					<h2 class="text-center">LOGIN</h2>
					
					<div class="mail">
						<input type="email" id="email" placeholder="Email" name="email" autofocus required>
						<label>Email ou Usuário</label>
					</div>
					<div class="passwd">
						<input type="password" id="pwd" placeholder="Senha" name="pwd" required>
						<label>Senha</label>
					</div>
					<div class="submit">
						<button class="dark" style="background: #000;color: #fff">Entrar</button>
					</div>
          <p>Login: igormpassos@hotmail.com <br> Senha: 123</p>
				
				</div>
				
			</div>
		</div>
			</form>


	<style type="text/css">
		.site-link{
			height: 100px;
			width: 100px;
			position: fixed;
			z-index: 99999;
			background: #303030;
			box-shadow: 0 0 4px rgba(0,0,0,.14), 0 4px 8px rgba(0,0,0,.28);
			right: 30px;
			bottom: 30px;
			border-radius: 50%;
		}
		.site-link img{
			width: 70px;
			height: 70px;
			top: 5px;
			bottom: 0;
			position: absolute;
			left: 0;
			right: 0;
			margin: auto;
		}
	</style>
  
   

</body>
</html>

<?php else : ?>
	<div class="alert alert-danger" role="alert">
		<p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
	</div>
<?php endif; ?>
<? include "footer.php"; ?>