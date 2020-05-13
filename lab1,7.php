<?php
session_start();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<h1>voer twee nummers in</h1>
    <form class="" action="" method="post">
      input 1: <input type="text" name="value1" value=""><br><br>
      input 2: <input type="text" name="value2" value=""><br><br>
      <input type="submit" name="submit+" value="+">
      <input type="submit" name="submit-" value="-">
      <input type="submit" name="submit*" value="*">
      <input type="submit" name="submit/" value="/">
    </form>

    <h1>rekenmachine 2.0</h1>
        <form class="" action="" method="post">
          input<input type="text" name="value3" value="">
          <input type="submit" name="submit+1" value="+">
          <input type="submit" name="submit-1" value="-">
          <input type="submit" name="submit*1" value="*">
          <input type="submit" name="submit/1" value="/">
          <input type="submit" name="submit=" value="=">
        </form>

<?php
if (isset($_POST['submit+'])) {
  $som = $_POST['value1'] + $_POST['value2'];
  echo "$som";
}

if (isset($_POST['submit-'])) {
  $som = $_POST['value1'] - $_POST['value2'];
  echo "$som";
}

if (isset($_POST['submit*'])) {
  $som = $_POST['value1'] * $_POST['value2'];
  echo "$som";
}

if (isset($_POST['submit/'])) {
  $som = $_POST['value1'] / $_POST['value2'];
  echo "$som";
}
//
// dit is voor de tweede rekenmachine

if (isset($_POST['submit+1'])) {
  $_SESSION['first'] = $_POST['value3'];
  $_SESSION['somvervormer'] = "+";
}

if (isset($_POST['submit-1'])) {
  $_SESSION['first'] = $_POST['value3'];
  $_SESSION['somvervormer'] = "-";
}

if (isset($_POST['submit*1'])) {
  $_SESSION['first'] = $_POST['value3'];
  $_SESSION['somvervormer'] = "*";
}

if (isset($_POST['submit/1'])) {
  $_SESSION['first'] = $_POST['value3'];
  $_SESSION['somvervormer'] = "/";
}

if (isset($_POST['submit='])) {
  if ($_SESSION['somvervormer'] == "+") {
    $som = ($_SESSION['first']) + ($_POST['value3']);
    echo $som;
  }
  if ($_SESSION['somvervormer'] == "-") {
    $som = ($_SESSION['first']) - ($_POST['value3']);
    echo $som;
  }
  if ($_SESSION['somvervormer'] == "*") {
    $som = ($_SESSION['first']) * ($_POST['value3']);
    echo $som;
  }
  if ($_SESSION['somvervormer'] == "/") {
    $som = ($_SESSION['first']) / ($_POST['value3']);
    echo $som;
  }
}




 ?>



  </body>
</html>
