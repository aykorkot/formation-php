

<!DOCTYPE html>

<html>

<head>



</head>


<body>


<?php

		$retourligne = '<br />';
		echo $retourligne;

	 	/*------------------------------------------------------------*/
		//les types de comparaisons
		$a = 1;
		$b = 1; // ou $b = '1'; meme résultat
		if($a == $b){
			echo 'a est égal a b';
		}else{
			echo 'a est différent de b';
		}

		echo $retourligne;
		/*-------------------------------------------------------*/
		
		$a = 1;
		$b = '1toto'; 
		if($a == $b){
			echo 'a est égal a b';
		}else{
			echo 'a est différent de b';
		}

		echo $retourligne;
		/*-------------------------------------------------------*/
		
		$a = 1;
		$b = 2; 
		if($a <= $b){
			echo 'a est inférieur ou égal a b';
		}else{
			echo 'a est supérieur ou égal de b';
		}

		echo $retourligne;
		/*-------------------------------------------------------*/
		
		$a = 1;
		$b = 2; 
		if($a <> $b){
			echo 'a est différent de b';
		}else{
			echo 'a est égal a b';
		}


		echo $retourligne;
		/*-------------------------------------------------------*/
		//En utilisant "===" lors d'une comparaison, la valeur et le type sont considérés.
		$a = '0';
		$b = '0'; 
		if($a === $b){
			echo 'identique';
		}else{
			echo 'different';
		}


		echo $retourligne;
		/*-------------------------------------------------------*/
		//En utilisant "===" lors d'une comparaison, la valeur et le type sont considérés.
		$a = 0;
		$b = '1'; 
		if($a != $b){
			echo 'different';
		}else{
			echo 'identique';
		}


		echo $retourligne;
		/*-------------------------------------------------------*/
		//comparer des nombres décimaux avec "bccomp(val1,val2)"
		
		$a = 0.8;
		$b = 0.8; 
		if($a == $b){
			echo 'identique';
		}else{
			echo 'different';
		}

		echo $retourligne;

		// bccomp renvoi 1 si a>b ,  0 si a==b,  -1 sinon
		$a = 0.9;
		$b = 0.7 + 0.1; 
		if(bccomp($a,$b) == 1){
			echo 'identique';
		}else{
			echo 'different';
		}










 ?>




</body>
		 


</html>



