<?php
	$jaar=2016;
    $schrikkeljaar="";
    if($jaar%4==0 || $jaar%100==0 && $jaar%400==0 )
    {
        $schrikkeljaar="Een Schrikeljaar";
    }
    else
    {
        $schrikkeljaar="Geen schrikkeljaar";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>If-else-deel1</title>
</head>
<body>
   <p>Het jaar <?=$jaar ?> is <?=$schrikkeljaar ?></p>
    
</body>
</html>