<!DOCTYPE html>
<html>
<head>
	<title>Timer</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="timer">
		<span id="minutes">00</span>:
		<span id="seconds">00</span>
	</div>

	<button id="startBtn">Start Timer</button>
	<button id="stopBtn" disabled>Stop Timer</button>

	<script>
		var duration = 120; // set the duration dynamically here

		var timerInterval;
		var timerRunning = false;

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

	<script src="script.js"></script>
</body>
</html>
