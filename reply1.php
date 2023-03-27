<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/Klein logo.png">
  <link rel="stylesheet" href="style.css">
  <title>Bran-Proj</title>
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
$ont = $_POST['ont'];
$heen = $_POST['heen'];
$terug = $_POST['terug'];
$lucht = ($p1 - $ont);
$lucht2 = ($p2 - $ont);
$tijd = ($lucht / 10);
$tijd2 = ($lucht2 / 10);
$inzet = ($tijd - $heen - $terug);
$inzet2 = ($tijd2 - $heen - $terug);
$totaalinzet = ($inzet < $inzet2);


        if(isset($_POST["submit"])){
            echo "<p style='text-align:center'>Hier zijn u ingevulde gegevens</p>";
            echo "<p>Druk van Pakdrager 1 is: <strong>".$_POST["1"]. "</strong></p>";
            echo "<p>Druk van Pakdrager 2 is: <strong>".$_POST["2"]. "</strong></p>";
            echo "<p>Ontsmettings druk is: <strong>".$_POST["ont"]. "</strong></p>";
            echo "<p>Te verbruiken tijd Pakdrager 1 is : <strong>".$tijd. "</strong></p>";
            echo "<p>Te verbruiken tijd Pakdrager 2 is : <strong>".$tijd2. "</strong></p>";
            echo "<p>De heenweg is <strong>".$_POST["heen"]. "</strong> minuten lang </p>";
            echo "<p>De terugweg is <strong>".$_POST["terug"]. "</strong> minuten lang </p>";
            echo "<p>Inzet tijd Pakdrager 1: <strong>".$inzet. "</strong></p>";
            echo "<p>Inzet tijd Pakdrager 2: <strong>".$inzet2. "</strong></p>";
            if ($inzet < $inzet2) {
              echo "<p>totale inzet is: <strong>".$inzet."</strong></p>";
              $duration = ($inzet * 60);
            } else {
              echo "<p>totale inzet is: <strong>".$inzet2."</strong></p>";
              $duration = ($inzet2 * 60);
            }

        } else {
            echo"<h2 style='text-align:center'>U bent niet correct hier op de pagina gekomen.</h2>";
        }
        ?>
        </section>
        <section class="left2">
        <div class="timer">
		<span id="minutes">00</span>
    :
		<span id="seconds">00</span>
	</div>
  <section class="t">
  <section class="styled-inputb">
	  <button id="startBtn">Start</button>
    </section>
    <section class="styled-inputb" style="float:right;">
	  <button id="stopBtn" disabled>Stop</button>
    </section>
  </section>

	

	<script defer src="script.js"></script>

        </section>
        </section>


        <section class="right">
      <section class="row">
      <h2 style="text-align:center">Vul de volgende velden in:</h2>
      </section>
      <section class="row input-container">
        <form action="reply2.php" method="post">


          <section>
            <section class="styled-input">
              <input type="text" name="1" id="1" required>
              <label for="1">Pakdrager 1</label>
            </section>
          </section>
          <section>
            <section class="styled-input" style="float:right;">
              <input type="text" name="2" id="2" required>
              <label for="2">Pakdrager 2</label>
            </section>
          </section>

          <section>
            <section class="styled-input wide">
              <input type="text" name="ont" id="ont" required>
              <label for="ont">Ontsmetting</label> 
            </section>
          </section>

        <section>
				  <section class="styled-input wide">
					  <input type="text" name="terug" id="terug" required>
					  <label for="terug">Terug</label> 
				  </section>
			  </section>

          <section class="styled-input wide">
            <button type="submit2" name="submit2" id="submit2">Verzenden</button>
          </section>
        </form>
      </section>
    </section>
  </section>
  </main>



  <footer>Made by: Tino</footer>
</body>

</html>