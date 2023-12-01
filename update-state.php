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
        echo "Unknown command.";
}
?>
