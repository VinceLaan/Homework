<!DOCTYPE html>
<html lang="en">
<head>
     <title>Document</title>
</head>
<body>
<h1>StenenRekenen.nl</h1>



<form class="" action="" method="post">
      <input type="text" name="lengte" value="" placeholder="lengte(m)">
      <input type="text" name="breedte" value="" placeholder="breedte(m)">
      <select name="tegel">
        <option  value=0.3>30 x 30</option>
        <option  value=0.5>50 x 50</option>
        <option  value=0.6>60 x 60</option>
      </select>
      <input type="radio" name="zand" value="mee"> zand mee
      <input type="radio" name="zand" value="niet mee"> zand niet mee
      <input type="submit" name="submit" value="submit">
</form>

<?php
//
if (isset ($_POST["submit"])){
    $lengte = $_POST['lengte'];
    $breedte = $_POST['breedte'];
    $m2 = $lengte * $breedte;
    $tegel = $_POST['tegel'];
    $zand = $_POST['zand'];
    $tegel2 = $tegel * $tegel;
    $tegelsom = $m2 / $tegel2;
    if (    (empty($_POST['lengte'])) or (empty($_POST['breedte'])) or (empty($_POST['zand']))  ) {
        echo "Vul iets in";
    }
    else{
        echo "Oppervlakte: ". $m2 ."m² <br>";
        if($_POST['zand'] == "mee"){
        echo "Zand: ".$m2 * 0.2 ."m³ <br>";
        }
        echo ceil($tegelsom)." tegels heb je nodig <br>";
         echo "<br> $lengte $breedte $tegel $zand $tegel2 $tegelsom <br>";

    }
}
?>

<?php
/*
Je krijgt vier gegevens door: de lengte, de breedte, het soort tegel en of er zand moet worden meegeleverd.

peepee poo pooJe berekent de oppervlakte van het te bestraten stuk grond. Vervolgens bepaal je hoeveel tegels nodig zijn voor de gekozen tegelsoort.

Als er ook zand meegeleverd moet worden bereken je hoeveel kubieke meter zand nodig is. Je gaat uit van een zandlaag van 20cm hoog.

Als er gegevens ontbreken dan meldt je welke gegevens nog nodig zijn.

Als alle gegevens compleet zijn dan laat je de onderstaande output zien:

Oppervlakte: [oppervlakte in m2]

Zand: [hoeveelheid zand in m3]

Tegels: [aantal tegels] tegels [tegelsoort]
*/
?>

</body>
</html>
