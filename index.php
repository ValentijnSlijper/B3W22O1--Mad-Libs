<?php
include("form.php");
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
          <li><a href="index.html">Er heerst paniek... </a></li>
          <li><a href="onkunde.html">Onkunde</a></li>
        </ul>
      </nav>

      <div class="container">
        <form class="form" action="form.php" method="post">
          <h3>Er heerst paniek...</h3>

          <div class="row">
            <label id="label" for="huisdier">Welk dier zou je nooit als huisdier willem hebben?</label>
            <input type="text" id="huisdier" placeholder="" name="huisdier">
          </div>

        <div class="row">
          <label id="label" for="persoon">Wie is de belangrijkste persoon in je leven?</label>
          <input type="text" id="persoon" placeholder="" name="persoon">
        </div>

        <div class="row">
          <label id="label" for="land">In welk land zou je graag willen wonen?</label>
          <input type="text" id="land" placeholder="" name="land">
        </div>

        <div class="row">
          <label id="label" for="verveelt">Wat die je als je je verveelt?</label>
          <input type="text" id="verveelt" placeholder="" name="verveelt">
        </div>

        <div class="row">
          <label id="label" for="speelgoed">Met welk speelgoed speelde je als kind het meest?</label>
          <input type="text" id="speelgoed" placeholder="" name="speelgoed">
        </div>

        <div class="row">
          <label id="label" for="spijbel">Bij welke docent spijbel je het liefst?</label>
          <input type="text" id="spijbel" placeholder="" name="spijbel">
        </div>

        <div class="row">
          <label id="label" for="kopen">Als je € 100.000,- had, wat zou je dan kopen?</label>
          <input type="text" id="kopen" placeholder="" name="kopen">
        </div>

        <div class="row">
          <label id="label" for="bezigheid">Wat is je favoriete bezigheid?</label>
          <input type="text" id="bezigheid" placeholder="" name="bezigheid">
        </div>

      <div class="versturen">
        <input type="submit" name="submit" value="Versturen">
      </div>


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

        </form>
      </div>
      <footer>
        <h4>&copy; 2019 - <?php echo date ('Y'); ?> Valentijn Slijper</h4>
      </footer>
    </div>

  </body>
</html>
