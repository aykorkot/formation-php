
<?php
		
		define('AFFICHE', 'de');
		$langue = array(
		'en'=>'<p style="color:red">HELLO WORLD</p>',
		'fr'=>'<p style="color:green">BONJOUR LE MONDE</p>',
		'es'=>'<p style="color:green">hola mundo</p>',
		'de'=>'<p style="color:green">hallo welt</p>',	
		);

	
		$retourligne = '<br />';
		echo $retourligne;

	 	/*---------------------------------------------------------*/
	 	// les structures conditionnelles

 ?>

<!DOCTYPE html>

<html>

<head>



</head>


<body>


<?php
	
	 	/*---------------------------------------------------------*/
	 	// les structures conditionnelles 
	 	//if - elseif 
	 	/*
	 	if(AFFICHE == 'en'){
	 		echo $langue['en'];
	 	}else if(AFFICHE == 'fr'){
	 		echo $langue['fr'];
	 	}else{
	 		echo 'Votre langue n\'est pas connue';
	 	}

		*/
	 	//switch()
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

 ?>




</body>
		 


</html>



