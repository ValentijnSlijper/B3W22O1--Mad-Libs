<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <meta charset="utf-8">
    <title>Mad Libs - Onkunde</title>
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

      <div class="container2">
        <form class="form" action="form2.php" method="post">
          <h3>Onkunde</h3>

          <div class="row">
            <label id="label" for="kunnen">Wat zou je graag willen kunnen?</label>
            <input type="text" id="kunnen" placeholder="" name="kunnen" required>
          </div>

        <div class="row">
          <label id="label" for="opschieten">Met welke persoon kun je goed opschieten?</label>
          <input type="text" id="opschieten" placeholder="" name="opschieten" required>
        </div>

        <div class="row">
          <label id="label" for="getal">Wat is je favoriete getal?</label>
          <input type="text" id="getal" placeholder="" name="getal" required>
        </div>

        <div class="row">
          <label id="label" for="vakantie">Wat heb je altijd bij je als je op vakantie gaat?</label>
          <input type="text" id="vakantie" placeholder="" name="vakantie" required>
        </div>

        <div class="row">
          <label id="label" for="beste">Wat is je beste persoonlijke eigenschap?</label>
          <input type="text" id="beste" placeholder="" name="beste" required>
        </div>

        <div class="row">
          <label id="label" for="slechtste">Wat is je slechtste persoonlijke eigenschap?</label>
          <input type="text" id="slechtste" placeholder="" name="slechtste" required>
        </div>

        <div class="row">
          <label id="label" for="overkomen">Wat is heet ergste dat je je kan overkomen?</label>
          <input type="text" id="overkomen" placeholder="" name="overkomen" required>
        </div>


      <div class="versturen">
        <input type="submit" name="submit" value="Versturen">
      </div>





        </form>
      </div>
      <footer>
        <h4>&copy; 2019 - <?php echo date ('Y'); ?> Valentijn Slijper</h4>
      </footer>
    </div>

  </body>
</html>
