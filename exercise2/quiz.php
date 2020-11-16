<html>
<head></head>
<body>
<?php

error_reporting(E_ALL);
ini_set("display_errors",1);

$river = $_POST["river"];
$state = $_POST["state"];
$animal = $_POST["animal"];
$player = $_POST["player"];
$questions = $_POST["questions"];

$count = 0;

if($river == "nile") {
    ++$count;
}
if($state == "florida") {
    ++$count;
}
if($animal == "whale") {
    ++$count;
}
if($player == "damian") {
    ++$count;
}
if($questions == "five") {
    ++$count;
}


?>
		<p>What is the world's longest river?</p>
                <p>You answered: <?php echo $river;?>    Correct answer: Nile</p><br>

        <br>
                <p>What is the flattest state in America?</p>
                <p>You answered: <?php echo $state;?>    Correct answer: Florida</p><br>
        <br>
                <p>What is the largest animal in the world?</p>
                <p>You answered: <?php echo $animal;?>    Correct answer: Blue Whale</p><br>
        <br>

                <p>Who is the point guard for the Portland Trail Blazers</p>
                <p>You answered: <?php echo $player;?>    Correct answer: Damian Lillard</p><br>

        <br>

                <p>How many questions were in this quiz? (Including this one)</p><br>
		<p>You answered: <?php echo $questions;?>    Correct answer: Five</p><br>
<?php

echo "<h1>Results: " . ($count/5 * 100) . "</h1>";


?>
</body>
