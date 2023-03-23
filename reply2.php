<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Dark project</title>
</head>

<body>

  <header>
    <div class="logo">
        <a href="index.html">Bran-proj</a>
    </div>
    <nav>
      </div>
    </nav>
    <div class="toggle"></div>
  </header>

  <main>
    <section class="containerform">
      <section class="conatinerform2">
        <section class="left1">
        <?php

$p1 = $_POST['1'];
$p2 = $_POST['2'];
$ont1 = $_POST['ont1'];
$ont2 = $_POST['ont2'];
$terug = $_POST['terug'];
$lucht = ($p1 - $ont1);
$lucht2 = ($p2 - $ont2);
$tijd = ($lucht / 10);
$tijd2 = ($lucht2 / 10);
$inzet = ($tijd - $terug);
$inzet2 = ($tijd2 - $terug);

        if(isset($_POST["submit2"])){
            // echo "<h1 style='text-align:center'>Bedankt voor u mening over onze service</h1>";
            echo "<p style='text-align:center'>Hier zijn u ingevulde gegevens</p>";
            echo "<p>Druk van persoon 1 is: <strong>".$_POST["1"]. "</strong></p>";
            echo "<p>Druk van persoon 2 is: <strong>".$_POST["2"]. "</strong></p>";
            echo "<p>Ontsmettings Druk van pak 1 is: <strong>".$_POST["ont1"]. "</strong></p>";
            echo "<p>Ontsmettings Druk van pak 2 is: <strong>".$_POST["ont2"]. "</strong></p>";
            // echo "<p>Te gebruiken lucht is:  <strong>".$lucht. "</strong></p>";
            // echo "<p>Te gebruiken lucht is:  <strong>".$lucht2. "</strong></p>";
            echo "<p>Te verbruiken tijd is: <strong>".$tijd. "</strong></p>";
            echo "<p>Te verbruiken tijd is: <strong>".$tijd2. "</strong></p>";
            echo "<p>De terugweg is <strong>".$_POST["terug"]. "</strong> minuten lang </p>";
            echo "<p>Inzet tijd Persoon 1: <strong>".$inzet. "</strong></p>";
            echo "<p>Inzet tijd Persoon 2: <strong>".$inzet2. "</strong></p>";

        } else {
            echo"<h2 style='text-align:center'>U bent niet correct hier op de pagina gekomen.</h2>";
        }
        ?>
        </section>
        <section class="left2">
        <p>timer work in progress</p>
        </section>
        </section>

        <section class="righttext">

        <h1 style='text-align:center'>Bedankt voor het gebruiken van deze site.</h1>

        <p>
          Op dit moment word er nog hard gewerkt aan dit project als je feedback heb hoor ik dit 
          graag je kan me dan benaderen via mijn discord of via de github pagina.</p>

        <br>
        <br>
        <p>Mijn Discord:</p>
        <p>Tientje#4560</p>

        </section>







  </main>


  <footer>Made by: Tino</footer>
</body>

</html>