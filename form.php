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
          <li><a href="index.html">Er heerst paniek... </a></li>
          <li><a href="onkunde.html">Onkunde</a></li>
        </ul>
      </nav>

      <div class="container">
        <h3>Er heerst paniek...</h3>
        <h1><?php echo $huisdier;?><?php echo $persoon;?><h1>

  <?php

      $huisdier = $_POST['huisdier'];
      $persoon = $_POST['persoon'];
      $land = $_POST['land'];
      $verveelt = $_POST['verveelt'];
      $speelgoed = $_POST['speelgoed'];
      $spijbel = $_POST['spijbel'];
      $kopen = $_POST['kopen'];
      $bezigheid = $_POST['bezigheid'];
  ?>
      </div>
            <footer>
                <h4>&copy; 2019 - <?php echo date ('Y'); ?> Valentijn Slijper</h4>
            </footer>
    </div>

  </body>
</html>
