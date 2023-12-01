<?php
$command = isset($_GET['command']) ? $_GET['command'] : '';

switch ($command) {
    case 'addParticipant':
        $user = isset($_GET['user']) ? $_GET['user'] : '';
        if ($user) {
            // Read existing participants from file
            $participants = file('participants.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

            // Add the new participant
            $participants[] = $user;

            // Write participants back to file
            file_put_contents('participants.txt', implode(PHP_EOL, $participants));

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
