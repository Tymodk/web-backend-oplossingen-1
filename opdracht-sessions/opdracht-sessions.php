<?php 
session_start();
$autofocus_email="";
$autofocus_nickname="";
if(isset($_GET["wijzig"]))
{
	if ($_GET["wijzig"]=="email") 
	{
		$autofocus_email="active_field";
	}
	if ($_GET["wijzig"]=="nickname") 
	{
		$autofocus_nickname="active_field";
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Opdracht Sessions</title>
	<link rel="stylesheet" type="text/css" href="styling.css">
</head>
<body>
	<form action="sessions-adrespagina.php" method="post">
		<label for="email">E-mail</label><br>
        <input class="<?=$autofocus_email ?>" type="text" name="email" value="<?php if (isset($_SESSION["email"])) { echo $_SESSION["email"]; } ?>"><br>
        <label for="nickname">Nickname</label><br>
        <input  class="<?=$autofocus_nickname ?>" type="text" name="nickname" value="<?php if (isset($_SESSION["nickname"])) { echo $_SESSION["nickname"]; } ?>"><br>
        <button type="submit" name="submit">Volgende</button>
	</form>
</body>
</html>