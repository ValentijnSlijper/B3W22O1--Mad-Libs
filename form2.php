<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
              error_reporting(-1);
              ini_set('display_errors', 'On');

              $kunnen = test_input($_POST["kunnen"]);
              $opschieten = test_input($_POST["opschieten"]);
              $getal = test_input($_POST["getal"]);
              $vakantie = test_input($_POST["vakantie"]);
              $beste = test_input($_POST["beste"]);
              $slechtste = test_input($_POST["slechtste"]);
              $overkomen = test_input($_POST["overkomen"]);

    }

              function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;

            }
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>Mad Libs</title>
  </head>
  <body>
  <header>
    <h1>mad Libs</h1>
  </header>

    <div class="wrapper">
      <nav>

        <ul>
          <li><a href="index.php">Er heerst paniek... </a></li>
          <li><a href="onkunde.php">Onkunde</a></li>
        </ul>
      </nav>

      <div class="container3">
        <div class="output">
          <h3>Onkunde</h3>
          <p>Er zijn veel mensen die niet kunnen <?php echo $kunnen ?>.
          Neem nou <?php echo $opschieten ?>. Zelfs met de hulp van een <?php echo $vakantie ?> of zelfs <?php echo $getal ?> kan <?php echo $opschieten ?> niet tekenen.
          Dat heeft niet te maken met een gebrek aan <?php echo $beste ?>, maar met een te veel aan <?php echo $slechtste ?>. Te veel <?php echo $slechtste ?>
          leidt tot <?php echo $overkomen ?> en dat is niet goed als je wilt <?php echo $kunnen ?>. Helaas voor <?php echo $opschieten ?>.</p>




        </div>
      </div>
            <footer>
                <h4>&copy; 2019 - <?php echo date ('Y'); ?> Valentijn Slijper</h4>
            </footer>
    </div>

  </body>
</html>
