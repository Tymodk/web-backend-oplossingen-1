<?php 
session_start();
if (isset($_POST["submit"])) 
{
$_SESSION["email"] = $_POST["email"];
$_SESSION["nickname"] = $_POST['nickname'];
}
if (isset($_GET["destroy"])) 
{
	if ($_GET['destroy']=="true") 
	{
		session_destroy ();
	}
}
$autofocus_straat=false;
$autofocus_nummer=false;
$autofocus_gemeente=false;
$autofocus_postcode=false;
if(isset($_GET["wijzig"]))
{
	if ($_GET["wijzig"]=="straat") 
	{
		$autofocus_straat="active_field";
	}
	if ($_GET["wijzig"]=="nummer") 
	{
		$autofocus_nummer="active_field";
	}
	if ($_GET["wijzig"]=="gemeente") 
	{
		$autofocus_gemeente="active_field";
	}
	if ($_GET["wijzig"]=="postcode") 
	{
		$autofocus_postcode="active_field";
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adrespagina</title>
	<link rel="stylesheet" type="text/css" href="styling.css">
</head>
<body>
<a href="sessions-adrespagina.php?destroy=true">Destroy Session</a>
	<h1>Registratiegegevens</h1>
	<p><?php  echo $_SESSION["email"] ?></p>
	<p><?php echo $_SESSION["nickname"] ?></p>
	<h1>Adresgegevens</h1>
	<form action="session-overzichtpagina.php" method="post">
		<label for="straat">Straat</label><br>
        <input class="<?=$autofocus_straat ?>" type="text" name="straat" value="<?php if (isset($_SESSION["straat"])) { echo $_SESSION["straat"]; }?>"><br>
        <label for="nummer">Nummer</label><br>
        <input  class="<?=$autofocus_nummer ?>" type="text" name="nummer" value="<?php if (isset($_SESSION["nummer"])) { echo $_SESSION["nummer"]; } ?>"><br>
        <label for="gemeente">Gemeente</label><br>
        <input class="<?=$autofocus_gemeente ?>" type="text" name="gemeente" value="<?php if (isset($_SESSION["gemeente"])) { echo $_SESSION["gemeente"]; } ?>"><br>
        <label for="postcode">Postcode</label><br>
        <input  class="<?=$autofocus_postcode ?>" type="text" name="postcode" value="<?php if (isset($_SESSION["postcode"])) { echo $_SESSION["postcode"]; } ?>"><br>
        <button type="submit" name="submit">Volgende</button>
	</form>
</body>
</html>