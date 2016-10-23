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
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Adrespagina</title>
</head>
<body>
<a href="sessions-adrespagina.php?destroy=true">Destroy Session</a>
	<h1>Registratiegegevens</h1>
	<p><?php  echo $_SESSION["email"] ?></p>
	<p><?php echo $_SESSION["nickname"] ?></p>
	<h1>Adresgegevens</h1>
	<form action="session-overzichtpagina.php" method="post">
		<label for="straat">Straat</label><br>
        <input type="text" name="straat" value="<?php echo $_SESSION["straat"] ?>"><br>
        <label for="nummer">Nummer</label><br>
        <input type="text" name="nummer" value="<?php echo $_SESSION["nummer"] ?>"><br>
        <label for="gemeente">Gemeente</label><br>
        <input type="text" name="gemeente" value="<?php echo $_SESSION["gemeente"] ?>"><br>
        <label for="postcode">Postcode</label><br>
        <input type="text" name="postcode" value="<?php echo $_SESSION["postcode"] ?>"><br>
        <button type="submit" name="submit">Volgende</button>
	</form>
</body>
</html>