
<?php

		//isset permet de determiner si une var est détérminé ou non
		$langue_affichee = isset($_GET['langue']) ? $_GET['langue'] : 'fr';

		
		define('AFFICHE', $langue_affichee);
		$langue = array(
		'en'=>'<p>HELLO WORLD</p>',
		'fr'=>'<p>BONJOUR LE MONDE</p>',
		'es'=>'<p>hola mundo</p>',
		'de'=>'<p>hallo welt</p>',	
		);


			$langues = array ( 
				'en' => 'english',
				'fr' => 'francais',
				'es' => 'espagñol',
				'de' => 'deutsch'
			)

	
		$retourligne = '<br />';
		echo $retourligne;

	 	function paragraphe($message, $couleur='red'){
	 		
	 		echo '<p style="color:'.$couleur.'">'.$message.'</p>';
	 	}

 ?>

<!DOCTYPE html>

<html>

<head>



</head>


<body>

<p>
	Afficher en : 
	<?php 
		foreach ($langues as $symbole => $en_cours) {
			echo '<a href="./?langue='.$en_cours.'" style ="margin:5px 10px; font-size:smaller">'.$en_cours.'</a>';
		}
	?>

</p>

<?php
	//les fonctions a la porté des variables

	if(AFFICHE == 'all'){
		
			$recap ='';
	 		foreach ($langue as $lang => $message) {
	 			$recap .= $lang.' : '.$message.$retourligne;
	 		}
	 		paragraphe($recap,'bleu');
	 	}
	 	else {
	 		switch(AFFICHE){
	 		case 'en':
	 			case 'am':
	 			case 'brt':
	 			echo paragraphe($langue['en']);
	 			break;
	 		case 'fr':
	 			case 'be':
	 			case 'ca':
	 			echo paragraphe($langue['fr']);
	 			break;
	 		case 'es':
	 			echo paragraphe($langue['es']);
	 			break;
	 		case 'de':
	 			echo paragraphe($langue['de']);
	 			break;	
	 		default :
	 			echo paragraphe('Votre langue n\'est pas connue', 'black');
	 		}
	 	}
	 	
 ?>




</body>
		 


</html>



