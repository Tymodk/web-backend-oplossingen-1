    <?php
      $lettertje="e";
      $cijfertje=3;
      $langstewoord="zandzeepsodemineralenwatersteenstralen";
      $nieuwlangstewoord=str_replace($lettertje, $cijfertje, $langstewoord)       
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>opdracht string extra functions</title>
</head>
<body>
       <h1>Deel3</h1>
   <p>Het nieuwe woord is: <?=$nieuwlangstewoord ?></p>
    
</body>
</html>