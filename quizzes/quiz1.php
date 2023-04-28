<?php
	$correct_answers = array(
	    '1' => 'a',
	    '2' => 'd',
	    '3' => 'a',
	    '4' => 'b'
	);
	$string_answers = array(
	    '1' => 'pwd',
	    '2' => 'mkdir',
	    '3' => 'ls',
	    '4' => 'scp'
	);
	// Define the questions and answer options
	$questions = array(
		"1" => "Which command is used to display the current directory?",
		"2" => "What is the command to create a new directory?",
		"3" => "What is the command to list the contents of a directory?",
		"4" => "What is the command to transfer files between a local machine and a remote server over SSH?"
	);

	$answers = array(
		"1" => array(
			"a" => "pwd",
			"b" => "cd",
			"c" => "ls",
			"d" => "mkdir"
		),
		"2" => array(
			"a" => "pwd",
			"b" => "cd",
			"c" => "ls",
			"d" => "mkdir"
		),
		"3" => array(
			"a" => "ls",
			"b" => "cd",
			"c" => "mkdir",
			"d" => "pwd"
		),
		"4" => array(
			"a" => "ftp",
			"b" => "scp",
			"c" => "sftp",
			"d" => "wget"
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
?>
<?php
    $title = "Quiz 1";
    $path = "../";
    $css = $path."assets/css/styles.css";

    include($path."assets/php/headnav.php");
?>
	<h1>Command-Line Quiz</h1>
	<p>Test your knowledge on basic commands, file operations, directory management, remote access, and file transfers.
	</p>
	<form method="POST" action="results.php">
	    <!-- Question 1 -->
	    <h3>1. Which command is used to display the current directory?</h3>
	    <label>
	        <input type="radio" name="1" value="a">
	        a. pwd
	    </label><br>
	    <label>
	        <input type="radio" name="1" value="b">
	        b. cd
	    </label><br>
	    <label>
	        <input type="radio" name="1" value="c">
	        c. ls
	    </label><br>
	    <label>
	        <input type="radio" name="1" value="d">
	        d. mkdir
	    </label><br><br>

	    <!-- Question 2 -->
	    <h3>2. What is the command to create a new directory?</h3>
	    <label>
	        <input type="radio" name="2" value="a">
	        a. pwd
	    </label><br>
	    <label>
	        <input type="radio" name="2" value="b">
	        b. cd
	    </label><br>
	    <label>
	        <input type="radio" name="2" value="c">
	        c. ls
	    </label><br>
	    <label>
	        <input type="radio" name="2" value="d">
	        d. mkdir
	    </label><br><br>

	    <!-- Question 3 -->
	    <h3>3. What is the command to list the contents of a directory?</h3>
	    <label>
	        <input type="radio" name="3" value="a">
	        a. ls
	    </label><br>
	    <label>
	        <input type="radio" name="3" value="b">
	        b. cd
	    </label><br>
	    <label>
	        <input type="radio" name="3" value="c">
	        c. mkdir
	    </label><br>
	    <label>
	        <input type="radio" name="3" value="d">
	        d. pwd
	    </label><br><br>

	    <!-- Question 4 -->
	    <h3>4. What is the command to transfer files between a local machine and a remote server over SSH?</h3>
	    <label>
	        <input type="radio" name="4" value="a">
	        a. ftp
	    </label><br>
	    <label>
	        <input type="radio" name="4" value="b">
	        b. scp
	    </label><br>
	    <label>
	        <input type="radio" name="4" value="c">
	        c. sftp
	    </label><br>
	    <label>
	        <input type="radio" name="4" value="d">
	        d. wget
	    </label><br><br>

	    <button type="submit" id="submit-btn">Submit</button>
	</form>
	<?php
	    include("../assets/php/footer.php");
    ?>
