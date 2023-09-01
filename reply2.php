<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="img/Klein logo.png">
  <link rel="stylesheet" href="style.css">
  <title>Bran-Proj V2</title>
</head>

<body>

<header>
  <div><a href="index.html">Bran-proj V2</a></div>
</header>

  <main>
    <section class="containerform">
      <section class="conatinerform2">
        <section class="left1">
        <?php

        if(isset($_POST["submit2"])){

          $pak1 = $_POST['pak1'];
          $pak2 = $_POST['pak2'];
          $ont = $_POST['ont'];
          $terug = $_POST['terug'];
          $lucht = ($pak1 - $ont);
          $lucht2 = ($pak2 - $ont);
          $tijd = ($lucht / 10);
          $tijd2 = ($lucht2 / 10);
          $inzet = ($tijd - $terug);
          $inzet2 = ($tijd2 - $terug);
          $totaalinzet = ($inzet < $inzet2);


            echo "<p style='text-align:center'>Hier zijn u ingevulde gegevens</p>";
            echo "<p>Druk van Pakdrager 1 is: <strong>".$pak1. "</strong></p>";
            echo "<p>Druk van Pakdrager 2 is: <strong>".$pak2. "</strong></p>";
            echo "<p>Ontsmettings Druk is: <strong>".$ont. "</strong></p>";
            echo "<p>Te verbruiken tijd Pakdrager 1 is : <strong>".$tijd. "</strong></p>";
            echo "<p>Te verbruiken tijd Pakdrager 2 is : <strong>".$tijd2. "</strong></p>";
            echo "<p>De terugweg is <strong>".$terug. "</strong> minuten lang </p>";
            echo "<p>Inzet tijd Pakdrager 1: <strong>".$inzet. "</strong></p>";
            echo "<p>Inzet tijd Pakdrager 2: <strong>".$inzet2. "</strong></p>";
            if ($inzet < $inzet2) {
              echo "<p>totale inzet is: <strong>".$inzet."</strong></p>";
              $duration = ($inzet * 60);
            } else {
              echo "<p>totale inzet is: <strong>".$inzet2."</strong></p>";
              $duration = ($inzet2 * 60);
            }

            require_once("database.php");

            $duur = $duration / 60;
            $data = [
            'pak1' => $pak1,
            'pak2' => $pak2,
            'ont' => $ont,
            'tijd' => $tijd,
            'tijd2' => $tijd2,
            'terug' => $terug,
            'inzet' => $inzet,
            'inzet2' => $inzet2,
            'duur' => $duur,
        ];
    
        $insert = "INSERT INTO tweede (Pakdrager1, Pakdrager2, gebruiktijd1, gebruiktijd2, Ontsmetting, Terug, Inzet1, Inzet2, TotInzet, Datum) VALUES (:pak1, :pak2, :ont, :tijd, :tijd2, :terug, :inzet, :inzet2, :duur, CURRENT_TIMESTAMP)";
        $stmt = $db->prepare($insert);
        $stmt->execute($data);

        } else {
            echo"<h2 style='text-align:center'>U bent niet correct hier op de pagina gekomen.</h2>";
        }


        ?>


        </section>
        <section class="left2">
        <div class="timer">
		<span id="minutes"></span>
    :
		<span id="seconds"></span>
	</div>
  <section class="t">
  <section class="styled-inputb">
	  <button id="startBtn">Start</button>
    </section>
    <section class="styled-inputb" style="float:right;">
	  <button id="stopBtn" disabled>Stop</button>
    </section>
  </section>

  <script>
		var duration = "<?php echo $duration; ?>";

		var timerInterval;
		var timerRunning = false;

    window.onload = function() {
      startTimer(duration);
};

		function startTimer(duration) {
			var timer = duration, hours, minutes, seconds;
			timerInterval = setInterval(function () {
				minutes = Math.floor(timer / 60);
				seconds = Math.floor(timer % 60);

				document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, '0');
				document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, '0');

				if (--timer < 0) {
					stopTimer();
					alert("Timer finished!");
				}
			}, 1000);

			timerRunning = true;
			document.getElementById("startBtn").disabled = true;
			document.getElementById("stopBtn").disabled = false;
		}

		function stopTimer() {
			clearInterval(timerInterval);
			timerRunning = false;
			document.getElementById("startBtn").disabled = false;
			document.getElementById("stopBtn").disabled = true;
		}

		document.getElementById("startBtn").addEventListener("click", function() {
			if (!timerRunning) {
				startTimer(duration);
			}
		});

		document.getElementById("stopBtn").addEventListener("click", function() {
			if (timerRunning) {
				stopTimer();
			}
		});
	</script>

	<script defer src="script.js"></script>

        </section>
        </section>

        <section class="righttext" style='text-align:center'>

        <h1>Bedankt voor het gebruiken van deze site.</h1>

        <p>
          Op dit moment word er nog hard gewerkt aan dit project en is het nog in de test fase. Als je feedback heb hoor ik dit 
          graag je kan me dan benaderen via mijn discord of je feedback achterlaten bij Sven.</p>

        <br>
        <br>
        <p>Mijn Discord:</p>
        <p>Tientje#4560</p>

        </section>
  </main>

  <footer>Made by: Tino</footer>
</body>
</html>