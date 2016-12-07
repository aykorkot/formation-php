
<?php 
// On démarre la session avant d'écrire du code HTML
session_start();

// exemple de création des variables tests dans $_SESSION
$_SESSION['prenom']='ayman';
$_SESSION['nom']='korkot';
$_SESSION['age']=24;
 ?>

<!DOCTYPE html>

<html>

<head></head>

<body>

	<p>
		Salut <?php echo $_SESSION['prenom']; ?> !<br />
		Tu es à l'accueil de mon site (index11.php). Tu veux aller sur une autre page?
	</p>

	<p>
		<a href="mapage.php">Lien vers mapage.php</a><br />
		<a href="monscript.php">Lien vers monscript.php</a><br />
		<a href="informations.php">Lien vers informations.php</a>
	</p>
</body>
		 


</html>



