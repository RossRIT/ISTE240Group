<?php
	$quiz = 3;
	$correct_answers = array(
	    '1' => 'b',
	    '2' => 'b',
	    '3' => 'a',
	    '4' => 'd'
	);
	$string_answers = array(
	    '1' => 'ls',
	    '2' => 'mkdir',
	    '3' => 'ln',
	    '4' => 'scp'
	);
	// Define the questions and answer options
	$questions = array(
		"1" => "Which command is used to display the current directory?",
		"2" => "What is the command to create a new directory?",
		"3" => "What is the command to make links to files/directories?",
		"4" => "What is the command to transfer files between a local machine and a remote server over SSH?"
	);

	$answers = array(
		"1" => array(
			"a" => "cd",
			"b" => "pwd",
			"c" => "ls",
			"d" => "mkdir"
		),
		"2" => array(
			"a" => "ls",
			"b" => "cd",
			"c" => "mkdir",
			"d" => "pwd"
		),
		"3" => array(
			"a" => "ln",
			"b" => "cd",
			"c" => "mkdir",
			"d" => "pwd"
		),
		"4" => array(
			"a" => "ftp",
			"b" => "wget",
			"c" => "sftp",
			"d" => "scp"
		)
	);
	//When submit is pushed, calculate score
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
?>
<?php
    $title = "Quiz 2";
    $path = "../";
    $css = $path."assets/css/styles.css";
	$learn = $path."basics/dirnfile.php";
    include($path."assets/php/headnav.php");
?>
	<h1>Directory And File Management Quiz</h1>
	<p>Test your knowledge on UNIX concepts.</p>
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
