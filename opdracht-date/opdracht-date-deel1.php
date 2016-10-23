<?php 
setlocale('LC_ALL', 'nld_nld');
$time=mktime("22","35","25","01","21","1904");
$datum=strftime("%d %B %Y,%H:%M:%S",$time);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Opdracht Time Deel 1/2</title>
</head>
<body>
	<p><?=$datum ?></p>
</body>
</html>