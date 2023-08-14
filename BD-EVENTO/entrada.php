<?php
require_once('config.php');
//if(!isset($_SESSION['email'])) {
 //   echo "Acesso negado!";
   // exit;
//}
require_once 'functions.php';

require_once DBAPI;
include(HEADER_TEMPLATE);

$db = open_database();
date_default_timezone_set('America/Sao_Paulo');
if ($db) : ?>



<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;margin-top:50px">
    <!-- The Grid -->
    <div class="w3-row">
        <!-- Left Column -->
        <div class="w3-col m3">
            <!-- Profile -->
            <div class="w3-card-2 w3-round w3-white">
                <div class="w3-container">
                    <h4 class="w3-center"><?php echo isset($_SESSION['nome']) ? $_SESSION['nome'] : ""; ?></h4>
                    <p class="w3-center"><img src="<?php echo BASEURL; ?>images/avatar3.png" class="w3-circle" style="height:106px;width:106px" alt="Avatar"></p>
                    <hr>
                    <p><i class="fa fa-at fa-fw w3-margin-right w3-text-theme"></i><?php echo $_SESSION['email'] ?></p>
                    <p><i class="fa fa-book fa-fw w3-margin-right w3-text-theme"></i><?php echo isset($_SESSION['cpf']) ? $_SESSION['cpf'] : ""; ?></p>
                    <div class="w3-center">
                        <a href="admin/edit.php?id=<?php echo isset($_SESSION['id']) ? $_SESSION['id'] : ""; ?>" class="btn btn-sm btn-warning">
                            <i class="fa fa-pencil"></i> Editar</a>
							   <a href="<?php echo BASEURL?>login/logout.php" class="btn btn-sm btn-danger">
                            <i class="fa fa-power-off"></i> Sair</a><br><br>
                        </div>
                    </div>
                </div>
                <br>
                
                <!-- Accordion 
                <div class=" w3-round">
                    <div class="w3-white">
                        <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-left-align w3-hover-blue w3-blue"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i> Meus eventos cadastrados</button>
                        
                        <div id="Demo2" class="w3-hide w3-container"><br>
                          <?php indexuser(); if ($eventos) : ?>
                          <?php foreach ($eventos as $evento) : ?>
                            <a href="eventos/view.php?id=<?php echo $evento['id']?>"><?php echo $evento['nome_evento'] ?></a>
                            <hr>
                        <?php endforeach; ?>
                    </div>
                    
                <?php else : ?>
                  <div id="Demo2" class="w3-hide w3-container">
                    <p>Nenhum evento cadastrado por você</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <br>-->
	
	<div class="w3-round">
        
	<?php indexproximos(); if ($eventos) : ?>
    <?php foreach ($eventos as $evento) : ?>
        <div class="w3-card-2 w3-round w3-white w3-center"><br>
            <div class="w3-container">
                <p>Acontecera em breve:</p>
                <hr>
                <p><strong><?php echo $evento['nome_evento'];?></strong></p>
                <p><?php echo $evento['cidade'];?> - <?php echo $evento['UF'];?></p>
                <p><a href="eventos/view.php?id=<?php echo $evento['id']; ?>" class="w3-block w3-hover-blue btn btn-info">Info</a></p>
            </div>
        </div><br>
    <?php endforeach; ?>
<?php else : ?>
    <div class="w3-card-2 w3-round w3-white w3-center">
        <div class="w3-container">
            <p>Acontecera em breve:</p>
            <hr>
            <p><strong>Nenhum evento</strong></p>
        </div>
    </div>
<?php endif; ?>
</div>
    
    
    <!-- End Left Column -->
</div>

<!-- Middle Column -->
<div class="w3-col m9" >
    <div class="w3-row-padding">
        <div class="w3-col m12">
            <div class="w3-card-2 w3-round w3-white">
                <div class="w3-container w3-padding">
                 <center><h4>Pesquisar eventos:</h4></center>
                 <hr>
                 
                 <input contenteditable="true" id="nome" type="text" name="nome_evento" class="w3-border w3-padding col-md-10" placeholder="Digite o Nome (Ex: Evento) ou a Data (Ex: 22-02-2017) do evento">
                 &nbsp; <button  type="button" onclick="search()"  name="enviar" class="btn btn-danger"><i class="fa fa-search"></i> Pesquisar</button>
                 
				 
				 <br><br><br><p id="p"></p>
	
							
              
                 <div id="view" class="w3-hide w3-container">
				
				 
                    
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
    
    <?php indexordenada(); if ($eventos) : ?>
    <?php foreach ($eventos as $evento) : ?>
        <div class="w3-container w3-card-2 w3-white w3-round w3-margin w3-round"><br>
            <span class="w3-right w3-opacity"><?php $time = strtotime($evento['criacao']); echo time_ago($time); ?></span>
            <h4 class="text-center"><?php echo $evento['nome_evento']; ?></h4>
            <hr>
            <p><?php echo $evento['descricao']; ?></p>
            <div class="w3-center">
             <a href="eventos/view.php?id=<?php echo $evento['id']; ?>" class="btn btn-sm btn-success">
              <i class="fa fa-eye"></i> Visualizar</a>
              <a href="eventos/edit.php?id=<?php echo $evento['id']; ?>" class="btn btn-sm btn-warning">
                  <i class="fa fa-pencil"></i> Editar</a>
              </div><br>
              
              <div class="w3-row-padding w3-opacity text-center" style="margin:0 -16px">
                <p>Cadastrado por <?php $sql = "SELECT A.nome FROM admin as A JOIN evento as E ON E.admin_id = A.id WHERE E.admin_id = '" . $evento['admin_id'] . "' ";
                  $result = $db->query($sql); 
                  $resultado = $result->fetch_assoc();
                  echo $resultado["nome"];
                  ?></p>
                  
              </div>
          </div>
      <?php endforeach; ?>
  <?php else : ?>
    <div class="w3-container w3-card-2 w3-white w3-round w3-margin"><br>
        <h4>Nenhum evento cadastrado</h4><br>
        
        
    </div>
<?php endif; ?>


<!-- End Middle Column -->
</div>


<!-- End Grid -->
</div>

<!-- End Page Container -->
</div>
<br>

<script
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
<script>

	function search(){
		var cont = document.getElementById("nome").value;
		var res = document.getElementById("p");
		$.get("search.php?text="+cont, function(data, status){
			res.innerHTML = data;
		});
		
	}



</script>


<?php else : ?>
    <div class="alert alert-danger" role="alert">
        <p><strong>ERRO:</strong> Não foi possível Conectar ao Banco de Dados!</p>
    </div>

<?php endif; ?>
<?php include(FOOTER_TEMPLATE1); ?>
