<?php
	$numbers = array(1,2,3,4,5);
	$second_array = array(5,4,3,2,1);
	$evennumbers= array();
	$vermenigvuldigd=$numbers[0]*$numbers[1]*$numbers[2]*$numbers[3]*$numbers[4];
	for ($i=0; $i < $lengte=count($numbers) ; $i++) { 
		if($numbers[$i]%2!=0){
			array_push($evennumbers, $numbers[$i]);
		}
	}
	for ($j=0; $j < $lengte; $j++) { 
		$numbers[$j]+=$second_array[$j];
	}
	var_dump($evennumbers);
	var_dump($numbers);
	#hoe printen?
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array basic deel 2</title>
</head>
<body>
	<p>Alle elementen uit array vermenigvuldigd <?=$vermenigvuldigd ?></p>
	<p>Alle oneven getallen <?=$even ?></p>
	<p>Elementen met dezelfde index opgeteld <?=$nummers ?></p>
</body>
</html>