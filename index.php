

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>



</head>


<body>

<!-- affecter des informations dans une variable -->
<?php 
	$toto_en = '<p style="color:red">HELLO WORLD</p>';
	$toto_fr = '<p style="color:green">BONJOUR LE MONDE</p>';
	$toto_langue = 'toto_fr';
	$retourligne = '<br />';
?>



<!-- Afficher le contenu de la variable-->
<?php

	echo $$toto_langue;
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
		echo $retourligne;

		/* print_r : permet d'afficher une representation textuelle de la structure du tableau toto*/
		print_r($toto);
		echo $retourligne;

 ?>

 <?php

 	/*declaration d'un objet*/
 	class obj {
 		/*passer des propriétés a cet objet*/
 		public $var = 'bonjour';
 		private $hidden = 'Non';
 		function oui() {
 			echo $this->hidden;
 		}
 	}

 	/*instantiation de l'objet*/
 		$toto = new obj();
 		echo $toto->var;

 		/*la propriété privé ($hidden) n'est pas accessible en dehors de l'objet lui meme*/
 		/*echo $toto->hidden;*/

 		$toto->oui();
 ?>



</body>
		 


</html>



