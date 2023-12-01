<?php
$command = isset($_GET['command']) ? $_GET['command'] : '';

switch ($command) {
    case 'addParticipant':
        $user = isset($_GET['user']) ? $_GET['user'] : '';
        if ($user) {
            file_put_contents('participants.txt', $user . PHP_EOL, FILE_APPEND);
            echo "Participant $user added.";
        } else {
            echo "Invalid username.";
        }
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
        // Invalid command
        echo "Unknown command.";
        break;
}
?>
