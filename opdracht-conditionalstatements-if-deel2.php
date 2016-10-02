<?php
	$getal=1;
	$dag="";
	if($getal==1)
	{
		$dag="maandag";
	}
	if($getal==2)
	{
		$dag="dinsdag";
	}
	if($getal==3)
	{
		$dag="woensdag";
	}
	if($getal==4)
	{
		$dag="donderdag";
	}
	if($getal==5)
	{
		$dag="vrijdag";
	}
	if($getal==6)
	{
		$dag="zaterdag";
	}
	if($getal==7)
	{
		$dag="zondag";
	}
	$hoofdletterdag=strtoupper($dag);
	$dag_a_not_capitalized=str_replace("A", "a", $hoofdletterdag);
	$positie_last_a=strrpos($hoofdletterdag,"A",-1);
	$day_last_a=substr_replace($hoofdletterdag,"a",$positie_last_a,1)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>If-Deel2</title>
</head>
<body>
<p>De dag is <?=$hoofdletterdag ?></p>
<p>De dag is <?=$dag_a_not_capitalized ?></p>
<p>De dag is <?=$day_last_a ?></p>
    
</body>
</html>