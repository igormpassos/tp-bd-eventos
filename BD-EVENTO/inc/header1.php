  <!DOCTYPE html>
  <html>
  <link rel="icon" href="<?php echo BASEURL; ?>images/logo.ico" type="image/x-icon" />
  <link rel="shortcut icon" href="<?php echo BASEURL; ?>images/logo.ico" type="image/x-icon" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>TP-BD Eventos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  
  
  
  <style>
  	html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif}
  </style>
 
  <body class="w3-theme-l5 drawer drawer--left">

  	<!-- Top container 
  	<div class="w3-bar w3-top w3-blue w3-large" style="z-index:9">
	
  		<button class="w3-bar-item w3-button w3-hover-none w3-hover-text-light-grey drawer-toggle drawer-hamburger" onclick="w3_open()"><i class="fa fa-bars"></i> Menu</button>
  		<span class="w3-bar-item w3-right">New Events/Restrito</span>
  	</div>

  	<!-- Sidebar/menu--> 
  	<!--<nav class="w3-sidebar w3-top w3-white w3-animate-left w3-collapse" style="z-index:3;width:300px;" id="mySidebar"><br>
  		
  		<div class="w3-bar-block"><br>
  			<a class="w3-bar-item w3-button w3-padding-16 w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Fechar Menu</a>
  			<a href="<?php echo BASEURL ?>entrada1.php" class="w3-bar-item w3-button w3-padding w3-blue "><i class="fa fa-home fa-fw"></i>  Início</a>
  			<a href="<?php echo BASEURL ?>eventos/add.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus fa-fw"></i>  Novo Evento</a>
  			<a href="<?php echo BASEURL ?>eventos/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-glass fa-fw"></i>  Eventos</a>
			<a href="<?php echo BASEURL ?>admin/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw"></i>  Administradores</a>
  			
  				<button onclick="myFunction('option')" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file-text fa-fw"></i>  Relatorios<i class="fa fa-chevron-down w3-right"></i></button>
  				
				<div id="option" class="w3-hide w3-container w3-bar-item w3-button w3-hover-none">
  					<a href="<?php echo BASEURL ?>relatorio/relatorios/rel/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-book fa-fw"></i> Gerar Relatorio Geral</a>
					
  					<button onclick="myFunction('option1')" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw"></i>  Gerar Relatorio por data<i class="fa fa-chevron-down w3-right"></i></button>
  					<div id="option1" class="w3-hide w3-container w3-bar-item w3-button w3-padding">
  						<form method="post" action="<?php echo BASEURL ?>relatorio/relatorios/rel/index1.php">
  							<input class="w3-bar-item w3-button form-control" type="date" name="cadastro1"> <input class="w3-bar-item w3-button w3-padding form-control" type="date" name="cadastro2"> <button type="submit" class="btn-success">Gerar</button>
  						</form>
  						
  					</div>
				
  				</div>
  			
  			<br><br>
  		</div>
  	</nav>-->
	

<div class="w3-bar w3-top w3-indigo w3-large" style="z-index:9">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only">toggle navigation</span>
      <span class="drawer-hamburger-icon"></span>
    </button><span class="w3-bar-item w3-right">New Events</span>
</div>

	<header role="banner">
    
<br>

    <nav class="drawer-nav" role="navigation" style="z-index:9">
      <div class="w3-bar-block"><br>
  			<a href="<?php echo BASEURL ?>entrada1.php" class="w3-bar-item w3-button w3-padding w3-blue "><i class="fa fa-home fa-fw"></i>  Início</a>
  			<a href="<?php echo BASEURL ?>eventos/add.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus fa-fw"></i>  Novo Evento</a>
  			<a href="<?php echo BASEURL ?>eventos/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-glass fa-fw"></i>  Eventos</a>
			<a href="<?php echo BASEURL ?>admin/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw"></i>  Administradores</a>
  			
  				<button onclick="myFunction('option')" class="w3-bar-item w3-button w3-padding"><i class="fa fa-file-text fa-fw"></i>  Relatorios<i class="fa fa-chevron-down w3-right"></i></button>
  				
				<div id="option" class="w3-hide w3-container w3-bar-item w3-button w3-hover-none">
  					<a href="<?php echo BASEURL ?>relatorio/relatorios/rel/index.php" class="w3-bar-item w3-button w3-padding" target="_blank"><i class="fa fa-book fa-fw"></i> Gerar Relatorio Geral</a>
					
  					<button onclick="myFunction('option1')" class="w3-bar-item w3-button w3-padding"><i class="fa fa-calendar fa-fw"></i>  Gerar Relatorio por data<i class="fa fa-chevron-down w3-right"></i></button>
  					<div id="option1" class="w3-hide w3-container w3-bar-item w3-button w3-padding">
  						<form method="post" action="<?php echo BASEURL ?>relatorio/relatorios/rel/index1.php" target="_blank">
  							<input class="w3-bar-item w3-button form-control" type="date" name="cadastro1" required> <input class="w3-bar-item w3-button w3-padding form-control" type="date" name="cadastro2" required> <button type="submit" class="btn-success">Gerar</button>
  						</form>
  						
  					</div>
				
  				</div>
  			
  			<br><br>
  		</div>
    </nav>
  </header>