let startTime;
let elapsedTime = 0;
let timerInterval;

const stopwatch = document.getElementById("stopwatch");
const startButton = document.getElementById("startButton");
const stopButton = document.getElementById("stopButton");
const stopwatchResultInput = document.getElementById("heen");

function startTimer() {
  startTime = Date.now() - elapsedTime;
  timerInterval = setInterval(updateTimer, 10);
  startButton.disabled = true;
  stopButton.disabled = false;
}

function stopTimer() {
  clearInterval(timerInterval);
  startButton.disabled = false;
  stopButton.disabled = true;
}

function updateTimer() {
  const currentTime = Date.now();
  elapsedTime = currentTime - startTime;
  const formattedTime = formatTime(elapsedTime);
  stopwatch.textContent = formattedTime;
  stopwatchResultInput.value = formattedTime;
  const sec = elapsedTime / 1000;
  const min = sec / 60
  const stopwatchValue = Math.round(min)
  console.log(stopwatchValue)
}

function formatTime(time) {
  const minutes = Math.floor((time % 3600000) / 60000).toString().padStart(2, "0");
  const seconds = Math.floor((time % 60000) / 1000).toString().padStart(2, "0");
  return `${minutes}:${seconds}`;
}

startButton.addEventListener("click", startTimer);
stopButton.addEventListener("click", stopTimer);

