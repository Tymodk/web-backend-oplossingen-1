<?php 
$placeholder="Zoekterm hier";
$searchresults = array();
$zoekterm="";
$path_opdrachten = realpath('D:\2MCT-Web-UX\Web-Backend\cursus\public\cursus\opdrachten');
$path_voorbeelden= realpath('D:\2MCT-Web-UX\Web-Backend\cursus\public\cursus\voorbeelden');
$online_path_opdrachten="http://web-backend.local/cursus/opdrachten/";
$online_path_voorbeelden="http://web-backend.local/cursus/voorbeelden/";
$showSearchresults=false;
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
if (isset($_GET["zoekterm"])) 
{

	$zoekterm=$_GET["zoekterm"];
	searchFiles($zoekterm);
	$showSearchresults=true;
	$placeholder=$zoekterm;

}
function searchFiles($zoekterm)
{
	global $searchresults;
	 global $path_opdrachten;
	 global $path_voorbeelden;
	foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path_voorbeelden)) as $filename)
	{
		if (strpos($filename,$zoekterm) !==false) 
		{
			array_push($searchresults,$filename);
		}
	}
	foreach (new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path_opdrachten)) as $filename)
	{
		if (strpos($filename,$zoekterm) !==false) 
		{
			array_push($searchresults,$filename);
		}
	}
return;
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
	<input type="search" name="zoekterm" placeholder=<?=$placeholder?>>
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
					 	  	  $path_right_slashes=str_replace("\\","/",$filename);
					 	  	  $path=str_replace($path_opdrachten,$online_path_opdrachten,$filename);
					 	?>
							<li><a href="<?=$path?>"><?=$opdracht_clean ?></a><li>
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
					 	  	  $path_right_slashes=str_replace("\\","/",$filename);
					 	  	  $path=str_replace($path_voorbeelden,$online_path_voorbeelden,$filename);
					 	?>
							<li><a href="<?=$path?>"><?=$voorbeelden_clean ?></a><li>
					 <?php endif ?>
			<?php endforeach?>
		<ul>
	<?php endif ?>
	<?php if ($showSearchresults): ?>
		<?php if (count($searchresults)>0): ?>
					<ul>
			<?php for ($i=0; $i < count($searchresults) ; $i++) :?> 
					 	<?php
					 	  	  $clean=str_replace('\\',"",substr($searchresults[$i],strrpos($searchresults[$i],'\\',0)));
					 	  	  $path_right_slashes=str_replace("\\","/",$searchresults[$i]);
					 	  	  if (strpos($searchresults[$i],".php")) 
					 	  	  {
					 	  	  $path=str_replace($path_voorbeelden,$online_path_voorbeelden,$searchresults[$i]);
					 	  	  }
					 	  	  else
					 	  	  {
					 	  	  	$path=str_replace($path_opdrachten,$online_path_opdrachten,$searchresults[$i]);
					 	  	  }
					 	?>
					 	<?php if(strpos($clean,".html") || strpos($clean,".php")): ?>
						<li><a href="<?=$path?>"><?=$clean ?></a><li>
						<?php endif ?>
			<?php endfor ?>
			<ul>
		<?php endif ?>	
		<?php if (count($searchresults)<=0): ?>
			<h4>Er zijn geen resultaten gevonden voor <?=$zoekterm ?></h4>
		<?php endif ?>
	<?php endif ?>
</body>
</html>