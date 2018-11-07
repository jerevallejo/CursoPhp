
<?php
    require 'config/config.php';
	include 'includes/header.html';
	include 'includes/nav.php';
?>
	
<main class="container">
	<center>
		<br>
		<form action="login.php" method="post" class= col-md-4	>
      	<br>
      	<input type="email" name="usuEmail" placeholder="email" class="form-control">
		<br>
		 <input type="password" name="usuPass" placeholder="Contraseña" class="form-control">
		 <br>
		<div class="btn__form">
            	<input class="btn btn-outline-primary" type="submit" value="ENTRAR">
            	<input class="btn btn-outline-secondary" type="reset" value="LIMPIAR">	
        </div>
	</center>

<?php if(isset($_GET['error']))
	{ 
		$error = $_GET['error']; //capto el error por si tengo otro tipo y necesito variar el mensaje
		if($error==1){ ?>
			<div class="alert alert-danger">
				usuario y/o clave incorrectos
			</div>
		<?php 
		}else if($error==2){ ?>
			<div class="alert alert-danger">
				Primero tiene que logearse
			</div>
		<?php }
	} ?>
</main>

<?php  include 'includes/footer.php';  ?>
