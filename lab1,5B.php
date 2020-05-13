<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    table {
      border-collapse: collapse;
    }
    table, td, th {
      border: 1px solid black;
      margin: auto;
    }
    td{
      width: 50px;
      height: 50px;
      text-align: center;
    }
    </style>
  </head>
  <body>

<form class="" action="" method="post">
          welke tafel wil je?<input type="text" name="tafel" value=""><br>
          <input type="submit" name="submit" value="submit"><br>
</form>
<table>
<?php
//
if (isset($_POST['tafel']))
{
$tafel = $_POST['tafel'];
for ($i=1; $i < 11; $i++) {
echo "<tr>";
echo "<td>". $i ."</td>";
echo "<td>X</td>";
echo "<td>". $tafel ."</td>";
echo "<td>=</td>";
echo "<td>". $i*$tafel. "</td>";
echo "</tr>";
}
}
/*
B - De tafel van X
Maak een formulier waarin je vraagt welke tafel er afgedrukt moet worden.
Schrijf daarna de php code waarmee je de tafel van X in een tabel afdrukt op de volgende manier:
*/
 ?>
</table>

  </body>
</html>
