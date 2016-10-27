<?php 
$x=150;
$y=100;
$classname="Percent";
require_once("Classes/Percent.php");
$PercentObject=new PERCENT(150,100);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Classes Begin</title>
 	<style>
 		td{
 			border: 2px solid black;
 		}
 	</style>
 </head>
 <body>
<p>Hoeveel is <?=$x?> van <?=$y?> </p>
<table>
<tbody>
	<tr><td>Absoluut</td><td><?=$PercentObject->absolute ?></td></tr>
	<tr><td>Relatief</td><td><?=$PercentObject->relative ?></td></tr>
	<tr><td>Geheel getal</td><td><?=$PercentObject->hundred ?>%</td></tr>
	<tr><td>Nominaal</td><td><?=$PercentObject->nominal ?></td></tr>
</tbody>
</table>
 </body>
 </html>