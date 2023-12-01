let participants = [];

function addParticipant() {
  const username = prompt("Enter your username:");
  if (username) {
    participants.push(username);
  }
}

function startRace() {
  if (participants.length > 0) {
    const winner = participants[Math.floor(Math.random() * participants.length)];
    document.getElementById("winner").innerText = `Winner: ${winner}`;
  } else {
    document.getElementById("winner").innerText = "No participants";
  }
}

function endRace() {
  participants = [];
  document.getElementById("winner").innerText = "";
}
