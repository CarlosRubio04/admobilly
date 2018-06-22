<!DOCTYPE html>
<html lang="es">
<?php require_once('views/head.php'); ?>
<body>
	<?php
	if(!isset($_REQUEST['content'])){

	}else {
		require_once('views/header.php');
		require_once('views/menu.php');
	}
 	
?>

<?php
    if(!isset($_REQUEST['content'])){
    require_once('views/login.php');
	}elseif($_REQUEST['content']=='user-list'){
		require_once('views/user-list.php');
	}elseif($_REQUEST['content']=='configuration-profile'){
		require_once('views/configuration-profile.php');  
	}elseif($_REQUEST['content']=='edit-user-admi'){
		require_once('views/edit-user-admi.php');
	}elseif($_REQUEST['content']=='confi-plataforma'){
		require_once('views/confi-plataforma.php');
	}elseif($_REQUEST['content']=='confi-formatos'){
		require_once('views/confi-formatos.php');
	}elseif($_REQUEST['content']=='confi-interfaz'){
		require_once('views/confi-interfaz.php');
	}elseif($_REQUEST['content']=='form-cliente'){
		require_once('views/form-cliente.php');
	}elseif($_REQUEST['content']=='form-cliente-2'){
		require_once('views/form-cliente-2.php');
	}
 ?>
 <?php require_once('views/footer.php'); ?>

   <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  <script src="js/app.js"></script>
</body>
</html>