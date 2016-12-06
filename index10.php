


<?php 

	//$langue_affichee = isset($_REQUEST['langue']) ? $_REQUEST['langue'] : 'fr';
	$langue_affichee = 'fr';
	if(!empty($_POST['langue'])){
		$langue_affichee = $_POST['langue'];
	}
	elseif (isset($_GET['langue'])) {
		$langue_affichee = $GET['langue'];
	}

	$nom = empty($_POST['nom']) ? 'visiteur' : $_POST['nom'];
	define('AFFICHE',$langue_affichee);
	$langue = array (
		'en' => 'Hello ',
		'fr' => 'Bonjour ',
		'es' => 'Hola ',
		'de' => 'Hallo ',
		);

	$langue_utilisee = array (
		'en' => 'anglais',
		'fr' => 'francais',
		'es' => 'espagñol',
		'de' => 'deutsh',
		'be' => 'Belge',
		'fr' => 'Suisse',
		'hu' => 'Magyar',
		'ca' => 'Canada',
		'am' => 'Amerique',
		'me' => 'Mexicano',
		'all' => 'Voir tous',
		'none' => 'Autre',

		);

	$retourligne = '<br />';
	function paragraphe($message, $nom, $couleur='blue', $fin=' ! '){
		return '<p style="color:'.$couleur.'">'.$message.$nom.$fin.'</p>';
	}


 ?>

<!DOCTYPE html>

<html>

<head></head>

<body>
<p>
	Afficher en : 
	<?php 
		foreach ($langue_utilisee as $symbole => $en_cours) {
			echo '<a href="./?langue='.$symbole.'" style="margin:5px 10px; font-size=smaller">'.$en_cours.'</a>';
		}
	?>
</p>



<form action="./" method ="POST">
	<fieldset style="width:80%">
		<legend>Donnez quelques informations :</legend>
		Entrez votre nom: <input type ="text" size="50" name="nom" value="<?php echo $nom=='visiteur '?'' : $nom; ?>" />
		<input type="submit" value="Actualiser"/><br />
		Votre nationalité : 
		<select name="langue">
			<?php 
				foreach ($langue_utilisee as $symbole => $en_cours) {
					echo '<option value="'.$symbole.'"';
					if ($symbole==AFFICHE) {
						echo 'selected="selected"';
					}
					echo '>'.$en_cours.'</option>';
				}
			?>

		</select>
	</fieldset>

</form>

<?php 
	
	if(AFFICHE=='all'){
		$recap='';
		foreach ($langue as $lang => $message) {
			$recap .= $lang.' : '.$message.$retourligne;
		}
		echo paragraphe($recap, 'red','');
	}
	else{
		switch (AFFICHE) {
			case 'en':
			case 'am':	
				echo paragraphe($langue['en'], $nom);
				break;
			case 'fr':
			case 'ca':
			case 'be':
				echo paragraphe($langue['fr'], $nom);
				break;
			case 'es':
			case 'me':
				echo paragraphe($langue['es'], $nom);
				break;	
			case 'de':
			case 'at':
				echo paragraphe($langue['de'], $nom);
				break;	
			default:
				echo paragraphe('Votre langue n\'est pas connue !', 'black');
				break;
		}
	}

	$retourligne = '<br />';
	echo $retourligne;

 ?>



</body>
		 


</html>



