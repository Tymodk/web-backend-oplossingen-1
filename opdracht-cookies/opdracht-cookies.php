<?php 
$isvalidate=false;
$cookieduration=360;
$errorMessage="";
$gegevens=file_get_contents("gegevens.txt");
$users=explode("/",$gegevens);
if (isset($_COOKIE['username']) && isset($_COOKIE["password"]))
 {
	$isvalidate=true;
	$user=$_COOKIE['username'];
	$ww=$_COOKIE["password"];
}
if (isset($_POST["submit"])) 
{
	$user=$_POST['user'];
	$ww=$_POST['pw'];
	if (isset($_POST['onthouden'])=="onthouden") 
	{
		$cookieduration=2592000;
	}
	for ($i=0; $i < count($users); $i++) 
	{ 
			$gegevensArray=explode(",",$users[$i]);
			if ($user==$gegevensArray[0] && $ww==$gegevensArray[1]) 
			{
				$isvalidate=true;
				setcookie("username", $user, time() + $cookieduration);
				setcookie("password", $ww, time() + $cookieduration);
			}
	}
	if (!$isvalidate) 
	{
		$errorMessage="Oops! Er is iets fout gegaan, probeer het opnieuw.";
	}
}
	
if (isset($_GET['action'])) 
{
	$action=$_GET['action'];
	if ($action=="uitloggen") 
	{
		setcookie("username", "", time() - 3600);
		setcookie("password", "", time() - 3600);
		//unset($_COOKIE['username']);
		//unset($_COOKIE['password']);
		$isvalidate=false;
	}
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Opdracht Cookies</title>
</head>
<body>
	<?php 
	if ($isvalidate): ?>
		<h1>U bent Ingelogd</h1>
		<p>Welkom <?=$user?> fijn dat je er bent!</p>
		<a href="opdracht-cookies.php?action=uitloggen">Uitloggen</a>
	<?php endif ?>
	<?php if (!$isvalidate) : ?>
		<?=$errorMessage ?>
		<form action="opdracht-cookies.php" method="post">
		<label for="username">Gebruikersnaam*</label><br>
        <input type="text" name="user" id="username"><br>
        <label for="password">Wachtwoord*</label><br>
        <input type="password" name="pw" id="password"><br>
        <button type="submit" name="submit">Inloggen</button><input type="checkbox" name="onthouden" value="onthouden"> Onthoud mij!<br>
    </form>
	<?php endif ?>
	
</body>
</html>