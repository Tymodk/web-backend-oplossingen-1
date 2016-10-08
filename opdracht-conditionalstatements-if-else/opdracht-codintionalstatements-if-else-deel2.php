<?php
	$number=221108521;
	$minuten=round($number/60,0);
	$uren=round($minuten/60,0);
	$dagen=round($uren/24,0);
	$weken=round($dagen/7,0);
	$maanden=round($dagen/31,0);
	$jaren=round($maanden/12,0)
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>If-Else-Deel2</title>
</head>
<body>
<p>In <?=$number ?> seconden zitten:</p>
<p><?=$minuten ?> minuten</p>
<p><?=$uren ?> uren</p>
<p><?=$dagen ?> dagen</p>
<p><?=$weken ?> weken</p>
<p><?=$maanden ?> maanden</p>
<p><?=$jaren?> jaren</p>
	
</body>
</html>