<div hidden><?php
    // Include the quiz.php file to access the $correct_answers array
    include('quiz1.php');
?></div>

<?php
    $path = "../";
    include($path.'assets/php/headnav.php');
    // Count the number of correct answers
    $num_correct = $_GET['score'];

    // Calculate the percentage of correct answers
    $percent_correct = round($num_correct / count($correct_answers) * 100);

    // Output the results to the user
    echo "<h2>Quiz Results:</h2>";
    echo "<p>You answered $num_correct out of " . count($correct_answers) . " questions correctly.</p>";
    echo "<p>Your score is $percent_correct%.</p>";

    echo "<h3>Questions:</h3>";
    $i = 1;
    foreach ($questions as $value => $key){
        echo "<p>Question $i: $key </p>";
        $i++;
    }
    // Output the correct answers
    echo "<h3>Correct Answers:</h3>";
    foreach ($correct_answers as $key => $value) {
        echo "<p>Question $key: $value</p>";
    }
    include($path.'assets/php/footer.php');
?>