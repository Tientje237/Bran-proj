<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Dark project reply</title>
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
$heen = $_POST['heen'];
$terug = $_POST['terug'];
$lucht = ($p1 - $ont1);
$lucht2 = ($p2 - $ont2);
$tijd = ($lucht / 10);
$tijd2 = ($lucht2 / 10);
$inzet = ($tijd - $heen - $terug);
$inzet2 = ($tijd2 - $heen - $terug);


        if(isset($_POST["submit"])){
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
            echo "<p>De heenweg is <strong>".$_POST["heen"]. "</strong> minuten lang </p>";
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


        <section class="right">
      <section class="row">
        <h2 style="text-align:center">.</h2>
      </section>
      <section class="row input-container">
        <form action="reply2.php" method="post">


          <section>
            <section class="styled-input">
              <input type="text" name="1" id="1" required>
              <label for="1">1</label>
            </section>
          </section>
          <section>
            <section class="styled-input" style="float:right;">
              <input type="text" name="2" id="2" required>
              <label for="2">2</label>
            </section>
          </section>

          <section>
            <section class="styled-input">
              <input type="text" name="ont1" id="ont1" required>
              <label for="ont1">ont 1</label>
            </section>
          </section>
          <section>
            <section class="styled-input" style="float:right;">
              <input type="text" name="ont2" id="ont2" required>
              <label for="ont2">ont 2</label>
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