<!DOCTYPE html>
<html>
<head>
	<title>Timer</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="timer">
		<span id="hours">00</span>:
		<span id="minutes">00</span>:
		<span id="seconds">00</span>
	</div>

	<form method="post">
		<label for="duration">Duration (in seconds): </label>
		<input type="number" name="duration" id="duration">
		<button type="submit">Start Timer</button>
	</form>

	<?php 
		if(isset($_POST['duration'])) {
			$duration = $_POST['duration'];
			echo '<script> var duration = ' . $duration . ';</script>';
		}
	?>
    



    <?php 
	if(isset($_POST['duration'])) {
		$duration = $_POST['duration'];
		echo '<script> var duration = ' . $duration . ';</script>';
	}
?>

<script>
	var timerInterval;

	function startTimer(duration) {
		var timer = duration, hours, minutes, seconds;
		timerInterval = setInterval(function () {
			hours = Math.floor(timer / 3600);
			minutes = Math.floor((timer % 3600) / 60);
			seconds = Math.floor((timer % 3600) % 60);

			document.getElementById("hours").innerHTML = hours.toString().padStart(2, '0');
			document.getElementById("minutes").innerHTML = minutes.toString().padStart(2, '0');
			document.getElementById("seconds").innerHTML = seconds.toString().padStart(2, '0');

			if (--timer < 0) {
				clearInterval(timerInterval);
				alert("Timer finished!");
			}
		}, 1000);
	}

	if(duration) {
		startTimer(duration);
	}
</script>



	<script src="script.js"></script>
</body>
</html>
