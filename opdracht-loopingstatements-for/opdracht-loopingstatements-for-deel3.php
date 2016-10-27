<?php
$maxKolommen=10;
$maxRijen=10;
$tafels=array();
for ($rijenCounter=0; $rijenCounter <=$maxRijen ; $rijenCounter++) { 
	$products=array();
	for ($kolommenCounter=0; $kolommenCounter <=$maxKolommen; $kolommenCounter++) { 
		$products[]=$kolommenCounter*$rijenCounter;
	}
	$tafels[$rijenCounter]=$products;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>for 3</title>
	<link rel="stylesheet" type="text/css" href="stylingdeel2.css">
</head>
<body>
		<table>
		<?php for($z=0; $z <= $maxRijen; $z++): ?>
			<tr>
				<?php for ($x=0; $x <=$maxKolommen; $x++): ?> 
				<td <?php if ($tafels[$z][$x]%2!=0):?> class="active"<?php endif ?>>
				<?=$tafels[$z][$x]?>
				</td>
				<?php endfor ?>
			</tr>
		<?php endfor?> 
	</table>
</body>
</html>