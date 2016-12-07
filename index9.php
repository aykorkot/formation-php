


<?php 


	$langue_affichee = isset($_GET['langue']) ? $_GET['langue'] : 'fr';
	define('AFFICHE',$langue_affichee);
	$langue = array (
		'en' => 'Hello world',
		'fr' => 'Bonjour le monde',
		'es' => 'Hola mundo',
		'de' => 'Hallo welt',
		);

	$langue_utilisee = array (
		'en' => 'anglais',
		'fr' => 'francais',
		'es' => 'espagñol',
		'de' => 'deutsh',
		);

	$retourligne = '<br />';
	function paragraphe($message, $couleur='blue'){
		return '<p style="color:'.$couleur.'">'.$message.'</p>';
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


<?php 
/*	
	if(AFFICHE=='all'){
		$recap='';
		foreach ($langues as $lang => $message) {
			$recap .= $lang.' : '.$message.$retourligne;
		}
		echo paragraphe($recap, 'red');
	}
	else{
		switch (AFFICHE) {
			case 'en':
			case 'am':	
				echo paragraphe($langue['en']);
				break;
			case 'fr':
			case 'ca':
			case 'be':
				echo paragraphe($langue['fr']);
				break;
			case 'es':
			case 'me':
				echo paragraphe($langue['es']);
				break;	
			case 'de':
			case 'at':
				echo paragraphe($langue['de']);
				break;	
			default:
				echo paragraphe('Votre langue n\'est pas connue !', 'black');
				break;
		}
	}

	$retourligne = '<br />';
	echo $retourligne;*/

 ?>


</body>
		 


</html>



