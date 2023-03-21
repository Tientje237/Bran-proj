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
    <div class="logo">Bran-proj</div>
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
        if(isset($_POST["submit"])){
            // echo "<h1 style='text-align:center'>Bedankt voor u mening over onze service</h1>";
            echo "<p style='text-align:center'>Hier zijn u ingevulde gegevens</p><br>";
            echo "<p>Druk van persoon 1 is: ".$_POST["1"]. "</p>";
            echo "<p>Druk van persoon 2 is: ".$_POST["2"]. "</p>";
            echo "<p>Ontsmettings Druk van pak 1 is: ".$_POST["ont1"]. "</p>";
            echo "<p>Ontsmettings Druk van pak 2 is: ".$_POST["ont2"]. "</p>";
            echo "<p>De heenweg is <strong>".$_POST["heen"]. "</strong> minuten lang </p>";
            echo "<p>De terugweg is <strong>".$_POST["terug"]. "</strong> minuten lang </p>";

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
        <form action="index.php" method="post">


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
            <button type="submit" name="submit" id="submit">Verzenden</button>
          </section>
        </form>
      </section>
    </section>
  </section>
  </main>



  <footer>Made by: Tino</footer>
</body>

</html>