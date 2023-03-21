function showAnswers() {
    const p1 = document.getElementById("p1").value;
    const p2 = document.getElementById("p2").value;
    const ont1 = document.getElementById("ont1").value;
    const ont2 = document.getElementById("ont2").value;
    const heen = document.getElementById("heen").value;
    const terug = document.getElementById("terug").value;
  
    const answers = document.getElementById("answers");
    answers.innerHTML = `<p>p1: ${p1}</p><p>p2: ${p2}</p><p>ont1: ${ont1}</p><p>ont2: ${ont2}</p><p>heen: ${heen}</p><p>terug: ${terug}</p>`;
    answers.style.display = "block";
  }
  