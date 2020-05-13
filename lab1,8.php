<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
<div class="form">
  <form class="" action="" method="post">
    email<br><input type="text" name="email" value=""><br>
    subject<br><input type="text" name="onderwerp" value=""><br>
    content<br><textarea name="textarea" rows="4" cols="50"></textarea><br>
    <input type="submit" name="submit" value="submit">
  </form>
</div>

<div class="php">

  <?php
  // push
  if (isset($_POST['submit'])) {
    if ((empty($_POST['email'])) or (empty($_POST['onderwerp'])) or (empty($_POST['textarea']))   ) {
      echo "vul iets in";
    }
    else {
      $email =$_POST['email'];
      $onderwerp = $_POST['onderwerp'];
      $tekst = $_POST['textarea'];
      echo ( "<br>" . htmlspecialchars($email) . "<br>");
      echo (htmlspecialchars($onderwerp) . "<br>");
      echo (htmlspecialchars($tekst));
      echo "    <style>
            .form{
              text-align: center;
            }
            .php{
              text-align: center;
              word-break: break-all;
              margin: 40px;
            }
          </style>";
    }
  }
   ?>
</div>



  </body>
</html>
