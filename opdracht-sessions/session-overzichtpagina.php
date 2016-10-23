<?php 
session_start();
if (isset($_POST["submit"])) 
{
$_SESSION["straat"] = $_POST["straat"];
$_SESSION["nummer"] = $_POST['nummer'];
$_SESSION["gemeente"] = $_POST['gemeente'];
$_SESSION["postcode"] = $_POST['postcode'];
}
if (isset($_GET["destroy"])) 
{
	if ($_GET['destroy']=="true") 
	{
		session_destroy ();
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Overzicht</title>
</head>
<body>
<a href="session-overzichtpagina.php?destroy=true">Destroy Session</a>
	<h1>Overzichtpagina</h1>
	<h2>Registratiegegevens</h2>
	<p><?php  echo $_SESSION["email"] ?></p><a href="opdracht-sessions.php?wijzig=email">wijzig</a>
	<p><?php echo $_SESSION["nickname"] ?></p><a href="opdracht-sessions.php?wijzig=nickname">wijzig</a>
	<h2>Adresgegevens</h2>
	<p><?php  echo $_SESSION["straat"] ?></p><a href="sessions-adrespagina.php?wijzig=straat">wijzig</a>
	<p><?php echo $_SESSION["nummer"] ?></p><a href="sessions-adrespagina.php?wijzig=nummer">wijzig</a>
	<p><?php  echo $_SESSION["postcode"] ?></p><a href="sessions-adrespagina.php?wijzig=postcode">wijzig</a>
	<p><?php echo $_SESSION["gemeente"] ?></p><a href="sessions-adrespagina.php?wijzig=gemeente">wijzig</a>
</body>
</html>