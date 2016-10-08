<?php
$teVindenDier="kat";
$dieren = array("kat","hond","vis","vogel","geit");
$dieren_lengte=count($dieren);
if(in_array($teVindenDier, $dieren))
{
	$found="Gevonden";
}
else
{
	$found="Niet Gevonden";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Array Functions Deel 1</title>
</head>
<body>
	<p>Lengte van de array <?=$dieren_lengte ?></p>
	<p>Zit <?=$teVindenDier ?> in de array? => <?=$found ?></p>
</body>
</html>