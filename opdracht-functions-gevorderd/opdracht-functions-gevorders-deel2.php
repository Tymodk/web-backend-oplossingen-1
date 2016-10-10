<?php
$pigHealth=5;
$maxThrows=8;
launchAngryBird();
function calculateHit()
{
	global $pigHealth;
	$raakKans=rand(0,100);
	if ($raakKans>=40) {
		$raak=TRUE;
	}
	else{
		$raak=FALSE;
	}
	if ($raak) {
		$pigHealth--;
		if ($pigHealth<2) {
			echo "Raak Er is nog maar" . $pigHealth . "varken over <br>";
		}
		else{
			echo "Raak Er zij nog maar" . $pigHealth . "varkens over <br>";
		}
		
	}
	else{
		if ($pigHealth<2) {
			echo "Mis nog " . $pigHealth . "varken in het team <br>";
		}
		else{
			echo "Mis nog " . $pigHealth . "varkens in het team <br>";
		}
	}
}
function launchAngryBird()
{
	global $pigHealth;
	global $maxThrows;
	static $aantalKeer;
	if ($aantalKeer<$maxThrows && $pigHealth>0) {
		$aantalKeer++;
		launchAngryBird();
		calculateHit();
	}
	if ($pigHealth===0 && $aantalKeer<=$maxThrows) {
		echo "Gewonnen!<br>";
	}
	if ($pigHealth>0 && $aantalKeer===$maxThrows) {
		echo "Verloren <br>";
	}
	echo $aantalKeer;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Angry Birds</title>
</head>
<body>
	
</body>
</html>