<?php 
$path_opdrachten = realpath('D:\2MCT-Web-UX\Web-Backend\cursus\public\cursus\opdrachten');
$path_voorbeelden= realpath('D:\2MCT-Web-UX\Web-Backend\cursus\public\cursus\voorbeelden');
$showIframeCursus=false;
$showVoorbeelden=false;
$showOpdrachten=false;
if (isset($_GET["link"])) 
{
	$link=$_GET['link'];
	switch ($link) {
		case 'cursus':
			$showIframeCursus=true;
			break;
		case 'voorbeelden':
			$showVoorbeelden=true;
			break;
		case 'opdrachten':
			$showOpdrachten=true;
			break;
		default:
			echo "This Link doesn't exists";
			break;
	}
	
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Herhalingsopdracht 01</title>
</head>
<body>
	<ul>
		<li><a href="herhalingsopdracht01.php?link=cursus">Cursus</a></li>
		<li><a href="herhalingsopdracht01.php?link=voorbeelden">Voorbeelden</a></li>
		<li><a href="herhalingsopdracht01.php?link=opdrachten">Opdrachten</a></li>
	</ul>
	<form action="" method="get">
	<input type="search" name="zoekterm" placeholder="Typ hier je zoekterm">
	<button>Zoeken</button>
	</form>
	<?php if ($showIframeCursus): ?>
		<iframe  width="1000" height="750" src="http://web-backend.local/cursus/web-backend-cursus.pdf"></iframe>
	<?php endif ?>
	<?php if ($showOpdrachten): ?>
		<ul>
			<?php foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path_opdrachten)) as $filename):?> 
					 <?php  if (strpos($filename,".html")!==false): ?>
					 	<?php
					 	  	  $opdracht_clean=str_replace('\\',"",substr($filename,strrpos($filename,'\\',0)));
					 	  	  $map=str_replace(".html","",$opdracht_clean);
					 	  	  $link="http://web-backend.local/cursus/opdrachten/".$map."/".$opdracht_clean;
					 	?>
							<li><a href="<?=$link?>"><?=$opdracht_clean ?></a><li>
					 <?php endif ?>
			<?php endforeach?>
		<ul>
	<?php endif ?>
	<?php if ($showVoorbeelden): ?>
		<ul>
			<?php foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path_voorbeelden)) as $filename):?> 
					 <?php  if (strpos($filename,".php")!==false): ?>
					 	<?php
					 	  	  $voorbeelden_clean=str_replace('\\',"",substr($filename,strrpos($filename,'\\',0)));
					 	  	  $map=str_replace(".php","",$voorbeelden_clean);
					 	  	  $link="http://web-backend.local/cursus/voorbeelden/".$map."/".$voorbeelden_clean;
					 	?>
							<li><a href="<?=$link ?>"><?=$voorbeelden_clean ?></a><li>
					 <?php endif ?>
			<?php endforeach?>
		<ul>
	<?php endif ?>
</body>
</html>