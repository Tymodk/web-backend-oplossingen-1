<?php
$rijen=10;
$kolommen=10;
?>
<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" type="text/css" href="stylingdeel2.css">
<head>
	<meta charset="UTF-8">
	<title>For 1</title>
</head>
<body>
	<table>
		<?php for ($i=0; $i <=$rijen; $i++) { 
			echo "<tr>";
			for ($j=0; $j <=$kolommen ; $j++) {

				if (($i*$j)%2!=0) {
					echo "<td class='active'>". $i*$j ."</td>";
				}
				else{
					echo "<td>". $i*$j ."</td>";
				}
				
			}
			echo "</tr>";
		}
		?>
	</table>
</body>
</html>