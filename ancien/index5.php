

<!DOCTYPE html>

<html>

<head>



</head>


<body>


<?php

		$retourligne = '<br />';
		echo $retourligne;

	 	/*---------------------------------------------------------*/
	 	// opérateurs logiques ou booléans 

	 	echo "test1";

	 	if ('caractère' == true) {
	 		echo 'Une chaine de caractère';
	 	}else{
	 		echo 'Pas une chaine de caractère';
	 	}

		echo $retourligne;
		echo "test2";

	 	if ('' == true) {
	 		echo 'Une chaine de caractère';
	 	}else{
	 		echo 'Pas une chaine de caractère';
	 	}

	 	echo $retourligne;
	 	/*---------------------------------------------------------*/
		echo "test3";
	 	$a = true;
	 	$b = false;
	 	$c = $a && $b; // c=(vrai et faux)
	 	$d = $a and $b; // (d=vrai) et faux 

	 	if ($a && $b) {
	 		echo 'Condition vérifiée';
	 	}else{
	 		echo 'Condition non vérifiée';
	 	}

		echo $retourligne;
		echo "test4";

	 	if ($a && $a) {
	 		echo 'Condition vérifiée';
	 	}else{
	 		echo 'Condition non vérifiée';
	 	}

		echo $retourligne;
		echo "test5";

	 	if ($b && $b) {
	 		echo 'Condition vérifiée';
	 	}else{
	 		echo 'Condition non vérifiée';
	 	}

	 	echo $retourligne;
	 	echo "test6";

	 	if ($b || $b) {
	 		echo 'Condition vérifiée';
	 	}else{
	 		echo 'Condition non vérifiée';
	 	}

		echo $retourligne;
		echo "test7";

	 	if ('toto' && 3) {
	 		echo 'Condition vérifiée';
	 	}else{
	 		echo 'Condition non vérifiée';
	 	}

	 	echo $retourligne;
	 	echo "test8";

	 	if ($c) {
	 		echo 'Condition vérifiée';
	 	}else{
	 		echo 'Condition non vérifiée';
	 	}

	 	echo $retourligne;
	 	echo "test9";

	 	if ($d) {
	 		echo 'Condition vérifiée';
	 	}else{
	 		echo 'Condition non vérifiée';
	 	}

	 	echo $retourligne;
	 	echo "test10";

	 	// le OU exclusif
	 	if ($a xor $b) {
	 		echo 'Condition vérifiée';
	 	}else{
	 		echo 'Condition non vérifiée';
	 	}

	 	echo $retourligne;
	 	echo "test11";
	 	// le ! est l'inverse de la valeur donnée (true+false = false) (false+false=true)
	 	if (!$a) {
	 		echo 'Condition vérifiée';
	 	}else{
	 		echo 'Condition non vérifiée';
	 	}









 ?>




</body>
		 


</html>



