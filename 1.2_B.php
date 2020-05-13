<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>1.2</title>
    <style media="screen">
      body {
        align: center
      }
      input {
        margin: 1px;
        width : 5em;
      }
      td {
        padding: 0 1em;
        text-align: center;
      }
      div > input {
        width: 100%;
      }
      strong {
        text-transform: capitalize;
        text-align: center;
      }
      table, td, tr {
        border: solid black 1px;
      }

    </style>
  </head>
  <body>

    <table>
        <form class="" action="" method="post">
          <tr>
            <td colspan="2">
              <strong>B.M.I. calculator</strong>
            </td>
          </tr>
          <tr>
            <td>
              Gewicht in KG
            </td>
            <td>
              <input type="number" step="0.1" name="wheight" value="0">
            </td>
          </tr>
          <tr>
            <td>
              lengte in meter
            </td>
            <td>
              <input type="number" step="0.01" name="lenght" value="0">
            </td>
          </tr>
          <tr>
            <td>
                leeftijd
            </td>
            <td>
              <input type="number" name="age" value="0">
            </td>
          </tr>
          <tr>
            <td colspan="2">
              <div> <input type="submit" value="submit" name="submit"> </div>
            </td>
          </tr>
          <tr>
          </form>
            <td colspan="2">
              <?php
                if (isset ($_POST['submit']))     {
                  if ($_POST['age'] < 17) {
                    echo "Raadpleeg een arts";
                  } else {
                    echo "Uw B.M.I. = " .$_POST['wheight']/($_POST['lenght']*$_POST['lenght']);
                  }
                } else {
                  echo "full eerst iets in";
                }
//
               ?>
            </td>
          </tr>
    </table>
  </body>
</html>
