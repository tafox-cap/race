<?php
$command = $_GET['command'];

switch ($command) {
    case 'addParticipant':
        $user = $_GET['user'];
        file_put_contents('participants.txt', $user . PHP_EOL, FILE_APPEND);
        echo "Participant $user added.";
        break;
    case 'startRace':
        // Logic to start the race
        echo "Race started.";
        break;
    case 'endRace':
        // Logic to end the race and determine the winner
        echo "Race ended.";
        break;
    default:
        // HTML form for testing purposes
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Race Simulation</title>
</head>
<body>
  <h1>Race Simulation</h1>
  <form action="update-state.php" method="get">
    <label for="user">Username:</label>
    <input type="text" id="user" name="user" required>
    <button type="submit" name="command" value="addParticipant">Join Race</button>
  </form>
</body>
</html>
<?php
        break;
}
?>
