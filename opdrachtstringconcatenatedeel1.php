<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Opdracht concatenate</title>
</head>
<body>
   <script>
       <?php
       $voornaam="Alessandro";
       $achternaam="Aussems";
       $volledigeNaam=$voornaam . $achternaam;
       $lengtevolledigeNaam=strlen($volledigeNaam);
       ?>
   </script>
   <p>Mijn volledige naam is <?= $volledigeNaam ?></p>
   <p> De lengte van mijn volledige naam is <?= $lengtevolledigeNaam ?></p>
</body>
</html>