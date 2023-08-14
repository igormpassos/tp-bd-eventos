<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="<?php echo BASEURL; ?>images/logo.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo BASEURL; ?>images/logo.ico" type="image/x-icon" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>TP-BD Eventos</title>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href=" https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css ">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script  src="https://code.jquery.com/jquery-3.1.1.min.js"  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="  crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js" ></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <script src="<?php echo BASEURL; ?>js/tinymce/tinymce.min.js" type="text/javascript"></script>
    <script src="<?php echo BASEURL; ?>js/tinymce/langs/pt_BR.js" type="text/javascript"></script>
    
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>

    

    <script>
      tinymce.init({
          selector: 'textarea',
          height: 200,
          theme: 'modern',
          plugins: [
          'advlist autolink lists link image charmap print preview hr anchor pagebreak',
          'searchreplace wordcount visualblocks visualchars code fullscreen',
          'insertdatetime media nonbreaking save table contextmenu directionality',
          'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
          ],
          toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
          toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
          image_advtab: true,
          templates: [
          { title: 'Test template 1', content: 'Test 1' },
          { title: 'Test template 2', content: 'Test 2' }
          ],
          content_css: [
          '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
          '//www.tinymce.com/css/codepen.min.css'
          ]
      });
  </script>
  <script>
    $(document).ready(function(){
        $("#cep").blur(function(){
            var cep = $(this).val().replace(/\D/g, '');
            $.getJSON("//viacep.com.br/ws/"+cep+"/json/?callback=?", function(dados){
                $("#rua").val(dados.logradouro);
                $("#bairro").val(dados.bairro);
                $("#cidade").val(dados.localidade);
                $("#estado").val(dados.uf);

            })
        })
    })

</script>



<style>
    body {
        font: 400 15px Lato, sans-serif;
        line-height: 1.8;
        color: #818181;
    }
    
    
    h2 {
        font-size: 24px;
        text-transform: uppercase;
        color: #303030;
        font-weight: 600;
        margin-bottom: 30px;
    }
    h4 {
        font-size: 19px;
        line-height: 1.375em;
        color: #303030;
        font-weight: 400;
        margin-bottom: 30px;
    }
    .jumbotron {
        background-image: url("<?php echo BASEURL; ?>images/blue.png");
        color: #fff;
        padding: 100px 25px;
        font-family: Montserrat, sans-serif;
    }
    .container-fluid {
        padding: 60px 50px;
    }
    .bg-grey {
        background-color: #f6f6f6;
    }
    .logo-small {
        color: #006666;
        font-size: 50px;
    }
    .logo {
        color: #006666;
        font-size: 200px;
    }
    .thumbnail {
        padding: 0 0 15px 0;
        border: none;
        border-radius: 0;
    }
    .thumbnail img {
        width: 100%;
        height: 100%;
        margin-bottom: 10px;
    }
    .carousel-control.right, .carousel-control.left {
        background-image: none;
        color: #006666;
    }
    .carousel-indicators li {
        border-color: #006666;
    }
    .carousel-indicators li.active {
        background-color: #006666;
    }
    .item h4 {
        font-size: 19px;
        line-height: 1.375em;
        font-weight: 400;
        font-style: italic;
        margin: 70px 0;
    }
    .item span {
        font-style: normal;
    }
    .panel {
        border: 1px solid #006666;
        border-radius:0 !important;
        transition: box-shadow 0.5s;
    }
    .panel:hover {
        box-shadow: 5px 0px 40px rgba(0,0,0, .2);
    }
    .panel-footer .btn:hover {
        border: 1px solid #006666;
        background-color: #fff !important;
        color: #006666;
    }
    .panel-heading {
        color: #fff !important;
        background-color: #006666 !important;
        padding: 25px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
    }
    .panel-footer {
        background-color: white !important;
    }
    .panel-footer h3 {
        font-size: 32px;
    }
    .panel-footer h4 {
        color: #aaa;
        font-size: 14px;
    }
    .panel-footer .btn {
        margin: 15px 0;
        background-color: #006666;
        color: #fff;
    }
    .navbar {
        margin-bottom: 0;
        background-image: url("<?php echo BASEURL; ?>images/blue.png");
        z-index: 9999;
        border: 0;
        font-size: 12px !important;
        line-height: 1.42857143 !important;
        letter-spacing: 4px;
        border-radius: 0;
        font-family: Montserrat, sans-serif;
    }
    .navbar li a, .navbar .navbar-brand {
        color: #fff !important;
    }
    .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #006666 !important;
        background-color: #fff !important;
    }
    .navbar-default .navbar-toggle {
        border-color: transparent;
        color: #fff !important;
    }
    footer .glyphicon {
        font-size: 20px;
        margin-bottom: 20px;
        color: #006666;
    }
    .slideanim {visibility:hidden;}
    .slide {
        animation-name: slide;
        -webkit-animation-name: slide;
        animation-duration: 1s;
        -webkit-animation-duration: 1s;
        visibility: visible;
    }
    @keyframes slide {
        0% {
            opacity: 0;
            transform: translateY(70%);
        }
        100% {
            opacity: 1;
            transform: translateY(0%);
        }
    }
    @-webkit-keyframes slide {
        0% {
            opacity: 0;
            -webkit-transform: translateY(70%);
        }
        100% {
            opacity: 1;
            -webkit-transform: translateY(0%);
        }
    }
    @media screen and (max-width: 768px) {
        .col-sm-4 {
            text-align: center;
            margin: 25px 0;
        }
        .btn-lg {
            width: 100%;
            margin-bottom: 35px;
        }
    }
    @media screen and (max-width: 480px) {
        .logo {
            font-size: 150px;
        }
    }
    
    .w3-row-padding img {margin-bottom: 12px}
    /* Set the width of the sidebar to 120px */
    .w3-sidebar {width: 120px;background: #222;}
    /* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
    #main {margin-left: 120px}
    /* Remove margins from "page content" on small screens */
    @media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<link rel="stylesheet" href="<?php echo BASEURL; ?>css/style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
</head>


<div class="w3-bar w3-top w3-blue w3-large" style="z-index:9">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only">toggle navigation</span>
      <span class="drawer-hamburger-icon"></span>
    </button><span class="w3-bar-item w3-right">New Events</span>
</div>

	<header role="banner">
    
<br>

<body class="drawer drawer--left">

	<header role="banner">
	<div class="w3-bar w3-top w3-indigo w3-large" style="z-index:9">
    <button type="button" class="drawer-toggle drawer-hamburger">
      <span class="sr-only">toggle navigation</span>
      <span class="drawer-hamburger-icon"></span>
    </button><span class="w3-bar-item w3-right">TP BD Eventos</span>
</div>
<br>
    <nav class="drawer-nav" role="navigation" style="z-index:9">
      <div class="w3-bar-block"><br>
  			<a href="<?php echo BASEURL ?>entrada.php" class="w3-bar-item w3-button w3-padding w3-blue "><i class="fa fa-home fa-fw"></i>  Início</a>
  			<a href="<?php echo BASEURL ?>eventos/add.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-plus fa-fw"></i>  Novo Evento</a>
  			<a href="<?php echo BASEURL ?>eventos/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-glass fa-fw"></i>  Eventos</a>
			<a href="<?php echo BASEURL ?>admin/index.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user fa-fw"></i>  Administradores</a>

  		</div>
    </nav>
  </header>

<main class="container">