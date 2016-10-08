<?php
function functie1($toseek)
{
	$aantalKeer=0;
	global $md5HashKeyArray;
	for ($i=0; $i<count($md5HashKeyArray) ; $i++) { 
		if ($md5HashKeyArray[$i]==$toseek) {
			$aantalKeer++;
		}
	}
	$percentage=($aantalKeer/count($md5HashKeyArray))*100;
	return $percentage;
}
function functie2($toseek,$eenarray)
{
	$aantalKeer=0;
	for ($i=0; $i<count($eenarray) ; $i++) { 
		if ($eenarray[$i]==$toseek) {
			$aantalKeer++;
		}
	}
	$percentage=($aantalKeer/count($eenarray))*100;
	return $percentage;
}
function functie3($toseek,$string)
{
	$myArray=str_split($string);
	$aantalKeer=0;
	for ($i=0; $i<count($myArray) ; $i++) { 
		if ($myArray[$i]==$toseek) {
			$aantalKeer++;
		}
	}
	$percentage=($aantalKeer/count($myArray))*100;
	return $percentage;
}
$md5HashKey="d1fa402db91a7a93c4f414b8278ce073";
$md5HashKeyArray=str_split($md5HashKey);
$percentageVan2=functie1("2");
$percentageVan8=functie2("8",$md5HashKeyArray);
$percentageVana=functie3("a",$md5HashKey);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Functions GV deel 1</title>
	<p>Functie 1: De needle 2 komt <?=$percentageVan2 ?>% voor in de hash key <?=$md5HashKey ?></p>
	<p>Functie 2: De needle 8 komt <?=$percentageVan8 ?>% voor in de hash key <?=$md5HashKey ?></p>
	<p>Functie 3: De needle a komt <?=$percentageVana ?>% voor in de hash key <?=$md5HashKey ?></p>
</head>
<body>
	
</body>
</html>