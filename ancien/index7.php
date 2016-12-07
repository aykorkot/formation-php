
<?php
		
		define('AFFICHE', 'all');
		$langue = array(
		'en'=>'<p style="color:red">HELLO WORLD</p>',
		'fr'=>'<p style="color:green">BONJOUR LE MONDE</p>',
		'es'=>'<p style="color:green">hola mundo</p>',
		'de'=>'<p style="color:green">hallo welt</p>',	
		);

	
		$retourligne = '<br />';
		echo $retourligne;

 ?>

<!DOCTYPE html>

<html>

<head>



</head>


<body>


<?php
	
	 	/*---------------------------------------------------------*/
	 	// les boucles 
	 	// for
	 	/*for ($i=0;$i<=10;$i++){
	 		if ($i==5) {
	 			continue;
	 		}
	 		echo $i.$retourligne;
	 	}
	 	echo 'Valeur de $i : '.$i;*/

	 	//while
	 	/*$i=0;
	 	while ($i<=10){
	 		echo $i.$retourligne;
	 		$i++;
	 	}*/

	 	//Do
	 /*	$i=12;
	 	do{
	 		echo $i.$retourligne;
	 		$i++;
	 	}
	 	while($i<=10);*/

	 	//foreach pour les tableaux
	 	/*$i=array(1,2,3,4,5,6);
	 	foreach ($i as $valeur) {
	 		echo $valeur.$retourligne;
	 	}*/


	 	//afficher tout les langues
	 	if(AFFICHE == 'all'){
	 		foreach ($langue as $lang => $message) {
	 			echo $lang.' : '.$message.$retourligne;
	 		}
	 	}
	 	else {
	 		switch(AFFICHE){
	 		case 'en':
	 			case 'am':
	 			case 'brt':
	 			echo $langue['en'];
	 			break;
	 		case 'fr':
	 			case 'be':
	 			case 'ca':
	 			echo $langue['fr'];
	 			break;
	 		case 'es':
	 			echo $langue['es'];
	 			break;
	 		case 'de':
	 			echo $langue['de'];
	 			break;	
	 		default :
	 			echo 'Votre langue n\'est pas connue';
	 		}
	 	}
	 	







 ?>




</body>
		 


</html>



