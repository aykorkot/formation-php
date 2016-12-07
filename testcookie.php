
<?php 
// ecrire une cookie
setcookie('pseudo', 'aykorkot', time()+365*24*3600, null, null, false, true);
setcookie('pays', 'Maroc', time()+365*24*3600, null, null, false, true);
 ?>

<!DOCTYPE html>

<html>

<head></head>

<body>

	<p>
	    Hé ! Je me souviens de toi !<br />
	    Tu t'appelles <?php echo $_COOKIE['pseudo']; ?> et tu viens de <?php echo $_COOKIE['pays']; ?> c'est bien ça ?
	</p>

</body>
		 


</html>



