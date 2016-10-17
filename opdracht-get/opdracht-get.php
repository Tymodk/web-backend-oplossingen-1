<?php
$artikels = array(
					array("titel" => "Waarom Bob Dylan de Nobelprijs verdient",
						"datum" => "13/10/16",
						"afbeelding" => "afbeeldingen/afbeelding_artikel1.jpg",
						"afbeeldingbeschrijving" => "Een foto van Bob Dylan",
						"eerste paraggraaf" => "Een kleine verrassing vanmiddag, toen bekend werd dat singer-songwriter Bob Dylan de Nobelprijs voor literatuur had weggekaapt. Menig liefhebber der letteren zal ongetwijfeld de wenkbrauwen gefronst hebben, maar verdient Bob Dylan de prijs misschien toch, een beetje? Als dichter niet, als liedjesschrijver wél, stelde Geoffrey Himes van Paste Magazine eind vorige maand als voorbeschouwing. ",
						  ),
				 
					array("titel" => "WK-renners slikken ingenieuze pil om hittestress te meten",
						"datum" => "14/10/16 ",
						"afbeelding" => "afbeeldingen/afbeelding_artikel2.jpg",
						"afbeeldingbeschrijving" => "Een foto van het koersende peloton",
						"eerste paraggraaf" => "De temperatuur flirt in Doha vaak met de grens van de 40 graden Celcius en dat heeft zo zijn gevolgen voor het lichaam van de WK-renners. Om de lichaamstemperatuur van de sporters constant te kunnen meten, moeten ze een pil innemen om te controleren welk effect de hitte heeft gehad. Die werkt als een soort 'pil-thermometer' die de hittestress in het lichaam kan meten. ",
						  ),
					 
					array("titel" => "Horrorclown valt Nederlandse tiener (14) lastig. Maar die geeft hem rake klappen",
						"datum" => "15/10/16 ",
						"afbeelding" => "afbeeldingen/afbeelding_artikel3.jpg",
						"afbeeldingbeschrijving" => "Een foto van een horrorclown",
						"eerste paraggraaf" => "Horrorclowns willen één ding: mensen bang maken. Slachtoffers worden lukraak gekozen. In de Nederlandse stad Delft werd een tiener achternagezeten door een man met een clownsmasker en pruik. Maar dat zou de onverlaat zich snel beklagen.
							De 14-jarige jongen liet zich gisteren immers helemaal niet bang maken. Hij is namelijk geoefend in zelfverdedigingssport en gaf daarop rake klappen aan de clown, meldde de politie van Delft op Facebook. Daarna is de clown op de vlucht geslagen en niet meer aangetroffen. Maar daar bleef het gisteravond niet bij in Delft. In een fietstunneltje werd een inwoner achternagezeten door twee horrorclowns gewapend met een schep en een soort van vlammenwerpe"
						  ),
					);
$SOLOARTIKEL=false;
$NOTEXIST=false;
if (isset($_GET["id"]))
 {
 	$id = $_GET["id"];
 	if (array_key_exists($id, $artikels)) 
 	{
 		$SOLOARTIKEL=true;
 		$artikels 			= 	array( $artikels[$id] );
 	}
 	else
 	{
 		$NOTEXIST=true;
 	}
  }
  if (isset($_GET['zoekterm']))
	{
	$found=true;
 	$search_for = $_GET['zoekterm'];
 	foreach ($artikels as $id => $artikel) 
 	{
 		if (strpos($artikel["titel"],$search_for) !==false && $found) 
 		{	
			$SOLOARTIKEL=true;
 			$artikels=array($artikels[$id] );
 			$found=false;

 		}
 		if (strpos($artikel["datum"],$search_for) !==false && $found) 
 		{	
			$SOLOARTIKEL=true;
 			$artikels=array($artikels[$id] );
 			$found=false;
 		}
 		if (strpos($artikel["eerste paraggraaf"],$search_for) !==false && $found) 
 		{	
			$SOLOARTIKEL=true;
 			$artikels=array($artikels[$id] );
 			$found=false;
 		}
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<?php if (!$SOLOARTIKEL):?> 
		<title>Niewskrant</title>
	<?php endif ?>
	<?php if ($SOLOARTIKEL):?> 
		<title><?php echo $artikel["titel"];?></title>
	<?php endif ?>
	<link rel="stylesheet" type="text/css" href="styling.css">
</head>
<body>
<form action="" method="get">
	<input type="search" name="zoekterm" placeholder="zoeken">
	<button>Zoeken</button>
</form>
	<ul>
		<?php foreach ($artikels as $id => $artikel): ?>
			<li>
			<?php if (!$NOTEXIST): ?>
				<h1><?=$artikel["titel"] ?></h1>
				<p><?=$artikel["datum"] ?></p>
				<img src=<?=$artikel["afbeelding"] ?> alt=<?=$artikel["afbeeldingbeschrijving"]?>
				<p><?php
				if (!$SOLOARTIKEL) {
					echo $firstfifitychars=substr($artikel["eerste paraggraaf"],0,50)."...";
				}
				else
				{
					echo $artikel["eerste paraggraaf"];
				}
				?>
				</p>
				<?php if (!$SOLOARTIKEL): ?>
					<a href="opdracht-get.php?id=<?php echo $id ?>">Lees meer</a>
				<?php endif ?>
			<?php endif ?>
			</li>
		<?php endforeach ?>
	</ul>
	<?php if ($NOTEXIST) :?>
		<h1>Whoops!</h1>
		<p>Dat artikel bestaat niet.</p>
	<?php endif ?>
</body>
</html>