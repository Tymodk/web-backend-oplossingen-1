<?php 
session_start();
$_SESSION["nickname"]="";
$_SESSION["email"]="";
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Opdracht Sessions</title>
</head>
<body>
	<form action="sessions-adrespagina.php" method="post">
		<label for="email">E-mail</label><br>
        <input type="text" name="email" value="<?php echo $_SESSION["email"] ?>"><br>
        <label for="nickname">Nickname</label><br>
        <input type="text" name="nickname" value="<?php echo $_SESSION["nickname"] ?>"><br>
        <button type="submit" name="submit">Volgende</button>
	</form>
</body>
</html>