<div hidden><?php
    // Include the quiz.php file to access the $correct_answers array
    $num_correct = $_GET['score'];
    $quiz = $_GET['quiz'];
    $quiz_file = 'quiz' . $quiz . '.php';
    $toggle = "";
    $default = "hidden";
    if (file_exists($quiz_file)) {
        include($quiz_file);
        $title = "Quiz Results";
    } else {
        $toggle = "hidden";
        $title = "Invalid Page";
    }
    $path = "../";
    $percent_correct = round($num_correct / count($correct_answers) * 100);

?></div>

<div <?php echo $toggle; ?>><?php
    
    include($path."assets/php/headnav.php");
    // Calculate the percentage of correct answers

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
    foreach ($string_answers as $key => $value) {
        echo "<p>Question $key: $value</p>";
    }
    echo '<h3>Want to read again?</h3><a href="' . $learn . '">Click Here</a>'; //TODO style here
    include($path.'assets/php/footer.php');
?>
<div <?php echo $default; ?>>
    <?php include("invalidrequest.php");?>
</div>