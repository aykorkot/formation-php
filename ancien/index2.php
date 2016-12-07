

<!DOCTYPE html>

<html>

<head>



</head>


<body>


<?php

		$retourligne = '<br />';
		echo $retourligne;

	 	/*------------------------------------------------------------*/
	 	// concatenation des variables grace a des Opérateurs 
	 	echo 'Bonjour le monde'.$retourligne.'Hello World';
	 	echo $retourligne;
	 	// ou 
	 	echo "Bonjour le monde $retourligne Hello World";
	 	echo $retourligne;

	 	$a = 1;
	 	$b = 2;
	 	echo $a.$b;

	 	echo $retourligne;

	 	$c = array(1,2);
	 	$d = array(3,4);
	 	echo $c[0].$c[1].$d[0].$d[1];
	 	echo $retourligne;
	 	/*------------------------------------------------------------*/
	 	//les opérateurs arithmétique
	 	//Dump permet de renvoyer le type de variable et son contenu

	 	var_dump(array(1,2) + array(2,3,5));


 ?>




</body>
		 


</html>



