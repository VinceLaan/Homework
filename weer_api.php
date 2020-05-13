<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
      p{
        font-size: 20px;
        font-family: sans-serif;
        border: 1px black solid;
        width: 50%;
        padding: 10px;
        margin-left: auto;
        margin-right: auto;
        background: linear-gradient(white,lightblue,blue);
      }
      .all{
        border: 1px black solid;
        width: 95%;
        padding: 10px;
        margin-left: auto;
        margin-right: auto;
        background: linear-gradient(orange,yellow,lightyellow);
        margin: 20px;
        text-align: center;
      }
      html{
        background: linear-gradient(white,lightblue,blue);
        height: 100vh;
      }
    </style>
  </head>
  <body>
    <div class="all">


<h1>Hoe is het weer.nl</h1>
<form class="form" action="" method="post">
  <input type="text" name="plaats" value="" placeholder="plaats">
  <input type="submit" name="submit" value="hoe is het weer">
</form>
<?php
if (isset($_POST['submit'])) {
  $string = file_get_contents("http://weerlive.nl/api/json-10min.php?locatie=".$_POST['plaats']);
  $json_a = json_decode($string, true);
  if ($json_a === null) {
    echo "ik ken die plek niet";
  }
  else {
    echo "<p>de temperatuur in ".$json_a['liveweer']["0"]["plaats"]." is ".$json_a['liveweer']["0"]["temp"]."C <br>";
    echo "het weer wordt kortom: ".$json_a['liveweer']["0"]["samenv"] . " <br>";
    echo "de verwachting is: ".$json_a['liveweer']["0"]["verw"] .  "<br>";
    echo  "de wind gaat richting het ".$json_a['liveweer']["0"]["windr"]." met windsnelheden van ".$json_a['liveweer']["0"]["windkmh"]."km per uur"." <br>";
    echo "</p> <br><br><h1>de vardump</h1> ";
    print_r($json_a);


  }

}

 ?>
</div>
  </body>
</html>
