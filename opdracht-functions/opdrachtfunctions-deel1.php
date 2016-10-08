<?php
function berekenSom($getal1,$getal2)
{
	$som=$getal1+$getal2;
	return $som;
}
function vermenigvuldig($factor1,$factor2)
{
	$product=$factor1*$factor2;
	return $product;
}
function isEven($getal)
{
	if ($getal%2==0) {
		$even="EVEN";
	}
	else{
		$even="ONEVEN";
	}
	return $even;
}
function hoodflettersEnLengte($string)
{
	$results = array();
	$results[0]=strlen($string);
	$results[1]=strtoupper($string);
	return $results;
}
$number1=4;
$number2=5;
$string="opdracht";
$som=berekenSom($number1,$number2);
$product=vermenigvuldig($number1,$number2);
$even=isEven($number1);
$results=hoodflettersEnLengte($string);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Functions deel 1</title>
</head>
<body>
	<p>Som is van <?=$number1?> en <?=$number2 ?> is <?=$som ?></p>
	<p>Product is van <?=$number1?> en <?=$number2 ?> is <?=$product ?></p>
	<p><?=$number1?> is  <?=$even ?></p>
	<p>String in hoofletters <?=$results[1] ?></p>
	<p>Lengte string <?=$results[0] ?></p>
</body>
</html>