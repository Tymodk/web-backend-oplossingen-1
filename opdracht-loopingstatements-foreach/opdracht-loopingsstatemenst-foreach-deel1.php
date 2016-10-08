<?php
$text=file_get_contents("text-file.txt");
$textchars = str_split($text);
sort($textchars);
$reversedArray=array_reverse($textchars);
$howManyOfEachChar = array();
	foreach($reversedArray as $letter)
	{
		if (isset($howManyOfEachChar[$letter]))
		{
			$howManyOfEachChar[$letter]++;
		}
		else
		{
			$howManyOfEachChar[$letter]=1;
		}
	}
var_dump($reversedArray); 
var_dump ($howManyOfEachChar);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Foreach deel 1</title>
</head>
<body>
	
</body>
</html>