

<!DOCTYPE html>

<html>

<head>



</head>


<body>

<!-- affecter des informations dans une variable -->
<?php 

	//Declarer une constante 
/*	define('AFFICHE', 'fr');
*/


		/*----------------------------------*/
	/*
		$toto_en = '<p style="color:red">HELLO WORLD</p>';
		$toto_fr = '<p style="color:green">BONJOUR LE MONDE</p>';
		$toto_langue = 'toto_fr';
		$retourligne = '<br />';
	*/
		/*----------------------------------*/


	//une autre manière de déclarer puis de remplir un tableau
	/*	
		$langue = array();
		$langue['en'] = '<p style="color:red">HELLO WORLD</p>';
		$langue['fr'] = '<p style="color:green">BONJOUR LE MONDE</p>';
	*/

		/*----------------------------------*/

/*
	$langue = array(
		'en'=>'<p style="color:red">HELLO WORLD</p>',
		'fr'=>'<p style="color:green">BONJOUR LE MONDE</p>'
		);


	$affichage = 'en';
	$retourligne = '<br />';*/

	//délimiter une chaine de caratère avec la syntaxe heredoc, en donnant un identifient
	/*	$toto = <<<EOT
		je suis content d'apprendre le php ! 
		La langue affichée est stockée dans la variable $affichage
	EOT
	*/


?>



<!-- Afficher le contenu de la variable-->
<?php

		/*echo $$toto_langue;
		$toto = 1;
		echo $toto;
		echo $retourligne;
		$toto = 2;
		echo $toto;
		echo $retourligne;
		$toto = 'bonjour';
		echo $toto;
		echo $retourligne;
		$toto = array('tableau1','tableau2');
		echo $toto[0];
		echo $retourligne;*/

		/* print_r : permet d'afficher une representation textuelle de la structure du tableau toto*/
		/*print_r($toto);
		echo $retourligne;
		*/
		/*------------------------------------------------------------*/

	 	/*declaration d'un objet*/
	 	/*
	 	class obj {

	 		//passer des propriétés a cet objet
	 		public $var = 'bonjour';
	 		private $hidden = 'Non';
	 		function oui() {
	 			echo $this->hidden;
	 		}
	 	}
	 	*/

	 	//instantiation de l'objet
	 		/*$toto = new obj();
	 		echo $toto->var;*/

	 		//la propriété privé ($hidden) n'est pas accessible en dehors de l'objet lui meme
	 		/*echo $toto->hidden;
	 		$toto->oui();
	 		*/

	 	/*------------------------------------------------------------*/
/*
	 	echo $langue[AFFICHE];
	 	echo $retourligne;
*/

 ?>




</body>
		 


</html>



