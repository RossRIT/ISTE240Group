<!--Getting Started Quiz-->
<?php
	$quiz = 1;
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
	    header("Location: results.php?score=$num_correct&quiz=$quiz");
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
	<form method="POST" class="quiz-form">
	<input type="hidden" name="quiz" value="<?php echo $quiz; ?>">

	    <!-- Question 1 -->
	    <h3><?php echo $questions[1];?></h3>
	        <input type="radio" name="1" value="a" id="1a"><label for="1a">(a.) <?php echo $answers[1]['a'];?></label><br>
			<input type="radio" name="1" value="b" id="1b"><label for="1b">(b.) <?php echo $answers[1]['b'];?></label><br>
			<input type="radio" name="1" value="c" id="1c"><label for="1c">(c.) <?php echo $answers[1]['c'];?></label><br>
			<input type="radio" name="1" value="d" id="1d"><label for="1d">(d.) <?php echo $answers[1]['d'];?></label><br><br>

	    <!-- Question 2 -->
		<h3><?php echo $questions[2];?></h3>
	        <input type="radio" name="2" value="a" id="2a"><label for="2a">(a.) <?php echo $answers[2]['a'];?></label><br>
			<input type="radio" name="2" value="b" id="2b"><label for="2b">(b.) <?php echo $answers[2]['b'];?></label><br>
			<input type="radio" name="2" value="c" id="2c"><label for="2c">(c.) <?php echo $answers[2]['c'];?></label><br>
			<input type="radio" name="2" value="d" id="2d"><label for="2d">(d.) <?php echo $answers[2]['d'];?></label><br><br>

	    <!-- Question 3 -->
		<h3><?php echo $questions[3];?></h3>
	        <input type="radio" name="3" value="a" id="3a"><label for="3a">(a.) <?php echo $answers[3]['a'];?></label><br>
			<input type="radio" name="3" value="b" id="3b"><label for="3b">(b.) <?php echo $answers[3]['b'];?></label><br>
			<input type="radio" name="3" value="c" id="3c"><label for="3c">(c.) <?php echo $answers[3]['c'];?></label><br>
			<input type="radio" name="3" value="d" id="3d"><label for="3d">(d.) <?php echo $answers[3]['d'];?></label><br><br>
	    <!-- Question 4 -->
		<h3><?php echo $questions[4];?></h3>
	        <input type="radio" name="4" value="a" id="4a"><label for="4a">(a.) <?php echo $answers[4]['a'];?></label><br>
			<input type="radio" name="4" value="b" id="4b"><label for="4b">(b.) <?php echo $answers[4]['b'];?></label><br>
			<input type="radio" name="4" value="c" id="4c"><label for="4c">(c.) <?php echo $answers[4]['c'];?></label><br>
			<input type="radio" name="4" value="d" id="4d"><label for="4d">(d.) <?php echo $answers[4]['d'];?></label><br><br>

	    <button type="submit" id="submit-btn">Submit</button>
	</form>
	<?php
	    include("../assets/php/footer.php");
    ?>
