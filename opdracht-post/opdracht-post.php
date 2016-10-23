<?php
$password="ditiseentest";
$user="alessandro";
$correct=false;
$message="Inloggen";
if (isset($_POST["submit"])) 
{
 if ($_POST["user"]==$user && $_POST["pw"]==$password )
 {
 	$correct=true;
 	$message="Welkom! ". $user;
 }
 else
 {
 	$message="Er is iets fout gegaan probeer het opnieuw";
 }

} 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Opdracht-Get</title>
</head>
<body>
	<h1><?=$message ?></h1>
	<?php if (!$correct): ?>
		<form action="opdracht-post.php" method="post">
		<label for="username">Gebruikersnaam*</label>
        <input type="text" name="user" id="username">
        <label for="password">Wachtwoord*</label>
        <input type="password" name="pw" id="password">
        <button type="submit" name="submit">Inloggen</button>
	</form>
<?php endif?>
</body>
</html>