<!--Getting Started Quiz-->
<?php
	$correct_answers = array(
	    '1' => 'b',
	    '2' => 'd',
	    '3' => 'c',
	    '4' => 'a'
	);
	$string_answers = array(
	    '1' => 'An operating system',
	    '2' => 'Type "logout"',
	    '3' => 'In directories',
	    '4' => 'AT&T'
	);
	// Define the questions and answer options
	$questions = array(
		"1" => "What is UNIX?",
		"2" => "How can you log out of a UNIX system?",
		"3" => "How are files organized in UNIX?",
		"4" => "Who developed UNIX?"
	);

	$answers = array(
		"1" => array(
			"a" => "A programming language",
			"b" => "An operating system",
			"c" => "A file management system",
			"d" => "A network protocol"
		),
		"2" => array(
			"a" => 'Type "exit"',
			"b" => 'Type "shutdown"',
			"c" => 'Type "logoff"',
			"d" => 'Type "logout"'
		),
		"3" => array(
			"a" => "In lists",
			"b" => "In tables",
			"c" => "In directories",
			"d" => "In blocks"
		),
		"4" => array(
			"a" => "AT&T",
			"b" => "Apple",
			"c" => "IBM",
			"d" => "Microsoft"
		)
	);
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	    $num_correct = 0;
	    foreach ($_POST as $key => $value) {
	        if ($correct_answers[$key] == $value) {
	            $num_correct++;
	        }
	    }
	    header('Location: results.php?score=' . $num_correct);
	    exit();
	}
    $title = "Quiz 1";
    $path = "../";
    $css = $path."assets/css/styles.css";

    include($path."assets/php/headnav.php");
?>
	<h1>Getting Started Quiz</h1>
	<p>Test your knowledge on UNIX concepts.
	</p>
	<form method="POST" action="results.php" class="quiz-form">
	    <!-- Question 1 -->
	    <h3><?php echo $questions[1];?></h3>
	    <ol type="a"><label>
	        <input type="radio" name="1" value="a">
	        <li><?php echo $answers[1]['a'];?></li>
	    </label><br>
	    <label>
	        <input type="radio" name="1" value="b">
	        <li><?php echo $answers[1]['b'];?></li>
	    </label><br>
	    <label>
	        <input type="radio" name="1" value="c">
	        <li><?php echo $answers[1]['c'];?></li>
	    </label><br>
	    <label>
	        <input type="radio" name="1" value="d">
	        <li><?php echo $answers[1]['d'];?></li></ol>
	    </label><br><br>

	    <!-- Question 2 -->
	    <h3><?php echo $questions[2];?></h3>
	    <label>
	        <input type="radio" name="2" value="a">
	        a. <?php echo $answers[2]['a'];?>
	    </label><br>
	    <label>
	        <input type="radio" name="2" value="b">
	        b. <?php echo $answers[2]['b'];?>
	    </label><br>
	    <label>
	        <input type="radio" name="2" value="c">
	        c. <?php echo $answers[2]['c'];?>
	    </label><br>
	    <label>
	        <input type="radio" name="2" value="d">
	        d. <?php echo $answers[2]['d'];?>
	    </label><br><br>

	    <!-- Question 3 -->
	    <h3><?php echo $questions[3];?></h3>
	    <label>
	        <input type="radio" name="3" value="a">
	        a.<?php echo $answers[3]['a'];?>
	    </label><br>
	    <label>
	        <input type="radio" name="3" value="b">
	        b. <?php echo $answers[1]['b'];?>
	    </label><br>
	    <label>
	        <input type="radio" name="3" value="c">
	        c. <?php echo $answers[3]['c'];?>
	    </label><br>
	    <label>
	        <input type="radio" name="3" value="d">
	        d. <?php echo $answers[3]['d'];?>
	    </label><br><br>

	    <!-- Question 4 -->
	    <h3><?php echo $questions[4];?></h3>
	    <label>
	        <input type="radio" name="4" value="a">
	        a. <?php echo $answers[4]['a'];?>
	    </label><br>
	    <label>
	        <input type="radio" name="4" value="b">
	        b. <?php echo $answers[4]['b'];?>
	    </label><br>
	    <label>
	        <input type="radio" name="4" value="c">
	        c. <?php echo $answers[4]['c'];?>
	    </label><br>
	    <label>
	        <input type="radio" name="4" value="d">
	        d. <?php echo $answers[4]['d'];?>
	    </label><br><br>

	    <button type="submit" id="submit-btn">Submit</button>
	</form>
	<?php
	    include("../assets/php/footer.php");
    ?>
