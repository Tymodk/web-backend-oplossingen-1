<?php
	$getal=25;
	$string="";
	if ($getal>0 && $getal<10) {
		$string="Het getal ligt tussen 0 en 10";
	}
	if ($getal>10 && $getal<20) {
		$string="Het getal ligt tussen 10 en 20";
	}
	if ($getal>20 && $getal<30) {
		$string="Het getal ligt tussen 20 en 30";
	}
	if ($getal>30 && $getal<40) {
		$string="Het getal ligt tussen 30 en 40";
	}
	if ($getal>40 && $getal<50) {
		$string="Het getal ligt tussen 40 en 50";
	}
	if ($getal>50 && $getal<60) {
		$string="Het getal ligt tussen 50 en 60";
	}
	if ($getal>60 && $getal<70) {
		$string="Het getal ligt tussen 60 en 70";
	}
	if ($getal>70 && $getal<80) {
		$string="Het getal ligt tussen 70 en 80";
	}
	if ($getal>80 && $getal<90) {
		$string="Het getal ligt tussen 80 en 90";
	}
	if ($getal>90 && $getal<100) {
		$string="Het getal ligt tussen 90 en 100";
	}
	$string_reversed=strrev($string)
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>If-Elseif</title>
</head>
<body>
<p><?=$string_reversed ?></p>
	
</body>
</html>