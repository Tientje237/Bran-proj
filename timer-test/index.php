<!DOCTYPE html>
<html>
  <head>
    <title>Timer</title>
    <style>
      #timer {
        font-size: 48px;
        text-align: center;
        margin-top: 50px;
      }
      #controls {
        display: flex;
        justify-content: center;
        margin-top: 20px;
      }
      #start, #stop, #reset {
        font-size: 24px;
        margin: 0 10px;
        padding: 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
      }
      #start {
        background-color: #4CAF50;
        color: white;
      }
      #stop {
        background-color: #f44336;
        color: white;
      }
      #reset {
        background-color: #008CBA;
        color: white;
      }
    </style>
  </head>
  <body>
    <?php
      $time = "90:00"; // vervang dit met de variabele die de tijd bevat (in minuten en seconden)
      echo "<div id='timer'>" . $time . "</div>";
    ?>
    <div id="controls">
      <button id="start" onclick="startTimer()">Start</button>
      <button id="stop" onclick="stopTimer()">Stop</button>
      <button id="reset" onclick="resetTimer()">Reset</button>
    </div>
    <script>
      var initialTime = "<?php echo $time ?>"; // bewaar de oorspronkelijke tijd in een variabele
      var interval;

      function startTimer() {
        interval = setInterval(updateTime, 1000);
        document.getElementById("start").disabled = true;
        document.getElementById("stop").disabled = false;
        document.getElementById("reset").disabled = true;
      }

      function stopTimer() {
        clearInterval(interval);
        document.getElementById("start").disabled = false;
        document.getElementById("stop").disabled = true;
        document.getElementById("reset").disabled = false;
      }

      function resetTimer() {
        clearInterval(interval);
        document.getElementById("timer").innerHTML = initialTime; // zet de timer terug naar de oorspronkelijke tijd
        document.getElementById("start").disabled = false;
        document.getElementById("stop").disabled = true;
        document.getElementById("reset").disabled = true;
      }

      function updateTime() {
        var timerElement = document.getElementById("timer");
        var currentTime = timerElement.innerHTML;
        var timeArray = currentTime.split(":");
        var minutes = parseInt(timeArray[0]);
        var seconds = parseInt(timeArray[1]);
        if (minutes == 0 && seconds == 0) {
          clearInterval(interval);
          return;
        }
        if (seconds == 0) {
          seconds = 59;
          if (minutes > 0) {
            minutes--;
          }
        } else {
          seconds--;
        }
        var newTime = formatTime(minutes) + ":" + formatTime(seconds);
        timerElement.innerHTML = newTime;
      }

      function formatTime(time) {
        if (time < 10) {
          time = "0" + time;
        }
        return time;
      }
    </script>
  </body>
</html>
