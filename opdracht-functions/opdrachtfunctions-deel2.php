<?php
function printArray($eenarray)
{
	for ($i=0; $i < count($eenarray) ; $i++) { 
		echo "array[". $i ."]heeft waarde:". $eenarray[$i]. "<br>";
	}
}
function printMeerdimensionaleArray($eenarray)
{
	for ($i=0; $i < count($eenarray) ; $i++) { 
		for ($j=0; $j <count($eenarray[$i]) ; $j++) { 
			echo "array[". $j ."]heeft waarde:". $eenarray[$i][$j]. "<br>";
		}
	}
}
$eenArray = array("hond","kat","vis","vogel");
printArray($eenArray);
$meerdimArray = array($diermetpoten = array("hond","kat"),$zonderpoten = array("vis","slang"));
printMeerdimensionaleArray($meerdimArray);
#----------------------------------------------
function validateHTML($string)
{
	if (strpos($string, "<html>")!==false && strpos($string, "</html>")!==false) {
		$bevatHTML=" BEVAT ";
	}
	else{
		$bevatHTML=" BEVAT GEEN ";
	}
	return $bevatHTML;
}
$html="<html>DIT IS TEKST</html>";
$bevatHTML=validateHTML($html);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Functions deel 2</title>
</head>
<body>
	<p>De gegeven string <?=$bevatHTML ?> html sluittag en begintag </p>
</body>
</html>