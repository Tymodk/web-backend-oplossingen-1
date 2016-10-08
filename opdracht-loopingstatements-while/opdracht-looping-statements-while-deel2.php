<?php
$boodschappenlijstje = array("melk","bloem","water","koekjes");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>While 2</title>
</head>
<body>
	 <ul>
    <?php 
        for($i=0; $i < count($boodschappenlijstje); $i++) {
            echo "<li>" . $boodschappenlijstje[$i] . "</li>";
        }
    ?>
</ul>
</body>
</html>