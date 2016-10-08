<?php
$rijen=10;
$kolommen=10;
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>For 1</title>
</head>
<body>
	<table>
		<?php for ($i=0; $i <= $rijen; $i++) { 
			echo "<tr>";
			for ($j=0; $j <=$kolommen ; $j++) { 
				echo "<td>KOLOM</td>";
			}
			echo "</tr>";
		}
		?>
	</table>
</body>
</html>