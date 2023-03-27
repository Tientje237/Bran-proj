
var duration = "<?php echo $duration; ?>";

var timerInterval;
var timerRunning = false;

function startTimer(duration) {
	var timer = duration, minutes, seconds;
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