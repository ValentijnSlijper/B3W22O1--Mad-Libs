<?php

    if($_SERVER['REQUEST_METHOD'] === 'POST'){
              error_reporting(-1);
              ini_set('display_errors', 'On');

              $huisdier = test_input($_POST["huisdier"]);
              $persoon = test_input($_POST["persoon"]);
              $land = test_input($_POST["land"]);
              $verveelt = test_input($_POST["verveelt"]);
              $speelgoed = test_input($_POST["speelgoed"]);
              $spijbel = test_input($_POST["spijbel"]);
              $kopen = test_input($_POST["kopen"]);
              $bezigheid = test_input($_POST["bezigheid"]);
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

      <div class="container">
        <div class="output">
          <h3>Er heerst paniek...</h3>
          <p>Er heerst paniek in het koninkrijk <?php echo $land ?>. Koning <?php echo $spijbel ?> is ten einde raad en als koning
          <?php echo $spijbel ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $persoon ?>.</p>

          <p>"<?php echo $persoon ?>! Het is een ramp! Het is een schande!"</p>

          <p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>

          <p>"Mijn <?php echo $huisdier ?> is verdewenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $speelgoed ?> voor hem gekocht!"</p>

          <p>"Majesteit, uw <?php echo $huisdier ?> komt vast vanzelf weer terug?"</p>

          <p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?php echo $bezigheid ?> leren?"</p>

          <p>"Maar Sire, daar kunt u toch uw <?php echo $kopen ?> voor gebruiken."</p>

          <p>"<?php echo $persoon ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>

          <p>"<?php echo $verveelt ?>, Sire."</p>




        </div>
      </div>
            <footer>
                <h4>&copy; 2019 - <?php echo date ('Y'); ?> Valentijn Slijper</h4>
            </footer>
    </div>

  </body>
</html>
