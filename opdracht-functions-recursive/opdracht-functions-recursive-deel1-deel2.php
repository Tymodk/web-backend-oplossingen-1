<?php
$hoeveelheidgeld=10000;
$JarenCounter=0;
$MaxAantalJaren=10;
berekenRentevoet();
function berekenRentevoet()
{
	global $hoeveelheidgeld;
	global $JarenCounter;
	global $MaxAantalJaren;
	if ($JarenCounter<$MaxAantalJaren) {
		$JarenCounter++;
		$Rente=$hoeveelheidgeld/12.5;
		$hoeveelheidgeld=round($hoeveelheidgeld+$Rente);
		echo "Na ". $JarenCounter ." jaar heeft hij " . $hoeveelheidgeld . "<br>";
		berekenRentevoet();
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Recursive deel 1 en deel 2</title>
</head>
<body>
</body>
</html>