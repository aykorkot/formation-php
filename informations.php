
<?php 
// On démarre la session avant d'écrire du code HTML
session_start();

 ?>

<!DOCTYPE html>

<html>

<head></head>

<body>

	<p>Re-Bonjour !</p>

	<p>
		Je me souviens de toi ! tu t'appelles <?php echo $_SESSION['prenom'].''.$_SESSION['nom']; ?>!<br />
	</p>
</body>
		 


</html>



