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
        
        <?php
        if(isset($_POST["submit"])){
            // echo "<h1 style='text-align:center'>Bedankt voor u mening over onze service</h1>";
            echo "<p style='text-align:center'>Hier zijn u ingevulde gegevens</p>";
            echo "<p>Druk van persoon 1 is: ".$_POST["1"]. "</p>";
            echo "<p>Druk van persoon 2 is: ".$_POST["2"]. "</p>";
            echo "<p>Ontsmettings Druk van pak 1 is: ".$_POST["ont1"]. "</p>";
            echo "<p>Ontsmettings Druk van pak 2 is: ".$_POST["ont2"]. "</p>";
            echo "<p>De heenweg is ".$_POST["heen"]. " minuten lang </p>";
            echo "<p>De terugweg is </p><h2>".$_POST["terug"]. "</h2><p> minuten lang </p>";


            // echo "<br>Uw naam is: ".$_POST["naam"];
            // echo "<br>Uw Email is: ".$_POST["email"];
            // echo "<br>Gekozen catogorie: ".$_POST["categorie"];
            // echo "<br>uw bericht is als volgt:<br>".$_POST["text"];

        } else {
            echo"<h2 style='text-align:center'>U bent niet correct hier op de pagina gekomen.</h2>";
        }
        ?>
        </form>
    </main>



  <footer>Made by: Tino</footer>
</body>

</html>